<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Prueba;
use App\Grado;

class PruebaController extends Controller
{
    public function usuarioActual()
    {
        $usuario = Auth::user()->id;
        return $usuario;
    }    


//*******
//* API *
//*******

    public function update($prueba)
    {
        //Paso 1: Comprobamos las variables
        $prueba['id']=(int)$prueba['id'];
        $prueba['grado_id']=(int)$prueba['grado_id'];
        $prueba['convocatoria_id']=(int)$prueba['convocatoria_id'];
        $prueba['codigo']=(int)$prueba['codigo'];

        if ($prueba['id']==0 || $prueba['grado_id']==0 || $prueba['fecha']==0 || $prueba['convocatoria_id']==0 || $prueba['codigo']==0){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }

        if ($prueba['verificado']!=null && $prueba['verificado']!=(int)$prueba['verificado']){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }
        if (!preg_match("/^[a-zA-Z0-9]+/", $prueba['nombre'])) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales3'], 'data'=>null]);
        }
        //return $prueba;

       //Paso 2: Creamos el registro en la tabla areas
        $modprueba = prueba::find($prueba['id']);
        //return $modprueba;
        try {
            $modprueba->grado_id=$prueba['grado_id'];
            $modprueba->fecha=$prueba['fecha'];
            $modprueba->convocatoria_id=$prueba['convocatoria_id'];
            $modprueba->codigo=$prueba['codigo'];
            $modprueba->verificado=$prueba['verificado'];
            $modprueba->nombre=$prueba['nombre'];
            $modprueba->save();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error al crear el prueba'], 'data'=>$e]);
        }
        //return $modprueba;

        //Paso 3: Retornamos el prueba
        if(!$modprueba){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay registros en tabla prueba para esta consulta'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$modprueba]);
        }
    }

    public function showXGrado($grado)
    {
        //Paso 1:Comprobamos las variables
        $grado=(int)$grado;
        if($grado==0){
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try{
            $pruebas = Prueba::where('grado_id', $grado)
                ->with('Examen')
                ->orderBy('fecha', 'desc')
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status"=>['error'=>1, "message"=>"Error al obtener las pruebas"], "data"=>$e]);
        }

        //Paso 3: creamos los porcentajes
        foreach($pruebas as $key1=>$prueba)
        {
            foreach($prueba['examen'] as $key2=>$examen)
            {
                if($examen['total']==0){
                    $pruebas[$key1]['examen'][$key2]['porcentaje']=0.0;
                } else {
                    $pruebas[$key1]['examen'][$key2]['porcentaje'] = intdiv(100*$examen['contestadas'], $examen['total']);
                }
            }
        }

        //Paso 4: enviamos el json
        if(count($pruebas)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>"No hay pruebas de este grado"], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>""], 'data'=>$pruebas]);
        } 
    }

    public function showXCodigo($codigo)
    {
        try {
            $pruebas = Prueba::where('codigo', $codigo)
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status"=>['error'=>1, "message"=>"Error al obtener la prueba"], 'data'=>null]);
        }        

        if(count($pruebas)==0){
            return response()->json(["status"=>['error'=>2, "message"=>"No has realizado aún ningun examen de esta comvocatoria"], 'data'=>null]);
        } else {
            return response()->json(["status"=>['error'=>0, "message"=>""], 'data'=>$pruebas]);
        }
    }

    public function showXId($id)
    {
        try {
            $pruebas = Prueba::where('id', $id)
                ->with('Tema')
                ->with('Temanombre')
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status"=>['error'=>1, "message"=>"Error al obtener la prueba"], 'data'=>null]);
        }        


        if(count($pruebas)==0){
            return response()->json(["status"=>['error'=>2, "message"=>"No has realizado aún ningun examen de esta comvocatoria"], 'data'=>null]);
        } else {
            return response()->json(["status"=>['error'=>0, "message"=>""], 'data'=>$pruebas]);
        }
    }

    public function show()
    {
        //Paso 1: ejecutamos la consulta
        try {
            $pruebas = Prueba::orderBy('grado_id')->orderBy('codigo')->get();
        } catch (\Exception $e) {
            return response()->json(["status"=>['error'=>1, "message"=>"prmaster01: Error al obtener las pruebas"], 'data'=>null]);
        }        

        //Paso 2: enviamos el json
        if(count($pruebas)==0){
            return response()->json(["status"=>['error'=>2, "message"=>"prmaster02: No hay aún ningún examen"], 'data'=>null]);
        } else {
            return response()->json(["status"=>['error'=>0, "message"=>""], 'data'=>$pruebas]);
        }
    }

    public function mesano($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $mes=substr($codigo, 4, 2);
        
        switch ($mes) {
            case 1:
                $datos['mes']='gener';
                break;
            case 2:
                $datos['mes']='febrer';
                break;
            case 3:
                $datos['mes']='març';
                break;
            case 4:
                $datos['mes']='abril';
                break;
            case 5:
                $datos['mes']='maig';
                break;
            case 6:
                $datos['mes']='juny';
                break;
            case 7:
                $datos['mes']='juliol';
                break;
            case 8:
                $datos['mes']='agost';
                break;
            case 9:
                $datos['mes']='setembre';
                break;
            case 10:
                $datos['mes']='octubre';
                break;
            case 11:
                $datos['mes']='novembre';
                break;
            case 12:
                $datos['mes']='desembre';
                break;
        }
        
        $datos['ano']=substr($codigo, 0,4);
        return $datos;
    }

    public function examenes($codigo)
    {
        if(Auth::guest())
        {
            //return $datos;
            $examenes=0; //Si no está registrado no se visualizan exámenes
        } else {
            //Obtenemos las pruebas del usuario
            $usu = $this->usuarioActual();
            
            $examenes = app('App\Http\Controllers\ExamenController')->showXCodigo($codigo);
            $examenes = @json_decode(json_encode($examenes), true);
            //return $examenes;

            if($examenes['original']['status']['error']==0)
            {
                foreach($examenes['original']['data'] as $key=>$examen) 
                {
                    if($examen['contestadas']==0)
                    {
                        $examenes['original']['data'][$key]['porcentaje']=0;
                    } else {           
                        $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'], $examen['total'])/10;
                    }
                }
            }
        }
        return $examenes;
    }


//****************************
//* páginas de examenes JQCV *
//****************************

//Funciones para páginas de examenes JQCV
 
    public function idm_pruebasjqcv($idm)
    {
        //return $idm;
        $respuesta = app('App\Http\Controllers\GradoController')->show();
        $respuesta = @json_decode(json_encode($respuesta), true);
        $respuesta=$respuesta['original']['data'];
        //return $respuesta;

        $milang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        //return $milang;

        /*
        if($milang!=$idm)
        {
            //return $milang;
            if($milang=="es")
            {
            return $milang." --- ".$idm;
               return redirect()->action('/es/examenes-jqcv', ['lang' => 'es']);
            } else {
               return redirect()->action('/va/examenes-jqcv', ['lang' => 'va']);
            }
        }
        */
        switch ($idm)
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                //return view('paginas.examenes.index', compact('idm', 'exa', 'respuesta'));
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                //return view('paginas.examenes.index', compact('idm', 'exa', 'respuesta'));
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                //return view('paginas.examenes.index', compact('idm', 'exa', 'respuesta'));
                break;
        }

        //return $idm;

        return view('paginas.examenes.index', compact('idm', 'exa', 'respuesta'));
    }
 
    public function es_pruebasjqcv()
    {
        $respuesta = app('App\Http\Controllers\GradoController')->show();
        $respuesta = @json_decode(json_encode($respuesta), true);
        $respuesta=$respuesta['original']['data'];
        //return $respuesta;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exámenes JQCV']);

        return view('paginas.es.examenes.index', compact('respuesta'));
    }

    public function va_pruebasjqcv()
    {
        $respuesta = app('App\Http\Controllers\GradoController')->show();
        $respuesta = @json_decode(json_encode($respuesta), true);
        $respuesta=$respuesta['original']['data'];
        //return $respuesta;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exámenes JQCV']);

        return view('paginas.examenes.index', compact('respuesta'));
    }

    public function es_pruebas_a2()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(6);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-a2']);
        session(['BC2texto' => 'Exàmens A2']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.es.examenes.examenes-a2', compact('pruebas', 'examenes', 'codigo'));
    }

    public function es_pruebas_a2()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(6);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-a2']);
        session(['BC2texto' => 'Exàmens A2']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.es.examenes.examenes-a2', compact('pruebas', 'examenes', 'codigo'));
    }

    public function es_prueba_a2($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //return $examenes;
        //return $ano;
        //return $mes;
        //return $datos;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-a2']);
        session(['BC2texto' => 'Exàmens A2']);
        session(['BC3' => '/es/examen-a2/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.es.examenes.examen-a2', compact('datos', 'examenes', 'codigo'));
    }

    public function es_pruebas_b1()
    {

        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(7);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-b1']);
        session(['BC2texto' => 'Exàmens B1']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.es.examenes.examenes-b1', compact('pruebas', 'examenes', 'codigo'));
    }

    public function es_prueba_b1($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $datos = app('App\Http\Controllers\PruebaController')->mesano($codigo);
        //return $datos;

        //Obtenemos los exámenes del usuario
        $examenes = app('App\Http\Controllers\PruebaController')->examenes($codigo);
        //return $examenes;

        //return $examenes;
        //return $datos;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-b1']);
        session(['BC2texto' => 'Exàmens B1']);
        session(['BC3' => '/es/examen-b1/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.es.examenes.examen-b1', compact('datos', 'examenes', 'codigo'));
    }

    public function es_pruebas_b2()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(8);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-b2']);
        session(['BC2texto' => 'Exàmens B2']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.es.examenes.examenes-b2', compact('pruebas', 'examenes', 'codigo'));
    }

    public function es_prueba_b2($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //return $examenes;
        //return $ano;
        //return $mes;
        //return $datos;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-b2']);
        session(['BC2texto' => 'Exàmens B2']);
        session(['BC3' => '/es/examen-b2/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.es.examenes.examen-b2', compact('datos', 'examenes', 'codigo'));
    }

    public function es_pruebas_c1()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(9);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-c1']);
        session(['BC2texto' => 'Exàmens C1']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.es.examenes.examenes-c1', compact('pruebas', 'examenes', 'codigo'));
    }

    public function es_prueba_c1($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //return $examenes;
        //return $ano;
        //return $mes;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-c1']);
        session(['BC2texto' => 'Exàmens C1']);
        session(['BC3' => '/es/examen-c1/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.es.examenes.examen-c1', compact('datos', 'examenes', 'codigo'));
    }

    public function es_pruebas_c2()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(10);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-c2']);
        session(['BC2texto' => 'Exàmens C2']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.es.examenes.examenes-c2', compact('pruebas', 'examenes', 'codigo'));
    }

    public function es_prueba_c2($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //return $examenes;
        //return $ano;
        //return $mes;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-c2']);
        session(['BC2texto' => 'Exàmens C2']);
        session(['BC3' => '/es/examen-c2/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.es.examenes.examen-c2', compact('datos', 'examenes', 'codigo'));
    }

    public function es_pruebas_elemental()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(101);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exámenes JQCV']);
        session(['BC2' => '/es/examenes-elemental']);
        session(['BC2texto' => 'Examen Elemental']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.es.examenes.examenes-elemental', compact('pruebas', 'examenes', 'codigo'));
    }

    public function es_prueba_elemental($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $datos = app('App\Http\Controllers\PruebaController')->mesano($codigo);
        //return $datos;

        //Obtenemos los exámenes del usuario
        $examenes = app('App\Http\Controllers\PruebaController')->examenes($codigo);
        //return $examenes;

        //return $examenes;
        //return $ano;
        //return $mes;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/es/examenes-elemental']);
        session(['BC2texto' => 'Examen Elemental']);
        session(['BC3' => '/es/examen-elemental/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.es.examenes.examen-elemental', compact('datos', 'examenes', 'codigo'));
    }

    public function es_pruebas_oral()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(102);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exámenes JQCV']);
        session(['BC2' => '/es/examenes-oral']);
        session(['BC2texto' => 'Exámenes Oral']);

        //Paso 2: Redirigimos a la vista
        return view('paginas.es.examenes.examenes-oral', compact('pruebas', 'examenes', 'codigo'));
    }

    public function prueba_oral($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $mes=substr($codigo, 4, 2);
        if($mes == '06')
        {
            $datos['mes'] = 'juny';
        } else {
            $datos['mes'] = 'novembre';
        }
        $datos['ano']=substr($codigo, 0,4);

		
		if(Auth::guest())
		{
			$examenes=null;  //Si no está registrado no se visualizan exámenes
		} else {
			//Obtenemos las pruebas del usuario
			$usu = $this->usuarioActual();
			
			$examenes = app('App\Http\Controllers\ExamenController')->showXCodigo($codigo);
			$examenes = @json_decode(json_encode($examenes), true);
			//return $examenes;

			if($examenes['original']['status']['error']==0)
			{
				foreach($examenes['original']['data'] as $key=>$examen) 
				{
					if($examen['contestadas']==0)
					{
						$examenes['original']['data'][$key]['porcentaje']=0;
					} else {           
						$examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'], $examen['total'])/10;
					}
				}
			}
		}
		//return $examenes;
		//return $ano;
		//return $mes;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenoral']);
        session(['BC2texto' => 'Exàmens Oral']);
        session(['BC3' => '/examen_oral/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
        
        return view('paginas.examenes.examen_oral', compact('datos', 'examenes', 'codigo'));
    }

    public function es_prueba_oral($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $datos = app('App\Http\Controllers\PruebaController')->mesano($codigo);
        //return $datos;

        //Obtenemos los exámenes del usuario
        $examenes = app('App\Http\Controllers\PruebaController')->examenes($codigo);
        //return $examenes;

        //return $examenes;
        //return $ano;
        //return $mes;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exámenes JQCV']);
        session(['BC2' => '/es/examenes-oral']);
        session(['BC2texto' => 'Exámenes Oral']);
        session(['BC3' => '/es/examen-oral/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
        
        return view('paginas.es.examenes.examen-oral', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_mitja()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(103);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        $codigo=0;

        //url de vuelta
        session(['BC2' => '/examenmitja']);
        session(['BC2texto' => 'Exàmens Mitjà']);

        //Paso 2: Redirigimos a la vista
        return view('paginas.examenes.examenes-mitja', compact('pruebas', 'examenes', 'codigo'));
    }

    public function es_pruebas_mitja()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(103);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exámenes JQCV']);
        session(['BC2' => '/es/examenes-mitja']);
        session(['BC2texto' => 'Exámenes Mitjà']);

        //Paso 2: Redirigimos a la vista
        return view('paginas.es.examenes.examenes-mitja', compact('pruebas', 'examenes', 'codigo'));
    }

    public function prueba_mitja($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $mes=substr($codigo, 4, 2);
        if($mes == '06')
        {
            $datos['mes'] = 'juny';
        } else {
            $datos['mes'] = 'novembre';
        }
        $datos['ano']=substr($codigo, 0,4);


        if(Auth::guest())
        {
            $examenes=null;  //Si no está registrado no se visualizan exámenes
        } else {
            $usu = $this->usuarioActual();
            $examenes = app('App\Http\Controllers\ExamenController')->showXCodigo($codigo);
            $examenes = @json_decode(json_encode($examenes), true);
            //return $examenes;

            if($examenes['original']['status']['error']==0)
            {
                foreach($examenes['original']['data'] as $key=>$examen) 
                {
                    if($examen['contestadas']==0)
                    {
                        $examenes['original']['data'][$key]['porcentaje']=0;
                    } else {           
                        $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'], $examen['total'])/10;
                    }
                }
            }
            //return $examenes;
            //return $ano;
            //return $mes;
        }
        
        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenmitja']);
        session(['BC2texto' => 'Exàmens Mitjà']);
        session(['BC3' => '/examen_mitja/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
        
        return view('paginas.examenes.examen_mitja', compact('datos', 'examenes', 'codigo'));
    }

    public function es_prueba_mitja($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $datos = app('App\Http\Controllers\PruebaController')->mesano($codigo);
        //return $datos;

        //Obtenemos los exámenes del usuario
        $examenes = app('App\Http\Controllers\PruebaController')->examenes($codigo);
        //return $examenes;

			//return $examenes;
			//return $ano;
			//return $mes;
				
        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exámenes JQCV']);
        session(['BC2' => '/es/examenes-mitja']);
        session(['BC2texto' => 'Exámenes Mitjà']);
        session(['BC3' => '/es/examen-mitja/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
        
        return view('paginas.es.examenes.examen-mitja', compact('datos', 'examenes', 'codigo'));
    }

    public function es_pruebas_superior()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(104);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exámenes JQCV']);
        session(['BC2' => '/es/examenes-superior']);
        session(['BC2texto' => 'Exámenes Superior']);

        //Paso 2: Redirigimos a la vista
        return view('paginas.es.examenes.examenes-superior', compact('pruebas', 'examenes', 'codigo'));
    }


    public function es_prueba_superior($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //return $examenes;
        //return $ano;
        //return $mes;
        
        //url de vuelta
        session(['BC1' => '/es/examenes-jqcv']);
        session(['BC1texto' => 'Exámenes JQCV']);
        session(['BC2' => '/es/examenes-superior']);
        session(['BC2texto' => 'Exámenes Superior']);
        session(['BC3' => '/es/examen-superior/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
        
        return view('paginas.es.examenes.examen-superior', compact('datos', 'examenes', 'codigo'));
    }


//**********
//* Master *
//**********

    public function pruebasmaster()
    {
        $pruebas=$this->show();
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;

        //url de vuelta
        session(['BC1' => '/pruebasmaster']);
        session(['BC1texto' => 'Pruebas master']);

        return view('paginas.master.MasterPruebas', compact('pruebas'));
    }

    public function MasterPruebaXId($id)
    {
        $usu = Auth::user()->id;

        //Paso 1: Sanitizamos la variable
        $id=(int)$id;
        if ($id==0) {
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso 2: Obtenemos las contestadas por area y subarea
        $prueba = app('App\Http\Controllers\TemaController')->showXPrueba($id);
        $prueba = @json_decode(json_encode($prueba), true);
        //return $prueba;

        foreach($prueba['original']['data'] as $key1=>$area){
            //return $area;
            $subtemas = app('App\Http\Controllers\SubtemaController')->showXArea($area['id']);
            $subtemas = @json_decode(json_encode($subtemas), true);
            //return $subtemas;
            $prueba['original']['data'][$key1]['subtema']=$subtemas['original']['data'];
        }
        //return $prueba;

        //Paso 3: Obtenemos las contestadas por area y subarea
        return view('paginas.master.examenmaster', compact('prueba'));
    }







//**********
//* Viejos *
//**********


   public function pruebasjqcv()
    {
        $dato = Grado::all();
        $respuesta=["status" =>['error'=>0, "message"=>""], 'data'=>$dato];
        //return $respuesta;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);

        return view('paginas.examenes.index', compact('respuesta'));
    }

    public function pruebas_a2()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(6);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        /*
        //Paso 2: Obtenemos los exámenes realizados por el alumno del grado elemental
        $examenes = app('App\Http\Controllers\ExamenController')->showXGrado(1);
        $examenes = @json_decode(json_encode($examenes), true);
        //return $examenes;
        if($examenes['original']['status']['error']==0)
        {
            foreach ($examenes['original']['data'] as $key=>$examen) {
                $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'],$examen['total'])/10;
            }
        }
        //return $examenes;
        */
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenes-a2']);
        session(['BC2texto' => 'Exàmens A2']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-a2', compact('pruebas', 'examenes', 'codigo'));
    }

    public function prueba_a2($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $mes=substr($codigo, 4, 2);
        
        switch ($mes) {
            case 1:
                $datos['mes']='gener';
                break;
            case 2:
                $datos['mes']='febrer';
                break;
            case 3:
                $datos['mes']='març';
                break;
            case 4:
                $datos['mes']='abril';
                break;
            case 5:
                $datos['mes']='maig';
                break;
            case 6:
                $datos['mes']='juny';
                break;
            case 7:
                $datos['mes']='juliol';
                break;
            case 8:
                $datos['mes']='agost';
                break;
            case 9:
                $datos['mes']='setembre';
                break;
            case 10:
                $datos['mes']='octubre';
                break;
            case 11:
                $datos['mes']='novembre';
                break;
            case 12:
                $datos['mes']='desembre';
                break;
        }
        
        $datos['ano']=substr($codigo, 0,4);

        if(Auth::guest())
        {
            $examenes=null;  //Si no está registrado no se visualizan exámenes
        } else {
            //Obtenemos las pruebas del usuario
            $usu = $this->usuarioActual();
            
            $examenes = app('App\Http\Controllers\ExamenController')->showXCodigo($codigo);
            $examenes = @json_decode(json_encode($examenes), true);
            //return $examenes;

            if($examenes['original']['status']['error']==0)
            {
                foreach($examenes['original']['data'] as $key=>$examen) 
                {
                    if($examen['contestadas']==0)
                    {
                        $examenes['original']['data'][$key]['porcentaje']=0;
                    } else {           
                        $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'], $examen['total'])/10;
                    }
                }
            }
        }
        //return $examenes;
        //return $ano;
        //return $mes;
        //return $datos;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examena2']);
        session(['BC2texto' => 'Exàmens A2']);
        session(['BC3' => '/examen_a2/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.examenes.examen_a2', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_b1()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(7);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenes-b1']);
        session(['BC2texto' => 'Exàmens B1']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-b1', compact('pruebas', 'examenes', 'codigo'));
    }

    public function prueba_b1($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $mes=substr($codigo, 4, 2);
        
        switch ($mes) {
            case 1:
                $datos['mes']='gener';
                break;
            case 2:
                $datos['mes']='febrer';
                break;
            case 3:
                $datos['mes']='març';
                break;
            case 4:
                $datos['mes']='abril';
                break;
            case 5:
                $datos['mes']='maig';
                break;
            case 6:
                $datos['mes']='juny';
                break;
            case 7:
                $datos['mes']='juliol';
                break;
            case 8:
                $datos['mes']='agost';
                break;
            case 9:
                $datos['mes']='setembre';
                break;
            case 10:
                $datos['mes']='octubre';
                break;
            case 11:
                $datos['mes']='novembre';
                break;
            case 12:
                $datos['mes']='desembre';
                break;
        }
        
        $datos['ano']=substr($codigo, 0,4);

        if(Auth::guest())
        {
            //return $datos;
            $examenes=0; //Si no está registrado no se visualizan exámenes
        } else {
            //Obtenemos las pruebas del usuario
            $usu = $this->usuarioActual();
            
            $examenes = app('App\Http\Controllers\ExamenController')->showXCodigo($codigo);
            $examenes = @json_decode(json_encode($examenes), true);
            //return $examenes;

            if($examenes['original']['status']['error']==0)
            {
                foreach($examenes['original']['data'] as $key=>$examen) 
                {
                    if($examen['contestadas']==0)
                    {
                        $examenes['original']['data'][$key]['porcentaje']=0;
                    } else {           
                        $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'], $examen['total'])/10;
                    }
                }
            }
        }
        //return $ano;
        //return $mes;

        //return $examenes;
        //return $datos;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenes-b1']);
        session(['BC2texto' => 'Exàmens B1']);
        session(['BC3' => '/examen-b1/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.examenes.examen-b1', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_b2()
    {

        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(8);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        /*
        //Paso 2: Obtenemos los exámenes realizados por el alumno del grado elemental
        $examenes = app('App\Http\Controllers\ExamenController')->showXGrado(1);
        $examenes = @json_decode(json_encode($examenes), true);
        //return $examenes;
        if($examenes['original']['status']['error']==0)
        {
            foreach ($examenes['original']['data'] as $key=>$examen) {
                $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'],$examen['total'])/10;
            }
        }
        //return $examenes;
        */
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenes-b2']);
        session(['BC2texto' => 'Exàmens B2']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-b2', compact('pruebas', 'examenes', 'codigo'));
    }

    public function prueba_b2($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $mes=substr($codigo, 4, 2);
        
        switch ($mes) {
            case 1:
                $datos['mes']='gener';
                break;
            case 2:
                $datos['mes']='febrer';
                break;
            case 3:
                $datos['mes']='març';
                break;
            case 4:
                $datos['mes']='abril';
                break;
            case 5:
                $datos['mes']='maig';
                break;
            case 6:
                $datos['mes']='juny';
                break;
            case 7:
                $datos['mes']='juliol';
                break;
            case 8:
                $datos['mes']='agost';
                break;
            case 9:
                $datos['mes']='setembre';
                break;
            case 10:
                $datos['mes']='octubre';
                break;
            case 11:
                $datos['mes']='novembre';
                break;
            case 12:
                $datos['mes']='desembre';
                break;
        }
        
        $datos['ano']=substr($codigo, 0,4);

        if(Auth::guest())
        {
            $examenes=null;  //Si no está registrado no se visualizan exámenes
        } else {
            //Obtenemos las pruebas del usuario
            $usu = $this->usuarioActual();
            
            $examenes = app('App\Http\Controllers\ExamenController')->showXCodigo($codigo);
            $examenes = @json_decode(json_encode($examenes), true);
            //return $examenes;

            if($examenes['original']['status']['error']==0)
            {
                foreach($examenes['original']['data'] as $key=>$examen) 
                {
                    if($examen['contestadas']==0)
                    {
                        $examenes['original']['data'][$key]['porcentaje']=0;
                    } else {           
                        $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'], $examen['total'])/10;
                    }
                }
            }
        }
        //return $examenes;
        //return $ano;
        //return $mes;
        //return $datos;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenb2']);
        session(['BC2texto' => 'Exàmens B2']);
        session(['BC3' => '/examen_b2/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.examenes.examen_b2', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_c1()
    {

        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(9);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        /*
        //Paso 2: Obtenemos los exámenes realizados por el alumno del grado elemental
        $examenes = app('App\Http\Controllers\ExamenController')->showXGrado(1);
        $examenes = @json_decode(json_encode($examenes), true);
        //return $examenes;
        if($examenes['original']['status']['error']==0)
        {
            foreach ($examenes['original']['data'] as $key=>$examen) {
                $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'],$examen['total'])/10;
            }
        }
        //return $examenes;
        */
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenes-c1']);
        session(['BC2texto' => 'Exàmens C1']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-c1', compact('pruebas', 'examenes', 'codigo'));
    }

    public function prueba_c1($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $mes=substr($codigo, 4, 2);
        if($mes == '06')
        {
            $datos['mes'] = 'juny';
        } else {
            $datos['mes'] = 'novembre';
        }
        $datos['ano']=substr($codigo, 0,4);

        if(Auth::guest())
        {
            $examenes=null;  //Si no está registrado no se visualizan exámenes
        } else {
            //Obtenemos las pruebas del usuario
            $usu = $this->usuarioActual();
            
            $examenes = app('App\Http\Controllers\ExamenController')->showXCodigo($codigo);
            $examenes = @json_decode(json_encode($examenes), true);
            //return $examenes;

            if($examenes['original']['status']['error']==0)
            {
                foreach($examenes['original']['data'] as $key=>$examen) 
                {
                    if($examen['contestadas']==0)
                    {
                        $examenes['original']['data'][$key]['porcentaje']=0;
                    } else {           
                        $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'], $examen['total'])/10;
                    }
                }
            }
        }
        //return $examenes;
        //return $ano;
        //return $mes;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenc1']);
        session(['BC2texto' => 'Exàmens C1']);
        session(['BC3' => '/examen_c1/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.examenes.examen_c1', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_c2()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(10);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        /*
        //Paso 2: Obtenemos los exámenes realizados por el alumno del grado elemental
        $examenes = app('App\Http\Controllers\ExamenController')->showXGrado(1);
        $examenes = @json_decode(json_encode($examenes), true);
        //return $examenes;
        if($examenes['original']['status']['error']==0)
        {
            foreach ($examenes['original']['data'] as $key=>$examen) {
                $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'],$examen['total'])/10;
            }
        }
        return $examenes;
        */
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenes-c2']);
        session(['BC2texto' => 'Exàmens C2']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-c2', compact('pruebas', 'examenes', 'codigo'));
    }

    public function prueba_c2($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $mes=substr($codigo, 4, 2);
        if($mes == '06')
        {
            $datos['mes'] = 'juny';
        } else {
            $datos['mes'] = 'novembre';
        }
        $datos['ano']=substr($codigo, 0,4);

        if(Auth::guest())
        {
            $examenes=null;  //Si no está registrado no se visualizan exámenes
        } else {
            //Obtenemos las pruebas del usuario
            $usu = $this->usuarioActual();
            
            $examenes = app('App\Http\Controllers\ExamenController')->showXCodigo($codigo);
            $examenes = @json_decode(json_encode($examenes), true);
            //return $examenes;

            if($examenes['original']['status']['error']==0)
            {
                foreach($examenes['original']['data'] as $key=>$examen) 
                {
                    if($examen['contestadas']==0)
                    {
                        $examenes['original']['data'][$key]['porcentaje']=0;
                    } else {           
                        $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'], $examen['total'])/10;
                    }
                }
            }
        }
        //return $examenes;
        //return $ano;
        //return $mes;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenc2']);
        session(['BC2texto' => 'Exàmens C2']);
        session(['BC3' => '/examen_c2/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.examenes.examen_c2', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_superior()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(104);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examensuperior']);
        session(['BC2texto' => 'Exàmens Superior']);

        //Paso 2: Redirigimos a la vista
        return view('paginas.examenes.examenes-superior', compact('pruebas', 'examenes', 'codigo'));
    }

    public function prueba_superior($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $mes=substr($codigo, 4, 2);
        if($mes == '06')
        {
            $datos['mes'] = 'juny';
        } else {
            $datos['mes'] = 'novembre';
        }
        $datos['ano']=substr($codigo, 0,4);
        //return $codigo;

        if(Auth::guest())
        {
            $examenes=null;  //Si no está registrado no se visualizan exámenes
        } else {
            //Obtenemos las pruebas del usuario
            $usu = $this->usuarioActual();
            //return $codigo;
            $examenes = app('App\Http\Controllers\ExamenController')->showXCodigo($codigo);
            $examenes = @json_decode(json_encode($examenes), true);
            //return $examenes;

            if($examenes['original']['status']['error']==0)
            {
                foreach($examenes['original']['data'] as $key=>$examen) 
                {
                    if($examen['contestadas']==0)
                    {
                        $examenes['original']['data'][$key]['porcentaje']=0;
                    } else {           
                        $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'], $examen['total'])/10;
                    }
                }
            }
        }
        //return $examenes;
        //return $ano;
        //return $mes;
        
        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examensuperior']);
        session(['BC2texto' => 'Exàmens Superior']);
        session(['BC3' => '/examen_superior/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
        
        return view('paginas.examenes.examen_superior', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_elemental()
    {

        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(101);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        /*
        //Paso 2: Obtenemos los exámenes realizados por el alumno del grado elemental
        $examenes = app('App\Http\Controllers\ExamenController')->showXGrado(1);
        $examenes = @json_decode(json_encode($examenes), true);
        //return $examenes;
        if($examenes['original']['status']['error']==0)
        {
            foreach ($examenes['original']['data'] as $key=>$examen) {
                $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'],$examen['total'])/10;
            }
        }
        //return $examenes;
        */
                
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenelemental']);
        session(['BC2texto' => 'Exàmens Elemental']);

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-elemental', compact('pruebas', 'examenes', 'codigo'));
    }

    public function prueba_elemental($codigo)
    {
        //Obtenemos el mes y el año en una matriz co ambos valores
        $mes=substr($codigo, 4, 2);
        if($mes == '06')
        {
            $datos['mes'] = 'juny';
        } else {
            $datos['mes'] = 'novembre';
        }
        $datos['ano']=substr($codigo, 0,4);

        if(Auth::guest())
        {
            $examenes=null;  //Si no está registrado no se visualizan exámenes
        } else {
            //Obtenemos las pruebas del usuario
            $usu = $this->usuarioActual();
            
            $examenes = app('App\Http\Controllers\ExamenController')->showXCodigo($codigo);
            $examenes = @json_decode(json_encode($examenes), true);
            //return $examenes;

            if($examenes['original']['status']['error']==0)
            {
                foreach($examenes['original']['data'] as $key=>$examen) 
                {
                    if($examen['contestadas']==0)
                    {
                        $examenes['original']['data'][$key]['porcentaje']=0;
                    } else {           
                        $examenes['original']['data'][$key]['porcentaje']=intdiv(1000*$examen['contestadas'], $examen['total'])/10;
                    }
                }
            }
        }
        //return $examenes;
        //return $ano;
        //return $mes;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenelemental']);
        session(['BC2texto' => 'Exàmens Elemental']);
        session(['BC3' => '/examen_elemental/'.$codigo]);
        session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);

        return view('paginas.examenes.examen_elemental', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_oral()
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(102);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
        
        $codigo=0;

        //url de vuelta
        session(['BC1' => '/examenes-jqcv']);
        session(['BC1texto' => 'Exàmens JQCV']);
        session(['BC2' => '/examenoral']);
        session(['BC2texto' => 'Exàmens Oral']);

        //Paso 2: Redirigimos a la vista
        return view('paginas.examenes.examenes-oral', compact('pruebas', 'examenes', 'codigo'));
    }



}
