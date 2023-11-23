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
        $a -> name = "Emre Kaygusuz";
        $a -> email = "kaygusuz.emreuk@gmail.com";
        $a -> password = "emre12345";
        $a -> date_of_birth = "28-06-1998";
        $a -> save();

        User::factory()->count(10)->create();
    }
}
