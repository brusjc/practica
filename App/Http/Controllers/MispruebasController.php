<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MispruebasController extends Controller
{
    

    //Incluir fecha actual en una variable
    function fechaActual()
    {
        $now = new \DateTime();
        $data['fechaprivacidad'] = $now->format('d-m-Y H:i:s');
        return $data['fechaprivacidad'];
    }




}
