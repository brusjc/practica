@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.ortografia_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.ortografia_h1') )}}@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.ortografia_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.ortografia_keywords') )}}@endsection

@section('main_content')
	<div class="row">
		<div class="col-7">
			<p>{{ html_entity_decode(trans('ortografia.ortografia_texto1') )}}</p>
			<p>{{ html_entity_decode(trans('ortografia.ortografia_texto2') )}}</p>
		</div>
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
	</div>


	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/vocalisme">{{ trans('ortografia.vocalisme_breadcrumb') }}</a>
		</div>				
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/byv">{{ trans('ortografia.byv_breadcrumb') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/acentuacion">{{ trans('ortografia.acentuacion_breadcrumb') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/eio">{{ trans('ortografia.eio_breadcrumb') }}</a>
		</div>
	</div>	

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/dieresis">{{ trans('ortografia.dieresis_breadcrumb') }}</a>
		</div>				
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/diftong">{{ trans('ortografia.diptongos_breadcrumb') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/diacritic">{{ trans('ortografia.diacritic_breadcrumb') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/apostrof">{{ trans('ortografia.apostrof_breadcrumb') }}</a>
		</div>
	</div>	

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="contraccio">{{ trans('ortografia.contraccio_breadcrumb') }}</a>
		</div>
	</div>	
@endsection
