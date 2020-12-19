<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}
