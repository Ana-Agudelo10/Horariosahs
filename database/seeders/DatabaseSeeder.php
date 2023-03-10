<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RedSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(ProgramaSeeder::class);
        $this->call(CompetenciaSeeder::class);
        $this->call(ResultadoSeeder::class);
        $this->call(TipoFormacionSeeder::class);
        $this->call(FichaSeeder::class);
        $this->call(SedeSeeder::class);
        $this->call(AmbienteSeeder::class);
        $this->call(SemaforoSeeder::class);
        $this->call(InstructorSeeder::class);
        $this->call(PeriodoSeeder::class);
    
    }
}
