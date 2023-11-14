<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new User;
        $a -> name = "James Hutton";
        $a -> email = "james.smith@gmail.com";
        $a -> password = "smithy90james";
        $a -> save();

        User::factory()->count(30)->create();
    }
}
