<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VocabularioController extends Controller
{


//*******
//* Web *
//*******

    public function vocabulario()
    {
        //PASO 1: Obtenemos los comentarios
        $post = app('App\Http\Controllers\PostController')->showXId(1001);
        $post = @json_decode(json_encode($post), true);
        return $post;

		//Paso 3: redirigimo a la vista
        return view('paginas.vocabulario.index', compact('post'));
    }





}
