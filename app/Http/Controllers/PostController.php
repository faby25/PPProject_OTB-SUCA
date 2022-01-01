<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
  //se escriben metodos para administrar rutas
   public function index()
   {
      return view('posts.index',[
        'posts'=>Post::latest()->filter(request(['search','category','user']))->get(),
        // 'categories'=>Category::all()
      ]);
   }

   public function show(Post $post)
   {
     return view('posts.show',[
       'post'=>$post
     ]);
   }
   // protected function getPosts()
   // {
   //   return Post::latest()->filter()->get();
   // }
}
