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
        Schema::create('programas', function (Blueprint $table) {
            $table->string('codigo_programa',10)->primary();
            $table->text('nombre');
            $table->string('version_programa');
            $table->string('nivel_formacion');
            $table->string('codigo_area',10);
            $table->foreign('codigo_area')->references('codigo_area')->on('areas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};
