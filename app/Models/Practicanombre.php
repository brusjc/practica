<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Practicanombre extends Model
{

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla practicas
	public function practica() {
		return $this->hasMany('App\Models\Practica');
	}
}
