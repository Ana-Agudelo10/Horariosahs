<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ambiente;

class AmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variable=new Ambiente();
        $variable->nro_ambiente='101';
        $variable->nombre='101';
        $variable->especializacion='Gestion contable - Computacion';
        $variable->nro_elementos= '66';
        $variable->descripcion='Primer piso';
        $variable->codigo_centro='01';
        $variable->save();


        $variable=new Ambiente();
        $variable->nro_ambiente='102';
        $variable->nombre='Call center';
        $variable->especializacion='Gestion contable y financiera - Computacion';
        $variable->nro_elementos= '66';
        $variable->descripcion='Primer piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='201';
        $variable->nombre='201';
        $variable->especializacion='Gestion administrativa - Animacion digital';
        $variable->nro_elementos= '50';
        $variable->descripcion='Segundo piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='202';
        $variable->nombre='202';
        $variable->especializacion='Animacion digital - Produccion multimedia';
        $variable->nro_elementos= '61';
        $variable->descripcion='Segundo piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='203';
        $variable->nombre='203';
        $variable->especializacion='Animacion digital - Produccion multimedia';
        $variable->nro_elementos= '20';
        $variable->descripcion='Segundo piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='204';
        $variable->nombre='204';
        $variable->especializacion='Negociacion internacional';
        $variable->nro_elementos= '21';
        $variable->descripcion='Segundo piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='205';
        $variable->nombre='205';
        $variable->especializacion='Gestion de redes de datos - Tele informatica';
        $variable->nro_elementos= '29';
        $variable->descripcion='Segundo piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='206';
        $variable->nombre='206';
        $variable->especializacion='Negociacion internacional';
        $variable->nro_elementos= '21';
        $variable->descripcion='Segundo piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='301';
        $variable->nombre='301';
        $variable->especializacion='Gestion administrativa';
        $variable->nro_elementos= '27';
        $variable->descripcion='Tercer piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='302';
        $variable->nombre='302';
        $variable->especializacion='Gestion de Talento Humano';
        $variable->nro_elementos= '29';
        $variable->descripcion='Tercer piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='303';
        $variable->nombre='303';
        $variable->especializacion='Gestion de Talento Humano';
        $variable->nro_elementos= '26';
        $variable->descripcion='Tercer piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='304';
        $variable->nombre='304';
        $variable->especializacion='Gestion de Talento Humano';
        $variable->nro_elementos= '29';
        $variable->descripcion='Tercer piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='305';
        $variable->nombre='305';
        $variable->especializacion='Gestion de Talento Humano';
        $variable->nro_elementos= '29';
        $variable->descripcion='Tercer piso';
        $variable->codigo_centro='01';
        $variable->save();

        $variable=new Ambiente();
        $variable->nro_ambiente='306';
        $variable->nombre='306';
        $variable->especializacion='Recursos Humano';
        $variable->nro_elementos= '28';
        $variable->descripcion='Tercer piso';
        $variable->codigo_centro='01';
        $variable->save();
    }
}
