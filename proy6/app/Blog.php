<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    //use HasFactory;


    protected $fillable = [
        'user_id','titulo','foto','slug','excerpt','body','estado'
        //,'descripcion'
   ];

/* ******* Hacer relaciones ************
   public function proyect()
   {
       return $this->hasOne('App\Proyect');
   }
*/

}
