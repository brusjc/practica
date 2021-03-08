<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

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
        $urlblade='vocabulario';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch (session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.index', compact('miurl', 'urlblade'));
    }

    public function lletres($idm)
    {
        $urlblade='el-nom-de-les-lletres';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        return view('paginas.vocabulario.el-nom-de-les-lletres', compact('miurl', 'urlblade'));
    }

    public function partsDia($idm)
    {
        $urlblade='parts-del-dia';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.parts-del-dia', compact('miurl', 'urlblade'));
    }

    public function diesSetmana($idm)
    {
        $urlblade='dies-de-la-setmana';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.dies-de-la-setmana', compact('miurl', 'urlblade'));
    }

    public function hores($idm)
    {
        $urlblade='les-hores';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.les-hores', compact('miurl', 'urlblade'));
    }

    public function numeros($idm)
    {
        $urlblade='numeros';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.numeros', compact('miurl', 'urlblade'));
    }

    public function cosHuma($idm)
    {
        $urlblade='cos-huma';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.cos-huma', compact('miurl', 'urlblade'));
    }

    public function cuina($idm)
    {
        $urlblade='avui-qui-cuina';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.avui-qui-cuina', compact('miurl', 'urlblade'));
    }

    public function taula($idm)
    {
        $urlblade='parem-taula';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.parem-taula', compact('miurl', 'urlblade'));
    }

    public function ciutat($idm)
    {
        $urlblade='ciutat';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.ciutat', compact('miurl', 'urlblade'));
    }

    public function teles($idm)
    {
        $urlblade='entre-teles';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.entre-teles', compact('miurl', 'urlblade'));
    }

    public function casa($idm)
    {
        $urlblade='hogar';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
        {
            case "es":
                session(['BC1' => '/es/vocabulario']);
                session(['BC1texto' => 'Vocabulario']);
                session(['BC2' => '/es/hogar']);
                session(['BC2texto' => 'La casa']);
                break;
            case "va":
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/hogar']);
                session(['BC2texto' => 'La casa']);
                break;
            default:
                session(['BC1' => '/va/vocabulario']);
                session(['BC1texto' => 'Vocabulari']);
                session(['BC2' => '/va/hogar']);
                session(['BC2texto' => 'La casa']);
                break;
        }

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.casa', compact('miurl', 'urlblade'));
    }

    public function parentiu($idm)
    {
        $urlblade='relacions-de-parentiu';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.relacions-de-parentiu', compact('miurl', 'urlblade'));
    }

    public function mesos($idm)
    {
        $urlblade='mesos-any';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.vocabulario.mesos-any', compact('miurl', 'urlblade'));
    }

    public function tabla($idm, $id)
    {
        $urlblade='tabla-ejercicios/'.$id;
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl="/{{session('locale')}}/examennuevo/".$urlblade;

        switch(session('locale'))
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

        //Paso 3: Redirigimos a la vista
        return view('paginas.pruebas.tabla-ejercicios', compact('miurl', 'id', 'datos', 'urlblade'));
    }




}
