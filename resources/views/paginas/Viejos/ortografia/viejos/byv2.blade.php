@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.byv_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.byv_h1') )}}@endsection

@section('breadcrumb1')<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.byv_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.byv_keywords') )}}@endsection

@section('main_content')

<div class="row">
	<div class="col-6">
		<p>{{ html_entity_decode(trans('ortografia.byv_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('ortografia.byv_texto2') )}}</p>
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
				<h2 class="box-title">{{trans('ortografia.byv_titulo2')}}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.byv_titulo2')}}">
					<thead>
						<tr>
							<th>Escrivin B</th>
							<th>Example</th>
						</tr>
					</thead>
					<tr><td>Darrere de m</td>	<td>bomber</td></tr>
					<tr><td>Davant de l y r</td>	<td>semblar / arbre</td></tr>
					<tr><td>En paraules de la mateixa família en què la b alterna en la p</td>	<td>llop - lloba</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{trans('ortografia.byv_titulo3')}}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.byv_titulo3')}}">
					<thead>
						<tr>	<th>Escrivin V</th>
								<th>Example</th>
						</tr>
					</thead>
					<tr><td>Darrere de n</td>	<td>convidar</td></tr>
					<tr><td>En les desinències de l’imperfet d’indicatiu dels verbs de la 1a conjugació.</td>	<td>ballava</td></tr>
					<tr><td>En les paraules de la mateixa família en què la u alterna amb la v.</td>	<td>blau - blava</td></tr>
				</table>
			</div>	
		</div>
	</div>
</div>

	<div class="box-body pad table-responsive">
		<div class="col-md-3">
			<a href="/practicainicio/14"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>


@endsection
