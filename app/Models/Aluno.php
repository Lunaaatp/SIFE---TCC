<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $primaryKey = 'id_aluno';

    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'id_turma',
        'data_nascimento',
        'rfid_uid',
    ];

    public function usuario()
    {
        return $this->belongsTo(
            Usuario::class,
            'id_usuario',
            'id_usuario'
        );
    }

    public function turma()
    {
        return $this->belongsTo(
            Turma::class,
            'id_turma',
            'id_turma'
        );
    }
}