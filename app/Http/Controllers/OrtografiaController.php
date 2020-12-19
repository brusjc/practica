<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/ortografia');
            } else {
               return redirect('/va/ortografia');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/ortografia';

        //Paso 3: Redirigimos a la vista
        return view('paginas.ortografia.index', compact('miurl', 'enlaces'));
    }

    public function vocalisme($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/vocalisme');
            } else {
               return redirect('/va/vocalisme');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/vocalisme';

        //Paso 3: Redirigimos a la vista
        return view('paginas.ortografia.vocalisme', compact('miurl', 'enlaces'));
    }

    public function byv($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/byv');
            } else {
               return redirect('/va/byv');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/byv';

        //Paso 3: Redirigimos a la vista
        return view('paginas.ortografia.byv', compact('miurl', 'enlaces'));
    }

    public function acentuacion($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/acentuacion');
            } else {
               return redirect('/va/acentuacion');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/acentuacion';

        //Paso 3: Redirigimos a la vista
        return view('paginas.ortografia.acentuacion', compact('miurl', 'enlaces'));
    }

    public function eio($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/eio');
            } else {
               return redirect('/va/eio');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/eio';

        //Paso 3: Redirigimos a la vista
        return view('paginas.ortografia.eio', compact('miurl', 'enlaces'));
    }

    public function dieresis($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/dieresis');
            } else {
               return redirect('/va/dieresis');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/dieresis';

        //Paso 3: Redirigimos a la vista
        return view('paginas.ortografia.dieresis', compact('miurl', 'enlaces'));
    }

    public function diptong($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/diptong');
            } else {
               return redirect('/va/diptong');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/diptong';

        //Paso 3: Redirigimos a la vista
        return view('paginas.ortografia.diptong', compact('miurl', 'enlaces'));
    }

    public function diacritic($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/diacritic');
            } else {
               return redirect('/va/diacritic');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/diacritic';

        //Paso 3: Redirigimos a la vista
        return view('paginas.ortografia.diacritic', compact('miurl', 'enlaces'));
    }

    public function apostrof($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/apostrof');
            } else {
               return redirect('/va/apostrof');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/apostrof';

        //Paso 3: Redirigimos a la vista
        return view('paginas.ortografia.apostrof', compact('miurl', 'enlaces'));
    }

    public function contraccio($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/contraccio');
            } else {
               return redirect('/va/contraccio');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/contraccio';

        //Paso 3: Redirigimos a la vista
        return view('paginas.ortografia.contraccio', compact('miurl', 'enlaces'));
    }

}