<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        User::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.
        $password = Hash::make('123123');
        User::create([
            'name' => 'Administrador',
            'last_name' => 'General',
            'birthday' => '1999-02-14',
            'phone' => '0987654321',
            'email' => 'admin@prueba.com',
            'password' => $password,
            'role' => 'teacher',
        ]);
        $role=['student','teacher'];
        // Generar algunos usuarios
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'phone' => $faker-> phoneNumber,
                'email' => $faker->email,
                'password' => $password,
                'role' => $faker->randomElement($role),

            ]);
        }
    }
}
