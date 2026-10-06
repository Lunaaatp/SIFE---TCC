<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        DB::transaction(function () {
            foreach (DB::table('usuario')->select('id_usuario', 'senha')->get() as $usuario) {
                $senha = (string) $usuario->senha;
                if ($senha !== '' && password_get_info($senha)['algoName'] === 'unknown') {
                    DB::table('usuario')->where('id_usuario', $usuario->id_usuario)
                        ->where('senha', $senha)->update(['senha' => Hash::make($senha)]);
                }
            }
        });
    }

    public function down(): void
    {
        // Hashes não podem ser revertidos para texto puro.
    }
};
