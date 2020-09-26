@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.diptongos_titulo1') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.diptongos_h1') )}}@endsection

@section('breadcrumb1')<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.diptongos_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.diptongos_keywords') )}}@endsection

@section('main_content')

<div class="comment-text">
	<p>{{ html_entity_decode(trans('ortografia.diptongos_texto1') )}}</p>
</div>

<div class="comment-text">
	<h2>{{ html_entity_decode(trans('ortografia.diptongos_titulo1') )}}</h2>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('ortografia.diptongos_texto2') )}}</p>
</div>

<div class="row">
	<div class="col-5 text-center">
		<div class="card">
			<div class="box-body">
				<table class="table table-bordered" summary="{{trans('ortografia.diptongos_titulo1')}}">
					<thead>
						<tr>
							<th colspan="2">vocals</th>
						</tr>
					</thead>
					<tr><td>Fortes</td>		<td>a, e, o</td></tr>
					<tr><td>Febles</td>		<td>i, u</td></tr>
				</table>
			</div>
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
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('ortografia.diptongos_texto3') )}}</p>
</div>

<div class="comment-text">
	<h2>{{ html_entity_decode(trans('ortografia.diptongos_titulo2') )}}</h2>
</div>

<div class="row">
	<div class="col-6 text-center">
		<img src="/img/practicav/ortografia/diptongo creciente.gif" with="300px" alt="{{ html_entity_decode(trans('ortografia.diptongos_titulo2') )}}">
	</div>
	<div class="col-6">
		<div class="comment-text">
			<p>{{ html_entity_decode(trans('ortografia.diptongos_texto4') )}}</p>
			<p>{{ html_entity_decode(trans('ortografia.diptongos_texto5') )}}</p>
			<p>{{ html_entity_decode(trans('ortografia.diptongos_texto6') )}}</p>
			<p>{{ html_entity_decode(trans('ortografia.diptongos_texto7') )}}</p>
		</div>
	</div>	
</div>

<div class="row text-center">
	<div class="col-6">
		<div class="card">
			<div class="box-body">
				<table class="table table-bordered" summary="{{html_entity_decode(trans('ortografia.diptongos_titulo2'))}}">
					<thead>
						<tr>
							<th scope="col" colspan="2"></th>
						</tr>
					</thead>
					<tr><td>gua</td>	<td>qua</td></tr>
					<tr><td>güe</td>	<td>qüe</td></tr>
					<tr><td>güi</td>	<td>qüi</td></tr>
					<tr><td>guo</td>	<td>quo</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="comment-text">
	<h2>{{ html_entity_decode(trans('ortografia.diptongos_titulo3') )}}</h2>
</div>

<div class="row">
	<div class="col-6 text-center">
		<img src="/img/practicav/ortografia/diptongo decreciente.gif" with="300px" alt="{{ html_entity_decode(trans('ortografia.diptongos_titulo3') )}}">
	</div>
	<div class="col-6">
		<div class="comment-text">
			<p>{{ html_entity_decode(trans('ortografia.diptongos_texto8') )}}</p>
			<p>{{ html_entity_decode(trans('ortografia.diptongos_texto9') )}}</p>
			<p>{{ html_entity_decode(trans('ortografia.diptongos_texto10') )}}</p>
		</div>
	</div>	
</div>

<div class="row text-center">
	<div class="col-6">
		<div class="card">
			<div class="box-body">
				<table class="table table-bordered" summary="{{html_entity_decode(trans('ortografia.diptongos_titulo3'))}}">
					<thead>
						<tr>
							<th>Unió</th>
							<th></th>
							<th>i</th>
							<th>Unió</th>
							<th></th>
							<th>u</th>
						</tr>
					</thead>
					<tr><td>a+i</td>	<td>=</td>	<td>ai</td>	<td>a+u</td>	<td>=</td>	<td>au</td>	</tr>
					<tr><td>e+i</td>	<td>=</td>	<td>ei</td>	<td>e+u</td>	<td>=</td>	<td>eu</td>	</tr>
					<tr><td>o+i</td>	<td>=</td>	<td>oi</td>	<td>i+u</td>	<td>=</td>	<td>iu</td>	</tr>
					<tr><td>u+i</td>	<td>=</td>	<td>ui</td>	<td>o+u</td>	<td>=</td>	<td>ou</td>	</tr>
					<tr><td></td>		<td></td>	<td></td>	<td>u+u</td>	<td>=</td>	<td>uu</td>	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="comment-text">
	<p>{{ html_entity_decode(trans('ortografia.diptongos_texto11') )}}</p>
</div>

@endsection
