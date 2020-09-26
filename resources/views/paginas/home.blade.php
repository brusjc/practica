@extends('layouts.app')

@section('contentheader_title'){{ trans('examenes.jqcv_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.jqcv_titulo1') }}@endsection

@section('descripcion'){{ trans('examenes.jqcv_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.jqcv_keywords') }}@endsection

@section('main_content')

	<div class="row">
		<div class="col-lg-6 col-md-6">
			<div class="callout callout-info">
                <p>{{ html_entity_decode(trans('examenes.jqcv_texto1') )}}</p>
			</div>
		</div>
		<div class="col-lg-6 col-md-6">
			<div class="callout callout-info">
				<p>{{ html_entity_decode(trans('examenes.jqcv_texto2') )}}</p>
			</div>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-12 col-md-12">
			<img style="width: 100%;" class="img-fluid img-thumbnail" src="/img/practicav/prepara-els-nivells-de-valencia.jpg" alt="Attachment">
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="callout callout-info">
				<p>{{ html_entity_decode(trans('examenes.jqcv_texto3') )}}</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="callout callout-info">
				<p>{{ html_entity_decode(trans('examenes.jqcv_texto4') )}}</p>
			</div>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="callout callout-info">
				<p>{{ html_entity_decode(trans('examenes.jqcv_texto5') )}}</p>
			</div>
		</div>
	</div>	

	<div class="row">			
		<div class="col-lg-12 col-md-12 mt-5">
			<h2>Practica valencià</h2>
		</div>
	</div>

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/examenes-jqcv">
				<i class="fa fa-edit"></i> Practica exàmens JQCV 
			</a>
		</div>				
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/vocabulario/vocabulario.php">
				<i class="fa fa-edit"></i> Practica vocabulari </a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/ortografia/ortografia.php"><i class="fa fa-edit"></i> Practica ortografia </a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/dictados/dictados.php"><i class="fa fa-edit"></i> Practica dictats</a>
		</div>
	</div>	


	<div class="row">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/cuina/cuina.php"><i class="fa fa-edit"></i> Practica cuina</a>
		</div>				
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/gent/gent.php"><i class="fa fa-edit"></i> Practica gent</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/pobles/pobles.php"><i class="fa fa-edit"></i> Practica pobles</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="http://www.practicavalenciano.es/noms/noms.php"><i class="fa fa-edit"></i> Practica els noms de persones</a>
		</div>
	</div>		
	
	

@endsection
