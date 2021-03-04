<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
	public $table = "examens";

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla pruebas
	public function prueba() {
		return $this->belongsTo('App\Models\Prueba');
	}

	//Creamos relación con la tabla area
	public function area() {
		return $this->hasMany('App\Models\Area');
	}

	//Creamos relación con la tabla temanombre
	public function temanombre() {
        return $this->hasManyThrough('App\Models\Temanombre', 'App\Models\Area', 'examen_id', 'id', 'id', 'nombre_id');
	}

	//Creamos relación con la tabla subarea
	public function subarea() {
        return $this->hasManyThrough('App\Models\Subarea', 'App\Models\Area');
	}
}
