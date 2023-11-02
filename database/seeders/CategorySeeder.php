<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $a = new Category;
         $a -> name = "Crime";
         $a -> description = "A crime is a deliberate act that causes physical or psychological harm";
         //$a -> thread_id = 1;
         $a -> save();
    }
}
