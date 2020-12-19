<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
                return redirect('/es/home');
            } else {
                return redirect('/va/home');
            }
        } 
        return view('paginas.home');
    }

    public function home2()
    {
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if(session('lang')=="es")
        {
            return redirect('/es/home');
        } else {
            return redirect('/va/home');
        }
    }

    public function cookies($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/politica-de-cookies');
            } else {
               return redirect('/va/politica-de-cookies');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/politica-de-cookies';

        //Paso 3: Redirigimos a la vista
        return view('paginas.LOPD.politica-de-cookies', compact('miurl'));
    }

    public function privacidad($idm)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
               return redirect('/es/politica-de-privacidad');
            } else {
               return redirect('/va/politica-de-privacidad');
            }
        }

        switch (session('lang'))
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

        $miurl='/'.session('lang').'/politica-de-privacidad';

        //Paso 3: Redirigimos a la vista
        return view('paginas.LOPD.politica-de-privacidad', compact('miurl'));
    }



}
