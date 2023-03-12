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

    /*ficha,dia,competencia,trimestre,jornada */
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->id();
            $table->string('nro_ficha',10);
            //$table->unsignedBigInteger('dia');
            //$table->string('codigo_com',10);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreign('nro_ficha')->references('nro_ficha')->on('fichas')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('codigo_com')->references('codigo_com')->on('competencias')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('dia')->references('id')->on('dias')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodos');
    }
};
