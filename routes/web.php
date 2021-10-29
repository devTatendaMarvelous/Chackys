<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::all();
    return view('welcome')
    ->with('posts', $posts); 
   
});

Route::get('/about', [PagesController::class, 'about']);
Route::get('/service', [PagesController::class, 'service']);
Route::get('/portfolio', [PagesController::class, 'portfolio']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('pages/{id}/show', [PagesController::class, 'show']);


Route::get('/create', [PostsController::class, 'create'])->name('create');
Route::post('/store', [PostsController::class, 'store'])->name('store');
Route::get('posts/{id}/show', [PostsController::class, 'show']);
Route::get('posts/{id}/edit', [PostsController::class, 'edit']);
Route::get('posts/{id}/delete', [PostsController::class, 'destroy']);
Route::post('/update', [PostsController::class, 'update'])->name('update');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   $posts= Post::all();    
    return view('dashboard')->with('posts',$posts); 
})->name('dashboard');
