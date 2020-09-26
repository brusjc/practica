@extends('layouts.app')

@section('contentheader_title'){{trans('privacidad.cookies_title')}}@endsection

@section('contentheader_h1'){{trans('privacidad.cookies_titulo1')}}@endsection

@section('descripcion'){{trans('privacidad.cookies_descripcion')}}@endsection

@section('keywords'){{trans('privacidad.cookies_keywords')}}@endsection

@section('main_content')

<div class="row">
	<div class="col-12">
		<div class="comment-text">
			<p>{{html_entity_decode(trans('privacidad.cookies_texto01'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto02'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto03'))}}</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="comment-text">
			<h2>{{html_entity_decode(trans('privacidad.cookies_titulo01'))}}</h2>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto04'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto05'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto06'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto07'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto08'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto09'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto10'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto11'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto12'))}}</p>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto13'))}}</p>
			<ul>
				<li>{{html_entity_decode(trans('privacidad.cookies_texto14'))}}</li>
				<li>{{html_entity_decode(trans('privacidad.cookies_texto15'))}}</li>
				<li>{{html_entity_decode(trans('privacidad.cookies_texto16'))}}</li>
				<li>{{html_entity_decode(trans('privacidad.cookies_texto17'))}}</li>
			</ul>
			<p>{{html_entity_decode(trans('privacidad.cookies_texto18'))}}</p>
		</div>
	</div>
</div>


@endsection
