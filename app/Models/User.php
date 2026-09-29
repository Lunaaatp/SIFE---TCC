<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    public $incrementing = true;
    protected $authPasswordName = 'senha';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'data_cadastro',
    ];

    protected $hidden = [
        'senha',
    ];

    // ADICIONE ESTES DOIS MÉTODOS ABAIXO PARA DESATIVAR O REMEMBER_TOKEN:
    public function getRememberToken()
    {
        return null;
    }

    public function setRememberToken($value)
    {
        // Deixe vazio para o Laravel não tentar atualizar o banco
    }

    public function getRememberTokenName()
    {
        return '';
    }
}