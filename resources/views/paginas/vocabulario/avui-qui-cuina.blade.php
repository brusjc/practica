@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('vocabulario.cuina_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('vocabulario.cuina_titulo1') )}}
@endsection

@section('breadcrumb1')
	<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('vocabulario.cuina_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('vocabulario.cuina_keywords') )}}
@endsection

@section('main_content')

	<div class="comment-text">
		<p>{{ html_entity_decode(trans('vocabulario.cuina_texto1') )}}</p>
	</div>


	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Pactica el vocabulary</h3>
				</div>
				<div class="box-body pad table-responsive">
					<div class="col-md-3">
						<a href="/practicainicio/14"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>





@endsection
