<?php

use Illuminate\Support\Facades\Route;
// import post model
use App\Models\Post;

use App\Http\Controllers\PostController;

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

Route::get('/posts',[PostController::class, 'index']);

Route::get('posts/{slug}',[PostController::class, 'show']);