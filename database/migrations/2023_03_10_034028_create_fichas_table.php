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
        Schema::create('fichas', function (Blueprint $table) {

            $table->string('nro_ficha',10)->primary();
            $table->string('jornada');
            $table->string('codigo_programa',10);
            $table->string('codigo_tipo_form',10);
            $table->boolean('estado');
            $table->integer('cant_aprendices');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreign('codigo_programa')->references('codigo_programa')->on('programas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('codigo_tipo_form')->references('codigo_tipo_form')->on('tipo_formacions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichas');
    }
};
