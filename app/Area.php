<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla Examen
    public function examen(){ 
		return $this->belongsTo('App\Examen'); 
	} 

	//Creamos relación con la tabla subarea
	public function subarea(){
		return $this->hasMany('App\Subarea');
	}

	//Creamos relación con la tabla temasnombre
    public function temanombre(){ 
		return $this->belongsTo('App\Temanombre', 'nombre_id'); 
	} 

	//Creamos relación con la tabla temasnombre
    public function tema(){ 
		return $this->belongsTo('App\Tema'); 
	} 

	//Creamos relación con la tabla Subtema
	public function subtema() {
        return $this->hasManyThrough('App\Subtema', 'App\Subarea', 'area_id', 'id', 'id', 'subtema_id');
	}

}
