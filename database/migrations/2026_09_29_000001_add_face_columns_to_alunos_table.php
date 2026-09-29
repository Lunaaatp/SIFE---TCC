<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('alunos', function (Blueprint $table) {
            if (!Schema::hasColumn('alunos', 'foto_path')) {
                $table->string('foto_path')->nullable();
            }
            if (!Schema::hasColumn('alunos', 'face_embedding')) {
                // JSON com a lista de vetores (embeddings) do rosto do aluno
                $table->longText('face_embedding')->nullable();
            }
            if (!Schema::hasColumn('alunos', 'face_cadastrada_em')) {
                $table->timestamp('face_cadastrada_em')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropColumn(['foto_path', 'face_embedding', 'face_cadastrada_em']);
        });
    }
};
