<?php

use Illuminate\Support\Facades\Route;
// import post model
use App\Models\Post;

use App\Http\Controllers\PostController;

use App\Models\Category;
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
    return view('home', [
        "title" => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Putu",
        "email" => "admin@email.com",
        "image" => "dummy.jpg",
        "title" => "About",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
// param post->slug
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

// load model Category kedalam variable $category berdasarkan parameter category pada url dan slug pada model 
Route::get('/categories/{category:slug}', function (Category $category){
    // dd($category);
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});