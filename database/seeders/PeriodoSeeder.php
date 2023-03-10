<?php

namespace Database\Seeders;

use App\Models\Periodo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var= new Periodo();
        $var->nro_ficha='2515397';
        $var->dia='1';
        $var->codigo_com='220501034';
        $var->fecha_inicio='2023-01-27';
        $var->fecha_fin='2023-04-06';
        $var->save();

        $var= new Periodo();
        $var->nro_ficha='2515397';
        $var->dia='2';
        $var->codigo_com='220501007';
        $var->fecha_inicio='2023-01-27';
        $var->fecha_fin='2023-04-06';
        $var->save();

        $var= new Periodo();
        $var->nro_ficha='2515397';
        $var->dia='3';
        $var->codigo_com='240201500';
        $var->fecha_inicio='2023-01-27';
        $var->fecha_fin='2023-04-06';
        $var->save();

        $var= new Periodo();
        $var->nro_ficha='2515397';
        $var->dia='4';
        $var->codigo_com='220501007';
        $var->fecha_inicio='2023-01-27';
        $var->fecha_fin='2023-04-06';
        $var->save();

        $var= new Periodo();
        $var->nro_ficha='2515397';
        $var->dia='5';
        $var->codigo_com='220501007';
        $var->fecha_inicio='2023-01-27';
        $var->fecha_fin='2023-04-06';
        $var->save();

    }
}
