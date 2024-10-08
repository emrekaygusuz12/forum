<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Thread;
use App\Models\Category;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $a = new Thread;
        $a -> title = "title";
        $a -> content = "content";
        $a -> user_id = 1;
        $a -> category_id = 1;
        $a -> save();
        

        $a = Thread::factory()
                    ->has(Category::factory()->count(15), 'categories')
                    ->create(); 
    }
}
