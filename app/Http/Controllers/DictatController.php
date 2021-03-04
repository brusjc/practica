<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dictat;
use App;

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
        $texto = preg_replace("([^A-Za-z0-9 !'áéíóúÁÉÍÓÚàèìòùÀÈÌÒÙ-·çÇ])", ' ', $texto);
        
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

        //Revisamos cada palabra del dictado correcto
        for ($x=0; $x<=count($dictat)-1; $x++)
        {  
            //A: Vemos si existe esa posición en alumno          
            if(!isset($alumno[$y]))
            {
                $errores[$x]=1;
                $res.='<tr>';
                $res.='<td>'.$x.'</td>';
                $res.='<td>'.$dictat[$x].'</td>';
                $res.='<td></td>';
                $res.='<td></td>';
                $res.='<td>'.$errores[$x].'</td>';
                $res.='<td>Palabra no escrita</td>';
                $res.='<td>'.$z.'</td>';
            } else {
                $res.='<tr>';
                $res.='<td>'.$x.'</td>';
                $res.='<td>'.$dictat[$x].'</td>';
                $res.='<td>'.$y.'</td>';
                $res.='<td>'.$alumno[$y].'</td>';

                //B: Alumno = Dictado
                if($dictat[$x]==$alumno[$y])
                {
                    $errores[$x]=0;
                    $iguales++;
                    $res.='<td>ok</td><td>'.$error.'</td><td>'.$alumno[$y].'</td><td>'.$z.'</td>';
                } else {
                    //C: No es igual Alumno que dictado

                    //Si la misma palabra está más adelante
                    $encontrado=0;
                    $contador=0;
                    for($z=1; $z<=4; $z++)
                    {
                        if(isset($alumno[$y+$z]))
                        {
                            if($dictat[$x]==$alumno[$y+$z])
                            {
                                $y=$y+$z;
                                $encontrado=1;
                                break;
                            }
                        }
                    }

                    if($encontrado==0)
                    {
                        //C1: No existe en el texto del alumno
                        $errores[$x]=1;
                        $res.='<td>'.$errores[$x].'</td>';
                        $res.='<td>Palabra no escrita</td>';
                        $res.='<td>'.$z.'</td>';
                        $y--;
                    } else {
                        //C2: existe el texto en otra posición
                        //Si el anterio es error no cuantificamos éste
                        if($errores[$x-1]=1)
                        {
                            $errores[$x]=0;
                        } else {
                            $errores[$x]=1;
                        }
                        $res.='<td>'.$errores[$x].'</td>';
                        $res.='<td>'.$alumno[$y].'</td>';
                        $res.='<td>'.$z.'</td>';
                    }
                }
            }
            $res.='</tr>';
            $y++;
        }


        //D: comprobamos si hay más palabras en el texto del alumno
        if(isset($alumno[$y]))
        {
            $a=0;
            //return 'Hay más palabras '.$y.' --- '.count($alumno);
            for($z=$y; $z<=count($alumno)-1; $z++)
            {
                $a++;
                $x++;
                $errores[$x]=1;
                $res.='<tr>';
                $res.='<td>'.$x.'</td>';
                $res.='<td></td>';
                $res.='<td>'.$y.'</td>';
                $res.='<td>'.$alumno[$z].'</td>';
                $res.='<td>'.$errores[$x].'</td>';
                $res.='<td>Palabra sobrante</td>';
                $res.='<td>'.$z.'</td>';
                $res.='</tr>';
            }

        }
        $res.='</table>'; 
        //return '<br/><br/>Número de errores='.array_sum($errores).$res;

        //Paso 5: url de vuelta
        session(['BC3' => '/exameninicio/'.$respuesta['dictado_id']]);
        session(['BC3texto' => 'Comprobador']);
        //return session('BC1texto');

        //Paso 6: redirigimo a la vista
        return view('paginas.dictats.comprovadictat', compact('dictat', 'alumno', 'errores' ));
    }

    public function dictats($idm)
    {
        $urlblade='dictats';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

        //Paso 2: Creamos los breadcrumbs
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/dictats']);
                session(['BC1texto' => 'Dictados']);
                break;
            case "va":
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                break;
            default:
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.dictats.index', compact('miurl', 'urlblade'));
    }

    public function dictat200906mm($idm)
    {
        $urlblade='dictat-mitja-junio-2009-mati';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

        //Paso 2: Creamos los breadcrumbs
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/dictats']);
                session(['BC1texto' => 'Dictados']);
                session(['BC2' => '/es/dictat-mitja-junio-2009-mati']);
                session(['BC2texto' => 'Mitjà junio 2009 mañana']);
                break;
            case "va":
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-junio-2009-mati']);
                session(['BC2texto' => 'juny 2009 Mitjà matí']);
                break;
            default:
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-junio-2009-mati']);
                session(['BC2texto' => 'juny 2009 Mitjà matí']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.dictats.dictat200906mm', compact('miurl', 'urlblade'));
    }

    public function dictat200906mv($idm)
    {
        $urlblade='dictat-mitja-junio-2009-vesprada';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

        //Paso 2: Creamos los breadcrumbs
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/dictats']);
                session(['BC1texto' => 'Dictados']);
                session(['BC2' => '/es/dictat-mitja-junio-2009-vesprada']);
                session(['BC2texto' => 'Mitjà junio 2009 tarde']);
                break;
            case "va":
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-junio-2009-vesprada']);
                session(['BC2texto' => 'juny 2009 Mitjà vesprada']);
                break;
            default:
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-junio-2009-vesprada']);
                session(['BC2texto' => 'juny 2009 Mitjà vesprada']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.dictats.dictat200906mv', compact('miurl', 'urlblade'));
    }

    public function dictat201006mm($idm)
    {
        $urlblade='dictat-mitja-junio-2010-mati';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

        //Paso 2: Creamos los breadcrumbs
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/dictats']);
                session(['BC1texto' => 'Dictados']);
                session(['BC2' => '/es/dictat-mitja-junio-2010-mati']);
                session(['BC2texto' => 'Mitjà junio 2010 mañana']);
                break;
            case "va":
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-junio-2010-mati']);
                session(['BC2texto' => 'juny 2010 Mitjà matí']);
                break;
            default:
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-junio-2010-mati']);
                session(['BC2texto' => 'juny 2010 Mitjà matí']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.dictats.dictat201006mm', compact('miurl', 'urlblade'));
    }

    public function dictat201006mv($idm)
    {
        $urlblade='dictat-mitja-junio-2010-vesprada';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

        //Paso 2: Creamos los breadcrumbs
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/dictats']);
                session(['BC1texto' => 'Dictados']);
                session(['BC2' => '/es/dictat-mitja-junio-2010-vesprada']);
                session(['BC2texto' => 'Mitjà junio 2010 tarde']);
                break;
            case "va":
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-junio-2010-vesprada']);
                session(['BC2texto' => 'juny 2010 Mitjà vesprada']);
                break;
            default:
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-junio-2010-vesprada']);
                session(['BC2texto' => 'juny 2010 Mitjà vesprada']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.dictats.dictat201006mv', compact('miurl', 'urlblade'));
    }

    public function dictat201011mm($idm)
    {
        $urlblade='dictat-mitja-novembre-2010-mati';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

        //Paso 2: Creamos los breadcrumbs
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/dictats']);
                session(['BC1texto' => 'Dictados']);
                session(['BC2' => '/es/dictat-mitja-novembre-2010-mati']);
                session(['BC2texto' => 'Mitjà noviembre 2010 mañana']);
                break;
            case "va":
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-novembre-2010-mati']);
                session(['BC2texto' => 'novembre 2010 Mitjà matí']);
                break;
            default:
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-novembre-2010-mati']);
                session(['BC2texto' => 'novembre 2010 Mitjà matí']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.dictats.dictat201011mm', compact('miurl', 'urlblade'));
    }

    public function dictat201111mm($idm)
    {
        $urlblade='dictat-mitja-novembre-2011-mati';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

        //Paso 2: Creamos los breadcrumbs
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/dictats']);
                session(['BC1texto' => 'Dictados']);
                session(['BC2' => '/es/dictat-mitja-novembre-2011-mati']);
                session(['BC2texto' => 'Mitjà noviembre 2011 mañana']);
                break;
            case "va":
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-novembre-2011-mati']);
                session(['BC2texto' => 'novembre 2011 Mitjà matí']);
                break;
            default:
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-novembre-2011-mati']);
                session(['BC2texto' => 'novembre 2011 Mitjà matí']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.dictats.dictat201111mm', compact('miurl', 'urlblade'));
    }

    public function dictat201111mv($idm)
    {
        $urlblade='dictat-mitja-novembre-2011-vesprada';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

        //Paso 2: Creamos los breadcrumbs
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/dictats']);
                session(['BC1texto' => 'Dictados']);
                session(['BC2' => '/es/dictat-mitja-novembre-2011-vesprada']);
                session(['BC2texto' => 'Mitjà noviembre 2011 tarde']);
                break;
            case "va":
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-novembre-2011-vesprada']);
                session(['BC2texto' => 'novembre 2011 Mitjà vesprada']);
                break;
            default:
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-mitja-novembre-2011-vesprada']);
                session(['BC2texto' => 'novembre 2011 Mitjà vesprada']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.dictats.dictat201111mv', compact('miurl', 'urlblade'));
    }

    public function dictat200906sm($idm)
    {
        $urlblade='dictat-superior-junio-2009-mati';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

        //Paso 2: Creamos los breadcrumbs
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/dictats']);
                session(['BC1texto' => 'Dictados']);
                session(['BC2' => '/es/dictat-superior-junio-2009-mati']);
                session(['BC2texto' => 'Superior junio 2009 mañana']);
                break;
            case "va":
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-superior-junio-2009-mati']);
                session(['BC2texto' => 'juny 2009 Superior matí']);
                break;
            default:
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-superior-junio-2009-mati']);
                session(['BC2texto' => 'juny 2009 Superior matí']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.dictats.dictat200906sm', compact('miurl', 'urlblade'));
    }

    public function dictat201006sm($idm)
    {
        $urlblade='dictat-superior-junio-2010-mati';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

        //Paso 2: Creamos los breadcrumbs
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/dictats']);
                session(['BC1texto' => 'Dictados']);
                session(['BC2' => '/es/dictat-superior-junio-2010-mati']);
                session(['BC2texto' => 'Superior junio 2010 mañana']);
                break;
            case "va":
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-superior-junio-2010-mati']);
                session(['BC2texto' => 'juny 2010 Superior matí']);
                break;
            default:
                session(['BC1' => '/va/dictats']);
                session(['BC1texto' => 'Dictats']);
                session(['BC2' => '/va/dictat-superior-junio-2010-mati']);
                session(['BC2texto' => 'juny 2010 Superior matí']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.dictats.dictat201006sm', compact('miurl', 'urlblade'));
    }


}
