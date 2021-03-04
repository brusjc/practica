@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('privacidad.privacidad_title')}}@endsection

@section('contentheader_h1'){{ trans('privacidad.privacidad_h1')}}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1'){{ trans('privacidad.privacidad_breadcrumb') }}@endsection

@section('descripcion'){{ trans('privacidad.privacidad_descripcion')}}@endsection

@section('keywords'){{ trans('privacidad.privacidad_keywords')}}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid text-justify">
		<h2>{{ trans('privacidad.privacidad_titulo01') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto01') }}</p>
		<p>{{ trans('privacidad.privacidad_texto02') }}</p>
		<p>{{ trans('privacidad.privacidad_texto03') }}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo02') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto04') }}</p>
		<p>{{ trans('privacidad.privacidad_texto05') }}</p>
		<p>{{ trans('privacidad.privacidad_texto06') }}</p>
		<p>{{ trans('privacidad.privacidad_texto07') }}</p>
		<p>{{ trans('privacidad.privacidad_texto08') }}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo03') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto09') }}</p>
		<p>{{ trans('privacidad.privacidad_texto10') }}</p>
		<p>{{ trans('privacidad.privacidad_texto11') }}</p>
		<p>{{ trans('privacidad.privacidad_texto12') }}</p>
		<p>{{ trans('privacidad.privacidad_texto13') }}</p>
		<p>{{ trans('privacidad.privacidad_texto14') }}</p>
		<ul>
			<li>{{ trans('privacidad.privacidad_texto15') }}</li>
			<li>{{ trans('privacidad.privacidad_texto16') }}</li>
			<li>{{ trans('privacidad.privacidad_texto17') }}</li>
			<li>{{ trans('privacidad.privacidad_texto18') }}</li>
			<li>{{ trans('privacidad.privacidad_texto19') }}</li>
		</ul>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo04') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto20') }}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo05') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto21') }}</p>
		<p>{{ trans('privacidad.privacidad_texto22') }}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo06') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto23') }}</p>
		<p>{{ trans('privacidad.privacidad_texto24') }}</p>
		<p>{{ trans('privacidad.privacidad_texto25') }}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo07') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto26') }}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo08') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto27') }}</p>
		<ul>
			<li>{{ trans('privacidad.privacidad_texto28') }}</li>
			<li>{{ trans('privacidad.privacidad_texto29') }}</li>
			<li>{{ trans('privacidad.privacidad_texto30') }}</li>
			<li>{{ trans('privacidad.privacidad_texto31') }}</li>
		</ul>
		<p>{{ trans('privacidad.privacidad_texto32') }}</p>
		<p>{{ trans('privacidad.privacidad_texto33') }}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo09') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto34') }}</p>
		<ul>
			<li>{{ trans('privacidad.privacidad_texto35') }}</li>
			<li>{{ trans('privacidad.privacidad_texto36') }}</li>
			<li>{{ trans('privacidad.privacidad_texto37') }}</li>
			<li>{{ trans('privacidad.privacidad_texto38') }}</li>
		</ul>
		<p>{{ trans('privacidad.privacidad_texto39') }}</p>
		<p>{{ trans('privacidad.privacidad_texto40') }}</p>
		<p>{{ trans('privacidad.privacidad_texto41') }}</p>
		<p>{{ trans('privacidad.privacidad_texto42') }}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo10') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto43') }}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo11') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto44') }}</p>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo12') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto45') }}</p>
		<ul>
			<li>{{ trans('privacidad.privacidad_texto46') }}</li>
			<li>{{ trans('privacidad.privacidad_texto47') }}</li>
			<li>{{ trans('privacidad.privacidad_texto48') }}</li>
		</ul>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<h2>{{ trans('privacidad.privacidad_titulo13') }}</h2>
		<p>{{ trans('privacidad.privacidad_texto49') }}</p>
	</div>
</section>

@endsection
