<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'Professor';

    protected $primaryKey = 'id_professor';

    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'telefone',
        'disciplina_principal',
        'tempo_servico',
        'instituicao'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}