<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoFormacion;

class TipoFormacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variable=new TipoFormacion();
        $variable->codigo_tipo_form='01';
        $variable->nombre='CADENA DE FORMACION';
        $variable->save();

        $variable=new TipoFormacion();
        $variable->codigo_tipo_form='02';
        $variable->nombre='CADENA REGULAR';
        $variable->save();
    }
}