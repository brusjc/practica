@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('vocabulario.ciutat_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('vocabulario.ciutat_titulo1') )}}
@endsection

@section('breadcrumb1')
	<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('vocabulario.ciutat_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('vocabulario.ciutat_keywords') )}}
@endsection

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
		<p>{{ html_entity_decode(trans('vocabulario.ciutat_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.ciutat_texto2') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.ciutat_texto3') )}}</p>
	</div>
</div>

<div class="row mt-3">
	<div class="box-body pad table-responsive">
		<div class="col-md-3">
			<a href="/practicainicio/14"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>
</div>
@endsection
