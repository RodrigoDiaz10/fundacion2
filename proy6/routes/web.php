<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EntregaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\BlogController;

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
    return view('welcome');
});


/*  Esta ruta muestra el id del usuario y solo permite id de tipo numeros 
    Este es un ejemplo     
    
    
    Route::get('/users/{id}', function($id){
        return "Mostrando Usuario; {$id}";
    })->where ('id','[0-9]+');
    */
    
    /* esta ruta dirige al controlador de laruta a la funcion llamada --INDEX-- */
    Route::get('/users', 'App\Http\Controllers\UserController@index');
    //Route::get('/users', [UserController::class, 'index']);
    
    //Route::redirect('/','login');
    Route::redirect('blog','App\Http\Controllers\BlogController@blog');
    
    /*  
    Route::get('/users/{id}', 'UserController@show') 
    ->where ('id','[0-9]+');
*/

    /* esta ruta dirige al controlador de laruta a la funcion llamada --Blog-- 
                            CRUD                                   */
    //Route::get('/blog', 'BlogController@getBlog');
    Route::get('/blog', [BlogController::class, 'getBlog']);
    
    Route::post('/blog', 'BlogController@postBlog');
    Route::put('/blog', 'BlogController@putBlog');
    Route::delete('/blog', 'BlogController@deleteBlog');


    Route::get('/persona', 'PersonaController@getPersona');
    Route::post('/persona', 'PersonaController@postPersona');
    Route::put('/persona', 'PersonaController@putPersona');
    Route::delete('/persona', 'PersonaController@deletePersona');


    Route::get('/entrega', 'EntregaController@getEntrega');
    Route::post('/entrega', 'EntregaController@postEntrega');
    Route::put('/entrega', 'EntregaController@putEntrega');
    Route::delete('/entrega', 'EntregaController@deleteEntrega');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
