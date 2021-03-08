<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practica;

class PracticaController extends Controller
{


//*******
//* API *
//*******

    public function showXPagina($id)
    {
        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try{
            $datos = Practica::where('pagina_id', $id)
                ->with('Practicanombre')
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status" =>['error'=>1, "message"=>"Error al obtener datos"], 'data'=>null]);
        }
        //return $datos;

        //Paso 3: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay datos'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$datos]);
        } 
    }

    public function showXId($id)
    {
        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }

        //Paso2: ejecutamos la consulta
        try{
            $datos = Practica::where('id', $id)
                ->with('Practicanombre')
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status" =>['error'=>1, "message"=>"Error al obtener datos"], 'data'=>null]);
        }
        //return $datos;

        //Paso 3: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay datos'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$datos]);
        } 
    }


//*******
//* Web *
//*******

    public function inicioPracticas($pagina)
    {
        //Paso 1:Comprobamos las variables
        $pagina=(int)$pagina;
        if ($pagina==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
        //return $pagina;

        //Paso 2: Obtenemos todas las preguntas de esa página
        $datos = $this->showXPagina($pagina);
        $datos = @json_decode(json_encode($datos), true);
        $datos = $datos['original']['data'];
        //return $datos;

        //Paso 3: Elegimos las 10 preguntas que formarán el tema
        $misdatos = array_rand($datos,10);  //Crea selección aleatoria del array datos
        shuffle($misdatos);  //Crea orden aleatorio
        //return $misdatos;

        for($x=1; $x<=10; $x++)
        {
            $elegidos[$x] = $datos[$misdatos[$x-1]]['id'];
        }
        //return $elegidos;
        session()->forget('elegidos');  //Borramos la variable de sesion
        //return session()->get('elegidos');

        session()->put('elegidos', $elegidos);  //Creamos la veriabke de sesion
        //return session()->get('elegidos');

        //Paso 4: Creamos el registro en la tabla ejercicios
        $ejercicio['pagina_id']=$pagina;
        $ejercicio['preguntas']=$elegidos;
		//return $ejercicio['preguntas'];

        $resejercicio = app('App\Http\Controllers\EjercicioController')->store($ejercicio);
        $resejercicio = @json_decode(json_encode($resejercicio), true)['original']['data'];
        //return $resejercicio;


        //Paso 5: creamos los registros en la tabla ejerpreg
        for($x=1; $x<=10; $x++)
        {
            $ejerpreg['ejercicio_id']=$resejercicio['id'];
            $ejerpreg['practica_id']=$elegidos[$x];
            $ejerpreg['orden']=$x;
            $resejerpreg = app('App\Http\Controllers\EjerpregController')->store($ejerpreg);
            $resejerpreg = @json_decode(json_encode($resejerpreg), true);
			//return $resejerpreg;
        }
        //return $resejercicio;

        //Paso 6: redirigimos a la, vista
        return redirect()->action([PracticaController::class, 'practicaXId'], ['id'=>$resejercicio['id']]);
    }

    public function practicaXId($id)
    {
        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
        //return 'El id es:'.$id;

        //Paso 2: Obtenemos las preguntas no contestadas
        $resejerpreg = app('App\Http\Controllers\EjerpregController')->showSinResponder($id);
        $resejerpreg = @json_decode(json_encode($resejerpreg), true);
        $datos = $resejerpreg['original']['data'][0];

        $datos['verdiv']=true;
        //return $datos;

        //Paso 3: Redireccionamos a la página TemasMaster
        return view('paginas.practicas.practica', compact('datos'));
    }

    public function practica1(Request $request)
    {
        $respuesta=$request->all();
        //return $respuesta;
        //return $id;

        //Paso 1: Sanitizamos las variables
        $respuesta['id']=(int)$respuesta['id'];
        $respuesta['mirespuesta'] = filter_var($respuesta['mirespuesta'] , FILTER_SANITIZE_STRING);
        $respuesta['ejercicio_id']=(int)$respuesta['ejercicio_id'];
        $respuesta['practica_id']=(int)$respuesta['practica_id'];
        if($respuesta['id']==0 || $respuesta['ejercicio_id']==0 || $respuesta['practica_id']==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }


        //Paso 2: Actualizamos la tabla ejerpreg
        //2-A: Preparamos las variables constestada y acierto
        $respuesta['contestada']=1;
        $resejerpreg = app('App\Http\Controllers\EjerpregController')->showXId($respuesta['id']);
        $resejerpreg = @json_decode(json_encode($resejerpreg), true);
        $resejerpreg = $resejerpreg['original']['data'][0];
        //return $resejerpreg;

        if(filter_var($resejerpreg['practica']['r1'] , FILTER_SANITIZE_STRING) == $respuesta['mirespuesta'])
        {
            $respuesta['acierto']=1;
        } else {
            $respuesta['acierto']=0;
        }
        //return $respuesta;

        //2.B: Actualizamos la tabla ejerpreg
        $finejerpreg = app('App\Http\Controllers\EjerpregController')->update($respuesta, $respuesta['id']);
        $finejerpreg = @json_decode(json_encode($finejerpreg), true);
        //return $finejerpreg;
        
        //Paso 3: Actualizamos la tabla ejercicios
        //3-A: Preparamos las variables constestada y acierto
        $resejercicio = app('App\Http\Controllers\EjercicioController')->showXId($respuesta['ejercicio_id']);
        $resejercicio = @json_decode(json_encode($resejercicio), true);
        $resejercicio = $resejercicio['original']['data'][0];
        //return $resejercicio;

        $resejercicio['contestadas']++;
        if($respuesta['acierto']==1)
        {
            $resejercicio['nota']++;
        }
        //return $resejercicio;
        //return $respuesta['ejercicio_id'];

        //3.B: Actualizamos la tabla ejerpreg
        $finejercicio = app('App\Http\Controllers\EjercicioController')->update($resejercicio, $respuesta['ejercicio_id']);
        $finejercicio = @json_decode(json_encode($finejercicio), true);
        //$datos = $resejerpreg['original']['data'][0];
        //return $finejercicio;


        //Paso 4: Obtenemos las preguntas no contestadas
        $resejerpreg = app('App\Http\Controllers\EjerpregController')->showSinResponder($respuesta['ejercicio_id']);
        $resejerpreg = @json_decode(json_encode($resejerpreg), true);
        //return $datos;

        //Paso 5: Pasamos a la siguiente pregunta
        if($resejerpreg['original']['status']['error']==2){
            return redirect()->action([PracticaController::class, 'practicaVuelta'], ['ejercicio'=>$respuesta['ejercicio_id']]);
        } else {
            $datos = $resejerpreg['original']['data'][0];
            return view('paginas.practicas.practica', compact('datos'));
        }
    }

    public function practica2(Request $request)
    {
        $respuesta=$request->all();
        //return $respuesta;

        //Paso 1: Sanitizamos las variables
        $respuesta['id']=(int)$respuesta['id'];
        $respuesta['ejercicio_id']=(int)$respuesta['ejercicio_id'];
        $verdiv=(int)$respuesta['verdiv'];
        if($respuesta['id']==0 || $respuesta['ejercicio_id']==0 || $respuesta['practica_id']==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }


        //Paso2: comprobamos que hay respuesta
        if(isset($respuesta['mirespuesta']))
        {
            $respuesta['mirespuesta']=(int)$respuesta['mirespuesta'];

            //Paso 2: Actualizamos la tabla ejerpreg
            //2-A: Preparamos las variables constestada y acierto
            $respuesta['contestada']=1;
            $resejerpreg = app('App\Http\Controllers\EjerpregController')->showXId($respuesta['id']);
            $resejerpreg = @json_decode(json_encode($resejerpreg), true);
            $resejerpreg = $resejerpreg['original']['data'][0];
            //return $resejerpreg;

            if($resejerpreg['practica']['acierto']==$respuesta['mirespuesta'])
            {
                $respuesta['acierto']=1;
            } else {
                $respuesta['acierto']=0;
            }
            //return $respuesta;

            //2.B: Actualizamos la tabla ejerpreg
            $finejerpreg = app('App\Http\Controllers\EjerpregController')->update($respuesta, $respuesta['id']);
            $finejerpreg = @json_decode(json_encode($finejerpreg), true);
            //return $finejerpreg;
            
            //Paso 3: Actualizamos la tabla ejercicios
            //3-A: Preparamos las variables constestada y acierto
            $resejercicio = app('App\Http\Controllers\EjercicioController')->showXId($respuesta['ejercicio_id']);
            $resejercicio = @json_decode(json_encode($resejercicio), true);
            $resejercicio = $resejercicio['original']['data'][0];
            //return $resejercicio;

            $resejercicio['contestadas']++;
            if($respuesta['acierto']==1)
            {
                $resejercicio['nota']++;
            }
            //return $resejercicio;
            //return $respuesta['ejercicio_id'];

            //3.B: Actualizamos la tabla ejerpreg
            $finejercicio = app('App\Http\Controllers\EjercicioController')->update($resejercicio, $respuesta['ejercicio_id']);
            $finejercicio = @json_decode(json_encode($finejercicio), true);
            //$datos = $resejerpreg['original']['data'][0];
            //return $finejercicio;
        }

        //Paso 4: Obtenemos las preguntas no contestadas
        $resejerpreg = app('App\Http\Controllers\EjerpregController')->showSinResponder($respuesta['ejercicio_id']);
        $resejerpreg = @json_decode(json_encode($resejerpreg), true);
        //return $datos;

        //Paso 5: Pasamos a la siguiente pregunta
        if($resejerpreg['original']['status']['error']==2){
            return redirect()->action([PracticaController::class, 'practicaVuelta'], ['ejercicio'=>$respuesta['ejercicio_id']]);
        } else {
            $datos = $resejerpreg['original']['data'][0];

            if($verdiv==1)
            {
                $datos['verdiv']=false;

            } else {
                if($datos['orden']%2!=0)  //Si el orden es impar
                {
                    $datos['verdiv']=true;
                } else {
                    $datos['verdiv']=false;
                }
            }
            //return $datos;

            return view('paginas.practicas.practica', compact('datos'));
        }
    }

    public function practica3(Request $request)
    {
        $respuesta=$request->all();
        //return $respuesta;
        //return $id;

        //Paso 1: Sanitizamos las variables
        $respuesta['id']=(int)$respuesta['id'];
        $respuesta['ejercicio_id']=(int)$respuesta['ejercicio_id'];
        $respuesta['practica_id']=(int)$respuesta['practica_id'];
        $verdiv=(int)$respuesta['verdiv'];
        if($respuesta['id']==0 || $respuesta['ejercicio_id']==0 || $respuesta['practica_id']==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }

        //Paso 2: Obtenemos las preguntas no contestadas
        $resejerpreg = app('App\Http\Controllers\EjerpregController')->showSinResponder($respuesta['ejercicio_id']);
        $resejerpreg = @json_decode(json_encode($resejerpreg), true);
        //return $datos;

        //Paso 3: Pasamos a la siguiente pregunta
        if($resejerpreg['original']['status']['error']==2){
            return redirect()->action([PracticaController::class, 'practicaVuelta'], ['ejercicio'=>$respuesta['ejercicio_id']]);
        } else {
            $datos = $resejerpreg['original']['data'][0];
            $datos['verdiv']=$verdiv;
            //return $datos;

            if($datos['verdiv']==true)
            {
                $datos['verdiv']=false;
            } else {
                if($datos['orden']%2!=0)  //Siel orden es impar
                {
                    $datos['verdiv']=true;
                } else {
                    $datos['verdiv']=false;
                }
            }
            //return $datos;

            return view('paginas.practicas.practica', compact('datos'));

        }
    }

    public function practicaVuelta($ejercicio)
    {
        //Paso 1:Comprobamos las variables
        $ejercicio=(int)$ejercicio;
        if ($ejercicio==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
        //return 'El id es:'.$ejercicio;

        //Paso 2: Obtenemos las preguntas no contestadas
        $resejercicio = app('App\Http\Controllers\EjercicioController')->showXId($ejercicio);
        $resejercicio = @json_decode(json_encode($resejercicio), true);
        $datos = $resejercicio['original']['data'][0];
        //return $datos;

        //Paso 3: Redireccionamos a la página TemasMaster
        return view('paginas.practicas.practicaVuelta', compact('datos'));
    }







}
