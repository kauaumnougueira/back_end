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
        Schema::create('estacao', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('horario', 50);
            $table->string('contato', 50);
            $table->boolean('status');
            $table->foreignId('endereco_id')->constrained('endereco')->onDelete('cascade');
            $table->foreignId('gestor_id')->constrained('gestor')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estacao');
    }
};
