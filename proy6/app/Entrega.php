<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    //use HasFactory;

    protected $fillable = [
        'nombres','fechaEntrega','descripcion','novedades','estado'
   ];
}
