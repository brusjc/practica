<?php

namespace App;

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
		return $this->belongsTo('App\Subarea'); 
	}

	//Creamos relación con la tabla Area
    public function area() { 
		return $this->belongsTo('App\Area'); 
	}

	//Creamos relación con la tabla Pregunta
    public function pregunta() { 
		return $this->belongsTo('App\Pregunta'); 
	} 

	//Creamos relación con la tabla enunciado
	public function enunciado() {
        return $this->hasManyThrough('App\Enunciado', 'App\Pregunta', 'id', 'id', 'pregunta_id', 'enunciado_id');
	}

	//Creamos relación con la tabla respuesta
	public function respuesta() {
        return $this->hasManyThrough('App\Respuesta', 'App\Pregunta', 'id', 'pregunta_id', 'pregunta_id', 'id');
	}


}
