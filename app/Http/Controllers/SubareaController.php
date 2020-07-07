<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subarea;

class SubareaController extends Controller
{

    public function usuarioActual()
    {
        $usuario = Auth::user()->id;
        return $usuario;
    }    


//*******
//* API *
//*******

    public function create()
    {
        $mirest='tiposGet';
        $response = $this->cliente->request('get', $mirest);
        $tipos = json_decode( $response->getBody()->getContents(), true );
        //return $tipos;
    }

    public function store($area_id, $subtema_id, $nombre_id, $total, $contestadas, $orden, $nota)
    {
        //Paso 1:Comprobamos las variables
        $area_id=(int)$area_id;
        $subtema_id=(int)$subtema_id;
        $nombre_id=(int)$nombre_id;
        $total=(int)$total;
        $contestadas=(int)$contestadas;
        $orden=(int)$orden;
        $nota=(int)$nota;
        if($area_id==0 || $subtema_id==0 || $nombre_id==0 || $orden==0){
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try {
            $subarea = new Subarea();
            $subarea->area_id = $area_id;
            $subarea->subtema_id = $subtema_id;
            $subarea->nombre_id = $nombre_id;
            $subarea->total = $total;
            $subarea->contestadas = $contestadas;
            $subarea->orden = $orden;
            $subarea->nota = $nota;
            $subarea->save();
            $registrofinal= Subarea::latest('id')->first();
        } catch (\Exception $e) {
            return response()->json(["status"=>['error'=>1, "message"=>"Error al crear el subárea"], 'data'=>null]);
        }        

        //Paso 3: enviamos el json
        if(!$registrofinal){
            return response()->json(["status"=>['error'=>2, "message"=>"No se ha creado el subárea"], 'data'=>null]);
        } else {
            return response()->json(["status"=>['error'=>0, "message"=>""], 'data'=>$registrofinal]);
        } 
    }

    //Modifica un número de preguntas
    public function updateTotal($total, $id)
    {
        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        $total=(int)$total;
        if ($id==0 || $total==0) {
            return response()->json(["status"=>['error'=>1, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso 2: obtenemos datos del id
        $subarea = Subarea::find($id);

        //Paso 3: ejecutamos la actualizxacion
        try{
            //$subarea->id = $id;
            $subarea->total = $total;
            $subarea->save();
        } catch (\Exception $e) {
            error_log($e);
            return response()->json(['error' => 'Could not save file or queue not found.'], 500);
            

        }        

        //Paso 4: enviamos el json
        return response()->json(['status'=>['error'=>0, 'message'=>""], "data"=>$subarea]);
    }

    public function updateContestada($subarea)
    {
        //Paso 1:Comprobamos las variables
        return response()->json(['data'=>$subarea->id]);

        $subarea['id'] = (int)$subarea['id'];
        $subarea['area_id'] = (int)$subarea['area_id'];
        $subarea['subtema_id'] = (int)$subarea['subtema_id'];
        $subarea['nota'] = (int)$subarea['nota'];
        if ($subarea['id']==0 || $subarea['area_id']==0 || $subarea['subtema_id']==0){
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        $modsubarea = Subarea::find($subarea['id']);

        //Paso 3: ejecutamos la actualizxacion
        try{
            $modsubarea->contestadas=$subarea['contestadas'];
            $modsubarea->nota=$subarea['nota'];
            $modsubarea->save();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>"Error al actualizar los datos del Subarea"], "data"=>null]);
        }        

        //Paso 4: enviamos el json
        return response()->json(['status'=>['error'=>0, 'message'=>""], "data"=>$modsubarea]);
    }

    public function update($subarea)
    {
        //return $subarea;
        //Paso 1: Comprobamos las variables
        $modsubarea=(object)$subarea;

        $id=(int)$modsubarea->id;
        if ($id==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }
        //return $modsubarea;
        $modsubarea = subarea::find($id);

       //Paso 2: Continuamos comprobando variables
        $modsubarea->area_id=(int)$subarea['area_id'];
        $modsubarea->subtema_id=(int)$subarea['subtema_id'];
        $modsubarea->nombre_id=(int)$subarea['nombre_id'];
        $modsubarea->total=(int)$subarea['total'];
        $modsubarea->contestadas=(int)$subarea['contestadas'];
        $modsubarea->orden=(int)$subarea['orden'];
        $modsubarea->nota=(double)$subarea['nota'];

        if ($modsubarea->area_id==0 || $modsubarea->subtema_id==0 || $modsubarea->nombre_id==0 || $modsubarea->orden==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }

        //Paso 3: Creamos el registro en la tabla subareas
        try {
            $modsubarea->save();
            $registrofinal = 1;
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el subarea'], 'data'=>$e]);
        }        

        //Paso 4: Retornamos el subarea
        if(!$registrofinal){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay registros en tabla subarea para esta consulta'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$modsubarea]);
        }
    }

    public function show($subarea)
    {
        //Comprobamos las variables
        $subarea=(int)$subarea;
        if ($subarea==0) {
            return response()->json(["status"=>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }
        
        //Paso2: ejecutamos la consulta
        try {
            $datos = Subarea::where('id', $subarea)
                ->with('Subtemanombre')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>"Error al obtener los datos del subarea"], "data"=>null]);
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
            return response()->json(['status'=>['error'=>2, 'message'=>"No hay ningún dato con estas características"], "data"=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>""], "data"=>$datos]);
        } 
    }

    public function showXArea($area)
    {
        //Paso 1:Comprobamos las variables
        $area=(int)$area;
        if ($area==0) {
            return response()->json(["status"=>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }
        
        //Paso2: ejecutamos la consulta
        try {
            $datos = Subarea::where('area_id', $area)
                ->with('Subtemanombre')
				->with('Subtema')
                ->orderBy('orden', 'asc')
                ->get();
        } catch (\Exception $e) {
            return ['status'=>['error'=>1, 'message'=>"Error al obtener las subáreas"], 'data'=>null];
        }        

        //Paso 3: Obtenemos los porcentajes
        foreach($datos as $key1=>$dato)
        {
            $datos[$key1]['porcentaje'] = app('App\Http\Controllers\FuncionController')->porcentaje($dato['contestadas'], $dato['total']);
        }

        //Paso 4: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>"No hay ningún subárea para esta área"], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>""], 'data'=>$datos]);
        } 
    }


}
