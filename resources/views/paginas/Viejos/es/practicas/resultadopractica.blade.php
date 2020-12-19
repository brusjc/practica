@extends('layouts.app')

@section('contentheader_title'){{ trans('practicas.practicas_breadcrumb') }}@endsection

@section('contentheader_h1'){{ trans('practicas.practicas_h1') }}@endsection

@section('breadcrumb1')<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a> @endsection

@section('descripcion'){{ trans('practicas.practicas_descripcion') }}@endsection

@section('keywords'){{ trans('practicas.practicas_keywords') }}@endsection

@section('main_content')
	<div class="callout callout-info">
		<h4>Resultado de la práctica</h4>
		El resultado del ejercicio es 
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green">{{$datos['nota']}}</span>
			</div>
		</div>
	</div>
	<div class="box-body pad table-responsive">
		<div class="col-md-2">
			<a href="{{$datos['pagina']['url']}}"><button type="button" class="btn btn-block btn-primary btn-lg">Volver</button></a>
		</div>
	</div>
@endsection

