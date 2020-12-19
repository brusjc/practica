@extends('layouts.app')

@section('contentheader_title'){{ trans('examenes.jqcv_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.jqcv_h1') }}@endsection

@section('descripcion'){{ trans('examenes.jqcv_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.jqcv_keywords') }}@endsection

@section('main_content')

<div class="row">
	<div class="col-5">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-7412986561454436"
		     data-ad-slot="6463281785"
		     data-ad-format="auto"
		     data-full-width-responsive="true"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	<div class="col-7">
		<p>{!! trans('examenes.jqcv_texto1') !!}</p>
		<p>{!! trans('examenes.jqcv_texto2')!!}</p>
		<p>{{ trans('examenes.jqcv_texto3') }}</p>
	</div>
</div>

<div class="row">
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box btn-info text-center">
			<div class="inner">
				<a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examena1">{{ trans('examenes.jqcv_titulo11') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examena1">{{ trans('examenes.jqcv_texto11') }}</a>
	            <a href="/examena1" class="small-box-footer btn-info">{{ trans('examenes.jqcv_enlace11') }}  <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box btn-info text-center">
			<div class="inner">
				<a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examena2">{{ trans('examenes.jqcv_titulo12') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examena2">{{ trans('examenes.jqcv_texto12') }}</a>
	            <a href="/examena2" class="small-box-footer btn-info">{{ trans('examenes.jqcv_enlace12') }}  <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box btn-info text-center">
			<div class="inner">
				<a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examenb1">{{ trans('examenes.jqcv_titulo13') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenb1">{{ trans('examenes.jqcv_texto13') }}</a>
	            <a href="/examenb1" class="small-box-footer btn-info">{{ trans('examenes.jqcv_enlace13') }}  <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box btn-info text-center">
			<div class="inner">
				<a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examenb2">{{ trans('examenes.jqcv_titulo14') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenb2">{{ trans('examenes.jqcv_texto14') }}</a>
	            <a href="/examenb2" class="small-box-footer btn-info">{{ trans('examenes.jqcv_enlace14') }}  <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box btn-info text-center">
			<div class="inner">
				<a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examenc1">{{ trans('examenes.jqcv_titulo15') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenc1">{{ trans('examenes.jqcv_texto15') }}</a>
	            <a href="/examenc1" class="small-box-footer btn-info">{{ trans('examenes.jqcv_enlace15') }}  <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box btn-info text-center">
			<div class="inner">
				<a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examenc2">{{ trans('examenes.jqcv_titulo16') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenc2">{{ trans('examenes.jqcv_texto16') }}</a>
	            <a href="/examenc2" class="small-box-footer btn-info">{{ trans('examenes.jqcv_enlace16') }}  <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box btn-info text-center">
			<div class="inner">
				<a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examenelemental">{{ trans('examenes.jqcv_titulo17') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenelemental">{{ trans('examenes.jqcv_texto17') }}</a>
	            <a href="/examenelemental" class="small-box-footer btn-info">{{ trans('examenes.jqcv_enlace17') }}  <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box btn-info text-center">
			<div class="inner">
				<a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examenoral">{{ trans('examenes.jqcv_titulo18') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenoral">{{ trans('examenes.jqcv_texto18') }}</a>
	            <a href="/examenoral" class="small-box-footer btn-info">{{ trans('examenes.jqcv_enlace18') }}  <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box btn-info text-center">
			<div class="inner">
				<a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examenmitja">{{ trans('examenes.jqcv_titulo19') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenmitja">{{ trans('examenes.jqcv_texto19') }}</a>
	            <a href="/examenmitja" class="small-box-footer btn-info">{{ trans('examenes.jqcv_enlace19') }}  <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-xs-6">
		<!-- small box -->
		<div class="small-box btn-info text-center">
			<div class="inner">
				<a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examensuperior">{{ trans('examenes.jqcv_titulo20') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examensuperior">{{ trans('examenes.jqcv_texto20') }}</a>
	            <a href="/examensuperior" class="small-box-footer btn-info">{{ trans('examenes.jqcv_enlace20') }}  <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="row">			
	<div class="col-lg-12 col-md-12 mt-5">
		<p>{{ trans('examenes.jqcv_texto4') }}</p>
		<p>{{ trans('examenes.jqcv_texto5') }}</p>
	</div>
</div>


<div class="col-6">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<ins class="adsbygoogle"
	     style="display:block"
	     data-ad-client="ca-pub-7412986561454436"
	     data-ad-slot="6463281785"
	     data-ad-format="auto"
	     data-full-width-responsive="true"></ins>
	<script>
	     (adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>

<h2>{{ trans('examenes.jqcv_titulo1') }}</h2>

<div class="row">			
	@foreach($respuesta['data'] as $grado)
		<div class="col-lg-3 col-md-3 mb-2 text-capitalize">
			<a class="btn btn-block  btn-info btn-lg  color-palette" href="examen{{strtolower(str_replace('à', 'a', $grado['nombre']))}}">{{$grado['nombre']}}</a>
		</div>
	@endforeach
</div>		


@endsection
