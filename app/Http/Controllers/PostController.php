<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function show()
    {
        //Paso 1: Obtenemos datos del resultado, de la pregunta y del subarea
        try{
            $post = Post::orderby('created_at', 'DESC')
                ->with('Postcomment')
                ->get();
        } catch (\Exception $e){
            return response()->json(['status' =>['error' => 1, 'message' => 'Poxid01: Error al obtener los datos'], 'data' => null]);
        }
        //return $post;

       //Paso 3: enviamos el json
        if(count($post)==0){
            return response()->json(['status'=>['error'=>2, 'message'=>'Poxid02: No hay datos para la consulta'], 'data'=>null]);
        } else {
            return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$post]);
        } 
    }

    public function showXId($id)
    {
        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Poxid03: Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 2: Obtenemos datos del resultado, de la pregunta y del subarea
        try{
            $dato = Post::where('id', $id)
                ->with('Postcomment')
                ->get();
        } catch (\Exception $e){
            return response()->json(['status' =>['error' => 1, 'message' => 'Poxid01: Error al obtener el post'], 'data' => null]);
        }
        //return $dato;

       //Paso 3: enviamos el json
        return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$dato]);
    }


//*******
//* Web *
//*******

    public function posts()
    {
        //Paso 1: Obtenemos de todos los post
        $post = $this->show();
        $post = @json_decode(json_encode($post), true);
        $post=$post['original']['data'];
        //return $post;

        //Paso3: enviamos a la vista
        return view('paginas.comentarios.index', compact('post'));

    }

    public function postXId($id)
    {
        //Paso 1:Comprobamos las variables
        $id=(int)$id;
        if ($id==0) {
            return response()->json(['status' =>['error'=>3, 'message'=>'Poxid03: Error en datos iniciales'], 'data'=>null]);
        }

        //Paso 2: Obtenemos de todos los post
        $post = $this->showXId($id);
        $post = @json_decode(json_encode($post), true);
        $post=$post['original']['data'][0];
        //return $post;

        //Paso3: enviamos a la vista
        return view('paginas.comentarios.show', compact('post'));

    }
    






}