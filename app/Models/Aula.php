<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'Aula';

    protected $primaryKey = 'id_aula';

    public $timestamps = false;

    protected $fillable = [
        'id_turma',
        'disciplina',
        'data'
    ];

    public function turma()
    {
        return $this->belongsTo(Turma::class, 'id_turma');
    }
}