<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla preguntas
    public function pregunta() { 
		return $this->belongsTo('App\Pregunta'); 
	} 

}
