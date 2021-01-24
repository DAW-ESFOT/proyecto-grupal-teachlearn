<?php

use App\Tutorial;
use Illuminate\Database\Seeder;
use Tymon\JWTAuth\Facades\JWTAuth;

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


        $users = App\User::all();
        $subjects=App\Subject::all();
        foreach ($users as $user) {
            // iniciamos sesión con este usuario
            JWTAuth::attempt(['email' => $user->email, 'password' => '123123']);
            $num_tutorials=3;
            $image_name=$faker->image('public/storage/tutorials',400,250,null,false);
            for ($i = 0; $i < $num_tutorials; $i++) {
                $subject=$faker->randomElement($subjects);
                Tutorial::create([
                    'date' => $faker->dateTime()->format('Y-m-d'),
                    'hour' => $faker->time($format = 'H:i:s'),
                    'price' => '10',
                    'observation' => $faker->sentence,
                    'topic' => $faker->sentence,
                    'image' => 'tutorials/'. $image_name,
                    //'image'=>$faker->sentence,
                    'duration' => '1',
                    'subject_id'=>$subject->id,
                ]);
            }
        }
    }
}
