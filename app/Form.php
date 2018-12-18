<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['nombre' , 'ciudad', 'barrio', 'telefono', 'email', 'opcion', 'usos', 'informacion'];


    // public function usos(){ //usos_id o dejarlo como segundo argumento si el nombre es diferente
        
    //     return $this->belongsTo(Usos::class);
    // }
}
