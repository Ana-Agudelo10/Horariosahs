<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jornada;

class JornadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var= new Jornada();
        $var->nombre='MAÑANA';
        $var->save();

        $var= new Jornada();
        $var->nombre='TARDE';
        $var->save();

        $var= new Jornada();
        $var->nombre='NOCHE';
        $var->save();

        $var= new Jornada();
        $var->nombre='FINES DE SEMANA';
        $var->save();
    }
}
