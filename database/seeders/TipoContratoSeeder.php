<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoContrato;

class TipoContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var= New TipoContrato();
        $var->nombre='Contratista';
        $var->tiempos='6';
        $var->save();

        $var= New TipoContrato();
        $var->nombre='Planta';
        $var->tiempos='8';
        $var->save();
    }
}
