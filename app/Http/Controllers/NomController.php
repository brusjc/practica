<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class NomController extends Controller
{


//*******
//* Web *
//*******

    public function noms($idm)
    {
        $urlblade='noms';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/'.$urlblade;

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

        //Paso 3: Redirigimos a la vista
        return view('paginas.noms.index', compact('miurl', 'urlblade'));
    }

}
