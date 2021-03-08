@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('vocabulario.casa_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.casa_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.casa_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.casa_keywords') }}@endsection

@section('main_content')

<x-franjaPubliIzq>
	<slot>
		<p>{{ trans('vocabulario.casa_texto1') }}</p>
		<p>{{ trans('vocabulario.casa_texto2') }}</p>
	</slot>
</x-franjaPubliIzq>


<x-franjafotoizq 
	url="/img/practicav/vocabulario/casa.svg"
	title="{{ trans('vocabulario.casa_imgtitle20') }}"
    alt="{{ trans('vocabulario.casa_imgalt20') }}">
	<p>{{ trans('vocabulario.casa_texto1') }}</p>
	<p>{{ trans('vocabulario.casa_texto2') }}</p>
	<p>{{ trans('vocabulario.casa_texto3') }}</p>
	<p>{{ trans('vocabulario.casa_texto4') }}</p>
	<p>{{ trans('vocabulario.casa_texto5') }}</p>
</x-franjafotoizq>

<x-franjafotodcha 
	url="/img/practicav/vocabulario/casa.svg"
	title="{{ trans('vocabulario.casa_imgtitle20') }}"
    alt="{{ trans('vocabulario.casa_imgalt20') }}">
	<p>{{ trans('vocabulario.casa_texto1') }}</p>
	<p>{{ trans('vocabulario.casa_texto2') }}</p>
	<p>{{ trans('vocabulario.casa_texto3') }}</p>
	<p>{{ trans('vocabulario.casa_texto4') }}</p>
	<p>{{ trans('vocabulario.casa_texto5') }}</p>
</x-franjafotodcha>

<x-franjafotoizq 
	url="/img/practicav/vocabulario/casa.svg"
	title="{{ trans('vocabulario.casa_imgtitle20') }}"
    alt="{{ trans('vocabulario.casa_imgalt20') }}">
	<p>{{ trans('vocabulario.casa_texto1') }}</p>
	<p>{{ trans('vocabulario.casa_texto2') }}</p>
	<p>{{ trans('vocabulario.casa_texto3') }}</p>
	<p>{{ trans('vocabulario.casa_texto4') }}</p>
	<p>{{ trans('vocabulario.casa_texto5') }}</p>
</x-franjafotoizq>


@endsection
