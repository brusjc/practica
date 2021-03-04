<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    //

    //**************
    //* Relaciones *
    //**************


	//Creamos relación con la tabla niveles
	public function grado() {
		return $this->hasOne('App\Models\Grados');
	}

	//Creamos relación con la tabla temas
	public function tema() {
		return $this->hasMany('App\Models\Tema');
	}

	//Creamos relación con la tabla temanombre
	public function temanombre() {
        return $this->hasManyThrough('App\Models\Temanombre', 'App\Models\tema', 'prueba_id', 'id', 'id', 'temanombre_id');
	}

	//Creamos relación con la tabla temanombre
	public function subtema() {
        return $this->hasManyThrough('App\Models\Subtema', 'App\Models\tema', 'prueba_id', 'tema_id', 'id', 'id');
	}

	//Creamos relación con la tabla preguntas
	public function pregunta() {
		return $this->hasMany('App\Models\Pregunta');
	}

	//Creamos relación con la tabla examenes
	public function examen() {
		return $this->hasMany('App\Models\Examen', 'prueba_id');
	}

}
