<?php

namespace Database\Seeders;
use App\Models\TipoDocumento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $var= New TipoDocumento();
        $var->nombre='Cedula de Ciudadania';
        $var->save();

        $var= New TipoDocumento();
        $var->nombre='Cedula de Extranjeria ';
        $var->save();

        $var= New TipoDocumento();
        $var->nombre='Numero Ciego SENA';
        $var->save();

        $var= New TipoDocumento();
        $var->nombre='Pasaporte';
        $var->save();

    }
}