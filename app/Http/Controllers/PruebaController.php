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
 
    public function pruebasjqcv($idm)
    {
        //return $idm;
        $respuesta = app('App\Http\Controllers\GradoController')->show();
        $respuesta = @json_decode(json_encode($respuesta), true);
        $respuesta=$respuesta['original']['data'];
        //return $respuesta;
        
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('/es/examenes-jqcv');
            } else {
               return redirect('/va/examenes-jqcv');
            }
        }
        //return session('lang');

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                break;
        }
        //return 'estamos aqui';
        return view('paginas.examenes.index', compact('respuesta'));
    }
 
    public function pruebas_a1($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('es/examenes-a1');
            } else {
               return redirect('va/examenes-a1');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-a1']);
                session(['BC2texto' => 'Exámenes A1']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-a1']);
                session(['BC2texto' => 'Exàmens A1']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-a1']);
                session(['BC2texto' => 'Exàmens A1']);
                break;
        }

        $miurl='/'.session('lang').'/examen-a1';
        //return $miurl;

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-a1', compact('miurl'));
    }

    public function pruebas_a2($idm)
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(6);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;
        
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('es/examenes-a2');
            } else {
               return redirect('va/examenes-a2');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-a2']);
                session(['BC2texto' => 'Exámenes A2']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-a2']);
                session(['BC2texto' => 'Exàmens A2']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-a2']);
                session(['BC2texto' => 'Exàmens A2']);
                break;
        }

        $miurl='/'.session('lang').'/examen-a2';
        //return $miurl;

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-a2', compact('pruebas', 'examenes', 'codigo', 'miurl'));
    }

    public function prueba_a2($idm, $codigo)
    {
        //Paso 1: Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Paso 2: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('/es/examen-a2/'.$codigo);
            } else {
               return redirect('/va/examen-a2/'.$codigo);
            }
        }

        //Paso 3: Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //Paso 4: url de vuelta
        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-a2']);
                session(['BC2texto' => 'Exámenes A2']);
                session(['BC3' => '/es/examen-a2/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-a2']);
                session(['BC2texto' => 'Exàmens A2']);
                session(['BC3' => '/va/examen-a2/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-a2']);
                session(['BC2texto' => 'Exàmens A2']);
                session(['BC3' => '/va/examen-a2/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
        }
        //Paso 5: Redirigimos al blade
        return view('paginas.examenes.examen-a2', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_b1($idm)
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(7);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;
        
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return session('lang');
            if(session('lang')=="es")
            {
                return redirect('/es/examenes-b1');
            } else {
                return redirect('/va/examenes-b1');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-b1']);
                session(['BC2texto' => 'Exámenes B1']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-b1']);
                session(['BC2texto' => 'Exàmens B1']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-b1']);
                session(['BC2texto' => 'Exàmens B1']);
                break;
        }

        $miurl='/'.session('lang').'/examen-b1';
        //return $miurl;

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-b1', compact('pruebas', 'examenes', 'codigo', 'miurl'));
    }

    public function prueba_b1($idm, $codigo)
    {
        //Paso 1: Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Paso 2: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('/es/examen-b1/'.$codigo);
            } else {
               return redirect('/va/examen-b1/'.$codigo);
            }
        }

        //Paso 3: Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //Paso 4: url de vuelta
        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-b1']);
                session(['BC2texto' => 'Exámenes B1']);
                session(['BC3' => '/es/examen-b1/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-b1']);
                session(['BC2texto' => 'Exàmens B1']);
                session(['BC3' => '/va/examen-b1/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-b1']);
                session(['BC2texto' => 'Exàmens B1']);
                session(['BC3' => '/va/examen-b1/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
        }
        //Paso 5: Redirigimos al blade
        return view('paginas.examenes.examen-b1', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_b2($idm)
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(8);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;
        
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return session('lang');
            if(session('lang')=="es")
            {
                return redirect('/es/examenes-b2');
            } else {
                return redirect('/va/examenes-b2');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-b2']);
                session(['BC2texto' => 'Exámenes B2']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-b2']);
                session(['BC2texto' => 'Exàmens B2']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-b2']);
                session(['BC2texto' => 'Exàmens B2']);
                break;
        }

        $miurl='/'.session('lang').'/examen-b2';
        //return $miurl;

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-b2', compact('pruebas', 'examenes', 'codigo', 'miurl'));
    }

    public function prueba_b2($idm, $codigo)
    {
        //Paso 1: Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Paso 2: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('/es/examen-b2/'.$codigo);
            } else {
               return redirect('/va/examen-b2/'.$codigo);
            }
        }

        //Paso 3: Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //Paso 4: url de vuelta
        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-b2']);
                session(['BC2texto' => 'Exámenes B2']);
                session(['BC3' => '/es/examen-b2/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-b2']);
                session(['BC2texto' => 'Exàmens B2']);
                session(['BC3' => '/va/examen-b2/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-b2']);
                session(['BC2texto' => 'Exàmens B2']);
                session(['BC3' => '/va/examen-b2/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
        }
        //Paso 5: Redirigimos al blade
        return view('paginas.examenes.examen-b2', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_c1($idm)
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(9);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;
        
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return session('lang');
            if(session('lang')=="es")
            {
                return redirect('/es/examenes-c1');
            } else {
                return redirect('/va/examenes-c1');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-c1']);
                session(['BC2texto' => 'Exámenes C1']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-c1']);
                session(['BC2texto' => 'Exàmens C1']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-c1']);
                session(['BC2texto' => 'Exàmens C1']);
                break;
        }

        $miurl='/'.session('lang').'/examen-c1';
        //return $miurl;

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-c1', compact('pruebas', 'examenes', 'codigo', 'miurl'));
    }

    public function prueba_c1($idm, $codigo)
    {
        //Paso 1: Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Paso 2: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('/es/examen-c1/'.$codigo);
            } else {
               return redirect('/va/examen-c1/'.$codigo);
            }
        }

        //Paso 3: Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //Paso 4: url de vuelta
        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-c1']);
                session(['BC2texto' => 'Exámenes C1']);
                session(['BC3' => '/es/examen-c1/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-c1']);
                session(['BC2texto' => 'Exàmens C1']);
                session(['BC3' => '/va/examen-c1/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-c1']);
                session(['BC2texto' => 'Exàmens C1']);
                session(['BC3' => '/va/examen-c1/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
        }
        //Paso 5: Redirigimos al blade
        return view('paginas.examenes.examen-c1', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_c2($idm)
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(10);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;
        
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return session('lang');
            if(session('lang')=="es")
            {
                return redirect('/es/examenes-c2');
            } else {
                return redirect('/va/examenes-c2');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-c2']);
                session(['BC2texto' => 'Exámenes C2']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-c2']);
                session(['BC2texto' => 'Exàmens C2']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-c2']);
                session(['BC2texto' => 'Exàmens C2']);
                break;
        }

        $miurl='/'.session('lang').'/examen-c2';
        //return $miurl;

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-c2', compact('pruebas', 'examenes', 'codigo', 'miurl'));
    }

    public function prueba_c2($idm, $codigo)
    {
        //Paso 1: Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Paso 2: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('/es/examen-c2/'.$codigo);
            } else {
               return redirect('/va/examen-c2/'.$codigo);
            }
        }

        //Paso 3: Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //Paso 4: url de vuelta
        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-c2']);
                session(['BC2texto' => 'Exámenes C2']);
                session(['BC3' => '/es/examen-c2/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-c2']);
                session(['BC2texto' => 'Exàmens C2']);
                session(['BC3' => '/va/examen-c2/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-c2']);
                session(['BC2texto' => 'Exàmens C1']);
                session(['BC3' => '/va/examen-c2/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
        }
        //Paso 5: Redirigimos al blade
        return view('paginas.examenes.examen-c2', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_elemental($idm)
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(101);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;
        
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('es/examenes-elemental');
            } else {
               return redirect('va/examenes-elemental');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-elemental']);
                session(['BC2texto' => 'Exámenes Elemental']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-elemental']);
                session(['BC2texto' => 'Exàmens Elemental']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-elemental']);
                session(['BC2texto' => 'Exàmens Elemental']);
                break;
        }

        $miurl='/'.session('lang').'/examen-elemental';
        //return $miurl;

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-elemental', compact('pruebas', 'examenes', 'codigo', 'miurl'));
    }

    public function prueba_elemental($idm, $codigo)
    {
        //Paso 1: Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Paso 2: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('/es/examen-elemental/'.$codigo);
            } else {
               return redirect('/va/examen-elemental/'.$codigo);
            }
        }

        //Paso 3: Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //Paso 4: url de vuelta
        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-elemental']);
                session(['BC2texto' => 'Exámenes Elemental']);
                session(['BC3' => '/es/examen-elemental/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-elemental']);
                session(['BC2texto' => 'Exàmens Elemental']);
                session(['BC3' => '/va/examen-elemental/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-elemental']);
                session(['BC2texto' => 'Exàmens Elemental']);
                session(['BC3' => '/va/examen-elemental/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
        }
        //Paso 5: Redirigimos al blade
        return view('paginas.examenes.examen-elemental', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_oral($idm)
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(102);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;
        
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('es/examenes-oral');
            } else {
               return redirect('va/examenes-oral');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-oral']);
                session(['BC2texto' => 'Exámenes Oral']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-oral']);
                session(['BC2texto' => 'Exàmens Oral']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-oral']);
                session(['BC2texto' => 'Exàmens Oral']);
                break;
        }

        $miurl='/'.session('lang').'/examen-oral';
        //return $miurl;

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-oral', compact('pruebas', 'examenes', 'codigo', 'miurl'));
    }

    public function prueba_oral($idm, $codigo)
    {
        //Paso 1: Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Paso 2: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('/es/examen-oral/'.$codigo);
            } else {
               return redirect('/va/examen-oral/'.$codigo);
            }
        }

        //Paso 3: Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //Paso 4: url de vuelta
        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-oral']);
                session(['BC2texto' => 'Exámenes Oral']);
                session(['BC3' => '/es/examen-oral/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-oral']);
                session(['BC2texto' => 'Exàmens Oral']);
                session(['BC3' => '/va/examen-oral/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-oral']);
                session(['BC2texto' => 'Exàmens Oral']);
                session(['BC3' => '/va/examen-oral/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
        }
        //Paso 5: Redirigimos al blade
        return view('paginas.examenes.examen-oral', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_mitja($idm)
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(103);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;
        
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('es/examenes-mitja');
            } else {
               return redirect('va/examenes-mitja');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-mitja']);
                session(['BC2texto' => 'Exámenes Mitjá']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-mitja']);
                session(['BC2texto' => 'Exàmens Mitjá']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-mitja']);
                session(['BC2texto' => 'Exàmens Mitjá']);
                break;
        }

        $miurl='/'.session('lang').'/examen-mitja';
        //return $miurl;

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-mitja', compact('pruebas', 'examenes', 'codigo', 'miurl'));
    }

    public function prueba_mitja($idm, $codigo)
    {
        //Paso 1: Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Paso 2: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('/es/examen-mitja/'.$codigo);
            } else {
               return redirect('/va/examen-mitja/'.$codigo);
            }
        }

        //Paso 3: Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //Paso 4: url de vuelta
        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-mitja']);
                session(['BC2texto' => 'Exámenes Mitjá']);
                session(['BC3' => '/es/examen-mitja/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-mitja']);
                session(['BC2texto' => 'Exàmens Mitjá']);
                session(['BC3' => '/va/examen-mitja/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-mitja']);
                session(['BC2texto' => 'Exàmens Mitjá']);
                session(['BC3' => '/va/examen-mitja/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
        }
        //Paso 5: Redirigimos al blade
        return view('paginas.examenes.examen-mitja', compact('datos', 'examenes', 'codigo'));
    }

    public function pruebas_superior($idm)
    {
        //Paso 1: Obtenemos las distintas pruebas del grado elemental
        $pruebas = $this->showXGrado(104);
        $pruebas = @json_decode(json_encode($pruebas), true);
        //return $pruebas;
                
        $codigo=0;
        
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('es/examenes-superior');
            } else {
               return redirect('va/examenes-superior');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-superior']);
                session(['BC2texto' => 'Exámenes Superior']);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-superior']);
                session(['BC2texto' => 'Exàmens Superior']);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-superior']);
                session(['BC2texto' => 'Exàmens Superior']);
                break;
        }

        $miurl='/'.session('lang').'/examen-superior';
        //return $miurl;

        //Paso 3: Redirigimos a la vista
        return view('paginas.examenes.examenes-superior', compact('pruebas', 'examenes', 'codigo', 'miurl'));
    }

    public function prueba_superior($idm, $codigo)
    {
        //Paso 1: Obtenemos el mes y el año en una matriz co ambos valores
        $datos = $this->mesano($codigo);

        //Paso 2: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
               return redirect('/es/examen-superior/'.$codigo);
            } else {
               return redirect('/va/examen-superior/'.$codigo);
            }
        }

        //Paso 3: Obtenemos los exámenes realizados
        $examenes = $this->examenes($codigo);

        //Paso 4: url de vuelta
        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/examenes-jqcv']);
                session(['BC1texto' => 'Exámenes JQCV']);
                session(['BC2' => '/es/examenes-superior']);
                session(['BC2texto' => 'Exámenes Superior']);
                session(['BC3' => '/es/examen-superior/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            case "va":
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-superior']);
                session(['BC2texto' => 'Exàmens Superior']);
                session(['BC3' => '/va/examen-superior/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
            default:
                session(['BC1' => '/va/examenes-jqcv']);
                session(['BC1texto' => 'Exàmens JQCV']);
                session(['BC2' => '/va/examenes-superior']);
                session(['BC2texto' => 'Exàmens Superior']);
                session(['BC3' => '/va/examen-superior/'.$codigo]);
                session(['BC3texto' => $datos['mes'].'-'.$datos['ano']]);
                break;
        }
        //Paso 5: Redirigimos al blade
        return view('paginas.examenes.examen-superior', compact('datos', 'examenes', 'codigo'));
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
        session(['BC1' => '/'.session('lang').'/pruebasmaster']);
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




}
