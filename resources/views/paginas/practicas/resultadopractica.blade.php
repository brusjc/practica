@extends('layouts.app')

@section('contentheader_title')
    Resultado de la práctica
@endsection

@section('contentheader_h1')
    Resultado de la práctica
@endsection

@section('breadcrumb1')
	<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>
@endsection

@section('descripcion')
    "Resultado de la práctica"
@endsection

@section('keywords')
    "Realizando examen, realizando una práctica"
@endsection

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
			<a href="/{{$datos['pagina']['enlace']}}"><button type="button" class="btn btn-block btn-primary btn-lg">Volver</button></a>
		</div>
	</div>
@endsection

