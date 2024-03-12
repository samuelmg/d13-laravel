<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::factory(40)->create();

        DB::table('alumnos')->insert([
            'nombre' => 'Juan',
            'correo' => 'juan@alumnos.udg.mx',
            'codigo' => '123456789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Alumno::create([
            'nombre' => 'Pedro',
            'correo' => 'pedro@alumno.udg.mx',
            'codigo' => '987654321',
        ]);
    }
}
