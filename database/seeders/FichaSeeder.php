<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ficha;

class FichaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variable=new Ficha();
        $variable->nro_ficha='2560636';
        $variable->jornada='MAÑANA';
        $variable->codigo_programa='228106';
        $variable->codigo_tipo_form='01';
        $variable->estado=true;
        $variable->cant_aprendices='23';
        $variable->fecha_inicio='2022-06-10';
        $variable->fecha_fin='2023-02-22';
        $variable->save();

        $variable=new Ficha();
        $variable->nro_ficha='2560664-A';
        $variable->jornada='MAÑANA';
        $variable->codigo_programa='228118';
        $variable->codigo_tipo_form='01';
        $variable->estado=true;
        $variable->cant_aprendices='30';
        $variable->fecha_inicio='2022-04-09';
        $variable->fecha_fin='2023-04-18';
        $variable->save();

        $variable=new Ficha();
        $variable->nro_ficha='2560483-A';
        $variable->jornada='MAÑANA';
        $variable->codigo_programa='233101';
        $variable->codigo_tipo_form='02';
        $variable->estado=true;
        $variable->cant_aprendices='25';
        $variable->fecha_inicio='2022-04-09';
        $variable->fecha_fin='2023-04-18';
        $variable->save();

        $variable=new Ficha();
        $variable->nro_ficha='2560664-B';
        $variable->jornada='TARDE';
        $variable->codigo_programa='228118';
        $variable->codigo_tipo_form='01';
        $variable->estado=true;
        $variable->cant_aprendices='14';
        $variable->fecha_inicio='2022-04-09';
        $variable->fecha_fin='2023-04-18';
        $variable->save();


        $variable=new Ficha();
        $variable->nro_ficha='2560483-B';
        $variable->jornada='MAÑANA';
        $variable->codigo_programa='233101';
        $variable->codigo_tipo_form='01';
        $variable->estado=true;
        $variable->cant_aprendices='30';
        $variable->fecha_inicio='2022-02-12';
        $variable->fecha_fin='2023-06-18';
        $variable->save();


        $variable=new Ficha();
        $variable->nro_ficha='2503403';
        $variable->jornada='NOCHE';
        $variable->codigo_programa='228118';
        $variable->codigo_tipo_form='01';
        $variable->estado=true;
        $variable->cant_aprendices='25';
        $variable->fecha_inicio='2022-07-18';
        $variable->fecha_fin='2024-04-12';
        $variable->save();

        $variable=new Ficha();
        $variable->nro_ficha='2515397';
        $variable->jornada='TARDE';
        $variable->codigo_programa='228106';
        $variable->codigo_tipo_form='02';
        $variable->estado=true;
        $variable->cant_aprendices='28';
        $variable->fecha_inicio='2022-04-18';
        $variable->fecha_fin='2023-10-18';
        $variable->save();

        $variable=new Ficha();
        $variable->nro_ficha='2453221';
        $variable->jornada='MAÑANA';
        $variable->codigo_programa='233101';
        $variable->codigo_tipo_form='01';
        $variable->estado=true;
        $variable->cant_aprendices='20';
        $variable->fecha_inicio='2022-10-12';
        $variable->fecha_fin='2024-02-18';
        $variable->save();

        $variable=new Ficha();
        $variable->nro_ficha='2560535';
        $variable->jornada='TARDE';
        $variable->codigo_programa='233104';
        $variable->codigo_tipo_form='01';
        $variable->estado=true;
        $variable->cant_aprendices='17';
        $variable->fecha_inicio='2022-04-18';
        $variable->fecha_fin='2023-08-12';
        $variable->save();

        $variable=new Ficha();
        $variable->nro_ficha='2453232';
        $variable->jornada='MAÑANA';
        $variable->codigo_programa='233104';
        $variable->codigo_tipo_form='02';
        $variable->estado=true;
        $variable->cant_aprendices='10';
        $variable->fecha_inicio='2022-02-12';
        $variable->fecha_fin='2023-02-12';
        $variable->save();

        $variable=new Ficha();
        $variable->nro_ficha='2503272';
        $variable->jornada='TARDE';
        $variable->codigo_programa='233101';
        $variable->codigo_tipo_form='01';
        $variable->estado=true;
        $variable->cant_aprendices='25';
        $variable->fecha_inicio='2022-02-12';
        $variable->fecha_fin='2023-08-18';
        $variable->save();
    }
}

