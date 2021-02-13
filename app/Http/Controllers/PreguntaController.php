<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use Auth;
use Mail;

class PreguntaController extends Controller
{
    public function usuarioActual()
    {
        $usuario = Auth::user()->id;
        return $usuario;
    }    


//*******
//* API *
//*******

    public function showXId($id)
    {
        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }
        
        //Paso2: ejecutamos la consulta
        try{
            $preguntas = Pregunta::where('id', $id)
                ->with('Enunciado')
                ->with('Respuesta')
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status" =>['error'=>1, "message"=>"Error al consultar preguntas"], 'data'=>null]);
        }

        //Paso 3: enviamos el json
        return response()->json(["status" =>['error'=>0, "message"=>""], 'data'=>$preguntas]);
    }

    public function showXSubarea($subarea)
    {
        //Paso 1:Comprobamos las variables
        $subarea=(int)$subarea;
        if ($subarea==0) {
            return response()->json(["status" =>['error'=>1, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }
        
        //Paso2: ejecutamos la consulta
        try {
            $datos=Pregunta::where('subtema_id', $subarea)
                ->with('Enunciado')
                ->with('Respuesta')
                ->orderBy('orden', 'asc')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>"Error al obtener las preguntas"], 'data'=>$e]);
        }        

        //Paso 3: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>"No hay ninguna pregunta para este subárea"], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>""], 'data'=>$datos]);
        } 
    }

    public function showXSubtema($subtema)
    {
        //Paso 1:Comprobamos las variables
        $subtema=(int)$subtema;
        if ($subtema==0) {
            return response()->json(["status" =>['error'=>1, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }
        
        //Paso2: ejecutamos la consulta
        try {
            $datos=Pregunta::where('subtema_id', $subtema)
                ->with('Enunciado')
                ->with('Respuesta')
                ->orderBy('orden', 'asc')
                ->get();
        } catch (\Exception $e) {
            return response()->json(['status'=>['error'=>1, 'message'=>"Error al obtener las preguntas"], 'data'=>$e]);
        }        

        //Paso 3: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>"No hay ninguna pregunta para este subárea"], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>""], 'data'=>$datos]);
        } 
    }



//********************
//* Resto de métodos *
//********************

    public function preguntaxsubarea($id, $subarea)
    {
        //id es el número de examen
        //Subarea es el número del subarea
        
        //Sanitizamos la variable
        $id=(int)$id;
        $subarea=(int)$subarea;
        //return $subarea;
        
        //Paso 1: Obtenemos los datos del subarea
        $ressubarea = app('App\Http\Controllers\SubareaController')->show($subarea);
        $ressubarea = @json_decode(json_encode($ressubarea), true);
        $totalSubarea=$ressubarea['original']['data'][0]['total'];
        //return $ressubarea;

        //Paso 2: Obtenemos las preguntas del subtema
        $preguntas=$this->showXSubtema($ressubarea['original']['data'][0]['subtema_id']);
        $preguntas = @json_decode(json_encode($preguntas), true);
        //return $preguntas;

        if($preguntas['original']['status']['error']==2){
            $numresultados=0;
        } else {
            $numresultados=count($preguntas['original']['data']);
        }
        return $numresultados;

        //Paso 3: Si count(preguntas)=0 --> Creamos las preguntas
        if($totalSubarea>$numresultados)
        {
            //return 'Estamos en el if y el subarea='.$misubarea;
            //Creamos un resultado por cada pregunta
            foreach($preguntas['original']['data'] as $key=>$pregunta){
                //Revisamos si la pregunta está en Resultado
                $respreg = app('App\Http\Controllers\ResultadoController')->showXPregunta($subarea, $pregunta);
                $respreg = @json_decode(json_encode($respreg), true);
                //return $respreg;
                /*
                $mirest='resultadoxpregunta/'.$subarea.'/'.$pregunta['id'];
                //return $mirest;
                $response=$this->cliente->request('get', $mirest);
                $respreg=json_decode($response->getBody()->getContents(), true);
                //return $respreg;
                */
                //Si no existe la pregunta en la tabla resultados
                if($respreg['original']['status']['error']==2){
                    //Creamos el registro en la tabla resultados
                    $nuevapreg = app('App\Http\Controllers\ResultadoController')->store($subarea, $pregunta);
                    $nuevapreg = @json_decode(json_encode($nuevapreg), true);
                    //return $nuevapreg;
                }
            }
        }

        //Buscamos la primera pregunta sin contestar
        $respreguntassin = app('App\Http\Controllers\ResultadoController')->showSinResponder($subarea);
        $respreguntassin = @json_decode(json_encode($respreguntassin), true);
        //return $respreguntassin;

        //Comprobamos si se ha llegado al final de las preguntas
        if($respreguntassin['original']['status']['error']==2)
        {
            return redirect('/exameninicio/'.$id);
            //return redirect()->action('PruebaController@pruebasjqcv');
        }
        $pregunta=$respreguntassin['original']['data'][0];
        //return $pregunta;
        //return $subarea;
        
        if(!isset(Auth::user()->id))
        {
            $message="notUser";
        } else {
            $message=null;
        }
        
        return view('paginas.examenes.examen', compact('$id', 'subarea', 'ressubarea', 'pregunta', 'message'));
    }


    public function preguntaXSubareaz($id, $subarea)
    {
        //Función que se ejecuta con la url /examen
        //Sanitizamos la variable
        $id=(int)$id;
        $subarea=(int)$subarea;
        
        //Paso 1: Obtenemos los datos del subarea
        $ressubarea = app('App\Http\Controllers\SubareaController')->show($subarea);
        $ressubarea = @json_decode(json_encode($ressubarea), true);
        $totalSubarea=$ressubarea['original']['data'][0]['total'];
        //return $ressubarea;

        //Paso 2: Obtenemos las preguntas del subtema
        $preguntas=$this->showXSubtema($ressubarea['original']['data'][0]['subtema_id']);
        $preguntas = @json_decode(json_encode($preguntas), true);
        $preguntas=$preguntas['original']['data'];
        //return $preguntas;
        
        if(!isset(Auth::user()->id))
        {
            $message="notUser";
        }
        
        return view('paginas.examenes.examenz', compact('id', 'subarea', 'ressubarea', 'preguntas', 'message'));
    }

    public function preguntasXSubtema($subtema)
    {
        //Función que se ejecuta con la url examen

        //Sanitizamos la variable
        $subtema=(int)$subtema;
        
        //Paso 1: Obtenemos los resultados del subtema
        $preguntas=$this->showXsubtema($subtema);
        $preguntas = @json_decode(json_encode($preguntas), true);
        //return $preguntas;

        //Paso 2: Obtenemos los datos del subtema
        $subtema = app('App\Http\Controllers\subtemaController')->showXId($preguntas['original']['data'][0]['subtema_id']);
        $subtema = @json_decode(json_encode($subtema), true);
        //return $subtema;

        $subtema['original']['data'][0]['preguntas'] = $preguntas['original']['data'];
        $subtema= $subtema['original']['data'][0];
        //return $subtema;

        //Paso 3: Creamos la variable volver        
        session(['urlback' => '/temasmaster/'.$subtema['tema']['prueba_id']]);

        //Paso 3: Obtenemos las preguntas del subtema
        return view('paginas.master.MasterPreguntas', compact('subtema'));
    }

    public function verificadorXSubtema($subtema)
    {
        //Función que se ejecuta con la url examen

        //Sanitizamos la variable
        $subtema=(int)$subtema;
        
        //Paso 1: Obtenemos los resultados del subtema
        $preguntas=$this->showXsubtema($subtema);
        $preguntas = @json_decode(json_encode($preguntas), true);
        //return $preguntas;
		
        //Paso 2: Obtenemos los datos del subtema
        $subtema = app('App\Http\Controllers\SubtemaController')->showXId($preguntas['original']['data'][0]['subtema_id']);
        $subtema = @json_decode(json_encode($subtema), true);
        //return $subtema;

        $subtema['original']['data'][0]['preguntas'] = $preguntas['original']['data'];
        //return $subtema;

        //Paso 3: obtenemos los datos del tema
        $prueba = app('App\Http\Controllers\PruebaController')->showXId($subtema['original']['data'][0]['tema']['prueba_id']);
        $prueba = @json_decode(json_encode($prueba), true);
        $subtema['original']['data'][0]['prueba']=$prueba['original']['data'][0];
        //return $subtema;

        //Paso 3: Creamos la variable volver        
        session(['urlback' => '/temasmaster/'.$subtema['original']['data'][0]['tema']['prueba_id']]);

        //Paso 3: Obtenemos las preguntas del subtema
        return view('paginas.master.MasterVerificador', compact('subtema'));
    }

    //Modifica un Registro
    public function verificador2(Request $request, $id)
    {
        //$respuesta=$request->all();
        //return $respuesta;
        //return $request;

        //Paso 1: Sanitizamos las variables
        $id=(int)$id;
        //$request->verificado=(int)$request->verificado;
        if($id==0) {
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
        if($request->verificado!=(int)$request->verificado){
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales'], 'data'=>null]);
        }
		//return $id;
        //return $request;

        //Paso 2: Actualizamos la tabla Subtemas
        //Obtenemos datos del subtema
        $subtema = app('App\Http\Controllers\SubtemaController')->showXId($id);
        $subtema = @json_decode(json_encode($subtema), true);
        $subtema=$subtema['original']['data'][0];
        //return $subtema;

        //Actualizamos la tabla Subtemas
        $subtema['verificado']=$request->verificado;
        $ressubtema = app('App\Http\Controllers\SubtemaController')->update($subtema);
        //return $ressubtema;


        //Paso 3:  Actualizamos la tabla Temas
        //Obtenemos datos del tema
        $tema = app('App\Http\Controllers\TemaController')->showXId($subtema['tema_id']);
        $tema = @json_decode(json_encode($tema), true);
        $tema=$tema['original']['data'][0];
        //return $tema;

        //Actualizamos la tabla Subtemas
        $verificadoBien=0;
        foreach ($tema['subtema'] as $key1 => $misubtema) {
            //return $misubtema;
            if($misubtema['verificado']==9){
                $tema['verificado']=9;
            } else if($misubtema['verificado']==1){
                $verificadoBien++;
            }
        }
        if($verificadoBien==count($tema['subtema'])){
            $tema['verificado']=1;
        }
        //return $tema;
        $restema = app('App\Http\Controllers\TemaController')->update($tema);
        $restema = @json_decode(json_encode($restema), true);
        $restema=$restema['original']['data'];
        //return $restema;

        //Paso 4:  Actualizamos la tabla Pruebas
        //Obtenemos datos del prueba
        $prueba = app('App\Http\Controllers\PruebaController')->showXId($restema['prueba_id']);
        $prueba = @json_decode(json_encode($prueba), true);
        $prueba=$prueba['original']['data'][0];
        //return $prueba;

        //Actualizamos la tabla Subpruebas
        $verificadoBien=0;
        foreach ($prueba['tema'] as $key1 => $mitema) {
            //return $mitema;
            if($mitema['verificado']==9){
                $prueba['verificado']=9;
            } else if($mitema['verificado']==1){
                $verificadoBien++;
            }
        }
        if($verificadoBien==count($prueba['tema'])){
            $prueba['verificado']=1;
        }
        //return $prueba;
        $resprueba = app('App\Http\Controllers\pruebaController')->update($prueba);
        $resprueba = @json_decode(json_encode($resprueba), true);
        $resprueba=$resprueba['original']['data'];
        //return $resprueba;

        //Paso 8: Redireccionamos a la página TemasMaster
        return redirect()->action('TemaController@temasmaster', ['prueba'=>$restema['prueba_id']]);

    }


    public function pruebaemail()
    {
		echo 'Empezamos el envío';
        $data['name']='Bruno';
        $data['email']='brusjc02@gmail.com';
		$data['password']='123';
        $data['confirmation_code']='123456789';
		$subject = "Asunto del correo";
        $for = "brusjc02@gmail.com";
		echo '<br/>Preparadas las varibles';

        Mail::send('paginas.emails.pruebaemail',$data, function($msj) use($subject,$for){
            $msj->from("administrador@practicavalenciano.es","practicavalenciano");
            $msj->subject($subject);
            $msj->to($for);
        });

		echo'<br/>Envío finalizado';

    }

}
