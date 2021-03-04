<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtema extends Model
{
    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla temas
    public function tema() { 
		return $this->belongsTo('App\Models\Tema'); 
	} 

	//Creamos relación con la tabla preguntas
	public function pregunta() {
		return $this->hasMany('App\Models\Pregunta');
	}

	//Creamos relación con la tabla enunciados (a través de tabla preguntas)
    public function enunciado()
    {
        return $this->belongsTo('App\Models\Enunciado', 'App\Models\Pregunta');
    }

	//Creamos relación con la tabla respuestas (a través de tabla preguntas)
    public function respuesta()
    {
        return $this->hasManyThrough('App\Models\Respuesta', 'App\Models\Pregunta');
    }

    //Creamos relación con la tabla subtemasnombre
    public function subtemanombre() { 
        return $this->hasOne('App\Models\Subtemanombre', 'id', 'nombre_id'); 
    }

}
