<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organizacion;

class OrganizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var= new Organizacion();
        $var->nro_ficha='2515397';
        $var->dia='1';
        $var->codigo_com='220501034';
        $var->jornada='2';
        $var->save();

        $var= new Organizacion();
        $var->nro_ficha='2515397';
        $var->dia='2';
        $var->codigo_com='220501007';
        $var->jornada='2';
        $var->save();

        $var= new Organizacion();
        $var->nro_ficha='2515397';
        $var->dia='3';
        $var->codigo_com='240201500';
        $var->jornada='2';
        $var->save();

        $var= new Organizacion();
        $var->nro_ficha='2515397';
        $var->dia='4';
        $var->codigo_com='220501007';
        $var->jornada='2';
        $var->save();

        $var= new Organizacion();
        $var->nro_ficha='2515397';
        $var->dia='5';
        $var->codigo_com='220501007';
        $var->jornada='2';
        $var->save();

    }
}
