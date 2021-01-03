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

        for($i = 0; $i < 10 ; $i++) {
            Subject::create([
                'subject_name'=>$faker->name,
                'level'=>'primary',
                'topic'=>$faker->sentence,
            ]);
        }
    }
}
