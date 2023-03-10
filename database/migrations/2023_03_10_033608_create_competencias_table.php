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
        Schema::create('competencias', function (Blueprint $table) {
            $table->string('codigo_com',10)->primary();
            $table->text('nombre');
            $table->string('codigo_programa',10);
            $table->foreign('codigo_programa')->references('codigo_programa')->on('programas')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competencias');
    }
};
