<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //regresara una vista llamada posts donde traera todos los posts
    //hacemos la consulta en el return de la funcion
    public function posts(){
        return view('posts', [
            //usamos with y no load porque hacemos la consulta en el return
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }

    //aqui retorna una vista llamada post
    //en el metodo la consulta se hace en la funcion
    public function post(Post $post){
        return view('post', [
            'post' => $post
        ]);
    }
}
