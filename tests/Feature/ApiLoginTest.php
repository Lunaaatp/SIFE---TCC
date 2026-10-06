<?php

namespace Tests\Feature;

use App\Models\Usuario;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ApiLoginTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nome');
            $table->string('email');
            $table->string('senha');
        });
        Schema::create('professor', function (Blueprint $table) {
            $table->increments('id_professor');
            $table->integer('id_usuario');
        });
        (require database_path('migrations/2026_08_18_105259_create_personal_access_tokens_table.php'))->up();
    }

    public function test_senha_legada_migrada_permite_login_e_token_autenticado(): void
    {
        DB::table('usuario')->insert([
            'id_usuario' => 1, 'nome' => 'Professor teste',
            'email' => 'professor@example.test', 'senha' => 'senha-teste-local',
        ]);
        DB::table('professor')->insert(['id_usuario' => 1]);
        $migration = require database_path('migrations/2026_09_29_000002_hash_legacy_usuario_passwords.php');
        $migration->up();
        $hash = DB::table('usuario')->value('senha');
        $this->assertTrue(Hash::check('senha-teste-local', $hash));
        $migration->up();
        $this->assertSame($hash, DB::table('usuario')->value('senha'));
        $response = $this->postJson('/api/login', [
            'email' => 'professor@example.test', 'password' => 'senha-teste-local',
        ])->assertOk()->assertJsonPath('success', true)->assertJsonStructure(['token', 'usuario']);
        $this->withToken($response->json('token'))->postJson('/api/logout')->assertOk();
        $this->assertDatabaseCount('personal_access_tokens', 0);
    }

    public function test_novo_usuario_salva_hash_e_senha_errada_retorna_401(): void
    {
        $usuario = Usuario::create([
            'nome' => 'Teste', 'email' => 'teste@example.test', 'senha' => 'senha-teste-local',
        ]);
        $this->assertTrue(Hash::check('senha-teste-local', $usuario->fresh()->senha));
        $this->postJson('/api/login', [
            'email' => 'teste@example.test', 'password' => 'errada',
        ])->assertUnauthorized();
    }

    public function test_hash_invalido_nao_causa_erro_500(): void
    {
        DB::table('usuario')->insert([
            'nome' => 'Teste', 'email' => 'teste@example.test', 'senha' => 'texto-sem-hash',
        ]);
        $this->postJson('/api/login', [
            'email' => 'teste@example.test', 'password' => 'texto-sem-hash',
        ])->assertUnauthorized();
        $this->assertDatabaseCount('personal_access_tokens', 0);
    }
}
