<?php

namespace App\Http\Controllers\ControllersApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReconhecimentoFacialController extends Controller
{
    public function cadastrarComFoto(Request $request)
    {
        $dados = $request->validate([
            'id_aluno' => 'required|integer|exists:alunos,id_aluno',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $aluno = DB::table('alunos')
            ->where('id_aluno', $dados['id_aluno'])
            ->first();

        if (!$aluno) {
            return response()->json([
                'success' => false,
                'message' => 'Aluno não encontrado.',
            ], 404);
        }

        if (!empty($aluno->foto_path)) {
            Storage::disk('public')->delete($aluno->foto_path);
        }

        $caminho = $request
            ->file('foto')
            ->store('alunos_fotos', 'public');

        DB::table('alunos')
            ->where('id_aluno', $dados['id_aluno'])
            ->update([
                'foto_path' => $caminho,
            ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto do aluno cadastrada com sucesso.',
            'foto_url' => asset('storage/' . $caminho),
        ], 201);
    }

    public function cadastrar(Request $request)
    {
        $dados = $request->validate([
            'id_aluno' => 'required|integer|exists:alunos,id_aluno',
            'embedding' => 'required|array|min:64|max:1024',
            'embedding.*' => 'required|numeric',
            'substituir' => 'sometimes|boolean',
        ]);

        $vetor = $this->normalizar(
            array_map('floatval', $dados['embedding'])
        );

        if ($vetor === null) {
            return response()->json([
                'success' => false,
                'message' => 'Embedding inválido.',
            ], 422);
        }

        $aluno = DB::table('alunos')
            ->where('id_aluno', $dados['id_aluno'])
            ->first();

        if (!$aluno) {
            return response()->json([
                'success' => false,
                'message' => 'Aluno não encontrado.',
            ], 404);
        }

        $amostras = [];

        if (!empty($aluno->face_embedding)) {
            $amostras = json_decode(
                $aluno->face_embedding,
                true
            );

            if (!is_array($amostras)) {
                $amostras = [];
            }
        }

        if (!empty($dados['substituir'])) {
            $amostras = [];
        }

        if (
            !empty($amostras) &&
            isset($amostras[0]) &&
            count($amostras[0]) !== count($vetor)
        ) {
            $amostras = [];
        }

        $amostras[] = $vetor;

        $maxAmostras = config('face.max_amostras', 5);

        $amostras = array_slice(
            $amostras,
            -$maxAmostras
        );

        DB::table('alunos')
            ->where('id_aluno', $dados['id_aluno'])
            ->update([
                'face_embedding' => json_encode($amostras),
                'face_cadastrada_em' => now(),
            ]);

        return response()->json([
            'success' => true,
            'message' => 'Rosto cadastrado com sucesso.',
            'amostras' => count($amostras),
        ]);
    }

    public function reconhecer(Request $request)
    {
        $dados = $request->validate([
            'embedding' => 'required|array|min:64|max:1024',
            'embedding.*' => 'required|numeric',
            'id_turma' => 'nullable|integer',
        ]);

        $consulta = $this->normalizar(
            array_map('floatval', $dados['embedding'])
        );

        if ($consulta === null) {
            return response()->json([
                'success' => false,
                'message' => 'Embedding inválido.',
            ], 422);
        }

        $query = DB::table('alunos')
            ->join(
                'Usuario',
                'alunos.id_usuario',
                '=',
                'Usuario.id_usuario'
            )
            ->whereNotNull('alunos.face_embedding')
            ->select(
                'alunos.id_aluno',
                'alunos.id_turma',
                'Usuario.nome',
                'alunos.face_embedding'
            );

        if (!empty($dados['id_turma'])) {
            $query->where(
                'alunos.id_turma',
                $dados['id_turma']
            );
        }

        $ranking = [];

        foreach ($query->get() as $aluno) {
            $amostras = json_decode(
                $aluno->face_embedding,
                true
            );

            if (!is_array($amostras)) {
                continue;
            }

            $melhor = -1;

            foreach ($amostras as $amostra) {
                if (!is_array($amostra)) {
                    continue;
                }

                if (count($amostra) !== count($consulta)) {
                    continue;
                }

                $similaridade = 0;

                foreach ($consulta as $i => $valor) {
                    $similaridade +=
                        $valor * (float) $amostra[$i];
                }

                $melhor = max(
                    $melhor,
                    $similaridade
                );
            }

            if ($melhor >= 0) {
                $ranking[] = [
                    'id_aluno' => $aluno->id_aluno,
                    'id_turma' => $aluno->id_turma,
                    'nome' => $aluno->nome,
                    'similaridade' => $melhor,
                ];
            }
        }

        if (empty($ranking)) {
            return response()->json([
                'success' => true,
                'reconhecido' => false,
                'message' => 'Nenhum rosto cadastrado para comparação.',
            ]);
        }

        usort(
            $ranking,
            fn ($a, $b) =>
                $b['similaridade'] <=> $a['similaridade']
        );

        $primeiro = $ranking[0];
        $segundo = $ranking[1] ?? null;

        $threshold = config(
            'face.threshold',
            0.65
        );

        $margin = config(
            'face.margin',
            0.05
        );

        if ($primeiro['similaridade'] < $threshold) {
            return response()->json([
                'success' => true,
                'reconhecido' => false,
                'similaridade' =>
                    round($primeiro['similaridade'], 4),
                'message' => 'Rosto não reconhecido.',
            ]);
        }

        if (
            $segundo &&
            (
                $primeiro['similaridade']
                - $segundo['similaridade']
            ) < $margin
        ) {
            return response()->json([
                'success' => true,
                'reconhecido' => false,
                'ambiguo' => true,
                'similaridade' =>
                    round($primeiro['similaridade'], 4),
                'message' =>
                    'Rosto parecido com mais de um aluno.',
            ]);
        }

        return response()->json([
            'success' => true,
            'reconhecido' => true,
            'similaridade' =>
                round($primeiro['similaridade'], 4),
            'aluno' => [
                'id_aluno' => $primeiro['id_aluno'],
                'id_turma' => $primeiro['id_turma'],
                'nome' => $primeiro['nome'],
            ],
        ]);
    }

    private function normalizar(array $vetor): ?array
    {
        $soma = 0;

        foreach ($vetor as $valor) {
            $soma += $valor * $valor;
        }

        $norma = sqrt($soma);

        if ($norma < 1e-9) {
            return null;
        }

        return array_map(
            fn ($valor) =>
                round($valor / $norma, 6),
            $vetor
        );
    }
}