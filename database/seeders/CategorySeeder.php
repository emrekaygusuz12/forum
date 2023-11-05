<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Thread;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $a = new Category;
         $a -> name = "Sports";
         $a -> description = "Liverpool";
         $a -> save();
         $a -> category_id = 1;
         $a -> thread_id = 1;

         $a = Category::factory()
                    ->has(Thread::factory()->count(10), 'threads')
                    ->create(); 
    }
}
