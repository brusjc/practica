<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    //Campos modificables
    protected $fillable=[
    	'aciertos',
    	'contestado'
   ];


    //**************
    //* Relaciones *
    //**************

	//Creamos relación con la tabla Subarea
    public function subarea() { 
		return $this->belongsTo('App\Models\Subarea'); 
	}

	//Creamos relación con la tabla Area
    public function area() { 
		return $this->belongsTo('App\Models\Area'); 
	}

	//Creamos relación con la tabla Pregunta
    public function pregunta() { 
		return $this->belongsTo('App\Models\Pregunta'); 
	} 

	//Creamos relación con la tabla enunciado
	public function enunciado() {
        return $this->hasManyThrough('App\Models\Enunciado', 'App\Models\Pregunta', 'id', 'id', 'pregunta_id', 'enunciado_id');
	}

	//Creamos relación con la tabla respuesta
	public function respuesta() {
        return $this->hasManyThrough('App\Models\Respuesta', 'App\Models\Pregunta', 'id', 'pregunta_id', 'pregunta_id', 'id');
	}


}
