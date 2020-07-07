<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtemanombre extends Model
{
    //

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla subarea
	public function subarea() {
		return $this->belongsTo('App\Subarea', 'id', 'nombre_id');
	}

	//Creamos relación con la tabla subtema
	public function subtema() {
		return $this->belongsTo('App\Subtema', 'id', 'nombre_id');
	}
}
