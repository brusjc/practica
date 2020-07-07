<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemanombreController extends Controller
{

    public function show($request)
    {
        //Comprobamos las variables
        if ((int)$request==0) {
	        $respuesta =["status" =>['error' => 1, "message" => "Datos incorrectos"], 'data' => null];
            return response()->json($respuesta);
        }

        $temanombre = Temanombre::find((int)$request);

        //Comprobamos si hay respuesta
        if (count($temanombre)==0) {
	        $respuesta =["status" =>['error' => 1, "message" => "Datos incorrectos"], 'data' => null];
            return response()->json($respuesta);
        } else {
	        $respuesta =["status" =>['error' => 0, "message" => ""], 'data' => $temanombre];
            return response()->json($respuesta);
        }
    }

    public function temanombrexidapi($id)
    {
        try {
            $dato = Temanombre::where('id', $id)->get();
        } catch (\Exception $e) {
            return ['status'=>['error'=>1, 'message'=>"Error al obtener el nombre del tema"], "data"=>null];
        }        

        if(count($dato)==0){
            $respuesta = ['status'=>['error'=>2, 'message'=>"No hay ningún nombre para ese tema"], "data"=>null];
        } else {
            $respuesta = ['status'=>['error'=>0, 'message'=>""], "data"=>$dato];
        } 
        return $respuesta;
    }

}
