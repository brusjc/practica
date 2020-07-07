@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('ortografia.vocalisme_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('ortografia.vocalisme_titulo1') )}}
@endsection

@section('breadcrumb1')
	<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('ortografia.vocalisme_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('ortografia.vocalisme_keywords') )}}
@endsection

@section('main_content')

<div class="row">
	<div class="col-6">
		<p>{{ html_entity_decode(trans('ortografia.vocalisme_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('ortografia.vocalisme_texto2') )}}</p>
		<p>{{ html_entity_decode(trans('ortografia.vocalisme_texto3') )}}</p>
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

<div class="row mt-3">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{trans('ortografia.vocalisme_titulo2')}}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.byv_titulo2')}}">
					<thead>
						<tr>
							<th id="columna1" scope="col"> Vocals</th>
							<th scope="col"> Ejemplo 1</th>
							<th scope="col"> Ejemplo 2</th>
						</tr>
					</thead>
					<tr><td>a/e</td>	<td>*assamblea (assemblea)</td>	<td>*evaluació (avaluació)</td></tr>
					<tr><td>e/i</td>	<td>*línea (línia)</td>			<td>*coneiximents (coneixements)</td></tr>
					<tr><td>o/u</td>	<td>*montanya (muntanya)</td>	<td>*suspirar (sospirar)</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
