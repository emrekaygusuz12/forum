<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Post;
        $a -> content = "This is the first post.";
        $a -> user_id = 1;
        $a -> save();

        $a = Post::factory()
                    ->has(User::factory()->count(10), 'user')
                    ->create(); 

        Post::factory()->count(10)->create();
    }
}
