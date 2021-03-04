<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    
    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla temas
	public function tema() {
		return $this->hasMany('App\Models\Tema');
	}

	//Creamos relación con la tabla preubas
	public function prueba() {
		return $this->belongsTo('App\Models\Prueba');
	}

}
