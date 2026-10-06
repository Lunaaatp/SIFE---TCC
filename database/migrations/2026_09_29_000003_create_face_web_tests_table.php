<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('face_web_tests', function (Blueprint $table) {
            $table->unsignedBigInteger('id_aluno')->primary();
            $table->string('foto_hash', 64)->unique();
            $table->string('foto_path');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('face_web_tests');
    }
};
