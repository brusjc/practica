<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtemanombre extends Model
{
    //

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla subarea
	public function subarea() {
		return $this->belongsTo('App\Models\Subarea', 'id', 'nombre_id');
	}

	//Creamos relación con la tabla subtema
	public function subtema() {
		return $this->belongsTo('App\Models\Subtema', 'id', 'nombre_id');
	}
}
