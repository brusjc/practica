<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grado;

class GradoController extends Controller
{
    public function show()
    {
        //Paso 1: ejecutamos la consulta
        try{
            $grados = Grado::all();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>"Error al obtener los grados"], "data"=>$e]);
        }        

        //Paso 2: enviamos el json
        if(count($grados)==0){
            return response()->json(["status"=>['error'=>1, "message"=>"Error al obtener los grados"], 'data'=>null]);
        } else {
            return response()->json(["status"=>['error'=>0, "message"=>""], 'data'=>$grados]);
        }
    }

}
