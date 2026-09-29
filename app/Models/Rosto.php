<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Rostos', function (Blueprint $table) {
            $table->id('id_rosto');

            $table->unsignedBigInteger('id_aluno');

            $table->longText('embedding');

            $table->timestamps();

            $table->foreign('id_aluno')
                ->references('id_aluno')
                ->on('alunos')
                ->onDelete('cascade');

            $table->unique('id_aluno');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Rostos');
    }
};