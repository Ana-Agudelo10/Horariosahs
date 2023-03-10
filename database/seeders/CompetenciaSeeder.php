<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Competencia;

class CompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variable=new Competencia();
        $variable->codigo_com='220501006';
        $variable->nombre='ESPECIFICAR LOS REQUISITOS NECESARIOS PARA DESARROLLAR EL SISTEMA DE INFORMACION DE ACUERDO CON LAS NECESIDADES DEL CLIENTE';
        $variable->codigo_programa='228106';
        $variable->save();

        $variable=new Competencia();
        $variable->codigo_com='220501007';
        $variable->nombre='CONSTRUIR EL SISTEMA QUE CUMPLA CON LOS REQUISITOS DE LA SOLUCIÓN INFORMÁTICA';
        $variable->codigo_programa='228106';
        $variable->save();

        $variable=new Competencia();
        $variable->codigo_com='220501009';
        $variable->nombre='PARTICIPAR EN EL PROCESO DE NEGOCIACIÓN DE TECNOLOGÍA INFORMÁTICA PARA PERMITIR LA IMPLEMENTACIÓN DEL SISTEMA DE INFORMACIÓN';
        $variable->codigo_programa='228106';
        $variable->save();

        $variable=new Competencia();
        $variable->codigo_com='220501032';
        $variable->nombre='ANALIZAR LOS REQUISITOS DEL CLIENTE PARA CONSTRUIR EL SISTEMA DE INFORMACION';
        $variable->codigo_programa='228106';
        $variable->save();

        $variable=new Competencia();
        $variable->codigo_com='220501033';
        $variable->nombre='DISEÑAR EL SISTEMA DE ACUERDO CON LOS REQUISITOS DEL CLIENTE';
        $variable->codigo_programa='228106';
        $variable->save();

        $variable=new Competencia();
        $variable->codigo_com='220501034';
        $variable->nombre='IMPLANTAR LA SOLUCION QUE CUMPLA CON LOS REQUISISTOS PARA SU OPERACIÓN';
        $variable->codigo_programa='228106';
        $variable->save();

        $variable=new Competencia();
        $variable->codigo_com='220501035';
        $variable->nombre='APLICAR BUENAS PRÁCTICAS DE CALIDAD EN EL PROCESO DE DESARROLLO DE SOFTWARE, DE ACUERDO CON EL REFERENTE ADOPTADO EN LA EMPRESA';
        $variable->codigo_programa='228106';
        $variable->save();

        $variable=new Competencia();
        $variable->codigo_com='240201500';
        $variable->nombre='PROMOVER LA INTERACCIÓN IDÓNEA CONSIGO MISMO, CON LOS DEMÁS Y CON LA NATURALEZA EN LOS CONTEXTOS LABORAL Y SOCIAL';
        $variable->codigo_programa='228106';
        $variable->save();

        $variable=new Competencia();
        $variable->codigo_com='240201501';
        $variable->nombre='COMPRENDER TEXTOS EN INGLÉS EN FORMA ESCRITA Y AUDITIVA';
        $variable->codigo_programa='228106';
        $variable->save();

        $variable=new Competencia();
        $variable->codigo_com='240201502';
        $variable->nombre='PRODUCIR TEXTOS EN INGLÉS EN FORMA ESCRITA Y ORAL';
        $variable->codigo_programa='228106';
        $variable->save();
    }
}
