<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use User;
use App\Ejercicio;


class EjercicioController extends Controller
{
	protected $fillable = ['pagina_id', 'user_id', 'contestadas', 'nota'];


    public function usuarioActual()
    {
        $usuario = Auth::user()->id;
        return $usuario;
    }


//*******
//* API *
//*******

    public function store($ejercicio)
    {
        //Paso 1:Comprobamos si el usuario está registrado
        if(\Auth::check())
        {
            $ejercicio['user']=$this->usuarioActual();
        } else {
            $ejercicio['user']=1;
        }            

        //Paso 2:Comprobamos las variables
        $ejercicio['pagina_id']=(int)$ejercicio['pagina_id'];
        $ejercicio['contestadas']=0;
        $ejercicio['nota']=0.00;
        if($ejercicio['pagina_id']==0 || $ejercicio['user']==0){
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso3: ejecutamos la consulta
        try {
            $newejercicio = new Ejercicio();
            $newejercicio->pagina_id = $ejercicio['pagina_id'];
            $newejercicio->user_id = $ejercicio['user'];
            $newejercicio->contestadas = 0;
            $newejercicio->nota = 0.0;
            $newejercicio->save();
            $registrofinal= Ejercicio::latest('id')->first();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al obtener datos'], 'data'=>null]);
        }        

        //Paso 4: enviamos el json
        if(!$registrofinal){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay datos'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$registrofinal]);
        }
    }

    public function update($ejercicio, $id)
    {
    	//return $ejercicio;
        //Paso 1: Comprobamos las variables
        $id=(int)$id;
        $ejercicio['id'] = (int)$ejercicio['id'];
        $ejercicio['pagina_id'] = (int)$ejercicio['pagina_id'];
        $ejercicio['user_id'] = (int)$ejercicio['user_id'];
        if ($id==0 || $ejercicio['id']==0 || $ejercicio['pagina_id']==0 || $ejercicio['user_id']==0 || $ejercicio['contestadas']==0 || $ejercicio['nota']==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }
        if ($id!=$ejercicio['id'] || $ejercicio['contestadas']!=(int)$ejercicio['contestadas'] || $ejercicio['nota']!=(double)$ejercicio['nota']){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }

        //Paso 3: Creamos el registro en la tabla resultados
        try {
	        $modejercicio = Ejercicio::find($id);
	        $modejercicio->pagina_id = $ejercicio['pagina_id'];
	        $modejercicio->user_id = $ejercicio['user_id'];
	        $modejercicio->contestadas = $ejercicio['contestadas'];
	        $modejercicio->nota = $ejercicio['nota'];
            $modejercicio->save();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el registro'], 'data'=>$e]);
        }        

        //Paso 4: Retornamos el resultado
        if(!$modejercicio['id']){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay registros para esta consulta'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$modejercicio]);
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
            $dato = Ejercicio::where('id', $id)
                ->with('Pagina')
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

    public function showXIdXUser($id)
    {
        //Paso 1: Sanetizamos las variables
        $id=(int)$id;
        if($id==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'EjPXId:Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 2: Obtenemos las preguntas sin contestar
        try {
            $dato = Ejercicio::where('pagina_id', $id)
                ->where('user_id', $this->usuarioActual())
                //->where('user_id', Auth::user()->id)
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


//*******
//* WEB *
//*******








}
