<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MispruebasController extends Controller
{
    

    //Incluir fecha actual en una variable
    function fechaActual()
    {
        $data['fechaprivacidad'] = date("d-m-Y H:i:s");
        return $data['fechaprivacidad'];
    }




}
