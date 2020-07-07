<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla practicanombre
    public function practicanombre() { 
		return $this->belongsTo('App\Practicanombre', 'pagina_id', 'id'); 
	} 
}
