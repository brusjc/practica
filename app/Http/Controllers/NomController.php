<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomController extends Controller
{


//*******
//* Web *
//*******

    public function noms($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/noms');
            } else {
               return redirect('/va/noms');
            }
        }

        switch (session('lang'))
        {
            case "es":
                session(['BC1' => '/es/noms']);
                session(['BC1texto' => 'Nombres']);
                break;
            case "va":
                session(['BC1' => '/va/noms']);
                session(['BC1texto' => 'Noms']);
                break;
            default:
                session(['BC1' => '/va/noms']);
                session(['BC1texto' => 'Noms']);
                break;
        }

        $miurl='/'.session('lang').'/noms';

        //Paso 3: Redirigimos a la vista
        return view('paginas.noms.index', compact('miurl'));
    }

}
