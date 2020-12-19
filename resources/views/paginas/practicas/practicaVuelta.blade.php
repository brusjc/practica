@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ trans('practicas.practicas_breadcrumb') }}@endsection

@section('contentheader_h1'){{ trans('practicas.practicas_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a> @endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('breadcrumb3'){{ trans('practicas.practicas_breadcrumb') }}@endsection

@section('descripcion'){{ trans('practicas.practicas_descripcion') }}@endsection

@section('keywords'){{ trans('practicas.practicas_keywords') }}@endsection

@section('main_content')
	<div class="callout callout-info mt-5">
		<h2>Resultat de la pràctica</h2>
		
		<div class="mt-5">
			@if($datos['nota'] >= 5)
				<div class="btn btn-success info-box">
					<span class="info-box-ico color-green">El resultat de l'exercici és {{$datos['nota']}}</span>
				</div>
			@else
				<div class="btn btn-danger info-box">
					<span class="info-box-icon colorg-green">El resultat de l'exercici és {{$datos['nota']}}</span>
				</div>
			@endif
		</div>
	</div>

	<div class="box-body pad table-responsive mt-5 mb-5">
		<div class="col-md-2">
			<a href="{{session('BC2')}}"><button type="button" class="btn btn-block btn-primary btn-lg">Tornar</button></a>
		</div>
	</div>
@endsection

