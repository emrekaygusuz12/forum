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
         $a -> description = "description";
         $a -> save();
        //  $a -> threads()->attach(1);
        //  $a -> categories()->attach(1);
         
    }
}
