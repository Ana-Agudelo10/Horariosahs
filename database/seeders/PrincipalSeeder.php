<?php

namespace Database\Seeders;

use App\Models\Principal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variable=new Principal();
        $variable->nro_ficha='2515397';
        $variable->codigo_com='220501006';
        $variable->nro_documento='0987654';
        $variable->nro_ambiente='101';
        $variable->Trimestre='2';
        $variable->save();
    }
}
