<?php

use App\Http\Controllers\ComentarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);
Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/{user:username}',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/{user:username}/posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::post('/{user:username}/posts/{post}',[ComentarioController::class,'store'])->name('comentarios.store');

Route::post('/imagenes',[ImagenController::class,'store'])->name('imagenes.store');
Route::post('/images',[ImageController::class,'store'])->name('images.store');

Route::delete('/post/{post}',[PostController::class,'destroy'])->name('posts.destroy');
Route::post('/posts/{post}/likes',[LikeController::class,'store'])->name('posts.like.store');
Route::delete('/posts/{post}/likes',[LikeController::class,'destroy'])->name('posts.like.destroy');
