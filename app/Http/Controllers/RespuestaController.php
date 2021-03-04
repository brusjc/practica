<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuesta;

class RespuestaController extends Controller
{

    public function showXPregunta($pregunta)
    {
		//Paso 1: Comprobamos las variables
        if($pregunta!=(int)$pregunta){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
		//Paso 2: Ejecutamos las variables
        try{
            $dato = Respuesta::where('pregunta_id', $pregunta)
                ->orderBy('orden', 'asc')
                ->get();
        } catch (\Exception $e) {
            return ["status" =>['error'=>1, "message"=>"Error al consultar respuestas"], 'data'=>null];
        }

        //Paso 3: Preparamos la respuesta
		if(count($dato)==0){
            $respuesta =["status" =>['error'=>1, "message"=>"Error al obtener las respuestas"], 'data'=>null];
        } else {
            $respuesta =["status" =>['error'=>0, "message"=>""], 'data'=>$dato];
        }
        return $respuesta;
	}

    public function showXId($respuesta)
    {
		//Paso 1: Comprobamos las variables
        if($respuesta!=(int)$respuesta){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
		//return $respuesta;
		//Paso 2: Ejecutamos las variables
        try{
            $dato = Respuesta::where('id', $respuesta)
				->with('Pregunta')
                ->get();
        } catch (\Exception $e) {
            return ["status" =>['error'=>1, "message"=>"Error al consultar respuesta"], 'data'=>null];
        }
		
        //Paso 3: Preparamos la respuesta
		if(count($dato)==0){
            return response()->json(["status" =>['error'=>1, "message"=>"Error al obtener la respuesta"], 'data'=>null]);
        } else {
           return response()->json(["status" =>['error'=>0, "message"=>""], 'data'=>$dato]);
        }
	}
 
 }
