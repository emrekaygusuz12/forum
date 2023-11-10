<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Thread;
use Database\Factories\CategoryThreadsFactory;

class CategoryThreadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Category;
         $a -> name = "Crime";
         $a -> description = "True Crime";
         $a -> save();
         $a -> category_id = 1;
         $a -> thread_id = 1;
         $a -> threads()->attach(1);
         $a -> threads()->attach(2);

         $a = new Thread;
        $a -> title = "asdqweqwe";
        $a -> content = "dqwdfwqfqwed";
        $a -> user_id = 1;
        $a -> category_id = 1;
        $a -> post_id = 1;
        $a -> save();
        $a -> categories()->attach(1);
        $a -> categories()->attach(2);
    }
}
