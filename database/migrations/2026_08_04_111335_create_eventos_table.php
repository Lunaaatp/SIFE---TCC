<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
Schema::create('eventos', function (Blueprint $table) {
    $table->id();
    $table->string('titulo');
    $table->string('categoria');
    $table->string('publico')->nullable(); // nullable para não dar erro se não preenchido
    $table->date('data');
    $table->time('hora_inicio');
    $table->time('hora_fim')->nullable();   // nullable
    $table->string('local');
    $table->text('descricao')->nullable();  // nullable
    $table->timestamps();
});
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
