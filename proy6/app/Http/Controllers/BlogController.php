<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    public function blog(){
        return view('web.post');
    }

    /* Funcion para obtener los datos del blog*/
    public function getBlog(Request $request)
    {
        $blog = Blog::get();
        return response()->json($blog, 200);
    }
    /* Funcion para enviar los datos*/ 
    public function postBlog(Request $request){
        $data = $request->json()->all();
        $blog = Blog::create([
            'user_id'=> $data['user_id'],
            'titulo'=> $data['titulo'],
            'foto'=> $data['foto'],
            'slug'=> $data['slug'],
            'excerpt'=> $data['excerpt'],
            'body'=> $data['body'],
            //'descripcion'=> $data['descripcion'],
            'estado'=> $data['estado'],
            
        ]);
        return response()->json($blog, 201);
    }
    /* Funcion para actualizar datos */
    public function putBlog(Request $request){
        $data = $request->json()->all();
        $blog = Blog::findOrFail($data['id']);
        $response = $blog->update([
            //'user_id'=> $data['user_id'],
            'titulo'=> $data['titulo'],
            'foto'=> $data['foto'],
            'slug'=> $data['slug'],
            'excerpt'=> $data['excerpt'],
            'body'=> $data['body'],
            //'descripcion'=> $data['descripcion'],
            'estado'=> $data['estado'],
        ]);
        return response()->json($blog, 201);
    }

    /* Funcion para borrar datos    TERMINAR    */
    public function deleteBlog(Request $request){
        $data = $request->json()->all();
        $blog = Blog::findOrFail($data['id']);
        $response = $blog->update([
            'estado'=> $data['estado'],
        ]);
        return response()->json($blog, 201);
    }
}
