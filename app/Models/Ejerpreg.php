<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejerpreg extends Model
{

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla ejercicio
    public function ejercicio() { 
		return $this->belongsTo('App\Models\Ejercicio'); 
	} 

	//Creamos relación con la tabla practica
    public function practica() { 
		return $this->belongsTo('App\Models\Practica'); 
	} 
}
