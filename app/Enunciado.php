<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enunciado extends Model
{
    //

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla preguntas
	public function pregunta() {
		return $this->hasMany('App\Pregunta');
	}

}
