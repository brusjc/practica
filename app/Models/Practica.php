<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla practicanombre
    public function practicanombre() { 
		return $this->belongsTo('App\Models\Practicanombre', 'pagina_id', 'id'); 
	} 
}
