<?php

use App\Http\Controllers\AdminPostController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TconsumoController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
}) ->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::get('/',[PostController::class,'index'])->name('home');
Route::get('posts/{post:slug}',[PostController::class,'show']);

Route::get('categories/{category:slug}',function(Category $category){
  return view('posts.index',[
    'posts'=>$category->posts
  ]);
});
Route::get('users/{user:username}',function(User $user){
  //dd($user);
  return view('posts.index',[
    'posts'=>$user->posts
  ]);
});

// Route::resource('Tconsumos',[TconsumoController::class,'create']);
Route::resource('Tconsumos','App\Http\Controllers\TconsumoController');
