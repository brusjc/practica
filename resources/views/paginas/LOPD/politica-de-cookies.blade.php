@extends('layouts.frontandia.general')

@section('contentheader_title'){{trans('privacidad.cookies_title')}}@endsection

@section('contentheader_h1'){{trans('privacidad.cookies_h1')}}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1'){{ trans('privacidad.cookies_breadcrumb') }}@endsection

@section('descripcion'){{trans('privacidad.cookies_descripcion')}}@endsection

@section('keywords'){{trans('privacidad.cookies_keywords')}}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
		<p>{{trans('privacidad.cookies_texto01')}}</p>
		<p>{{trans('privacidad.cookies_texto02')}}</p>
		<p>{{trans('privacidad.cookies_texto03')}}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{trans('privacidad.cookies_titulo01')}}</h2>
		<p>{{trans('privacidad.cookies_texto04')}}</p>
		<p>{{trans('privacidad.cookies_texto05')}}</p>
		<p>{{trans('privacidad.cookies_texto06')}}</p>
		<p>{{trans('privacidad.cookies_texto07')}}</p>
		<p>{{trans('privacidad.cookies_texto08')}}</p>
		<p>{{trans('privacidad.cookies_texto09')}}</p>
		<p>{{trans('privacidad.cookies_texto10')}}</p>
		<p>{{trans('privacidad.cookies_texto11')}}</p>
		<p>{{trans('privacidad.cookies_texto12')}}</p>
		<p>{{trans('privacidad.cookies_texto13')}}</p>
		<ul>
			<li>{{trans('privacidad.cookies_texto14')}}</li>
			<li>{{trans('privacidad.cookies_texto15')}}</li>
			<li>{{trans('privacidad.cookies_texto16')}}</li>
			<li>{{trans('privacidad.cookies_texto17')}}</li>
		</ul>
		<p>{{trans('privacidad.cookies_texto18')}}</p>
	</div>
</section>

@endsection
