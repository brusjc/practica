<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

use Auth;
use App\Models\Examen;
use App;

class ExamenController extends Controller
{
    public function usuarioActual()
    {
        $usuario = Auth::user()->id;
        return $usuario;
    }


//*******
//* API *
//*******

    public function store($id)
    {
        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
        if(isset(Auth::user()->id))
        {
            $usu = Auth::user()->id;
        } else {
            $usu=1;
        }
        //return $usu;

        //Paso2: ejecutamos la consulta
        $nuevo = new Examen();
        $nuevo->prueba_id = $id;
        $nuevo->user_id = $usu;
        $nuevo->total = 0;
        $nuevo->contestadas = 0;
        $nuevo->nota = 0.00;
        //return $nuevo;
        try {
            $nuevo->save();
            $registrofinal= Examen::latest('id')->first();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el examen'], 'data'=>$e]);
        }

        //Paso 3: enviamos el json
        if(!$registrofinal){
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el examen'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$registrofinal]);
        } 
    }

    public function update($examen)
    {
        //return $area;
        //Paso 1: Comprobamos las variables
        $modexamen=(object)$examen;

        $id=(int)$modexamen->id;
        if ($id==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }
        $modexamen = Examen::find($id);

       //Paso 2: Continuamos comprobando variables
        $modexamen->prueba_id=(int)$examen['prueba_id'];
        $modexamen->user_id=(int)$examen['user_id'];
        $modexamen->total=(int)$examen['total'];
        $modexamen->contestadas=(int)$examen['contestadas'];
        $modexamen->nota=(int)$examen['nota'];

        if($modexamen->prueba_id==0 || $modexamen->user_id==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }
        //return $modexamen;
        
        //Paso 3: Creamos el registro en la tabla areas
        try {
            $modexamen->save();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el area'], 'data'=>$e]);
        }        

        //Paso 4: Retornamos el area
        if(!$modexamen){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay registros en tabla area para esta consulta'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$modexamen]);
        }
    }

    public function showXId($id)
    {
        if(isset(Auth::user()->id))
        {
            $usu = Auth::user()->id;
        } else {
            $usu=1;
        }

        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        if ($id==0){
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try{
            $datos = Examen::where('id', $id)
                ->where('user_id', $usu)
                ->with('Prueba')
                ->get();
        } catch (\Exception $e){
            return response()->json(['status' =>['error' => 1, 'message' => 'exxid01: Error al obtener el examen'], 'data' => null]);
        }
        //return $datos;

        //Paso 3: Obtenemos los porcentajes
        foreach($datos as $key1=>$dato)
        {
            $datos[$key1]['porcentaje'] = app('App\Http\Controllers\FuncionController')->porcentaje($dato['contestadas'], $dato['total']);
        }
        //return $datos;

        //Paso 4: Obtenemos areas y subareas del examen
        $resareas = app('App\Http\Controllers\AreaController')->showXExamen($id);
        $resareas = @json_decode(json_encode($resareas), true);
        //return $resareas;
        $datos[0]['area'] = $resareas['original']['data'];
        //return $datos[0];

        //Paso 4: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'exxid02: Error al obtener el examen'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$datos[0]]);
        } 
    }
    
    //Examenes realizados de una determinada prueba
    public function showXPrueba($prueba)
    {
        //Paso 1:Comprobamos las variables
        $prueba=(int)$prueba;
        if ($prueba==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try {
           $pruebas = Examen::where('prueba_id', $prueba)
                ->with('Prueba')
                ->orderBy('created_at', 'desc')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al obtener los exámenes'], 'data'=>null]);
        }        

        //Paso 3: enviamos el json
        if(count($pruebas)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'No has realizado aún ningun examen de esta comvocatoria'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$pruebas]);
        } 
    }

    public function showXCodigo($codigo)
    {
        //Paso 1:Comprobamos las variables
		if ($codigo!=trim(strip_tags($codigo)))
		{ 
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try{
            $pruebas = Examen::whereHas('prueba', function (Builder $q) use($codigo)
                {
                    $q->where('codigo', $codigo);
                })
                ->where('user_id', $this->usuarioActual())
                ->with('Prueba')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al obtener los exámenes'], 'data'=>$e]);
        }

        //Paso 3: enviamos el json
        if(count($pruebas)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'No has realizado aún ningun examen de esta comvocatoria'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$pruebas]);
        }
    }


//*******
//* Web *
//*******

    public function crear($codigo)
    {
        //return 'Estamos aqui';
        try
        { 
           //Generamos variables
            $totalExamen=0;
            $ordensubarea=0;
            if(isset(Auth::user()->id))
            {
                $usu = Auth::user()->id;
            } else {
                $usu=1;
            }
            
            //PASO 1: Buscamos el id del código de la prueba
            $resPrueba = app('App\Http\Controllers\PruebaController')->showXCodigo($codigo);
            $resPrueba = @json_decode(json_encode($resPrueba), true)['original']['data'][0];
            //return $resPrueba;


            //PASO 2: Creamos el registro en la tabla examenes
            $resExamen=$this->store($resPrueba['id']);
            $resExamen = @json_decode(json_encode($resExamen), true)['original']['data'];
            //return $resExamen;

            //*********
            //* Areas *
            //*********
            //PASO 3: Buscamos los temas
            $resTemas = app('App\Http\Controllers\TemaController')->temasxpruebaapi($resPrueba['id']);
            $resTemas = @json_decode(json_encode($resTemas), true)['original']['data'];
            //return $resTemas;


            //PASO 4: Creamos los registros de la tabla areas
            foreach($resTemas as $key1=>$tema)
            {
                $totalArea=0;
                $resArea = app('App\Http\Controllers\AreaController')->store($resExamen['id'], $tema['id'], $tema['temanombre_id'], 0);
                //return $resArea;
                $resArea = @json_decode(json_encode($resArea), true)['original']['data'];
                //return $resArea;

                //************
                //* Subareas *
                //************
                //PASO 5: Buscamos los subtemas
                $resSubtemas = app('App\Http\Controllers\SubtemaController')->showXArea($tema['id']);
                $resSubtemas = @json_decode(json_encode($resSubtemas), true)['original']['data'];
                //return $resSubtemas;

                //PASO 6: Creamos los registros en la tabla subareas
                foreach($resSubtemas as $key2=>$subtema)
                {
                    //return $resSubtemas;
                    $ordensubarea=$ordensubarea+1;

                    $resSubarea = app('App\Http\Controllers\SubareaController')->store
                    (
                        $resArea['id'], 
                        $subtema['id'], 
                        $subtema['subtemanombre']['id'],
                        0,
                        0,
                        $ordensubarea,
                        0
                    );
                    $resSubarea = @json_decode(json_encode($resSubarea), true)['original']['data'];
                    //return $resSubarea;
                    

                    //**************
                    //* Resultados *
                    //**************
                    //PASO 7: Buscamos las preguntas del subarea
                    $resPreguntas = app('App\Http\Controllers\PreguntaController')->showXSubtema($resSubarea['subtema_id']);
                    $resPreguntas = @json_decode(json_encode($resPreguntas), true)['original']['data'];
                    //return $resPreguntas;

                    //Paso 8: Creamos el registro en la tabla resultados
                    $totalSubarea=0;
                    foreach ($resPreguntas as $key3=>$pregunta)
                    {
                        $totalSubarea++;
                        $resResultado = app('App\Http\Controllers\ResultadoController')->store($resSubarea['id'], $pregunta['id']);
                        $resResultado = @json_decode(json_encode($resResultado), true);
                        //return $resResultado;
                    }

                    //Paso 9: Actualizamos el total de preguntas del subarea
                    $resSubarea['total']=$totalSubarea;
                    //return $resSubarea;
                    $resSubarea = app('App\Http\Controllers\SubareaController')->update($resSubarea);
                    $resSubarea = @json_decode(json_encode($resSubarea), true);
                    //return $resSubarea;

                    //Paso 10: Actualizamos las preguntas del area
                    $totalArea=$totalArea + $totalSubarea;
                    //return $totalSubarea;
                }

                  
                //Paso 10: Actualizamos el total de preguntas del área
                $resArea['total']=$totalArea;
                //return $resArea;
                $resArea = app('App\Http\Controllers\AreaController')->update($resArea);
                $resArea = @json_decode(json_encode($resArea), true);
                //return $resArea;

                $totalExamen=$totalExamen + $totalArea;
            }

            //Paso 11: Actualizamos el total de preguntas del $resExamen
            $resExamen['total']=$totalExamen;
            //return $resExamen['total'];
            $resExamen = app('App\Http\Controllers\ExamenController')->update($resExamen);
            $resExamen = @json_decode(json_encode($resExamen), true)['original']['data'];
            //return $resExamen;

            //Paso 12: Redirigimos a eamebinicio
            return redirect('/exameninicio/'.$resExamen['id']);

        } catch(\Exception $e){
            return back();
        } 
    }

    //Datos de un examen por id
    public function examenXId($id)
    {
        //Paso 1: Sanitizamos la variable
        $id=(int)$id;
        if ($id==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        $urlblade='/exameninicio/'.$id;
        $miurl=$urlblade;

        //Paso 2: Obtenemos las contestadas por area y subarea
        $examen = $this->showXId($id);
        $examen = @json_decode(json_encode($examen), true);
        $examen=$examen['original']['data'];
        //return $subareas;
        //return $examen;
        
        //Paso 3: Calculamos la calificacion
        foreach($examen['area'] as $key1=>$area)
        {
            foreach($area['subarea'] as $key2=>$subarea)
            {
                //return $subarea['subtema']['id'];
                $pregunta = app('App\Http\Controllers\PreguntaController')->showXSubtema($subarea['subtema']['id']);
                $pregunta = @json_decode(json_encode($pregunta), true);
                $examen['area'][$key1]['subarea'][$key2]['puntos']=$pregunta['original']['data'][0]['error'];
                //return $pregunta;
            }
        }
        //return $pregunta;
        
        //url de vuelta
        session(['BC4' => '/exameninicio/'.$id]);
        session(['BC4texto' => 'Areas']);
        //return $examen;
        
        $message=null;
        if(!isset(Auth::user()->id))
        {
            $message="notUser";
        }

        //Paso 4: redirigimo a la vista
        return view('paginas.examenes.exameninicio', compact('id', 'examen', 'message', 'urlblade'));
    }








}
