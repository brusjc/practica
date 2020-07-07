<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
    public function usuarioActual()
    {
        // $usuario = Auth::user()->id;
        return $usuario;
    }    


//*******
//* API *
//*******

    //Inserta un registro en la tabla areas
    public function store($examen, $tema, $nombre, $total)
    {
        //Paso 1:Comprobamos las variables
        $examen=(int)$examen;
        $tema=(int)$tema;
        $nombre=(int)$nombre;
        $total=(int)$total;
        if($examen==0 || $tema==0 || $nombre==0){
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try {
            $area = new Area();
            $area->examen_id = $examen;
            $area->tema_id = $tema;
            $area->nombre_id = $nombre;
            $area->total = $total;
            $area->contestadas = 0;
            $area->nota = 0.0;
            $area->save();
            $registrofinal= Area::latest('id')->first();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el área'], 'data'=>null]);
        }        

        //Paso 3: enviamos el json
        if(!$registrofinal){
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el área'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$registrofinal]);
        } 
    }

    public function update($area)
    {
        //return $area;
        //Paso 1: Comprobamos las variables
        $modarea=(object)$area;

        $id=(int)$modarea->id;
        if ($id==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }
        $modarea = Area::find($id);

       //Paso 2: Continuamos comprobando variables
        $modarea->examen_id=(int)$area['examen_id'];
        $modarea->tema_id=(int)$area['tema_id'];
        $modarea->nombre_id=(int)$area['nombre_id'];
        $modarea->total=(int)$area['total'];
        $modarea->contestadas=(int)$area['contestadas'];
        $modarea->nota=(double)$area['nota'];

        if($modarea->examen_id==0 || $modarea->tema_id==0 || $modarea->nombre_id==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }
        //return $modarea;
        
        //Paso 3: Creamos el registro en la tabla areas
        try {
            $modarea->save();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el area'], 'data'=>$e]);
        }        

        //Paso 4: Retornamos el area
        if(!$modarea){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay registros en tabla area para esta consulta'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$modarea]);
        }
    }

    //Modifica un número de preguntas
    public function updateTotal($total, $id)
    {
        //Paso 1: Sanitizamos las variables
        $id=(int)$id;
        $total=(int)$total;
        if($id==0 || $total==0){
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 2: Obtenemos datos del resultado, de la pregunta y del subarea
        $area = Area::find($id);

        //Paso 3: ejecutamos la actualizxacion
        try{
            $area->total=$total;
            $area->save();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al actualizar los datos del area'], 'data'=>null]);
        }        

        //Paso 4: enviamos el json
        return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>['id'=>$area->id, 'id'=>$area->total]]);
    }

    public function show($area)
    {
        //Paso 1: Comprobamos las variables
        $area=(int)$area;
        if ($area==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
        
        //Paso2: ejecutamos la consulta
        try {
            $datos = Area::where('id', $area)
                ->with('Temanombre')
				->with('Subarea')
				->with('Tema')
				->with('Subtema')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al obtener los resultados'], 'data'=>null]);
        }
        
        //Paso 3: Obtenemos los porcentajes
        foreach($datos as $key1=>$dato)
        {
            if($dato['total']==0){
                $datos[$key1]['porcentaje']=0.0;
            } else {
                $datos[$key1]['porcentaje'] = intdiv(1000*$dato['contestadas'], $dato['total']);
            }  
        }

        //Paso 4: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay ningún dato con estas características'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$datos]);
        }
    }

    public function showXExamen($id)
    {
        // ** Obtiene todas las areas y subareas de un examen **
        // ** Usado en ExamenController@examenXId 

        //Paso 1: Sanitizamos la variable
        $id=(int)$id;
        if ($id==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 2: Obtenemos las areas del examen
        try{
            $datos = Area::where('examen_id', $id)
                ->with('Temanombre')
				->with('Tema')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status' =>['error' => 1, 'message' => 'exxid01: Error al obtener los datos del examen'], 'data' => null]);
        }
        //return $datos;

        //Obtenemos las contestadas por area y subareaema y subtema
        foreach($datos as $key1=>$area)
        {
            //Paso 3: obtenemos el porcentaje
            $datos[$key1]['porcentaje'] = app('App\Http\Controllers\FuncionController')->porcentaje($area['contestadas'], $area['total']);
            //return $area['id'];

            //Paso 4: Obtenemos los subtemas
            $subareas = app('App\Http\Controllers\SubareaController')->showXArea($area['id']);
            $subareas = @json_decode(json_encode($subareas), true);
            //return $subareas;
            $datos[$key1]['subarea']=$subareas['original']['data'];
            //return $datos;
        }
        //Paso 5: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay ningún dato con estas características'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$datos]);
        }
    }


//*******
//* Web *
//*******


}
