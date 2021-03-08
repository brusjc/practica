<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ejerpreg;

class EjerpregController extends Controller
{
	protected $fillable = ['ejercicio_id', 'practica_id', 'orden', 'contestada', 'acierto'];



//*******
//* API *
//*******

    public function store($ejerpreg)
    {
        //Paso 1:Comprobamos las variables
        $ejerpreg['ejercicio_id']=(int)$ejerpreg['ejercicio_id'];
        $ejerpreg['practica_id']=(int)$ejerpreg['practica_id'];
        $ejerpreg['orden']=(int)$ejerpreg['orden'];
        if($ejerpreg['ejercicio_id']==0 || $ejerpreg['practica_id']==0 || $ejerpreg['orden']==0){
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try {
            $newejerpreg = new Ejerpreg();
            $newejerpreg->ejercicio_id = $ejerpreg['ejercicio_id'];
            $newejerpreg->practica_id = $ejerpreg['practica_id'];
            $newejerpreg->orden = $ejerpreg['orden'];
            $newejerpreg->contestada = 0;
            $newejerpreg->acierto = 0;
            $newejerpreg->save();
            $registrofinal= Ejerpreg::latest('id')->first();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el ejerpreg'], 'data'=>$e]);
        }        

        //Paso 3: enviamos el json
        if(!$registrofinal){
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el ejerpreg'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$registrofinal]);
        } 
    }

    public function update($pregunta, $id)
    {
    	//return $pregunta;
        //Paso 1: Comprobamos las variables
        $id=(int)$id;
        $pregunta['id'] = (int)$pregunta['id'];
        $pregunta['ejercicio_id'] = (int)$pregunta['ejercicio_id'];
        $pregunta['practica_id'] = (int)$pregunta['practica_id'];
        $pregunta['orden'] = (int)$pregunta['orden'];
        if ($id==0 || $pregunta['id']==0 || $pregunta['ejercicio_id']==0 || $pregunta['practica_id']==0 || $pregunta['orden']==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }
        if ($id!=$pregunta['id']  || $pregunta['contestada']!=(int)$pregunta['contestada'] || $pregunta['acierto']!=(int)$pregunta['acierto']){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }

        //Paso 3: Creamos el registro en la tabla resultados
        try {
	        $modpregunta = Ejerpreg::find($id);
	        $modpregunta->ejercicio_id = $pregunta['ejercicio_id'];
	        $modpregunta->practica_id = $pregunta['practica_id'];
	        $modpregunta->orden = $pregunta['orden'];
	        $modpregunta->contestada = $pregunta['contestada'];
	        $modpregunta->acierto = $pregunta['acierto'];
            $modpregunta->save();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el registro'], 'data'=>null]);
        }        

        //Paso 4: Retornamos el resultado
        if(!$modpregunta){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay registros en tabla'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>1]);
        }
    }

    public function showXId($id)
    {
        //Paso 1: Sanetizamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'EjPXId:Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 2: Obtenemos las preguntas sin contestar
        try {
            $dato = Ejerpreg::where('id', $id)
                ->with('Ejercicio')
                ->with('Practica')
                ->orderBy('orden', 'asc')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'EjPXId: Error al obtener los datos'], 'data'=>null]);
        }

        //Paso 3: devolvemos la respuesta
        if(count($dato)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'EjPXId: No hay ningún dato con estas características'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$dato]);
        }
    }

    public function showSinResponder($ejercicio)
    {
        //Paso 1: Sanetizamos las variables
        $ejercicio=(int)$ejercicio;
        if ($ejercicio==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 2: Obtenemos las preguntas sin contestar
        try {
            $dato = Ejerpreg::where('ejercicio_id', $ejercicio)
                ->with('Ejercicio')
                ->with('Practica')
                ->where('contestada', 0)
                ->orderBy('orden', 'asc')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'ResSinResp: Error al obtener los resultados'], 'data'=>null]);
        }

        //Paso 3: devolvemos la respuesta
        if(count($dato)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'ResSinResp: No hay ningún dato con estas características'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$dato]);
        }
    }




}
