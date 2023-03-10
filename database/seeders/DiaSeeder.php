<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dia;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var= new Dia();
        $var->nombre='LUNES';
        $var->save();

        $var= new Dia();
        $var->nombre='MARTES';
        $var->save();

        $var= new Dia();
        $var->nombre='MIERCOLES';
        $var->save();

        $var= new Dia();
        $var->nombre='JUEVES';
        $var->save();

        $var= new Dia();
        $var->nombre='VIERNES';
        $var->save();

        $var= new Dia();
        $var->nombre='SABADO';
        $var->save();

        $var= new Dia();
        $var->nombre='DOMINGO';
        $var->save();
    }
}
