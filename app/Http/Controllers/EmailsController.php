<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmailsController extends Controller
{
	//Función que verifica a un usuarios que se está registrando
	public function verify($code)
	{
		//return 'Estamos en verify';
	    $user = User::where('confirmation_code', $code)->first();

	    if (!$user)
	        return redirect('/');

	    $user->confirmed = true;
	    $user->confirmation_code = null;
	    $user->save();

	    return redirect('/home')->with('notification', 'Has confirmado correctamente tu correo!');
	}
}
