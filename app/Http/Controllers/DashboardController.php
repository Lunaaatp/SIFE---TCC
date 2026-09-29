<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Evento;
use App\Models\Turma;
use Exception;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Matrículas recentes (últimos 30 dias)
try {
    // Conta todos os alunos sem filtro de data
    $novasMatriculas = Aluno::count(); 
} catch (Exception $e) {
    $novasMatriculas = 0;
}

        // 2. Total de Avisos/Eventos
        try {
            $avisosEnviados = Evento::count();
        } catch (Exception $e) {
            $avisosEnviados = 0;
        }

        // 3. Próximos Eventos dinâmicos
        try {
    $proximosEventos = Evento::orderBy('data', 'desc') // Ou 'asc' para datas futuras
                        ->take(4)
                        ->get();
} catch (Exception $e) {
    // Se a coluna 'data' tiver outro nome (ex: data_evento), altere acima ou use fallback
    $proximosEventos = Evento::latest()->take(4)->get();
}

        // 4. GRÁFICO DE PIZZA: Matrículas agrupadas por Série
        try {
            $dadosPizzaQuery = Aluno::join('turmas', 'alunos.id_turma', '=', 'turmas.id_turma')
                ->select('turmas.serie', DB::raw('count(alunos.id_aluno) as total'))
                ->groupBy('turmas.serie')
                ->get();

            $labelsPizza = $dadosPizzaQuery->pluck('serie')->toArray();
            $valoresPizza = $dadosPizzaQuery->pluck('total')->toArray();
        } catch (Exception $e) {
            $labelsPizza = [];
            $valoresPizza = [];
        }

        // 5. GRÁFICO DE BARRAS: Frequência Semanal por Turno
        $diasSemana = ['Seg', 'Ter', 'Qua', 'Qui', 'Sex'];
        $frequenciaManha = [0, 0, 0, 0, 0];
        $frequenciaTarde = [0, 0, 0, 0, 0];

        try {
            $inicioSemana = Carbon::now()->startOfWeek();

            for ($i = 0; $i < 5; $i++) {
                $dataDia = $inicioSemana->copy()->addDays($i)->format('Y-m-d');
                $frequenciaManha[$i] = $this->calcularPercentualPresenca($dataDia, 'Manhã');
                $frequenciaTarde[$i] = $this->calcularPercentualPresenca($dataDia, 'Tarde');
            }
        } catch (Exception $e) {
            // Mantém os valores Zerados se houver erro
        }

        // 6. Indicadores do Topo
        $mediaFrequencia = $this->calcularMediaFrequenciaGeral();
        $tendenciaFrequencia = 0.0; 
        $tendenciaMatriculas = 0.0;
        $taxaEvasao = 0.0;
        $tendenciaEvasao = 0.0;

        // 7. Alunos em Risco (Alunos com 5 ou mais faltas)
        try {
            $alunosRisco = DB::table('frequencia')
                ->join('alunos', 'frequencia.id_aluno', '=', 'alunos.id_aluno')
                ->join('turmas', 'alunos.id_turma', '=', 'turmas.id_turma')
                ->where('frequencia.status', 'Falta')
                ->select(
                    'alunos.nome', 
                    'turmas.nome_turma as turma', 
                    DB::raw('count(frequencia.id_aluno) as total_faltas')
                )
                ->groupBy('alunos.id_aluno', 'alunos.nome', 'turmas.nome_turma')
                ->having('total_faltas', '>=', 5)
                ->get()
                ->map(function ($item) {
                    $item->motivo = $item->total_faltas . ' Faltas registradas';
                    return $item;
                });
        } catch (Exception $e) {
            $alunosRisco = collect();
        }

        return view('widget', compact(
            'mediaFrequencia',
            'tendenciaFrequencia',
            'novasMatriculas',
            'tendenciaMatriculas',
            'taxaEvasao',
            'tendenciaEvasao',
            'avisosEnviados',
            'alunosRisco',
            'proximosEventos',
            'labelsPizza',
            'valoresPizza',
            'diasSemana',
            'frequenciaManha',
            'frequenciaTarde'
        ));
    }

    private function calcularPercentualPresenca($data, $turno)
    {
        try {
            $totalChamadas = DB::table('frequencia') 
                ->join('turmas', 'frequencia.id_turma', '=', 'turmas.id_turma')
                ->where('frequencia.data', $data)
                ->where('turmas.periodo', 'LIKE', '%' . $turno . '%')
                ->count();

            if ($totalChamadas == 0) {
                return 0;
            }

            $presentes = DB::table('frequencia')
                ->join('turmas', 'frequencia.id_turma', '=', 'turmas.id_turma')
                ->where('frequencia.data', $data)
                ->where('turmas.periodo', 'LIKE', '%' . $turno . '%')
                ->where('frequencia.status', 'Presença')
                ->count();

            return round(($presentes / $totalChamadas) * 100, 1);
        } catch (Exception $e) {
            return 0;
        }
    }

    private function calcularMediaFrequenciaGeral()
{
    try {
        // Total de registros de chamada na tabela 'frequencia'
        $total = DB::table('frequencia')->count();
        
        if ($total == 0) {
            return 0.0;
        }

        // Conta registros que constam como presença (cobre 'Presença', 'Presente' ou 'P')
        $presentes = DB::table('frequencia')
            ->whereIn('status', ['Presença', 'Presente', 'P', '1'])
            ->count();

        return round(($presentes / $total) * 100, 1);
    } catch (Exception $e) {
        return 0.0;
    }
}
}

