<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Carbon\Carbon;  //Para obtener fecha actual
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
            'privacidad' => ['required'],
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
        $data['fecha'] = Carbon::now()->toTimeString();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'roll_id' => '1',
            'password' => Hash::make($data['password']),
            'apellido1' => $data['apellido1'],
            'apellido2' => $data['apellido2'],
            'confirmation_code' => $data['confirmation_code'],
            'privacidad' => $data['fecha']
        ]);

        // Enviamos el email de confirmación
        Mail::send('paginas.emails.confirmation_code', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])->subject('Por favor confirma tu correo');
        });

        return $user;
    }
}
