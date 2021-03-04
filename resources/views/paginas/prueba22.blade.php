@extends('layouts.frontandia.general2')

@section('main_content')

Hola


<p>{{ __('home.home_texto1') }}</p>
<p>{{ __('home.home_texto2') }}</p>
<p>{{ __('home.home_texto3') }}</p>

{{session('locale')}} {{App::currentLocale()}}

@endsection
