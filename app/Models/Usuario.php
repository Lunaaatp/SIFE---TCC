<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens; // necessário para $usuario->createToken()

    protected $table = 'usuario';

    protected $primaryKey = 'id_usuario';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'senha',
        'data_cadastro'
    ];

    protected $hidden = [
        'senha'
    ];

    protected function casts(): array
    {
        return ['senha' => 'hashed'];
    }

    public function getAuthPassword()
    {
        return $this->senha;
    }

    public function aluno()
    {
        return $this->hasOne(
            Aluno::class,
            'id_usuario',
            'id_usuario'
        );
    }

    public function professor()
    {
        return $this->hasOne(
            Professor::class,
            'id_usuario',
            'id_usuario'
        );
    }
}
