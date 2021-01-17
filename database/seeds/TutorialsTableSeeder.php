<?php

use App\Tutorial;
use Illuminate\Database\Seeder;

class TutorialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        Tutorial::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.
        // Generar algunos tutorias

        for ($i = 0; $i < 20; $i++) {
            Tutorial::create([
                'date' => $faker->date($format = 'Y-m-d'),
                'hour' => $faker->time($format = 'H:i:s'),
                'price' => '10',
                'observation'=> $faker->sentence,
                'topic'=> $faker->sentence,
                'image' => $faker->sentence,
                'duration' => '1',
            ]);
        }
    }
}
