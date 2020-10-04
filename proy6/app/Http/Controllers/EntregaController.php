<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class EntregaController extends Controller
{
    //

       /* Funcion para obtener los datos del blog*/
       public function getEntrega(Request $request)
       {
           $entrega = Entrega::get();
           return response()->json($blog, 200);
       }
       /* Funcion para enviar los datos*/ 
       public function postEntrega(Request $request){
           $data = $request->json()->all();
           $entrega = Entrega::create([
               'titulo'=> $data['titulo'],
               'foto'=> $data['foto'],
               'descripcion'=> $data['descripcion'],
               'estado'=> $data['estado'],
           ]);
           return response()->json($entrega, 201);
       }
       /* Funcion para actualizar datos */
       public function putEntrega(Request $request){
           $data = $request->json()->all();
           $entrega = Entrega::findOrFail($data['id']);
           $response = $entrega->update([
               'titulo'=> $data['titulo'],
               'foto'=> $data['foto'],
               'descripcion'=> $data['descripcion'],
               'estado'=> $data['estado'],
           ]);
           return response()->json($entrega, 201);
       }
   
       /* Funcion para borrar datos    TERMINAR    */
       public function deleteEntrega(Request $request){
           $data = $request->json()->all();
           $entrega = Entrega::findOrFail($data['id']);
           $response = $entrega->update([
               'estado'=> $data['estado'],
           ]);
           return response()->json($entrega, 201);
       }

}
