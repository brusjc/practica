<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temanombre extends Model
{
    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla preguntas
	public function examen() {
		return $this->BelongsTo('App\Models\Examen');
	}

	//Creamos relación con la tabla temas
	public function tema() {
		return $this->HasOne('App\Models\Tema');
	}

	//Creamos relación con la tabla area
	public function area() {
		return $this->HasOne('App\Models\Area');
	}

}
