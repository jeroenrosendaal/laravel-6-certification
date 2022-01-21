<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\User;
use App\Post;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create()->each(function($user) {
            $user->posts()->saveMany(
                factory(Post::class, 20)->create([
                    'user_id' => $user->id
                ])
            );
        });
    }
}
