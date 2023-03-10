<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variable=new Area();
        $variable->codigo_area='19';
        $variable->nombre='INFORMÁTICA, DISEÑO Y DESARROLLO DE SOFTWARE';
        $variable->codigo_red='19';
        $variable->save();
    }
}
