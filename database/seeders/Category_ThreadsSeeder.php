<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category_Threads;


class Category_ThreadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a = new Category_Threads;
        $a -> name = "Emre";
        $a -> save();
        $a -> threads()->attach(1);
        $a -> categories()->attach(2);
    }
}
