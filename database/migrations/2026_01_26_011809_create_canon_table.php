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
        Schema::create('canon', function (Blueprint $table) {
            $table->id();
            $table->string('canon'); // Ex: CIC 1095, §2
            $table->string('category'); // Ex: Discernimento / Idade Mínima
            $table->text('question'); // A pergunta para o usuário
            $table->text('explanation')->nullable(); // Explicação técnica do Cânon
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canon');
    }
};
