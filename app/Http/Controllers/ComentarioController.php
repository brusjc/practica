<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Comentario;

class ComentarioController extends Controller
{


//*******
//* API *
//*******

    public function store($comentario, $id)
    {
    	//Paso 1: Sanitizamos las variables
        $id=(int)$id;
        $comentario['parent_id']=(int)$comentario['parent_id'];
        if($comentario['parent_id']==0)
        {
        	$comentario['parent_id']=null;
        }
        if ($id==0) {
            return response()->json(['status'=>['error'=>1, 'message'=>'Error en datos iniciales1'], 'data'=>null]);
        }

		if ($comentario['content']!=trim(strip_tags($comentario['content'])))
		{ 
            return response()->json(['status' =>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }
        //return $comentario['content'];

        //Paso 2: Incluimos el registro
        if(trim($comentario['content'])!="")
        {
        	//return $comentario['content'].' --- '.$id.' --- '.$comentario['parent_id'].' --- '.\auth()->id();
        	try
        	{
	            $dato = new Comentario();
	            $dato->contenido = $comentario['content'];
	            $dato->post_id = $id;
	            $dato->parent_id = $comentario['parent_id'];
	            $dato->user_id = \auth()->id();
	            $dato->save();
	            $registrofinal = Comentario::latest('id')->first();
	        } catch (\Exception $e) {
	            return response()->json(['status'=>['error'=>1, 'message'=>"Error al crear el comentario"], 'data'=>$e]);
	        }

	        return response()->json(['status' =>['error'=>0, 'message'=>''], 'data'=>$registrofinal]);
	    }
    }

    public function maximo()
    {
    	try{
    		$dato= Comentario::max('post_id');
        } catch (\Exception $e){
            return response()->json(['status' =>['error' => 1, 'message' => 'Poxid01: Error al obtener los datos'], 'data' => null]);
        }

        return response()->json(['status' =>['error'=>0, 'message'=>''], 'data'=>$dato]);
    }

    public function show()
    {
        //Paso 1: Obtenemos datos del resultado, de la pregunta y del subarea
        try{
            $dato = Comentario::orderby('created_at', 'DESC')->get();
        } catch (\Exception $e){
            return response()->json(['status' =>['error' => 1, 'message' => 'Poxid01: Error al obtener los datos'], 'data' => null]);
        }
        //return $dato;

       //Paso 3: enviamos el json
        return response()->json(['status'=>['error'=>0, 'message'=>''], 'data'=>$dato]);
    }



//*******
//* Web *
//*******

	public function comentarios()
    {
        //Paso 1: Obtenemos de todos los post
        $posts = $this->show();
        $posts = @json_decode(json_encode($post), true);
        $posts=$posts['original']['data'];
        //return $posts;

        //Paso3: enviamos a la vista
        return view('paginas.comentarios.comentarios', compact('posts'));

    }

	public function comentario1(Request $request)
    {
        //Paso 1: Sanitizamos las variables
        $comentario=$request->all();
        $id=null;
		if ($comentario['content']!=strip_tags($comentario['content'])){
            return response()->json(['status'=>['error'=>1, 'message'=>'Error en datos iniciales2'], 'data'=>null]);
        }
		$comentario['parent_id']=null;
        //return 'estamos aqui';


        //Paso 2: Obtenemos el máximo registro
        $ultimo = $this->maximo();
        $ultimo = @json_decode(json_encode($ultimo), true);
        $ultimo=$ultimo['original']['data']+1;
        //return $ultimo;


        //Paso 3: creamos el nuevo registro
        $posts = $this->store($comentario, $ultimo);
        //return $posts;
        $posts = @json_decode(json_encode($posts), true);
        //return $posts;
        $posts=$posts['original']['data'];

        //Paso 3: Consultamos los comentarios nuevamente
        return redirect()->action('ComentarioController@comentarios');

    }




}
