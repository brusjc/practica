<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Auth;
use App\Resultado;

class ResultadoController extends Controller
{


//*******
//* API *
//*******

    public function store($subarea, $pregunta)
    {
        //Comprobamos las variables
        $misubarea=(int)$subarea;
        $mipregunta=(int)$pregunta;
        if ($misubarea==0 || $mipregunta==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Creamos el registro en la tabla resultados
        try {
            $nuevo = new Resultado();
            $nuevo->subarea_id = $subarea;
            $nuevo->pregunta_id = $pregunta;
            $nuevo->acierto = false;
            $nuevo->puntos = 0.0;
            $nuevo->contestada = false;
            $nuevo->save();
            $registrofinal = Resultado::latest('id')->first();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el resultado'], 'data'=>$e]);
        }        

        if(!$registrofinal){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay registros en tabla resultados para esta consulta'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$registrofinal]);
        }
    }

    public function update($resultado, $id)
    {
        //Paso 1: Comprobamos las variables
        $modresultado=(object)$resultado;

        $id=(int)$id;
        if ($id==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
        $modresultado = Resultado::find($id);

       //Paso 2: Continuamos comprobando variables
        $modresultado->id=(int)$resultado['id'];
        $modresultado->subarea_id=(int)$resultado['subarea_id'];
        $modresultado->pregunta_id=(int)$resultado['pregunta_id'];
        $modresultado->acierto=(int)$resultado['acierto'];
        $modresultado->puntos=(int)$resultado['puntos'];
        $modresultado->contestada=(int)$resultado['contestada'];
		//return $modresultado;

        if ($id==0 || $modresultado->subarea_id==0 || $modresultado->pregunta_id==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
        if ($id!=$modresultado->id){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 3: Creamos el registro en la tabla resultados
        try {
            $modresultado->save();
            $registrofinal = 1;
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el resultado'], 'data'=>$e]);
        }        

        //Paso 4: Retornamos el resultado
        if(!$registrofinal){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay registros en tabla resultados para esta consulta'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$modresultado]);
        }
    }

    public function updateContestada($resultado)
    {
        //Paso 1:Comprobamos las variables
        $resultado['id']=(int)$resultado['id'];
        $resultado['subarea_id']=(int)$resultado['subarea_id'];
        $resultado['pregunta_id']=(int)$resultado['pregunta_id'];
        $resultado['acierto']=(int)$resultado['acierto'];
        $resultado['puntos']=(int)$resultado['puntos'];
        $resultado['contestada']=(int)$resultado['contestada'];
        if ($resultado['id']==0 || $resultado['subarea_id']==0 || $resultado['pregunta_id']==0){
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        $modresultado = Resultado::find($resultado['id']);

        //Paso 3: ejecutamos la actualizxacion
        try{
            $modresultado->acierto=$resultado['acierto'];
            $modresultado->puntos=$resultado['puntos'];
            $modresultado->contestada=$resultado['contestada'];
            $modresultado->save();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>"Error al actualizar los datos del Examen"], "data"=>null]);
        }        

        //Paso 4: enviamos el json
        return response()->json(['status'=>['error'=>0, 'message'=>""], "data"=>$modresultado]);
    }

    public function showXId($id)
    {
        //Paso 1: Sanitizamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try {
            $dato = Resultado::where('id', $id)->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al obtener los resultados'], 'data'=>null]);
        }        

        //Paso 4: enviamos el json
        return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$dato]);
    }

    public function showXSubarea($subarea)
    {
        //Prepara las variables
        $valor=(int)$subarea;
        if ($valor==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //return response()->json(['status' =>['error'=>9, 'message'=>'Todo ok'], 'data'=>$dato]);

        try {
            $dato = Resultado::where('subarea_id',  $valor)
                ->orderBy('created_at', 'desc')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al obtener los resultados'], 'data'=>null]);
        }        

        //Comprobamos las variables
        if(count($dato)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay ningún dato con estas características'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$dato]);
        } 
    }

    public function showSinResponder($subarea)
    {
        //Prepara las variables
        $valor=(int)$subarea;
        //return response()->json(['status' =>['error'=>9, 'message'=>'Todo ok'], 'data'=>null]);
        
        //Comprobamos las variables
        if ($valor==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        try {
            $dato = Resultado::where('subarea_id', $valor)
                ->where('contestada', 0)
                ->with('Pregunta')
                ->with('Enunciado')
                ->with('Respuesta')
                ->orderBy('id', 'asc')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'ResSinResp: Error al obtener los resultados'], 'data'=>null]);
        }

        if(count($dato)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'ResSinResp: No hay ningún dato con estas características'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$dato]);
        }
    }

    public function showXPregunta($subarea, $pregunta)
    {
        //Paso 1:Comprobamos las variables
        $pregunta=(int)$pregunta;
        $subarea=(int)$subarea;

        if($pregunta==0 || $subarea==0){
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try{
            $datos = Resultado::where('subarea_id', $subarea)
                ->where('pregunta_id', $pregunta)
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error al consultar preguntas'], 'data'=>null]);
        }

        //Paso 4: enviamos el json
        if(count($datos)==0){
            return response()->json(['status' =>['error'=>2, 'message'=>'No hay preguntas para este subtema'], 'data'=>null]);
        } else {
            return response()->json(['status' =>['error'=>0, 'message'=>''], 'data'=>$datos]);
        }
    }


//*******
//* Web *
//*******

    //Modifica un Registro
    public function examen2(Request $request, $id)
    {
        //$respuesta=$request->all();
        //return $respuesta;
        //return $request;

        //Paso 1: Sanitizamos las variables
        $id=(int)$id;
        $request->pregunta_id=(int)$request->pregunta_id;
        $request->subarea_id=(int)$request->subarea_id;
        if($id==0 || $request->pregunta_id==0 || $request->subarea_id==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
		//return $request->mirespuesta;
		
        $request->mirespuesta=(int)$request->mirespuesta;
        if($request->mirespuesta!=(int)$request->mirespuesta){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 2: Obtenemos datos de resultados
        $resultado=$this->showXId($id);
        $resultado = @json_decode(json_encode($resultado), true);
        $resultado=$resultado['original']['data'][0];
        //return $resultado;

        //Paso 3: Obtenemos datos de la respuesta
        $respuesta = app('App\Http\Controllers\RespuestaController')->showXId($request->mirespuesta);
        $respuesta = @json_decode(json_encode($respuesta), true);
        $respuesta=$respuesta['original']['data'][0];
        //return $respuesta;

		//Paso 4: Analizamos los resultados
		$resultado['contestada']=1;
        $resultado['acierto']=0;
		$resultado['puntos']=$respuesta['pregunta']['error'];
        if($respuesta['acierto']==1){
            $resultado['acierto']=1;
        }
		//return $resultado;
		
		//Paso 5: Actualizamos las notas e todas las tablas
		$examen=$this->actualizaNotas($resultado);
		//return $examen;

        //Paso 6: Redireccionamos a la página examen
        return redirect()->back();
    }
    
	public function examenz2(Request $request, $id)
    {
		//return $id;
        $mirequest=$request->all();
        //return $mirequest;
        //return $request;

        //Paso 1: Sanitizamos las variables
        $id=(int)$id;
        $request->pregunta_id=(int)$request->pregunta_id;
        $request->subarea_id=(int)$request->subarea_id;
        if($id==0 || $request->pregunta_id==0 || $request->subarea_id==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
		foreach($mirequest['mirespuesta'] as $key1=>$responde)
		{
			if(isset($responde[$key1]) && $responde[$key1]!=(int)$responde[$key1]){
				return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
			}
		}
		
		//Paso 2: Obtenemos todas las preguntas del subarea
		$resultados=$this->showXSubarea($id);
		$resultados = @json_decode(json_encode($resultados), true);
		$resultados=$resultados['original']['data'];
		//return $resultados;

		//Paso 3: analizamos cada uno de los resultados
		foreach($resultados as $key1=>$resultado)
		{
			//Paso 3.1: Obtenemos los datos de la pregunta
			$pregunta = app('App\Http\Controllers\PreguntaController')->showXId($resultado['pregunta_id']);
			$pregunta = @json_decode(json_encode($pregunta), true);
			$pregunta=$pregunta['original']['data'][0];
			//return $pregunta;

			//Paso 3.2: Obtenemos datos de las respuestas
			$respuestas=$pregunta['respuesta'];
			//return $respuestas;

			//Paso 3.3: Comprobamos si ha acertado
			$elegido=$mirequest['mirespuesta'][$key1+1];
			$resultado['acierto']=1;
			//return $elegido;

			if($elegido==null){  //Si elegido es nulo verificamos que ninguna respuesta sea cierta
				foreach($respuestas as $key2=>$respuesta)
				{
					if($respuesta['acierto']==1){
						$resultado['acierto']=0;
					}
				}
				$resultado['acierto']=$resultado['acierto'];
			} else {
				if($respuestas[$elegido-1]['acierto']!=1){
					$resultado['acierto']=0;
				}
			}
			//return 'elegido='.$elegido.' --- respuestas='.$respuestas[$elegido-1]['acierto'].' --- Acierto='.$resultado['acierto'];
			
			$resultado['contestada']=1;
			$resultado['puntos']=0;
			if($resultado['acierto']==1){
				$resultado['puntos']=$pregunta['error'];
			}
			//return $resultado;

			//Actualizamos las notas
			$examen=$this->actualizaNotas($resultado, $pregunta);
			//return $examen;
		}
		//return $examen;
        //Paso 4: Redireccionamos a la página examen
		return redirect('/exameninicio/'.$examen['id']);
    }

	public function actualizaNotas($resultado)
	{
		//Paso 1: Obtenemos datos de las tablas

		//Paso 1.1: Obtenemos datos de la tabla Subareas
		$subarea = app('App\Http\Controllers\SubareaController')->show($resultado['subarea_id']);
		$subarea = @json_decode(json_encode($subarea), true);
		$subarea=$subarea['original']['data'][0];

		//Paso 1.2: Obtenemos datos de la tabla Areas
		$area = app('App\Http\Controllers\AreaController')->show($subarea['area_id']);
		$area = @json_decode(json_encode($area), true);
		$area=$area['original']['data'][0];
		
		//Paso 1.3: Obtenemos datos de la tabla Examenes
		$examen = app('App\Http\Controllers\ExamenController')->showXId($area['examen_id']);
		$examen = @json_decode(json_encode($examen), true);
		$examen=$examen['original']['data'];
		//return $examen;
		
		//Paso 1.4: Obtenemos datos de la tabla Pruebas
		$prueba = app('App\Http\Controllers\PruebaController')->showXId($examen['prueba_id']);
		$prueba = @json_decode(json_encode($prueba), true);
		$prueba=$prueba['original']['data'][0];
		//return $prueba;


		//Paso 2: Actualizamos los datos

		//Paso 2.1: Calculamos la nota
		//return $resultado;
		if($prueba['grado_id']>100){  //Si son examenes viejos (elementa, oral, mitja o superios)
			if($resultado['acierto']==0){
				$resultado['puntos']=-$resultado['puntos'];
			} else {
				$resultado['puntos']=1;
			}
		}
		//return $resultado;

		//Paso 2.2: Actualizamos la tabla Resultados
		$resresultado=$this->update($resultado, $resultado['id']);
		$resresultado = @json_decode(json_encode($resresultado), true);
		$resresultado = $resresultado['original']['data'];
		//return $resresultado;

		//Paso 2.3: Actualizamos la tabla Subareas
		$subarea['nota']=$subarea['nota']+$resultado['puntos'];
		$subarea['contestadas']++;
		//return $subarea;
		$ressubarea = app('App\Http\Controllers\SubareaController')->update($subarea);
		//return $ressubarea;

		//Paso 2.4: Actualizamos la tabla area
		$area = app('App\Http\Controllers\AreaController')->show($subarea['area_id']);
		$area = @json_decode(json_encode($area), true);
		$area=$area['original']['data'][0];
		//return $area;
		$area['nota']=0;
		foreach($area['subarea'] as $key1=>$misubarea)
		{
			$area['nota']=$area['nota']+($misubarea['nota']*$area['subtema'][$key1]['porcentaje']);
		}
		$area['contestadas']++;
		//return $area;
		$resarea = app('App\Http\Controllers\AreaController')->update($area);
		//return $resarea;

		//Paso 2.5: Actualizamos la tabla examen
		$examen = app('App\Http\Controllers\ExamenController')->showXId($area['examen_id']);
		$examen = @json_decode(json_encode($examen), true);
		$examen=$examen['original']['data'];
		//return $examen;
		$examen['contestadas']++;
		//return $examen;
		$resexamen = app('App\Http\Controllers\ExamenController')->update($examen);
		
		//Devolvemos los datos
		return $examen;
	}
}
