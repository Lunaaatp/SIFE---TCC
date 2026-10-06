<?php

namespace Tests\Feature;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FaceWebTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(Authenticate::class);
        Storage::fake('local');
        Schema::create('Usuario', function (Blueprint $t) {
            $t->integer('id_usuario')->primary(); $t->string('nome'); $t->string('email');
        });
        Schema::create('Turmas', function (Blueprint $t) { $t->integer('id_turma')->primary(); });
        Schema::create('alunos', function (Blueprint $t) {
            $t->integer('id_aluno')->primary(); $t->integer('id_usuario');
            $t->integer('id_turma'); $t->text('face_embedding')->nullable();
        });
        Schema::create('Aula', function (Blueprint $t) {
            $t->increments('id_aula'); $t->integer('id_turma'); $t->date('data'); $t->string('disciplina');
        });
        Schema::create('Frequencia', function (Blueprint $t) {
            $t->increments('id_frequencia'); $t->integer('id_aula'); $t->integer('id_aluno');
            $t->string('status'); $t->string('observacao');
        });
        (require database_path('migrations/2026_09_29_000003_create_face_web_tests_table.php'))->up();
        foreach ([1, 2] as $id) {
            DB::table('Usuario')->insert(['id_usuario' => $id, 'nome' => "Aluno $id", 'email' => "$id@example.test"]);
            DB::table('Turmas')->insert(['id_turma' => $id]);
            DB::table('alunos')->insert(['id_aluno' => $id, 'id_usuario' => $id, 'id_turma' => $id]);
        }
    }

    private function foto(): UploadedFile
    {
        return UploadedFile::fake()->createWithContent('foto.png', base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+jRZkAAAAASUVORK5CYII='));
    }

    private function cadastrar(int $id = 1)
    {
        return $this->post('/api/reconhecimento/teste-web/cadastrar', [
            'id_aluno' => $id, 'foto' => $this->foto(),
        ], ['Accept' => 'application/json']);
    }

    public function test_fluxo_cadastro_totem_presenca_e_consulta(): void
    {
        $this->cadastrar()->assertOk();
        $this->getJson('/api/frequencia?id_turma=1')->assertOk()
            ->assertJsonPath('alunos.0.tem_rosto', false)
            ->assertJsonPath('alunos.0.tem_rosto_teste', true)
            ->assertJsonPath('alunos.0.status', 'Ausente');
        $resposta = $this->post('/api/reconhecimento/teste-web/reconhecer', [
            'id_turma' => 1, 'foto' => $this->foto(),
        ], ['Accept' => 'application/json'])->assertOk()->assertJsonPath('reconhecido', true);
        for ($i = 0; $i < 2; $i++) {
            $this->postJson('/api/frequencia', [
                'id_turma' => 1, 'id_aluno' => $resposta->json('aluno.id_aluno'),
                'data' => today()->toDateString(), 'status' => 'Presente', 'origem' => 'teste_web',
            ])->assertOk();
        }
        $this->assertDatabaseCount('Frequencia', 1);
        $this->assertDatabaseHas('Frequencia', ['status' => 'Presente', 'observacao' => 'Simulação com foto de teste na web']);
        $this->getJson('/api/frequencia?id_turma=1')->assertJsonPath('alunos.0.status', 'Presente');
        $this->assertNull(DB::table('alunos')->where('id_aluno', 1)->value('face_embedding'));
    }

    public function test_nao_reconhece_sem_cadastro_ou_em_outra_turma(): void
    {
        $this->post('/api/reconhecimento/teste-web/reconhecer', [
            'id_turma' => 1, 'foto' => $this->foto(),
        ], ['Accept' => 'application/json'])->assertJsonPath('reconhecido', false);
        $this->cadastrar()->assertOk();
        $this->post('/api/reconhecimento/teste-web/reconhecer', [
            'id_turma' => 2, 'foto' => $this->foto(),
        ], ['Accept' => 'application/json'])->assertJsonPath('reconhecido', false);
        $this->postJson('/api/frequencia', ['id_turma' => 2, 'id_aluno' => 1])->assertUnprocessable();
        $this->assertDatabaseCount('Frequencia', 0);
    }

    public function test_foto_unica_remocao_e_reutilizacao(): void
    {
        $this->cadastrar()->assertOk();
        $this->cadastrar()->assertStatus(409);
        $this->cadastrar(2)->assertStatus(409);
        $this->deleteJson('/api/reconhecimento/teste-web/1')->assertOk();
        $this->assertSame([], Storage::disk('local')->allFiles('face_web_tests'));
        $this->cadastrar(2)->assertOk();
    }

    public function test_simulacao_bloqueada_em_producao(): void
    {
        $this->app->instance('env', 'production');
        $this->cadastrar()->assertNotFound();
        $this->postJson('/api/reconhecimento/teste-web/reconhecer')->assertNotFound();
        $this->deleteJson('/api/reconhecimento/teste-web/1')->assertNotFound();
    }
}
