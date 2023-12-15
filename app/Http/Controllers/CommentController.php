<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\User;
use App\Models\post;
use App\Models\Category;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = comment::paginate(20);
        return view('comments.index', ['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $post_id)
    {
        $users = User::orderBy('name', 'asc')->get();
        $post = post::findOrFail($post_id);
        return view('comments.create', ['users' => $users, 'post' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {

        request()->validate([
            'body' => 'required'
        ]);
        
        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comment = comment::findOrFail($id);
        $post = post::findOrFail($comment->post_id);
        $user = User::findOrFail($comment->user_id);
        return view('comments.show', ['post'=>$comment->post, 'comment' => $comment, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment = comment::findOrFail($id);
        $users = User::orderBy('name', 'asc')->get();
        return view('comments.edit', ['comment' => $comment, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:255',
        ]);
    
        $comment = comment::findOrFail($id);
        $comment->content = $validatedData['content'];
        $comment->save();
    
        session()->flash('message', 'comment was updated.');
        return redirect()->route('comments.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = comment::findOrFail($id);
        $comment->delete();

        return redirect()->route('comments.index')->with('message', 'comment was deleted.');
    }
}
