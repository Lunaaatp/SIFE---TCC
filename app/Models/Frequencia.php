<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frequencia extends Model
{
    protected $table = 'Frequencia';

    protected $primaryKey = 'id_frequencia';

    public $timestamps = false;

    protected $fillable = [
        'id_aula',
        'id_aluno',
        'status',
        'observacao'
    ];

    public function aula()
    {
        return $this->belongsTo(Aula::class, 'id_aula');
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'id_aluno');
    }
}