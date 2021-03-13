@extends('layouts.frontandia.general2')

@section('main_content')

Hola


<p>{{ __('home.home_texto1') }}</p>
<p>{{ __('home.home_texto2') }}</p>
<p>{{ __('home.home_texto3') }}</p>

{{session('locale')}} {{App::currentLocale()}}
<br/>
<br/>

Imprimimos la imagen
<br/>
@if(!Auth::guest())
    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
@endif
<br/>
@endsection
