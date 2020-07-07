<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temanombre extends Model
{
    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla preguntas
	public function examen() {
		return $this->BelongsTo('App\Examen');
	}

	//Creamos relación con la tabla temas
	public function tema() {
		return $this->HasOne('App\Tema');
	}

	//Creamos relación con la tabla area
	public function area() {
		return $this->HasOne('App\Area');
	}

}
