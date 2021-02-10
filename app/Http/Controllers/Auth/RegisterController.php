<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mail;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'apellido1' => ['required', 'string', 'max:255'],
            'apellido2' => ['nullable','string','max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['confirmation_code'] = Str::random(25);
        $now = new \DateTime();
        $data['fechaprivacidad'] = $now->format('d-m-Y H:i:s');
echo $data['fechaprivacidad'];
echo die();
        $user = User::create([
            'name' => $data['name'],
            'apellido1' => $data['apellido1'],
            'apellido2' => $data['apellido2'],
            'email' => $data['email'],
            'roll_id' => '1',
            'password' => Hash::make($data['password']),
            'confirmation_code' => $data['confirmation_code'],
        ]);

        // Enviamos el email de confirmación
        Mail::send('paginas.emails.confirmation_code', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])->subject('Por favor confirma tu correo');
        });

        return $user;
    }
}
