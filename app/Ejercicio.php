<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla practica
    public function pagina() { 
		return $this->belongsTo('App\Practicanombre', 'pagina_id', 'id'); 
	} 

	//Creamos relación con la tabla ejerpreg
	public function ejerpreg() {
		return $this->hasMany('App\Ejerpreg');
	}
}
