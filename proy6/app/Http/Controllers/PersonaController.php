<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Persona;

class PersonaController extends Controller
{
    //

    /* Funcion para obtener los datos del blog*/
    public function getPersona(Request $request)
    {
        $persona = Persona ::get();
        return response()->json($persona, 200);
    }
    /* Funcion para enviar los datos*/ 
    public function postPersona(Request $request){
        $data = $request->json()->all();
        $persona = Persona::create([
            'nombres'=> $data['nombres'],
            'apellidos'=> $data['apellidos'],
            'fechaNac'=> $data['fechaNac'],
            'edad'=> $data['edad'],
            'cedula'=> $data['cedula'],
            'nombresMama'=> $data['nombresMama'],
            'nombresPapa'=> $data['nombresPapa'],
            'estudiando'=> $data['estudiando'],
            'nombreEscuela'=> $data['nombreEscuela'],
            'direccion'=> $data['direccion'],
            'imagen'=> $data['imagen'],
            'estado'=> $data['estado'],
        ]);
        return response()->json($persona, 201);
    }
    /* Funcion para actualizar datos */
    public function putPersona(Request $request){
        $data = $request->json()->all();
        $persona = Persona::findOrFail($data['id']);
        $response = $persona->update([
            'nombres'=> $data['nombres'],
            'apellidos'=> $data['apellidos'],
            'fechaNac'=> $data['fechaNac'],
            'edad'=> $data['edad'],
            'cedula'=> $data['cedula'],
            'nombresMama'=> $data['nombresMama'],
            'nombresPapa'=> $data['nombresPapa'],
            'estudiando'=> $data['estudiando'],
            'nombreEscuela'=> $data['nombreEscuela'],
            'direccion'=> $data['direccion'],
            'imagen'=> $data['imagen'],
            'estado'=> $data['estado'],
        ]);
        return response()->json($persona, 201);
    }

    /* Funcion para borrar datos    TERMINAR    */
    public function deletePersona(Request $request){
        $data = $request->json()->all();
        $persona = Persona::findOrFail($data['id']);
        $response = $persona->update([
            'estado'=> $data['estado'],
        ]);
        return response()->json($persona, 201);
    }

}
