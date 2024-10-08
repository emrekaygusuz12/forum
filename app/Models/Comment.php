<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    


    public function post(){ //post id
        return $this->belongsTo(Post::class);

    }
    
    public function author(){ 
        return $this->belongsTo(User::class, 'user_id');
    }
}
