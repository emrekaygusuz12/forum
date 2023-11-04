<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function category_threads(){
        return $this->belongsToMany(Category_Thread::class);
    }

    public function threads(){
        return $this->belongsToMany(Thread::class);
    }
}
