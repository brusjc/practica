@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('vocabulario.meses_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('vocabulario.meses_h1') )}}@endsection

@section('breadcrumb1')<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('vocabulario.meses_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('vocabulario.meses_keywords') )}}@endsection

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
		<p>{{ html_entity_decode(trans('vocabulario.meses_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.meses_texto2') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.meses_texto3') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.meses_texto4') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.meses_texto5') )}}</p>
	</div>
</div>

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">{{ trans('vocabulario.meses_titulo2') }}</h3>
		</div>

		<div class="box-body no-padding">
			<table class="table table-condensed" summary="tabla de los meses del año.">
				<thead>
					<tr>
						<th id="columna1" scope="col">MESOS</th>
						<th scope="col">DURACIÓ</th>
					</tr>
				</thead>
				<tr><td>Gener</td>		<td>Té 31 dies.</td></tr>
				<tr><td>Febrer</td>		<td>Té 28 dies, encara que també té 29 quan és bisext.</td></tr>
				<tr><td>Març</td>		<td>Té 31 dies.</td></tr>
				<tr><td>Abril</td>		<td>Té 30 dies</td></tr>
				<tr><td>Maig </td>		<td>Té 31 dies.</td></tr>
				<tr><td>Juny</td>		<td>Té 30 dies</td></tr>
				<tr><td>Juliol</td>		<td>Té 31 dies.</td></tr>
				<tr><td>Agost</td>		<td>Té 31 dies.</td></tr>
				<tr><td>Setembre</td>	<td>Té 30 dies</td></tr>
				<tr><td>Octubre</td>	<td>Té 31 dies.</td></tr>
				<tr><td>Novembre</td>	<td>Té 30 dies</td></tr>
				<tr><td>Desembre</td>	<td>Té 31 dies.</td></tr>
			</table>
		</div>
	</div>


<div class="row">
	<div class="col-4">
	</div>	
	<div class="col-md-3">
        @if(!Auth::guest())
			<a class="btn btn-block btn-primary btn-lg" href="/practicainicio/5">Practica</a>
		@else
			<a href="/login"><button type="button" class="btn btn-block btn-primary btn-lg">{{ html_entity_decode(trans('message.siginsession') )}}</button></a>
		@endif
	</div>
</div>

@endsection
