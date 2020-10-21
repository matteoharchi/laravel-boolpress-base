<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $user = User::all();
        for ($i=0; $i < 50 ; $i++) { 
            $postNew = new Post();
            $postNew->title=$faker->text(50);
            $postNew->body=$faker->text(500);
            $postNew->user_id = $user->random()->id; //sceglie un utente random come autore del post
            $postNew->save();
        }
    }
}
