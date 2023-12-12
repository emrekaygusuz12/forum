<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ThreadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * route to main page
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * navigates to see all the users
 */
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name("users.destroy");


/**
 * navigates to see all the posts
 */
 Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

 Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
 
 Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
 
 Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

 Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name("posts.destroy");

/**
 * navigates to see all the threads
 */
Route::get('/threads', [ThreadController::class, 'index'])->name('threads.index');

Route::get('threads/create', [ThreadController::class, 'create'])->name('threads.create');

Route::post('/threads', [ThreadController::class, 'store'])->name('threads.store');

Route::get('/threads/{thread}', [ThreadController::class, 'show'])->name('threads.show');

Route::delete('/threads/{id}', [ThreadController::class, 'destroy'])->name("threads.destroy");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
