<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabajosDestacados extends Model
{
    Protected $table = 'destacados';

    protected $fillable = ['titulo' , 'descripcion', 'imagen'];
}
