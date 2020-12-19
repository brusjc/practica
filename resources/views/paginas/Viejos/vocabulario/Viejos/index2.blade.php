@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('vocabulario.vocabulario_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('vocabulario.vocabulario_h1') )}}@endsection

@section('descripcion'){{ html_entity_decode(trans('vocabulario.vocabulario_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('vocabulario.vocabulario_keywords') )}}@endsection

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
		<p>{{ html_entity_decode(trans('vocabulario.vocabulario_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.vocabulario_texto2') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.vocabulario_texto3') )}}</p>
	</div>
</div>


	<div class="row mt-3 mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/el-nom-de-les-lletres">{{ trans('message.nombresletras') }}</a>
		</div>				
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/parts-del-dia">{{ trans('message.partesdia') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/dies-de-la-setmana">{{ trans('message.diassemana') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/mesos-any">{{ trans('message.mesesano') }}</a>
		</div>
	</div>	

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/les-hores">{{ trans('message.horas') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/numeros">{{ trans('message.numeros') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/cos-huma">{{ trans('message.partescuerpo') }}</a>
		</div>
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/avui-qui-cuina">{{ trans('message.hoyquecocinamos') }}</a>
		</div>				
	</div>	

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/parem-taula">{{ trans('message.ponermesa') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/entre-teles">{{ trans('message.entretelas') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/ciutat">{{ trans('message.ciudad') }}</a>
		</div>
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/hogar">{{ trans('message.casa') }}</a>
		</div>				
	</div>	

	<div class="row mb-2">			
		<div class="col-lg-3 col-md-3">
			<a class="mb-2 btn btn-block btn-info" href="/les-relacions-convencionals-i-de-parentiu">{{ trans('message.relacionesconvencionales') }}</a>
		</div>		
		<div class="col-lg-3 col-md-3">
			
		</div>		
		<div class="col-lg-3 col-md-3">
			
		</div>
	</div>	
@endsection
