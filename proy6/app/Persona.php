<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //use HasFactory;

    protected $fillable = [
        'apellidos','fechaNac','edad','cedula','nombresMama','nombresPapa','estudiando','nombreEscuela','direccion','imagen','estado',
   ];


}
