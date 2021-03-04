<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class OrtografiaController extends Controller
{


//*********************
//* Variables enlaces *
//*********************

    protected $a = [
        "byv" => [
            "url" => "byv",
            "nombre" => "B y V",
            "imagen" => "/img/practicav/ortografia/byv-R.svg",
        ],
        "contraccio" => [
            "url" => "contraccio",
            "nombre" => "contraccio",
            "imagen" => "/img/practicav/ortografia/contraccio-R.svg",
        ],
        "apostrof" => [
            "url" => "apostrof",
            "nombre" => "L'apòstrof",
            "imagen" => "/img/practicav/ortografia/apostrof-R.svg",
        ],
        "eio" => [
            "url" => "eio",
            "nombre" => "E i O obertes",
            "imagen" => "/img/practicav/ortografia/eyo-R.svg",
        ],
        "acentuacion" => [
            "url" => "acentuacion",
            "nombre" => "L'accentuació",
            "imagen" => "/img/practicav/ortografia/acentuacion-R.svg",
        ],
        "dieresis" => [
            "url" => "dieresis",
            "nombre" => "La dièresi",
            "imagen" => "/img/practicav/ortografia/dieresis-R.svg",
        ],
        "diptong" => [
            "url" => "diptong",
            "nombre" => "Els diptongs",
            "imagen" => "/img/practicav/ortografia/diptong-R.svg",
        ],
        "diacritic" => [
            "url" => "diacritic",
            "nombre" => "L'accent diacrític",
            "imagen" => "/img/practicav/ortografia/diacritic-R.svg",
        ],
        "vocalisme" => [
            "url" => "vocalisme",
            "nombre" => "Vocalisme",
            "imagen" => "/img/practicav/ortografia/vocalisme-R.svg",
        ],
    ];




//*******
//* Web *
//*******

    public function ortografia($idm)
    {
        $urlblade='ortografia';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/ortografia';

        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/ortografia']);
                session(['BC1texto' => 'Ortografía']);
                break;
            case "va":
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                break;
            default:
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                break;
        }

        //Generamos los enlaces a otras páginas
        $enlaces[1]=$this->a["contraccio"];
        $enlaces[2]=$this->a["byv"];
        $enlaces[3]=$this->a["diacritic"];
        $enlaces[4]=$this->a["vocalisme"];
        return view('paginas.ortografia.index', compact('miurl', 'enlaces', 'urlblade'));
    }

    public function vocalisme($idm)
    {
        $urlblade='vocalisme';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/vocalisme';

        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/ortografia']);
                session(['BC1texto' => 'Ortografía']);
                session(['BC2' => '/es/vocalisme']);
                session(['BC2texto' => 'Ortografía']);
                break;
            case "va":
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/vocalisme']);
                session(['BC2texto' => 'Vocalisme']);
                break;
            default:
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/vocalisme']);
                session(['BC2texto' => 'Vocalisme']);
                break;
        }

        //Generamos los enlaces a otras páginas
        $enlaces[1]=$this->a["contraccio"];
        $enlaces[2]=$this->a["byv"];
        $enlaces[3]=$this->a["diacritic"];
        $enlaces[4]=$this->a["eio"];

        return view('paginas.ortografia.vocalisme', compact('miurl', 'enlaces', 'urlblade'));
    }

    public function byv($idm)
    {
        $urlblade='byv';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/byv';

        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/ortografia']);
                session(['BC1texto' => 'Ortografía']);
                session(['BC2' => '/es/byv']);
                session(['BC2texto' => 'B y V']);
                break;
            case "va":
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/byv']);
                session(['BC2texto' => 'B i V']);
                break;
            default:
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/byv']);
                session(['BC2texto' => 'B i V']);
                break;
        }

        //Generamos los enlaces a otras páginas
        $enlaces[1]=$this->a["acentuacion"];
        $enlaces[2]=$this->a["eio"];
        $enlaces[3]=$this->a["diacritic"];
        $enlaces[4]=$this->a["vocalisme"];

        return view('paginas.ortografia.byv', compact('miurl', 'enlaces', 'urlblade'));
    }

    public function acentuacion($idm)
    {
        $urlblade='acentuacion';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/acentuacion';

        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/ortografia']);
                session(['BC1texto' => 'Ortografía']);
                session(['BC2' => '/es/acentuacion']);
                session(['BC2texto' => 'Acentuación']);
                break;
            case "va":
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/acentuacion']);
                session(['BC2texto' => 'Accentuació']);
                break;
            default:
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/acentuacion']);
                session(['BC2texto' => 'Accentuació']);
                break;
        }

        //Generamos los enlaces a otras páginas
        $enlaces[1]=$this->a["contraccio"];
        $enlaces[2]=$this->a["byv"];
        $enlaces[3]=$this->a["diacritic"];
        $enlaces[4]=$this->a["vocalisme"];

        return view('paginas.ortografia.acentuacion', compact('miurl', 'enlaces', 'urlblade'));
    }

    public function eio($idm)
    {
        $urlblade='eio';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/eio';

        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/ortografia']);
                session(['BC1texto' => 'Ortografía']);
                session(['BC2' => '/es/eio']);
                session(['BC2texto' => 'e y o abiertas']);
                break;
            case "va":
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/eio']);
                session(['BC2texto' => 'e i o obertes']);
                break;
            default:
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/eio']);
                session(['BC2texto' => 'e i o obertes']);
                break;
        }

        //Generamos los enlaces a otras páginas
        $enlaces[1]=$this->a["acentuacion"];
        $enlaces[2]=$this->a["byv"];
        $enlaces[3]=$this->a["diacritic"];
        $enlaces[4]=$this->a["vocalisme"];

        return view('paginas.ortografia.eio', compact('miurl', 'enlaces', 'urlblade'));
    }

    public function dieresis($idm)
    {
        $urlblade='dieresis';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/dieresis';

        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/ortografia']);
                session(['BC1texto' => 'Ortografía']);
                session(['BC2' => '/es/dieresis']);
                session(['BC2texto' => 'Dieresis']);
                break;
            case "va":
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/dieresis']);
                session(['BC2texto' => 'Dieresis']);
                break;
            default:
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/dieresis']);
                session(['BC2texto' => 'Dieresis']);
                break;
        }

        //Generamos los enlaces a otras páginas
        $enlaces[1]=$this->a["contraccio"];
        $enlaces[2]=$this->a["diptong"];
        $enlaces[3]=$this->a["diacritic"];
        $enlaces[4]=$this->a["vocalisme"];

        return view('paginas.ortografia.dieresis', compact('miurl', 'enlaces', 'urlblade'));
    }

    public function diptong($idm)
    {
        $urlblade='diptong';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/diptong';

        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/ortografia']);
                session(['BC1texto' => 'Ortografía']);
                session(['BC2' => '/es/diptong']);
                session(['BC2texto' => 'Diptongos']);
                break;
            case "va":
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/diptong']);
                session(['BC2texto' => 'Diptongs']);
                break;
            default:
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/diptong']);
                session(['BC2texto' => 'Diptongs']);
                break;
        }

        //Generamos los enlaces a otras páginas
        $enlaces[1]=$this->a["dieresis"];
        $enlaces[2]=$this->a["eio"];
        $enlaces[3]=$this->a["diacritic"];
        $enlaces[4]=$this->a["vocalisme"];

        return view('paginas.ortografia.diptong', compact('miurl', 'enlaces', 'urlblade'));
    }

    public function diacritic($idm)
    {
        $urlblade='diacritic';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/diacritic';

        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/ortografia']);
                session(['BC1texto' => 'Ortografía']);
                session(['BC2' => '/es/diacritic']);
                session(['BC2texto' => 'Acento diacrítico']);
                break;
            case "va":
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/diacritic']);
                session(['BC2texto' => 'Accent diacrític']);
                break;
            default:
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/diacritic']);
                session(['BC2texto' => 'Accent diacrític']);
                break;
        }

        //Generamos los enlaces a otras páginas
        $enlaces[1]=$this->a["contraccio"];
        $enlaces[2]=$this->a["apostrof"];
        $enlaces[3]=$this->a["diptong"];
        $enlaces[4]=$this->a["eio"];

        return view('paginas.ortografia.diacritic', compact('miurl', 'enlaces', 'urlblade'));
    }

    public function apostrof($idm)
    {
        $urlblade='apostrof';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/apostrof';

        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/ortografia']);
                session(['BC1texto' => 'Ortografía']);
                session(['BC2' => '/es/apostrof']);
                session(['BC2texto' => 'apóstrofo']);
                break;
            case "va":
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/apostrof']);
                session(['BC2texto' => 'Apòstrof']);
                break;
            default:
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/apostrof']);
                session(['BC2texto' => 'Apòstrof']);
                break;
        }

        //Generamos los enlaces a otras páginas
        $enlaces[1]=$this->a["contraccio"];
        $enlaces[2]=$this->a["byv"];
        $enlaces[3]=$this->a["diacritic"];
        $enlaces[4]=$this->a["eio"];

        return view('paginas.ortografia.apostrof', compact('miurl', 'enlaces', 'urlblade'));
    }

    public function contraccio($idm)
    {
        $urlblade='contraccio';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/contraccio';

        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/ortografia']);
                session(['BC1texto' => 'Ortografía']);
                session(['BC2' => '/es/contraccio']);
                session(['BC2texto' => 'Contracción']);
                break;
            case "va":
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/contraccio']);
                session(['BC2texto' => 'Contracció']);
                break;
            default:
                session(['BC1' => '/va/ortografia']);
                session(['BC1texto' => 'Ortografia']);
                session(['BC2' => '/va/contraccio']);
                session(['BC2texto' => 'Contracció']);
                break;
        }

        //Generamos los enlaces a otras páginas
        $enlaces[1]=$this->a["diptong"];
        $enlaces[2]=$this->a["byv"];
        $enlaces[3]=$this->a["diacritic"];
        $enlaces[4]=$this->a["eio"];

        return view('paginas.ortografia.contraccio', compact('miurl', 'enlaces', 'urlblade'));
    }

}