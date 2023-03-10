<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Red;

class RedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variable=new Red();
        $variable->codigo_red='01';
        $variable->nombre='ACTIVIDAD FISICA, RECREACION Y DEPORTE';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='02';
        $variable->nombre='ACUICOLA Y PESCA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='03';
        $variable->nombre='AEROESPACIAL';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='04';
        $variable->nombre='AGRÍCOLA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='05';
        $variable->nombre='AMBIENTAL';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='06';
        $variable->nombre='ARTES GRÁFICAS';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='07';
        $variable->nombre='ARTESANÍAS';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='08';
        $variable->nombre='AUTOMOTOR';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='09';
        $variable->nombre='BIOTECNOLOGÍA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='10';
        $variable->nombre='COMERCIO Y VENTAS';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='11';
        $variable->nombre='CONSTRUCCIÓN';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='12';
        $variable->nombre='CUERO, CALZADO Y MARROQUINERÍA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='13';
        $variable->nombre='CULTURA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='14';
        $variable->nombre='ELECTRÓNICA Y AUTOMATIZACIÓN';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='15';
        $variable->nombre='ENERGÍA ELÉCTRICA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='16';
        $variable->nombre='GESTIÓN ADMINISTRATIVA Y FINANCIERA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='17';
        $variable->nombre='HIDROCARBUROS';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='18';
        $variable->nombre='HOTELERÍA Y TURISMO';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='19';
        $variable->nombre='INFORMATICA, DISEÑO Y DESARROLLO DE SOFTWARE';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='20';
        $variable->nombre='INFRAESTRUCTURA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='21';
        $variable->nombre='LOGÍSTICA Y GESTIÓN DE LA PRODUCCIÓN';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='22';
        $variable->nombre='MATERIALES PARA LA INDUSTRIA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='23';
        $variable->nombre='MECANICA INDUSTRIAL';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='24';
        $variable->nombre='MINERÍA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='25';
        $variable->nombre='PECUARIA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='26';
        $variable->nombre='QUÍMICA APLICADA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='27';
        $variable->nombre='SALUD';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='28';
        $variable->nombre='SERVICIOS PERSONALES';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='29';
        $variable->nombre='TELECOMUNICACIONES';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='30';
        $variable->nombre='TEXTIL, CONFECCIÓN, DISEÑO Y MODA';
        $variable->save();

        $variable=new Red();
        $variable->codigo_red='31';
        $variable->nombre='TRANSPORTE';
        $variable->save();
    }
}
