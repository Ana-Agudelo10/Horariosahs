<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sede;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variable=new Sede();
        $variable->codigo_centro='01';
        $variable->nombre='SEDE PRINCIPAL';
        $variable->direccion='Calle 13 # 10 - 63 Soacha - Centro';
        $variable->save();

        $variable=new Sede();
        $variable->codigo_centro='02';
        $variable->nombre='SUBSEDE UNIMINUTO';
        $variable->direccion='Transversal 5 # 5G-95 Soacha';
        $variable->save();

        $variable=new Sede();
        $variable->codigo_centro='03';
        $variable->nombre='SUBSEDE TECNOACADEMIA';
        $variable->direccion='Autopista Sur Transversal 7 # 8 - 40 Cazucá - Soacha';
        $variable->save();

        $variable=new Sede();
        $variable->codigo_centro='04';
        $variable->nombre='SUBSEDE LA COLONIA';
        $variable->direccion='Km 2 vía a Sibaté';
        $variable->save();

        $variable=new Sede();
        $variable->codigo_centro='05';
        $variable->nombre='SUBSEDE EL ALTICO';
        $variable->direccion='Autopista Sur Carrera 4 # 3 - 48 Soacha';
        $variable->save();

    }
}
