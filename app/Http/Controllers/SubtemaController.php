<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Subtema;

class SubtemaController extends Controller
{

    public function usuarioActual()
    {
        $usuario = Auth::user()->id;
        return $usuario;
    }    


//*******
//* API *
//*******
 
    public function showXArea($tema)
    {
        //Comprobamos las variables
        $tema=(int)$tema;
        if($tema==0) {
            return response()->json(["status" =>['error'=>1, "message"=>"subt01: Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try{
            $subtema = Subtema::where('tema_id', (int)$tema)
            ->with('Subtemanombre')
            ->get();
        } catch (\Exception $e) {
            return ["status" =>['error' => 1, "message" => "subt02: Error al consultar subtemas"], 'data' => null];
        }

        //Paso 3: enviamos el json
        if (count($subtema)==0) {
            return response()->json(["status" =>['error'=>1, "message"=>"Datos incorrectos"], 'data'=>null]);
        } else {
            return response()->json(["status" =>['error'=>0, "message"=>""], 'data'=>$subtema]);
        }
    }
 
    public function showXId($id)
    {
        //Comprobamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(["status" =>['error'=>1, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try {
            $dato = Subtema::where('id', $id)
                ->with('Subtemanombre')
                ->with('Tema')
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status"=>['error'=>1, "message"=>"Error al obtener el subarea"], 'data'=>null]);
        }        

        //Paso 3: enviamos el json
        if (count($dato)==0) {
            return response()->json(["status" =>['error'=>1, "message"=>"Datos incorrectos"], 'data'=>null]);
       } else {
            return response()->json(["status" =>['error'=>0, "message"=>""], 'data'=>$dato]);
        }
    }

    public function store($area, $subtema, $nombre, $orden)
    {
        //Comprobamos las variables
        $area=(int)$area;
        $subtema=(int)$subtema;
        $nombre=(int)$nombre;
        $orden=(int)$orden;
        if($area==0 || $subtema==0 || $nombre==0 || $orden==0) {
            return response()->json(["status" =>['error'=>1, "message"=>"subt01: Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try{
                $nuevo = new Subarea();
                $nuevo->area_id = $area;
                $nuevo->subtema_id = $subtema;
                $nuevo->nombre_id = $nombre;
                $nuevo->total = 0;
                $nuevo->contestadas = 0;
                $nuevo->orden = $orden;
                $nuevo->nota = 0.0;
                $nuevo->save();
                $registrofinal= Subarea::latest('id')->first();
        } catch (\Exception $e) {
            return ["status" =>['error' => 1, "message" => "subt02: Error al crear subtema"], 'data' => null];
        }

        //Paso 3: enviamos el json
        if(!$registrofinal){
            return response()->json(["status" =>['error'=>1, "message"=>"No se ha creado el subtema"], 'data'=>null]);
        } else {
            return response()->json(["status" =>['error'=>0, "message"=>""], 'data'=>$registrofinal]);
        }
    }

    public function update($subtema)
    {
        //Paso 1: Comprobamos las variables
        $subtema['id']=(int)$subtema['id'];
        $subtema['tema_id']=(int)$subtema['tema_id'];
        $subtema['nombre_id']=(int)$subtema['nombre_id'];
        $subtema['orden']=(int)$subtema['orden'];

        if ($subtema['id']==0 || $subtema['tema_id']==0 || $subtema['nombre_id']==0 || $subtema['orden']==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }

        if ($subtema['verificado']!=null && $subtema['verificado']!=(int)$subtema['verificado']){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }

        if ($subtema['porcentaje']!=(double)$subtema['porcentaje']){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }
        //return $subtema;

       //Paso 2: Creamos el registro en la tabla areas
        $modsubtema = subtema::find($subtema['id']);
        try {
            $modsubtema->tema_id=(int)$subtema['tema_id'];
            $modsubtema->nombre_id=(int)$subtema['nombre_id'];
            $modsubtema->orden=(int)$subtema['orden'];
            $modsubtema->porcentaje=(double)$subtema['porcentaje'];
            $modsubtema->verificado=(int)$subtema['verificado'];
            $modsubtema->save();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al actualizar el subtema'], 'data'=>$e]);
        }        
        //return $subtema;

        //Paso 3: Retornamos el subtema
        if(!$modsubtema){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay registros en tabla subtema para esta consulta'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$modsubtema]);
        }
    }


//********************
//* Resto de métodos *
//********************

    public function show($request)
    {
		$mirest='subtemas/'.$request;
		$client = new Client([
			// Base URI is used with relative requests
			'base_uri' => 'http://www.api.practicavalenciano.es/api/',
			// You can set any number of default request options.
			'timeout'  => 2.0,
		]);
		$response  =  $client -> request ( 'GET' ,  $mirest );
		$post = json_decode($response->getBody()->getContents(), true); 
		dd($post);
    }


    
}
