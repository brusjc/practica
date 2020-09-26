<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dictat;

class DictatController extends Controller
{

    public function showXId($id)
    {
        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }
        
        //Paso2: ejecutamos la consulta
        try{
            $datos = Dictat::where('id', $id)
                ->get();
        } catch (\Exception $e) {
            return response()->json(["status" =>['error'=>1, "message"=>"Error al consultar"], 'data'=>null]);
        }

        //Paso 3: enviamos el json
        if(count($datos)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'No hay datos'], 'data'=>null]);
        } else {
            return response()->json(["status" =>['error'=>0, "message"=>""], 'data'=>$datos]);
        }
    }

    public function limpiaTexto($texto)
    {
        //Paso 1: reemplazamos los saltos de línea por espacios
        $texto = str_replace("\n", ' ', $texto);

        //Paso 2: reemplazamos los saltos de línea <p> por espacios
        $texto = str_replace("<p>", ' ', $texto);
        $texto = str_replace("</p>", ' ', $texto);

        //Paso 3: eliminamos los carecteres especiales
        $texto = preg_replace("([^A-Za-z0-9 !'áéíóúàèìòù-·çÇ])", ' ', $texto);
        
        //Paso 4: Eliminamos dobles espacios
        for ($x=1; $x<=3; $x++)
        {
            $texto =str_replace('  ', ' ', $texto);
        }

        //Paso 5: Eliminamos espacios iniciales y finales
        $texto =trim($texto);

        return $texto;
    }

    public function parteTexto($texto)
    {
        //$respuesta[]=$texto;
        //Paso 1: reemplazamos los saltos de línea por espacios
        while(strpos($texto, ' '))
        {
            $pos=strpos($texto, ' ');
            //$respuesta[]=$pos;
            $mitexto = substr($texto, 0, $pos);
            $posfin=strlen($mitexto)+1;
            $texto=substr($texto, $posfin);
            $respuesta[]=$mitexto;
            //$respuesta[]=$texto;
        }
        $respuesta[]=$texto;
        return $respuesta;
    }

//*******
//* WEB *
//*******

    public function comprovaDictatOriginal($id)
    {
        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }
        
        //Paso 2: Obtenemos el texto del dictado
        $resultado=$this->showXId($id);
        $resultado = @json_decode(json_encode($resultado), true);
        $resultado=$resultado['original']['data'][0];
        //return $resultado;


        
        //url de vuelta
        session(['BC1' => '/dictats/'.$id]);
        session(['BC1texto' => 'trans("dictats_breadcrumb")']);
        session(['BC2' => '/exameninicio/'.$id]);
        session(['BC2texto' => 'Areas']);
        session(['BC4' => '/exameninicio/'.$id]);
        session(['BC4texto' => 'Areas']);
        return session('BC1texto');

        //Paso 4: redirigimo a la vista
        //return view('paginas.examenes.exameninicio', compact('examen'));
        


    }


    public function comprovaDictat(Request $request)
    {

        $respuesta=$request->all();
//return $respuesta;
        //Paso 1:Comprobamos las variables
        $respuesta['dictado_id']=(int)$respuesta['dictado_id'];


        if ($respuesta['dictado_id']==0) {
            return response()->json(["status" =>['error'=>3, "message"=>"Error en datos iniciales"], 'data'=>null]);
        }
        
        //Paso 2: Obtenemos el texto del dictado
        $resultado=$this->showXId($respuesta['dictado_id']);
        $resultado = @json_decode(json_encode($resultado), true);
        $resultado=$resultado['original']['data'][0];
//return $resultado;

        //Paso 3: limpiamos los textos
        $textoalumno=$this->limpiaTexto($respuesta['textoalumno']);
        $textodictat=$this->limpiaTexto($resultado['dictado']);

        //Paso 4: Comparamos los textos
        $dictat=$this->parteTexto($textodictat);
        $alumno=$this->parteTexto($textoalumno);
//return $dictat;

        $error=0;
        $errores[]="empezamos";
        $y=0;
        $res='<table border="1">';
        $res.='<tr><td>id</td><td>Texto X</td><td>Y</td><td>Texto Y</td><td>resultado</td><td>Errores</td><td>Texto Y</td><td>Z</td></tr>';


        $iguales=0;
        for ($x=0; $x<=count($dictat)-1; $x++)
        {
            $z=0;
            $res.='<tr>';
            $res.='<td>'.$x.'</td>';
            $res.='<td>'.$dictat[$x].'</td>';
            $res.='<td>'.$y.'</td>';
            $res.='<td>'.$alumno[$y].'</td>';
            
            if(isset($alumno[$x]))
            {
                if($dictat[$x]==$alumno[$y])
                {
                    $errores[$x]=0;
                    $iguales++;
                    $res.='<td>ok</td><td>'.$error.'</td><td>'.$alumno[$y].'</td><td>'.$z.'</td>';
                } else {
                    $res.='<td>Error</td>';

                    //Vemos si hay palabras de más
                    //Si la misma palabra está más adelante
                    $encontrado=0;
                    $contador=0;
                    for($z=1; $z<=4; $z++)
                    {
                        if(isset($alumno[$x+$z]))
                        {
                            if($dictat[$x]==$alumno[$y+$z])
                            {
                                $y=$y+$z;
                                $encontrado=1;
                                break;
                            } else {
                                $contador++;
                            }
                        }
                    }
                    if($encontrado==1)
                    {
                        $errores[$x]=1+$contador;
                        $res.='<td>'.$errores[$x].'</td>';
                        $res.='<td>'.$alumno[$y].'</td>';
                        $res.='<td>'.$z.'</td>';
                        //Falta cuantificar los errores
                    } else {
                        //Vemos si no ha escrito la palabra
                        $encontrado=0;
                        for($z=1; $z<=3; $z++)
                        {
                            if(isset($dictat[$x+$z]))
                            {
                                if($dictat[$x+$z]==$alumno[$y])
                                {
                                    $y--;
                                    $encontrado=1;
                                    break;
                                }
                            }
                        }
                        if($encontrado==1)
                        {
                            $errores[$x]=1;
                            $res.='<td>'.$errores[$x].'</td>';
                            $res.='<td>Palabra no escrita</td>';
                            $res.='<td>'.$z.'</td>';
                            //Falta cuantificar los errores
                        }
                    }
                }

            }
            $res.='</tr>';
            $y++;
        }
       $res.='</table>'; 
//return '<br/><br/>Número de errores='.array_sum($errores).$res;

        //Paso 5: url de vuelta
        session(['BC1' => '/dictats/'.$respuesta['dictado_id']]);
        session(['BC1texto' => 'trans("dictats_breadcrumb")']);
        session(['BC2' => '/exameninicio/'.$respuesta['dictado_id']]);
        session(['BC2texto' => 'Areas']);
        session(['BC4' => '/exameninicio/'.$respuesta['dictado_id']]);
        session(['BC4texto' => 'Areas']);
        //return session('BC1texto');

        //Paso 6: redirigimo a la vista
        return view('paginas.dictats.comprovadictat', compact('dictat', 'alumno', 'errores' ));
        

    }



}
