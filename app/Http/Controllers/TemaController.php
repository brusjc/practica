<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tema;
use Auth;

class TemaController extends Controller
{
    public function usuarioActual()
    {
        $usuario = Auth::user()->id;
        return $usuario;
    }    


//*******
//* API *
//*******

    public function temasxpruebaapi($prueba)
    {
        //Paso 1:Comprobamos las variables
        $prueba=(int)$prueba;
        if ($prueba==0) {
            return response()->json(["status" =>['error'=>1, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try {
            $temas = Tema::where('prueba_id', $prueba)
                ->with('Temanombre')
                ->orderBy('orden', 'asc')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>"Error al obtener los temas"], "data"=>$e]);
        }        

        //Paso 3: enviamos el json
       if(count($temas)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>"No hay registros"], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>""], 'data'=>$temas]);
        }
    }

    public function show($prueba)
    {
        //Paso 1:Comprobamos las variables
        $prueba=(int)$prueba;
        if ($prueba==0) {
            return response()->json(["status" =>['error'=>1, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try {
            $temas = Tema::where('prueba_id', $prueba)
                ->with('Temanombre')
                ->orderBy('orden', 'asc')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>"Error al obtener los temas"], "data"=>$e]);
        }        

        //Paso 3: enviamos el json
       if(count($temas)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>"No hay registros"], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>""], 'data'=>$temas]);
        }
    }

    public function update($tema)
    {
        //Paso 1: Comprobamos las variables
        $tema['id']=(int)$tema['id'];
        $tema['prueba_id']=(int)$tema['prueba_id'];
        $tema['temanombre_id']=(int)$tema['temanombre_id'];
        $tema['orden']=(int)$tema['orden'];

        if ($tema['id']==0 || $tema['prueba_id']==0 || $tema['temanombre_id']==0 || $tema['orden']==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }

        if ($tema['verificado']!=null && $tema['verificado']!=(int)$tema['verificado']){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }

        if ($tema['porcentaje']!=(double)$tema['porcentaje']){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }
        //return $tema;

       //Paso 2: Creamos el registro en la tabla areas
        $modtema = Tema::find($tema['id']);
        //return $modtema;
        try {
            $modtema->prueba_id=$tema['prueba_id'];
            $modtema->temanombre_id=$tema['temanombre_id'];
            $modtema->verificado=$tema['verificado'];
            $modtema->orden=$tema['orden'];
            $modtema->porcentaje=$tema['porcentaje'];
            $modtema->save();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el tema'], 'data'=>$e]);
        }

        //Paso 3: Retornamos el tema
        if(!$modtema){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay registros en tabla tema para esta consulta'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$modtema]);
        }
    }

    public function temasmasterapi($prueba)
    {
        //Prepara las variables
        $valor=(int)$prueba;
        if ($valor==0) {
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        try {
            $temas = Tema::where('prueba_id', $valor)
                ->with('Prueba')
                ->with('Temanombre')
                ->with('Subtema')
                ->with('Subtemanombre')
                ->orderBy('orden')
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status"=>['error'=>1, "message"=>"TC_TMA01: Error al obtener las pruebas"], 'data'=>$e]);
        }
        
        if(count($temas)==0){
            return response()->json(["status"=>['error'=>2, "message"=>"TC_TMA02: No hay aún ningún examen"], 'data'=>null]);
        } else {
            return response()->json(["status"=>['error'=>0, "message"=>""], 'data'=>$temas]);
        }
     }

    public function showXPrueba($id)
    {
        // ** Obtiene todas las areas y subareas de un examen **
        // ** Usado en ExamenController@examenXId 

        //Paso 1: Sanitizamos la variable
        $id=(int)$id;
        if ($id==0) {
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso 2: Obtenemos las areas del examen
        try{
            $datos = Tema::where('prueba_id', $id)
                ->with('Temanombre')
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status" =>['error' => 1, "message" => "exxid01: Error al obtener los datos del examen"], "data" => null]);
        }
        //return $datos;

        //Paso 3: Obtenemos las contestadas por area y subarea
        foreach($datos as $key1=>$area)
        {
            if($area['contestadas']==0)
            {
                $datos[$key1]['porcentaje']=0;
            } else {           
                $datos[$key1]['porcentaje']=intdiv(1000*$area['contestadas'],$area['total'])/10;
            }
            //Paso 4: Obtenemos los subareas
            $subareas = app('App\Http\Controllers\SubareaController')->showXArea($area['id']);
            $subareas = @json_decode(json_encode($subareas), true);
            $datos[$key1]['subarea']=$subareas['original']['data'];
            //return $subareas;
            //return $datos;
        }
        //Paso 5: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay ningún dato con estas características'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$datos]);
        }
    }

    public function showXId($id)
    {
        // ** Obtiene los datos de un tema **
        // ** Usado en PreguntaController@verificador2


        //Paso 1: Sanitizamos la variable
        $id=(int)$id;
        if ($id==0) {
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso 2: Obtenemos las areas del examen
        try{
            $datos = Tema::where('id', $id)
                ->with('Temanombre')
                ->with('Subtema')
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status" =>['error' => 1, "message" => "exxid01: Error al obtener los datos del tema"], "data" => null]);
        }
        //return $datos;

        //Paso 3: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay ningún dato con estas características'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$datos]);
        }
    }


//**********
//* Master *
//**********

    public function temasmaster($prueba)
    {
        session(['urlback' => '/pruebasmaster']);

        //Paso 1:Comprobamos las variables
        $prueba=(int)$prueba;
        if($prueba==0){
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $miprueba = $this->temasmasterapi($prueba);
        $miprueba = @json_decode(json_encode($miprueba), true);
        //return $miprueba;

        foreach($miprueba['original']['data'] as $numtema => $tema)
        {
            foreach($tema['subtema'] as $numsubtema => $subtema)
            {
                //return $subtema;
                $preguntas = app('App\Http\Controllers\PreguntaController')->showXSubarea($tema['id']);
                $preguntas = @json_decode(json_encode($preguntas), true);
                //return $preguntas;

                if(count($preguntas)==0){
                    return ["status" =>['error'=>1, "message"=>"Error al obtener las preguntas"], 'data'=>null];
                } else {
                    $miprueba['original']['data'][$numtema]['subtema'][$numsubtema]['preguntas']=$preguntas['original']['data'];
                    //return $preguntas;
                    //return $miprueba;
                }
            }
        }

        //url de vuelta
        session(['BC2' => '/temasmaster/'.$prueba]);
        session(['BC2texto' => 'Temas master']);

        //return $miprueba;
        return view('paginas.master.MasterTemas', compact('miprueba'));
    }

}
