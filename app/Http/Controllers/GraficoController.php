<?php

namespace App\Http\Controllers;

use App\Models\Frequencia;
use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    public function frequencia()
    {
        $dados = Frequencia::select(
                DB::raw('MONTH(created_at) as mes'),
                DB::raw('COUNT(*) as total'),
                DB::raw("SUM(CASE WHEN status = 'Presente' THEN 1 ELSE 0 END) as presentes")
            )
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->get();

        $meses = [];
        $valores = [];

        foreach ($dados as $dado) {
            $meses[] = $dado->mes;

            $media = $dado->total > 0
                ? ($dado->presentes / $dado->total) * 100
                : 0;

            $valores[] = round($media, 2);
        }

        return view('profile', compact('meses', 'valores'));
    }
}