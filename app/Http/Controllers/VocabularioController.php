<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VocabularioController extends Controller
{


//*******
//* Web *
//*******

    public function prueba_vocabulario()
    {
        //PASO 1: Obtenemos los comentarios
        $post = app('App\Http\Controllers\PostController')->showXId(1001);
        $post = @json_decode(json_encode($post), true);
        return $post;

		//Paso 3: redirigimo a la vista
        return view('paginas.vocabulario.index', compact('post'));
    }

    public function vocabulario($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('es/vocabulario');
            } else {
               return redirect('va/vocabulario');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                break;
        }

        $miurl='/'.session('lang').'/vocabulario';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.index', compact('miurl'));
    }

    public function lletres($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('es/el-nom-de-les-lletres');
            } else {
               return redirect('va/el-nom-de-les-lletres');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/el-nom-de-les-lletres']);
                session(['BC2texto' => 'Nombre de las letras']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/el-nom-de-les-lletres']);
                session(['BC2texto' => 'Nom de les lletres']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/el-nom-de-les-lletres']);
                session(['BC2texto' => 'Nom de les lletres']);
                break;
        }

        $miurl='/'.session('lang').'/el-nom-de-les-lletres';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.el-nom-de-les-lletres', compact('miurl'));
    }

    public function partsDia($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/parts-del-dia');
            } else {
               return redirect('/va/parts-del-dia');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/parts-del-dia']);
                session(['BC2texto' => 'Partes del día']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/parts-del-dia']);
                session(['BC2texto' => 'Parts del dia']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/parts-del-dia']);
                session(['BC2texto' => 'Parts del dia']);
                break;
        }

        $miurl='/'.session('lang').'/parts-del-dia';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.parts-del-dia', compact('miurl'));
    }

    public function diesSetmana($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/dies-de-la-setmana');
            } else {
               return redirect('/va/dies-de-la-setmana');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/dies-de-la-setmana']);
                session(['BC2texto' => 'Días de la semana']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/dies-de-la-setmana']);
                session(['BC2texto' => 'Dies de la setmana']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/dies-de-la-setmana']);
                session(['BC2texto' => 'Dies de la setmana']);
                break;
        }

        $miurl='/'.session('lang').'/dies-de-la-setmana';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.dies-de-la-setmana', compact('miurl'));
    }

    public function hores($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/les-hores');
            } else {
               return redirect('/va/les-hores');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/les-hores']);
                session(['BC2texto' => 'Las horas del día']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/les-hores']);
                session(['BC2texto' => 'Les hores del dia']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/les-hores']);
                session(['BC2texto' => 'Les hores del dia']);
                break;
        }

        $miurl='/'.session('lang').'/les-hores';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.les-hores', compact('miurl'));
    }

    public function numeros($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/numeros');
            } else {
               return redirect('/va/numeros');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/numeros']);
                session(['BC2texto' => 'Los números']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/numeros']);
                session(['BC2texto' => 'Els números']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/numeros']);
                session(['BC2texto' => 'Els números']);
                break;
        }

        $miurl='/'.session('lang').'/numeros';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.numeros', compact('miurl'));
    }

    public function cosHuma($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/cos-huma');
            } else {
               return redirect('/va/cos-huma');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/cos-huma']);
                session(['BC2texto' => 'Cuerpo humano']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/cos-huma']);
                session(['BC2texto' => 'Cos humà']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/cos-huma']);
                session(['BC2texto' => 'Cos humà']);
                break;
        }

        $miurl='/'.session('lang').'/cos-huma';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.cos-huma', compact('miurl'));
    }

    public function cuina($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/avui-qui-cuina');
            } else {
               return redirect('/va/avui-qui-cuina');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/avui-qui-cuina']);
                session(['BC2texto' => 'Hoy qué cocinamos']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/avui-qui-cuina']);
                session(['BC2texto' => 'Hui qui cuina']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/avui-qui-cuina']);
                session(['BC2texto' => 'Hui qui cuina']);
                break;
        }

        $miurl='/'.session('lang').'/avui-qui-cuina';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.avui-qui-cuina', compact('miurl'));
    }

    public function taula($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/parem-taula');
            } else {
               return redirect('/va/parem-taula');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/parem-taula']);
                session(['BC2texto' => 'Vocabulario de la mesa']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/parem-taula']);
                session(['BC2texto' => 'Vocabulari de la taula']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/parem-taula']);
                session(['BC2texto' => 'Vocabulari de la taula']);
                break;
        }

        $miurl='/'.session('lang').'/parem-taula';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.parem-taula', compact('miurl'));
    }

    public function ciutat($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/ciutat');
            } else {
               return redirect('/va/ciutat');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/ciutat']);
                session(['BC2texto' => 'Mobiliario urbano']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/ciutat']);
                session(['BC2texto' => 'Mobiliari urbà']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/ciutat']);
                session(['BC2texto' => 'Mobiliari urbà']);
                break;
        }

        $miurl='/'.session('lang').'/ciutat';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.ciutat', compact('miurl'));
    }

    public function teles($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/entre-teles');
            } else {
               return redirect('/va/entre-teles');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/entre-teles']);
                session(['BC2texto' => 'Entre telas']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/entre-teles']);
                session(['BC2texto' => 'Entre teles']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/entre-teles']);
                session(['BC2texto' => 'Entre teles']);
                break;
        }

        $miurl='/'.session('lang').'/entre-teles';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.entre-teles', compact('miurl'));
    }

    public function casa($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/casa');
            } else {
               return redirect('/va/casa');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/casa']);
                session(['BC2texto' => 'La casa']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/casa']);
                session(['BC2texto' => 'La casa']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/casa']);
                session(['BC2texto' => 'La casa']);
                break;
        }

        $miurl='/'.session('lang').'/casa';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.casa', compact('miurl'));
    }

    public function parentiu($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/relacions-de-parentiu');
            } else {
               return redirect('/va/relacions-de-parentiu');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/relacions-de-parentiu']);
                session(['BC2texto' => 'Las relaciones convencionales y de parentesco']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/relacions-de-parentiu']);
                session(['BC2texto' => 'Les relacions convencionals i de parentiu']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/relacions-de-parentiu']);
                session(['BC2texto' => 'Les relacions convencionals i de parentiu']);
                break;
        }

        $miurl='/'.session('lang').'/relacions-de-parentiu';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.relacions-de-parentiu', compact('miurl'));
    }

    public function mesos($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/mesos-any');
            } else {
               return redirect('/va/mesos-any');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/mesos-any']);
                session(['BC2texto' => 'Meses del año']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/mesos-any']);
                session(['BC2texto' => "Mesos de l'any"]);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/mesos-any']);
                session(['BC2texto' => "Mesos de l'any"]);
                break;
        }

        $miurl='/'.session('lang').'/mesos-any';

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.mesos-any', compact('miurl'));
    }

    public function tabla($idm, $id)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/tabla-ejercicios/'.$id);
            } else {
               return redirect('/va/tabla-ejercicios/'.$id);
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/tabla-ejercicios/'.$id]);
                session(['BC2texto' => 'Meses del año']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/tabla-ejercicios/'.$id]);
                session(['BC2texto' => "Mesos de l'any"]);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/tabla-ejercicios/'.$id]);
                session(['BC2texto' => "Mesos de l'any"]);
                break;
        }

        //Obtenemos los ejercicios de práctica
        $datos = app('App\Http\Controllers\EjercicioController')->showXIdXUser($id);
        $datos = @json_decode(json_encode($datos), true);
        //return $datos;

        $miurl='/'.session('lang').'/tabla-ejercicios/'.$id;

        //Paso 3: Redirigimos a la vista
        return view('paginas.pruebas.tabla-ejercicios', compact('miurl', 'id', 'datos'));
    }




}
