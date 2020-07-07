<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla area
    public function area(){ 
		return $this->belongsTo('App\Area'); 
	} 

	//Creamos relación con la tabla subtemanombre
    public function subtemanombre(){ 
		return $this->belongsTo('App\Subtemanombre', 'nombre_id', 'id'); 
	} 
	//Creamos relación con la tabla Resultado
	public function resultado(){
		return $this->hasMany('App\Resultado');
	}

	//Creamos relación con la tabla subtemanombre
    public function subtema(){ 
		return $this->belongsTo('App\Subtema'); 
	} 
}
