<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('home')->group(function (){
    Route::get('/', [PostsController::class,'getAllPost'])->name('home');
    Route::get('/new-post', [PostsController::class,'showPostPage'])->name('home.showPostPage');
    Route::post('/new-post', [PostsController::class,'addPost'])->name('home.addPost');
});

Route::get('login', [\App\Http\Controllers\LoginController::class,'showPageLogin'])->name('login.page');
Route::get('register', [\App\Http\Controllers\RegisterController::class,'showPageRegister'])->name('register.page');
Route::post('register', [\App\Http\Controllers\RegisterController::class,'registerAccount'])->name('register.post');
