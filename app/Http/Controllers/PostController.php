<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Thread;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $thread_id)
    {
        $users = User::orderBy('name', 'asc')->get();
        $thread = Thread::findOrFail($thread_id);
        return view('posts.create', ['users' => $users, 'thread' => $thread]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:255',
            'user_id' => 'required|integer',  
            'thread_id' => 'required|integer'
        ]);

        $a = new Post;
        $a ->content = $validatedData['content'];
        $a ->user_id = $validatedData['user_id'];
        $a->thread_id = $validatedData['thread_id'];
        $a ->save();

        session()->flash('message', 'Post was created.');
        return redirect()->route('threads.show', ['id' => $validatedData['thread_id']]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $thread = Thread::findOrFail($post->thread_id);
        $user = User::findOrFail($post->user_id);
        return view('posts.show', ['thread'=>$post->thread, 'post' => $post, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('message', 'Post was deleted.');
    }
}
