<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Programa;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variable=new Programa();
        $variable->codigo_programa='228106';
        $variable->nombre='ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION';
        $variable->version_programa='102';
        $variable->nivel_formacion='TECNÓLOGO';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Programa();
        $variable->codigo_programa='228118';
        $variable->nombre='ANÁLISIS Y DESARROLLO DE SOFTWARE';
        $variable->version_programa='01';
        $variable->nivel_formacion='TECNÓLOGO';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Programa();
        $variable->codigo_programa='513601';
        $variable->nombre='IMPLEMENTACIÓN DE INFRAESTRUCTURA DE TECNOLOGIAS DE LA INFORMACIÓN Y LAS COMUNICACIONES';
        $variable->version_programa='01';
        $variable->nivel_formacion='TECNÓLOGO';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Programa();
        $variable->codigo_programa='228116';
        $variable->nombre='ANIMACION DIGITAL';
        $variable->version_programa='03';
        $variable->nivel_formacion='TECNÓLOGO';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Programa();
        $variable->codigo_programa='228117';
        $variable->nombre='PROGRAMACIÓN PARA ANALÍTICA DE DATOS';
        $variable->version_programa='01';
        $variable->nivel_formacion='TÉCNICO';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Programa();
        $variable->codigo_programa='233101';
        $variable->nombre='SISTEMAS';
        $variable->version_programa='01';
        $variable->nivel_formacion='TÉCNICO';
        $variable->codigo_area='19';
        $variable->save();
        
        $variable=new Programa();
        $variable->codigo_programa='233102';
        $variable->nombre='INSTALACIÓN DE REDES DE COMPUTADORES';
        $variable->version_programa='01';
        $variable->nivel_formacion='TÉCNICO';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Programa();
        $variable->codigo_programa='233103';
        $variable->nombre='CONTROL DE LA SEGURIDAD DIGITAL';
        $variable->version_programa='01';
        $variable->nivel_formacion='TÉCNICO';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Programa();
        $variable->codigo_programa='233104';
        $variable->nombre='PROGRAMACIÓN DE SOFTWARE';
        $variable->version_programa='01';
        $variable->nivel_formacion='TÉCNICO';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Programa();
        $variable->codigo_programa='233105';
        $variable->nombre='MANTENIMIENTO DE EQUIPOS DE COMPUTO';
        $variable->version_programa='01';
        $variable->nivel_formacion='TÉCNICO';
        $variable->codigo_area='19';
        $variable->save();

    }
}
