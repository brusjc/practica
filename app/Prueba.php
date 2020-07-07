<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    //

    //**************
    //* Relaciones *
    //**************


	//Creamos relación con la tabla niveles
	public function grado() {
		return $this->hasOne('App\Grados');
	}

	//Creamos relación con la tabla temas
	public function tema() {
		return $this->hasMany('App\Tema');
	}

	//Creamos relación con la tabla temanombre
	public function temanombre() {
        return $this->hasManyThrough('App\Temanombre', 'App\tema', 'prueba_id', 'id', 'id', 'temanombre_id');
	}

	//Creamos relación con la tabla temanombre
	public function subtema() {
        return $this->hasManyThrough('App\Subtema', 'App\tema', 'prueba_id', 'tema_id', 'id', 'id');
	}

	//Creamos relación con la tabla preguntas
	public function pregunta() {
		return $this->hasMany('App\Pregunta');
	}

	//Creamos relación con la tabla examenes
	public function examen() {
		return $this->hasMany('App\Examen', 'prueba_id');
	}

}
