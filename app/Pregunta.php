<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla subtemas
    public function subtema() { 
		return $this->belongsTo('App\Subtema'); 
	} 

	//Creamos relación con la tabla enunciados
    public function enunciado() { 
		return $this->belongsTo('App\Enunciado'); 
	} 

	//Creamos relación con la tabla respuestas
	public function respuesta() {
		return $this->hasMany('App\Respuesta');
	}

}
