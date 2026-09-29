<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiais';

    protected $primaryKey = 'id_material';

    protected $fillable = [
        'titulo',
        'arquivo',
        'id_professor',
        'id_turma',
    ];
}