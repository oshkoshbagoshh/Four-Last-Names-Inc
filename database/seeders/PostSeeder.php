<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // create some users first if they don't exist
        if (User::count() === 0) {
            User::factory(5)->create();
        }
        // then, create posts
        Post::factory()->count(10)->create();
    }
}