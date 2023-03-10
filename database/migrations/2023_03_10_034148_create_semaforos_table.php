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
        Schema::create('semaforos', function (Blueprint $table) {
            $table->integer('nro_trimestre');
            $table->string('codigo_programa',10);
            $table->string('codigo_com',10);
            $table->string('codigo_resultado',10);
            $table->integer('frecuencia_horaria');
            $table->foreign('codigo_programa')->references('codigo_programa')->on('programas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('codigo_com')->references('codigo_com')->on('competencias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('codigo_resultado')->references('codigo_resultado')->on('resultados')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semaforos');
    }
};
