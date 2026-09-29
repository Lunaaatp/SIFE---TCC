<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    // Nome da tabela no banco de dados
    protected $table = 'Turmas';

    // Chave primária
    protected $primaryKey = 'id_turma';

    // Desativa as colunas de data automática (created_at e updated_at)
    public $timestamps = false;

    // Campos permitidos para inserção em massa
    protected $fillable = [
        'nome_turma',
        'serie',
        'periodo',
        'id_professor'
    ];

    /**
     * Relacionamento: Uma turma possui muitos alunos
     */
    public function alunos()
    {
        return $this->hasMany(Aluno::class, 'id_turma');
    }

    /**
     * Relacionamento: Uma turma pertence a um professor
     */
    public function professor()
    {
        return $this->belongsTo(Professor::class, 'id_professor');
    }
}