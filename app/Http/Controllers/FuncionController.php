<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;  //Para cambio de idioma
use Request;

class FuncionController extends Controller
{

    public function porcentaje($contestadas, $total)
    {
		if($total==0){
			$resultado=0.0;
    	} else {
	        $resultado = intdiv(1000*$contestadas, $total)/10;
	    }
        return $resultado;
    }

    public function paisEnrutado($idm, $urles, $urlva)
    {
        //Paso 1: Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'va']); }
        if($idm!=session('lang'))
        {
            //return $milang;
            if(session('lang')=="es")
            {
                return redirect($urles);
            } else {
                return redirect($urlva);
            }
        }
    }

    public function change_lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();

        //$misurl = substr(back(), -5);
        //return $miurl;

        //return $locale.'---'.session('lang');
        if(!in_array($locale, ['va', 'es'])){ abort(400); }
        App::setLocale($locale);
        session(['lang' => $locale]);
        //return $lang.'---'.session('lang').'---'.App::currentLocale();;
        //return $miurl;
        return route('/prueba22');

    }

    
}
