<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tribunais', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Ex: Tribunal Eclesiástico Interdiocesano de Aparecida
            $table->string('diocese'); // Diocese principal
            $table->text('jurisdicao')->nullable(); // Texto descrevendo as cidades/dioceses que abrange
            $table->string('endereco');
            $table->string('cidade');
            $table->char('uf', 2)->index();
            $table->string('cep', 8)->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('site')->nullable();
            $table->string('atendimento')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tribunais');
    }
};
