<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //

    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla Examen
    public function examen(){ 
		return $this->belongsTo('App\Models\Examen'); 
	} 

	//Creamos relación con la tabla subarea
	public function subarea(){
		return $this->hasMany('App\Models\Subarea');
	}

	//Creamos relación con la tabla temasnombre
    public function temanombre(){ 
		return $this->belongsTo('App\Models\Temanombre', 'nombre_id'); 
	} 

	//Creamos relación con la tabla temasnombre
    public function tema(){ 
		return $this->belongsTo('App\Models\Tema'); 
	} 

	//Creamos relación con la tabla Subtema
	public function subtema() {
        return $this->hasManyThrough('App\Models\Subtema', 'App\Models\Subarea', 'area_id', 'id', 'id', 'subtema_id');
	}

}
