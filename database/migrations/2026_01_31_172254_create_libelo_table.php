<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('libelos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Situacao do processo (rascunho, concluido, aguardando, encerrado)
            /* Rascunho: usuario preenchendo
                Concluido: usuario finalizou o preenchimento e enviou para analise
                Aguardando: aguardando entrar na fila de analise
                NaFila: recebeu numero de ordem na fila de analise
                Deferido: analise concluida e confirmada nulidade
                Indeferido: analise concluida e NAO confirmada nulidade*/
            $table->string('situacao')->default('Rascunho');
            $table->integer('passo_atual')->default(1);

            // Etapa 1: Dados Pessoais
            $table->string('proponente_nome')->nullable();
            $table->date('proponente_dat_nascimento')->nullable();
            $table->string('proponente_nacionalidade')->nullable();
            $table->string('proponente_profissao')->nullable();
            $table->string('proponente_documento')->nullable();
            $table->string('proponente_cpf', 11)->nullable();
            $table->string('proponente_telefone')->nullable();
            $table->string('proponente_email')->nullable();
            $table->text('proponente_endereco')->nullable();
            $table->string('proponente_cidade')->nullable();
            $table->char('proponente_uf', 2)->nullable();
            $table->string('proponente_cep', 8)->nullable();
            $table->string('proponente_batismo_diocese')->nullable();
            $table->string('proponente_batismo_paroquia')->nullable();
            $table->date('proponente_batismo_data')->nullable();

            // Etapa 2: Parte Contrária
            $table->string('parte_nome')->nullable();
            $table->date('parte_data_nascimento')->nullable();
            $table->string('parte_telefone')->nullable();
            $table->string('parte_email')->nullable();
            $table->text('parte_endereco')->nullable();
            $table->boolean('parte_paradeiro_desconhecido')->default(false);

            // Etapa 3: Dados do Casamento
            $table->date('casamento_religioso_data')->nullable();
            $table->string('casamento_diocese')->nullable();
            $table->string('casamento_paroquia')->nullable();
            $table->date('casamento_civil_data')->nullable();
            $table->date('divorcio_sentenca_data')->nullable();
            $table->string('divorcio_processo_numero')->nullable();
            $table->boolean('tem_filhos')->default(false);

            // Etapa 4: Narrativa dos Fatos (Textos longos)
            $table->mediumText('narrativa_namoro')->nullable();
            $table->mediumText('narrativa_lua_mel')->nullable();
            $table->mediumText('narrativa_vida_conjugal')->nullable();
            $table->mediumText('narrativa_separacao')->nullable();

            // Etapa 5: Fundamentação (Observações)
            $table->text('observacao')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('libelo_canones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('libelo_id')->constrained()->onDelete('cascade');
            $table->foreignId('canon_id')->constrained('canon');
            $table->timestamps();
        });

        Schema::create('libelo_testemunhas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('libelo_id')->constrained()->onDelete('cascade');
            $table->string('testemunha_nome');
            $table->text('testemunha_endereco');
            $table->string('testemunha_telefone');
            $table->string('testemunha_relacao_casal'); // ex: Familiar, Amigo, Padrinho
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libelo_testemunhas');
        Schema::dropIfExists('libelo_canones');
        Schema::dropIfExists('libelos');
    }
};
