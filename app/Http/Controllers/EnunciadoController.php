<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Enunciado;

class EnunciadoController extends Controller
{

    public function show($id)
    {
        //Enumera las preguntas de un subtema
        $valor=(int)$id;
        //return $valor;
        //Comprobamos las variables
        if ($valor==0) {
            $respuesta = ["status" =>['error'=>1, "message"=>"Error en datos iniciales"], 'data'=>null];
            return response()->json($respuesta);
        }
        try{
            $datos = Enunciado::where('id', $id)->get();
        } catch (\Exception $e) {
            return ["status" =>['error'=>1, "message"=>"Error al consultar el enunciado"], 'data'=>null];
        }
        //return count($datos);
        if(count($datos)==0){
            $respuesta =["status" =>['error'=>1, "message"=>"No hay enunciado para esta pregunta"], 'data'=>null];
        } else {
            $respuesta =["status" =>['error'=>0, "message"=>""], 'data'=>$datos];
        }
        return $respuesta;
   }


}
