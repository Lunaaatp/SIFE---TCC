<?php

namespace Tests\Feature;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ReconhecimentoFacialTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(Authenticate::class);
        Schema::create('Usuario', function (Blueprint $table) {
            $table->integer('id_usuario')->primary();
            $table->string('nome');
        });
        Schema::create('alunos', function (Blueprint $table) {
            $table->integer('id_aluno')->primary();
            $table->integer('id_usuario');
            $table->integer('id_turma');
            $table->text('face_embedding')->nullable();
            $table->string('foto_path')->nullable();
            $table->timestamp('face_cadastrada_em')->nullable();
        });
        foreach ([1, 2] as $id) {
            DB::table('Usuario')->insert(['id_usuario' => $id, 'nome' => "Aluno $id"]);
            DB::table('alunos')->insert(['id_aluno' => $id, 'id_usuario' => $id, 'id_turma' => $id]);
        }
        config(['face.threshold' => 0.65, 'face.margin' => 0.05]);
        Storage::fake('public');
    }

    private function vetor(int $posicao = 0): array
    {
        $vetor = array_fill(0, 128, 0);
        $vetor[$posicao] = 1;
        return $vetor;
    }

    private function cadastrar(int $id, int $posicao = 0): void
    {
        $this->postJson('/api/reconhecimento/cadastrar', [
            'id_aluno' => $id, 'embedding' => $this->vetor($posicao), 'substituir' => true,
        ])->assertOk()->assertJsonPath('success', true);
    }

    public function test_salva_foto_e_biometria_e_substitui_cadastro(): void
    {
        for ($i = 0; $i < 2; $i++) {
            $this->post('/api/reconhecimento/cadastrar', [
                'id_aluno' => 1, 'embedding' => $this->vetor($i), 'substituir' => '1',
                'foto' => UploadedFile::fake()->createWithContent('rosto.png', base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+jRZkAAAAASUVORK5CYII=')),
            ], ['Accept' => 'application/json'])->assertOk()->assertJsonPath('amostras', 1);
        }
        $aluno = DB::table('alunos')->where('id_aluno', 1)->first();
        Storage::disk('public')->assertExists($aluno->foto_path);
        $this->assertCount(1, Storage::disk('public')->allFiles('alunos_fotos'));
        $this->assertEquals([$this->vetor(1)], json_decode($aluno->face_embedding, true));
        $this->assertNotNull($aluno->face_cadastrada_em);
    }

    public function test_verifica_aluno_informado_sem_aceitar_rosto_de_outro(): void
    {
        $this->cadastrar(1);
        $this->cadastrar(2, 1);
        $this->postJson('/api/reconhecimento/reconhecer', [
            'id_aluno' => 1, 'embedding' => $this->vetor(),
        ])->assertOk()->assertJsonPath('reconhecido', true)->assertJsonPath('aluno.id_aluno', 1);
        $this->postJson('/api/reconhecimento/reconhecer', [
            'id_aluno' => 2, 'embedding' => $this->vetor(),
        ])->assertOk()->assertJsonPath('reconhecido', false)->assertJsonMissingPath('aluno');
    }

    public function test_nao_sobrescreve_rosto_ja_cadastrado_sem_pedido_explicito(): void
    {
        $this->cadastrar(1);
        $this->postJson('/api/reconhecimento/cadastrar', [
            'id_aluno' => 1, 'embedding' => $this->vetor(1), 'substituir' => false,
        ])->assertStatus(409);
        $this->assertEquals([$this->vetor()], json_decode(DB::table('alunos')->where('id_aluno', 1)->value('face_embedding'), true));
    }

    public function test_rejeita_sem_cadastro_ambiguo_e_turma_diferente(): void
    {
        $payload = ['embedding' => $this->vetor()];
        $this->postJson('/api/reconhecimento/reconhecer', $payload)->assertJsonPath('reconhecido', false);
        $this->cadastrar(1);
        $this->postJson('/api/reconhecimento/reconhecer', $payload + ['id_turma' => 2])->assertJsonPath('reconhecido', false);
        $this->cadastrar(2);
        $this->postJson('/api/reconhecimento/reconhecer', $payload)->assertJsonPath('ambiguo', true)->assertJsonPath('reconhecido', false);
    }

    public function test_rejeita_vetor_zero_e_dimensao_incompativel(): void
    {
        $this->postJson('/api/reconhecimento/cadastrar', [
            'id_aluno' => 1, 'embedding' => array_fill(0, 128, 0),
        ])->assertUnprocessable();
        $this->cadastrar(1);
        $this->postJson('/api/reconhecimento/reconhecer', [
            'embedding' => array_fill(0, 64, 1),
        ])->assertOk()->assertJsonPath('reconhecido', false);
    }

    public function test_falha_no_banco_preserva_cadastro_anterior_e_remove_nova_foto(): void
    {
        $this->cadastrar(1);
        Storage::disk('public')->put('alunos_fotos/anterior.png', 'anterior');
        DB::table('alunos')->where('id_aluno', 1)->update(['foto_path' => 'alunos_fotos/anterior.png']);
        DB::unprepared("CREATE TRIGGER falha_update BEFORE UPDATE ON alunos BEGIN SELECT RAISE(ABORT, 'falha simulada'); END");
        $this->post('/api/reconhecimento/cadastrar', [
            'id_aluno' => 1, 'embedding' => $this->vetor(1), 'substituir' => '1',
            'foto' => UploadedFile::fake()->createWithContent('rosto.png', base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+jRZkAAAAASUVORK5CYII=')),
        ], ['Accept' => 'application/json'])->assertStatus(500);
        $this->assertEquals([$this->vetor()], json_decode(DB::table('alunos')->value('face_embedding'), true));
        $this->assertSame(['alunos_fotos/anterior.png'], Storage::disk('public')->allFiles('alunos_fotos'));
    }
}
