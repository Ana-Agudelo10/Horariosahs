<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instructor;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*$variable=new Instructor();
        $variable->nro_documento='1234567';
        $variable->tipo_documento='CC';
        $variable->nombre='FERNEY ANDRES';
        $variable->apellido='BELTRAN SANTOFIMIO';
        $variable->telefono='3134517939';
        $variable->email='fabeltran@misena.edu.co';
        $variable->estado='true';
        $variable->tiempos='';
     //   $variable->codigo_red='19';
        $variable->codigo_area='';*/

        $variable=new Instructor();
        $variable->nro_documento='1234568';
        $variable->tipo_documento='CC';
        $variable->nombre='SAMUEL RICARDO';
        $variable->apellido='PADILLA NARVAEZ';
        $variable->telefono='3156018848';
        $variable->email='srpadilla@misena.edu.co';
        $variable->estado=true;
        $variable->codigo_tipo_contrato='2';
     //   $variable->codigo_red='19';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Instructor();
        $variable->nro_documento='1234569';
        $variable->tipo_documento='CC';
        $variable->nombre='ALEXANDER';
        $variable->apellido='MENDOZA MONAGA';
        $variable->telefono='3142912634';
        $variable->email='amendoza43@misena.edu.co';
        $variable->estado=true;
        $variable->codigo_tipo_contrato='1';
     //   $variable->codigo_red='19';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Instructor();
        $variable->nro_documento='1234560';
        $variable->tipo_documento='CC';
        $variable->nombre='ARLENYS CAROLINA';
        $variable->apellido='NIEVES VASQUEZ';
        $variable->telefono='3132453681';
        $variable->email='acnv@misena.edu.co';
        $variable->estado=true;
        $variable->codigo_tipo_contrato='2';
     //   $variable->codigo_red='19';
        $variable->codigo_area='19';
        $variable->save();

        $variable=new Instructor();
        $variable->nro_documento='0987654';
        $variable->tipo_documento='CC';
        $variable->nombre='NEIDY ADRIANA';
        $variable->apellido='ESPITIA SUAREZ';
        $variable->telefono='3233965624';
        $variable->email='naespitia@sena.edu.co';
        $variable->estado=true;
        $variable->codigo_tipo_contrato='2';
     //   $variable->codigo_red='19';
        $variable->codigo_area='19';
        $variable->save();
    }
}
