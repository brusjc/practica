<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla practica
    public function pagina() { 
		return $this->belongsTo('App\Models\Practicanombre', 'pagina_id', 'id'); 
	} 

	//Creamos relación con la tabla ejerpreg
	public function ejerpreg() {
		return $this->hasMany('App\Models\Ejerpreg');
	}
}
