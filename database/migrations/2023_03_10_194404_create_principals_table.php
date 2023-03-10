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
        Schema::create('principals', function (Blueprint $table) {
            $table->id();
            $table->string('nro_ficha',10);
            $table->string('codigo_com',10);
            $table->string('nro_documento',10);
            $table->string('nro_ambiente',10);
            $table->string('Trimestre');
            $table->foreign('nro_ficha')->references('nro_ficha')->on('fichas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('codigo_com')->references('codigo_com')->on('competencias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nro_documento')->references('nro_documento')->on('instructors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nro_ambiente')->references('nro_ambiente')->on('ambientes')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('principals');
    }
};
