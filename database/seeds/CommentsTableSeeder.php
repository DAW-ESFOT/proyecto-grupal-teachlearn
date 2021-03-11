<?php

use App\Comment;
use Illuminate\Database\Seeder;
use Tymon\JWTAuth\Facades\JWTAuth;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciamos la tabla comments
        Comment::truncate();
        $faker = \Faker\Factory::create();
        // Obtenemos todos los usuarios
        $users = App\User::all();
        foreach ($users as $user) {
        // iniciamos sesión con cada uno
            JWTAuth::attempt(['email' => $user->email, 'password' => '123123']);
        // Creamos un comentario para cada artículo con este usuario
            for($i = 0; $i < 3 ; $i++) {
            Comment::create([
                'text' => $faker->paragraph,
                'user_id'=> $user->id,
            ]);
            }
        }
    }
}
