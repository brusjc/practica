<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    /********/
    /* HOME */
    /********/

    public function home($idm)
    {
        $urlblade='home';
        App::setLocale($idm);
        session(['locale' => $idm]);
        return view('paginas.home', compact('urlblade'));
    }

    public function home2()
    {
        //Comprobamos si la url corresponde al lenguaje
        if(!session('locale')) { session(['locale' => 'va']); }
        if(session('locale')=="es")
        {
            return redirect('/es/home');
        } else {
            return redirect('/va/home');
        }
    }

    public function cookies($idm)
    {
        $urlblade='politica-de-cookies';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/politica-de-cookies';
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/politica-de-cookies']);
                session(['BC1texto' => 'Política de cookies']);
                break;
            case "va":
                session(['BC1' => '/va/politica-de-cookies']);
                session(['BC1texto' => 'Política de cookies']);
                break;
            default:
                session(['BC1' => '/va/politica-de-cookies']);
                session(['BC1texto' => 'Política de cookies']);
                break;
        }

        return view('paginas.LOPD.politica-de-cookies', compact('miurl', 'urlblade'));
    }

    public function privacidad($idm)
    {
        $urlblade='politica-de-privacidad';
        App::setLocale($idm);
        session(['locale' => $idm]);
        $miurl='/'.session('locale').'/politica-de-privacidad';
        switch (session('locale'))
        {
            case "es":
                session(['BC1' => '/es/politica-de-privacidad']);
                session(['BC1texto' => 'Política de Privacidad']);
                break;
            case "va":
                session(['BC1' => '/va/politica-de-privacidad']);
                session(['BC1texto' => 'Política de Privacitat']);
                break;
            default:
                session(['BC1' => '/va/politica-de-privacidad']);
                session(['BC1texto' => 'Política de Privacitat']);
                break;
        }

        return view('paginas.LOPD.politica-de-privacidad', compact('miurl', 'urlblade'));
    }



}
