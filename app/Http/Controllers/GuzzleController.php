<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nivel;

class NivelController extends Controller
{
    public function index()
    {
		//echo'Estamos en nivel index';
        $niveles = Nivel::all();
        if (count($niveles) > 0) {
            $success = [
                'error' => 0,
                'message' => ""
            ];
            $data = [
                'respuesta' => $niveles
            ];
            return response()->json([
                'status' => $success,
                'data' => $data
            ]);
        } else {
            $success = [
                'error' => 1,
                'message' => 'Error al obtener los niveles'
            ];
            $data = [
                'respuesta' => null
            ];
            return response()->json([
                'status' => $success,
                'data' => $data
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
