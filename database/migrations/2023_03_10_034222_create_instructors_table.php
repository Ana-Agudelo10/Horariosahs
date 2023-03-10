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
        Schema::create('instructors', function (Blueprint $table) {
            $table->string('nro_documento',10)->primary();
            $table->string('tipo_documento');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('email');
            $table->boolean('estado');
            $table->unsignedBigInteger('codigo_tipo_contrato');
           // $table->string('codigo_red',10);
            $table->string('codigo_area',10);
            //$table->foreign('codigo_red')->references('codigo_red')->on('reds');
            $table->foreign('codigo_tipo_contrato')->references('codigo_tipo_contrato')->on('tipo_contratos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('codigo_area')->references('codigo_area')->on('areas')->onDelete('cascade')->onUpdate('cascade');;
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
