<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla temasnombre
    public function temanombre() { 
		return $this->BelongsTo('App\Temanombre'); 
	}

	//Creamos relación con la tabla grados
    public function grado() { 
		return $this->belongsTo('App\Grado'); 
	} 

	//Creamos relación con la tabla prueba
    public function prueba() { 
		return $this->belongsTo('App\Prueba'); 
	} 

	//Creamos relación con la tabla subtemas
	public function subtema() {
		return $this->hasMany('App\Subtema');
	}

	//Creamos relación con la tabla subtemanombre
	public function subtemanombre(){
        return $this->hasManyThrough('App\Subtemanombre', 'App\Subtema', 'tema_id', 'id', 'id', 'nombre_id');
	}

	//Creamos relación con la tabla pregunta
	public function pregunta(){
        return $this->hasManyThrough('App\pregunta', 'App\Subtema');
	}

	//Creamos relación con la tabla enunciado
	public function enunciado(){
        return $this->hasManyThrough('App\Enunciado', 'App\Pregunta', 'enunciado_id', 'id');
	}

	//Creamos relación con la tabla respuestas
	public function respuesta(){
        return $this->hasManyThrough('App\Respuesta', 'App\Pregunta', 'id', 'pregunta_id');
	}
	

}
