<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $threads = Thread::all();
        return view('threads.index', ['threads' => $threads]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $users = User::orderBy('name','asc')->get();
        $categories = Category::orderBy('name','asc')->get();
        return view('threads.create', [
            'users' => $users, 
            'categories' => $categories, 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'user_id' => 'required|integer', 
            'category_id' => 'required|integer', 
        ]);

        $a = new Thread;
        $a ->title = $validatedData['title'];
        $a ->content = $validatedData['content'];
        $a ->user_id = $validatedData['user_id'];
        $a->category_id = $validatedData['category_id'];
        $a -> save();
        $a ->categories()->attach(Category::findOrFail($validatedData['category_id']));
        

        session()->flash('message', 'Thread was created.');
        return redirect()->route('threads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $thread = Thread::findOrFail($id);

        $categories = $thread->categories;
        $posts = $thread->posts;
        

        return view('threads.show', compact('categories', 'thread', 'posts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $thread = Thread::findOrFail($id);
        $thread->delete();

        return redirect()->route('threads.index')->with('message', 'Thread was deleted.');
    }
}


