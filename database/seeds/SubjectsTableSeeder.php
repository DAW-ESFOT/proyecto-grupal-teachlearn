<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.
        // Generar algunos
        $name=['Matematicas','Ingles','Quimica','Física','Geometría','Frances','Programación','Biología','Contabilidad','Escritura acádemica'];
        $level=['basic','highSchool'];
        for($i = 0; $i < 15 ; $i++) {
            Subject::create([
                'name'=>$faker->randomElement($name),
                'level'=>$faker->randomElement($level),
            ]);
        }
    }
}
