@extends('layouts.app')

@section('contentheader_title')
    {{ trans('examenes.jqcv_title') }}
@endsection

@section('contentheader_h1')
    {{ trans('examenes.jqcv_h1') }}
@endsection

@section('descripcion')
    {{ trans('examenes.jqcv_descripcion') }}
@endsection

@section('keywords')
    {{ trans('examenes.jqcv_keywords') }}
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
		<p>{{ html_entity_decode(trans('examenes.jqcv_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('examenes.jqcv_texto2') )}}</p>
	</div>
</div>

<div class="row">			
	@foreach($respuesta['data'] as $grado)
		<div class="col-lg-3 col-md-3 mb-2 text-capitalize">
			<a class="btn btn-block  btn-info btn-lg  color-palette" href="examen{{strtolower(str_replace('à', 'a', $grado['nombre']))}}">{{$grado['nombre']}}</a>
		</div>
	@endforeach
</div>		

<div class="row">			
	<div class="col-lg-12 col-md-12 mt-5">
		<p>{{ html_entity_decode(trans('examenes.jqcv_texto3') )}}</p>
		<p>{{ html_entity_decode(trans('examenes.jqcv_texto4') )}}</p>
		<p>{{ html_entity_decode(trans('examenes.jqcv_texto5') )}}</p>
	</div>
</div>

<div class="row">			
	<div class="col-lg-12 col-md-12 mt-5">
		<h2>Exàmens JQCV</h2>
	</div>
</div>
<div class="row">
	<div class="col-6">
		<ul>
			@foreach($respuesta['data'] as $grado)
				<li><a href="examen{{strtolower(str_replace('à', 'a', $grado['nombre']))}}">Examen {{$grado['nombre']}}</a></li>
			@endforeach
		</ul>
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
</div>
@endsection
