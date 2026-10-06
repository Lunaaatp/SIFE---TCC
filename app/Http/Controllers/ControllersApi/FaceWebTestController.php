<?php

namespace App\Http\Controllers\ControllersApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/** Simulação local por igualdade de arquivo; não é reconhecimento biométrico. */
class FaceWebTestController extends Controller
{
    private function verificarAmbiente(): void
    {
        abort_unless(app()->environment(['local', 'testing']), 404);
    }

    public function cadastrar(Request $request)
    {
        $this->verificarAmbiente();
        $dados = $request->validate([
            'id_aluno' => 'required|integer|exists:alunos,id_aluno',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:5000',
        ]);
        $hash = hash_file('sha256', $request->file('foto')->getRealPath());
        if (DB::table('face_web_tests')->where('id_aluno', $dados['id_aluno'])->exists()) {
            return response()->json(['success' => false, 'message' => 'Este aluno já tem foto de teste.'], 409);
        }
        if (DB::table('face_web_tests')->where('foto_hash', $hash)->exists()) {
            return response()->json(['success' => false, 'message' => 'Esta foto de teste já está associada a outro aluno. Remova o teste anterior antes de reutilizá-la.'], 409);
        }
        $path = $request->file('foto')->store('face_web_tests', 'local');
        abort_unless($path, 500, 'Não foi possível salvar a foto de teste.');
        try {
            DB::table('face_web_tests')->insert([
                'id_aluno' => $dados['id_aluno'], 'foto_hash' => $hash, 'foto_path' => $path,
            ]);
        } catch (\Throwable $e) {
            Storage::disk('local')->delete($path);
            throw $e;
        }
        return response()->json(['success' => true, 'teste_web' => true]);
    }

    public function reconhecer(Request $request)
    {
        $this->verificarAmbiente();
        $dados = $request->validate([
            'id_turma' => 'required|integer',
            'foto' => 'required|image|mimes:png,jpg,jpeg|max:5000',
        ]);
        $aluno = DB::table('face_web_tests')
            ->join('alunos', 'alunos.id_aluno', '=', 'face_web_tests.id_aluno')
            ->join('Usuario', 'Usuario.id_usuario', '=', 'alunos.id_usuario')
            ->where('alunos.id_turma', $dados['id_turma'])
            ->where('face_web_tests.foto_hash', hash_file('sha256', $request->file('foto')->getRealPath()))
            ->select('alunos.id_aluno', 'alunos.id_turma', 'Usuario.nome')->first();
        return response()->json([
            'success' => true, 'teste_web' => true, 'reconhecido' => $aluno !== null,
            'aluno' => $aluno,
            'message' => $aluno ? 'Foto de teste localizada.' : 'Foto de teste não cadastrada nesta turma.',
        ]);
    }

    public function remover(Request $request, int $idAluno)
    {
        $this->verificarAmbiente();
        $cadastro = DB::table('face_web_tests')->where('id_aluno', $idAluno)->first();
        if ($cadastro) {
            DB::table('face_web_tests')->where('id_aluno', $idAluno)->delete();
            Storage::disk('local')->delete($cadastro->foto_path);
        }
        return response()->json(['success' => true]);
    }
}
