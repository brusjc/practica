<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla preguntas
    public function pregunta() { 
		return $this->belongsTo('App\Models\Pregunta'); 
	} 

}
