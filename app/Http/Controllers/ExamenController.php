<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

use Auth;
use App\Examen;

class ExamenController extends Controller
{
    public function usuarioActual()
    {
        $usuario = Auth::user()->id;
        return $usuario;
    }

    protected function validator(array $examen)
    {
        return Validator::make($examen, [
            'id' => ['required', 'integer'],
            'prueba_id' => ['required', 'integer'],
            'user_id' => ['required', 'integer'],
            'total' => ['required', 'integer'],
            'contestadas' => ['required', 'integer'],
            'nota' => ['required', 'integer'],
        ]);
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

        //Paso2: ejecutamos la consulta
        try {
            $nuevo = new Examen();
            $nuevo->prueba_id = $id;
            $nuevo->user_id = $usu;
            $nuevo->total = 0;
            $nuevo->contestadas = 0;
            $nuevo->nota = 0.00;
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
            $resPrueba = @json_decode(json_encode($resPrueba), true);
            //return $resPrueba;


            //PASO 2: Creamos el registro en la tabla examenes
            $resExamen=$this->store($resPrueba['original']['data'][0]['id']);
            $resExamen = @json_decode(json_encode($resExamen), true);
            $examen = $resExamen['original']['data']; 
            //return $examen;
            //return $examen['original']['data']['id'];

            //*********
            //* Areas *
            //*********
            //PASO 3: Buscamos los temas
            $resTemas = app('App\Http\Controllers\TemaController')->temasxpruebaapi($resPrueba['original']['data'][0]['id']);
            $resTemas = @json_decode(json_encode($resTemas), true);
            //return $resTemas;


            //PASO 4: Creamos los registros de la tabla areas
            foreach($resTemas['original']['data'] as $key1=>$tema)
            {
                $totalArea=0;
                $resArea = app('App\Http\Controllers\AreaController')->store($resExamen['original']['data']['id'], $tema['id'], $tema['temanombre_id'], 0);
                $resArea = @json_decode(json_encode($resArea), true);
                $area = $resArea['original']['data'];
                //return $resArea;
                //return $resArea['original']['data']['id'];

                //************
                //* Subareas *
                //************
                //PASO 5: Buscamos los subtemas
                $resSubtemas = app('App\Http\Controllers\SubtemaController')->showXArea($tema['id']);
                $resSubtemas = @json_decode(json_encode($resSubtemas), true);
                //return $resSubtemas;
                //return $resSubtemas['original']['data'];

                //PASO 6: Creamos los registros en la tabla subareas
                foreach($resSubtemas['original']['data'] as $key2=>$subtema)
                {
                    //return $resSubtemas;
                    $ordensubarea=$ordensubarea+1;

                    $resSubarea = app('App\Http\Controllers\SubareaController')->store
                    (
                        $resArea['original']['data']['id'], 
                        $subtema['id'], 
                        $subtema['subtemanombre']['id'],
                        0,
                        0,
                        $ordensubarea,
                        0
                    );
                    $resSubarea = @json_decode(json_encode($resSubarea), true);
                    $subarea=$resSubarea['original']['data'];
                    //return $resSubarea;
                    //return $resSubarea['original']['data']['subtema_id'];


                    //**************
                    //* Resultados *
                    //**************
                    //PASO 7: Buscamos las preguntas del subarea
                    $resPreguntas = app('App\Http\Controllers\PreguntaController')->showXSubtema($resSubarea['original']['data']['subtema_id']);
                    $resPreguntas = @json_decode(json_encode($resPreguntas), true);
                    //return $resPreguntas;

                    //Paso 8: Creamos el registro en la tabla resultados
                    $totalSubarea=0;
                    foreach ($resPreguntas['original']['data'] as $key3=>$pregunta)
                    {
                        $totalSubarea++;
                        $resResultado = app('App\Http\Controllers\ResultadoController')->store($resSubarea['original']['data']['id'], $pregunta['id']);
                        $resResultado = @json_decode(json_encode($resResultado), true);
                        //return $resResultado;
                    }

                    //Paso 9: Actualizamos el total de preguntas del subarea
                    $subarea['total']=$totalSubarea;
                    $subarea = app('App\Http\Controllers\SubareaController')->update($subarea);
                    $subarea = @json_decode(json_encode($subarea), true);
                    //return $subarea;

                    //Paso 10: Actualizamos las preguntas del area
                    $totalArea=$totalArea + $totalSubarea;
                    //return $totalSubarea;
                }

                  
                //Paso 10: Actualizamos el total de preguntas del área
                $area['total']=$totalArea;
                $area = app('App\Http\Controllers\AreaController')->update($area);
                $area = @json_decode(json_encode($area), true);
                //return $area;

                $totalExamen=$totalExamen + $totalArea;
            }

            //Paso 11: Actualizamos el total de preguntas del examen
            $examen['total']=$totalExamen;
            //return $examen['total'];
            $examen = app('App\Http\Controllers\ExamenController')->update($examen);
            $examen = @json_decode(json_encode($examen), true);
            //return $examen;
            //return $examen['original']['data']['id'];

            return redirect('/exameninicio/'.$examen['original']['data']['id']);
            //return redirect()->action('ExamenController@examenXId', ['id' => $examen['original']['data']['id']]);
            //return"Estamos dentro";


            //return view('paginas.examenes.exameninicio', compact('examen'));
        } catch(\Exception $e){
            return back();
        } 
    }

    //Datos de un examen por id
    public function examenXId($id)
    {
        //return "Estamos aquí en examenXId=".$id;

        //Paso 1: Sanitizamos la variable
        $id=(int)$id;
        if ($id==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

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
        
        if(!isset(Auth::user()->id))
        {
            $message="notUser";
        }

        //Paso 4: redirigimo a la vista
        return view('paginas.examenes.exameninicio', compact('id', 'examen', 'message'));
    }








//**********
//* Viejos *
//**********

    public function es_crear($codigo)
    {
        //return DB::transaction(function() use($codigo)        {
            try { 
        
               //Generamos variables
                $totalExamen=0;
                $ordensubarea=0;
                $usu = $this->usuarioActual();
                
                //PASO 1: Buscamos el id del código de la prueba
                $resPrueba = app('App\Http\Controllers\PruebaController')->showXCodigo($codigo);
                $resPrueba = @json_decode(json_encode($resPrueba), true);
                //return $resPrueba;

                //PASO 2: Creamos el registro en la tabla examenes
                $resExamen=$this->store($resPrueba['original']['data'][0]['id']);
                $resExamen = @json_decode(json_encode($resExamen), true);
                $examen = $resExamen['original']['data']; 
                //return $examen;
                //return $examen['original']['data']['id'];

                //*********
                //* Areas *
                //*********
                //PASO 3: Buscamos los temas
                $resTemas = app('App\Http\Controllers\TemaController')->temasxpruebaapi($resPrueba['original']['data'][0]['id']);
                $resTemas = @json_decode(json_encode($resTemas), true);
                //return $resTemas;


                //PASO 4: Creamos los registros de la tabla areas
                foreach($resTemas['original']['data'] as $key1=>$tema)
                {
                    $totalArea=0;
                    $resArea = app('App\Http\Controllers\AreaController')->store($resExamen['original']['data']['id'], $tema['id'], $tema['temanombre_id'], 0);
                    $resArea = @json_decode(json_encode($resArea), true);
                    $area = $resArea['original']['data'];
                    //return $resArea;
                    //return $resArea['original']['data']['id'];

                    //************
                    //* Subareas *
                    //************
                    //PASO 5: Buscamos los subtemas
                    $resSubtemas = app('App\Http\Controllers\SubtemaController')->showXArea($tema['id']);
                    $resSubtemas = @json_decode(json_encode($resSubtemas), true);
                    //return $resSubtemas;
                    //return $resSubtemas['original']['data'];

                    //PASO 6: Creamos los registros en la tabla subareas
                    foreach($resSubtemas['original']['data'] as $key2=>$subtema)
                    {
                        //return $resSubtemas;
                        $ordensubarea=$ordensubarea+1;

                        $resSubarea = app('App\Http\Controllers\SubareaController')->store
                        (
                            $resArea['original']['data']['id'], 
                            $subtema['id'], 
                            $subtema['subtemanombre']['id'],
                            0,
                            0,
                            $ordensubarea,
                            0
                        );
                        $resSubarea = @json_decode(json_encode($resSubarea), true);
                        $subarea=$resSubarea['original']['data'];
                        //return $resSubarea;
                        //return $resSubarea['original']['data']['subtema_id'];


                        //**************
                        //* Resultados *
                        //**************
                        //PASO 7: Buscamos las preguntas del subarea
                        $resPreguntas = app('App\Http\Controllers\PreguntaController')->showXSubtema($resSubarea['original']['data']['subtema_id']);
                        $resPreguntas = @json_decode(json_encode($resPreguntas), true);
                        //return $resPreguntas;

                        //Paso 8: Creamos el registro en la tabla resultados
                        $totalSubarea=0;
                        foreach ($resPreguntas['original']['data'] as $key3=>$pregunta)
                        {
                            $totalSubarea++;
                            $resResultado = app('App\Http\Controllers\ResultadoController')->store($resSubarea['original']['data']['id'], $pregunta['id']);
                            $resResultado = @json_decode(json_encode($resResultado), true);
                            //return $resResultado;
                        }

                        //Paso 9: Actualizamos el total de preguntas del subarea
                        $subarea['total']=$totalSubarea;
                        $subarea = app('App\Http\Controllers\SubareaController')->update($subarea);
                        $subarea = @json_decode(json_encode($subarea), true);
                        //return $subarea;

                        //Paso 10: Actualizamos las preguntas del area
                        $totalArea=$totalArea + $totalSubarea;
                        //return $totalSubarea;
                    }

                      
                    //Paso 10: Actualizamos el total de preguntas del área
                    $area['total']=$totalArea;
                    $area = app('App\Http\Controllers\AreaController')->update($area);
                    $area = @json_decode(json_encode($area), true);
                    //return $area;

                    $totalExamen=$totalExamen + $totalArea;
                }

                //Paso 11: Actualizamos el total de preguntas del examen
                $examen['total']=$totalExamen;
                //return $examen['total'];
                $examen = app('App\Http\Controllers\ExamenController')->update($examen);
                $examen = @json_decode(json_encode($examen), true);
                //return $examen;

                return redirect()->action('ExamenController@es_examenXId', ['id'=>$examen['original']['data']['id']]);
                //return view('paginas.examenes.exameninicio', compact('examen'));

            } catch(\Exception $e){
                return back();
            } 
        //});
    }

    //Datos de un examen por id
    public function es_examenXId($id)
    {
        //Paso 1: Sanitizamos la variable
        $id=(int)$id;
        if ($id==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 2: Obtenemos las contestadas por area y subarea
        $examen = $this->showXId($id);
        $examen = @json_decode(json_encode($examen), true);
        $examen = $examen['original']['data'];
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
                $examen['area'][$key1]['subarea'][$key2]['puntos'] = $pregunta['original']['data'][0]['error'];
                //return $pregunta;
            }
        }
        //return $examen;
        
        //url de vuelta
        session(['BC4' => '/es/exameninicio/'.$id]);
        session(['BC4texto' => 'Areas']);
        
        //Paso 4: redirigimo a la vista
        return view('paginas.es.examenes.exameninicio', compact('examen'));
    }

    //Modifica un Registro
    public function updateViejo(Request $request, $id)
    {
        //return $request;
        //Paso 1: Sanitizamos las variables
        $id=(int)$id;
        $request->pregunta_id=(int)$request->pregunta_id;
        $request->subarea_id=(int)$request->subarea_id;
        if($id==0 || $request->pregunta_id==0 || $request->subarea_id==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
        $request->mirespuesta=(int)$request->mirespuesta;
        if($request->mirespuesta!=(int)$request->mirespuesta){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 2: Obtenemos datos del resultado, pregunta, subarea, area y examen
        $resultado=$this->showXId($id);
        $resultado = @json_decode(json_encode($resultado), true);
        $resultado=$resultado['original']['data'];
        //return $resultado;

        //Obtenemos datos de la pregunta
        $pregunta = app('App\Http\Controllers\PreguntaController')->showXId($request->pregunta_id);
        $pregunta = @json_decode(json_encode($pregunta), true);
        $pregunta=$pregunta['original']['data'];
        return $pregunta;

        //Obtenemos datos del subarea
        $subarea = app('App\Http\Controllers\SubareaController')->show($request->subarea_id);
        $subarea = @json_decode(json_encode($subarea), true);
        $subarea=$subarea['original']['data'];
        //return $subarea;

        //Obtenemos datos del subarea
        $area = app('App\Http\Controllers\AreaController')->show($subarea[0]['area_id']);
        $area = @json_decode(json_encode($area), true);
        $area=$area['original']['data'];
        //return $area;

        //Obtenemos datos del subarea
        $examen = app('App\Http\Controllers\ExamenController')->show($subarea[0]['area_id']);
        $examen = @json_decode(json_encode($examen), true);
        $examen=$examen['original']['data'];
        return $examen;

        //Paso 3: Analizamos los resultados
        $resultado->acierto=0;
        if((int)$pregunta[0]['acierto']==(int)$request->mirespuesta+1){
            $resultado->acierto=true;
            $resultado->puntos=1;
        } else {
            if(count($pregunta[0]['respuesta'])==2){
                $resultado->puntos=-0.6;
            } else if(count($pregunta[0]['respuesta'])==3){
                $resultado->puntos=-0.3;
            }
        }

        //Paso4: Actualizamos la tabla Resultados
        //Obtenemos datos del subarea
        $area = app('App\Http\Controllers\ResultadoController')->show($subarea[0]['area_id']);
        $area = @json_decode(json_encode($area), true);
        $area=$area['original']['data'];
        //return $area;

        $resultado->contestada=1;
        $resultado->save();
        return $resultado;

        //Paso 5: Actualizamos la tabla Subareas
        $subarea->contestadas=$subarea->contestadas+1;
        $subarea->nota=$subarea->nota+$resultado->puntos;
        $subarea->save();

        //Paso 6: Actualizamos la tabla Areas
        $area->contestadas=$area->contestadas+1;
        $area->save();

        //Paso 7: Actualizamos la tabla Examen
        $examen->contestadas=$examen->contestadas+1;
        $examen->save();

        //Paso 8: Redireccionamos a la página examen
        return redirect()->back();
    }


}
