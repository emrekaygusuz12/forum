<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class PostCommentsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:255',
        ]);

        $a = new Comment;
        $a ->body = $validatedData['content'];
        $a ->user_id = $request->input('user_id');
        $a ->post_id = $request->input('post_id');
        $a ->save();

        session()->flash('message', 'Comment was created.');
        return redirect()->route('posts.show', ['id' => $request->input('post_id')]);
    }
}
