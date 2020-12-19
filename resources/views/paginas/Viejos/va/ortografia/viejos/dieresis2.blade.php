@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.dieresis_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.dieresis_h1') )}}@endsection

@section('breadcrumb1')<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.dieresis_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.dieresis_keywords') )}}@endsection

@section('main_content')

<div class="comment-text">
	<p>{{ html_entity_decode(trans('ortografia.dieresis_texto1') )}}</p>
</div>

<div class="row">
	<div class="col-3">
		<div class="card">
			<div class="box-body">
				<table class="table table-bordered" summary="{{trans('ortografia.byv_titulo1')}}">
					<thead>
						<tr>
							<th id="columna1" scope="col">Dièresi en la i</th>
							<th scope="col"> Dièresi en la u</th>
						</tr>
					</thead>
					<tr><td>( ï )</td>	<td>( ü )</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{trans('ortografia.dieresis_titulo2')}}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{trans('ortografia.byv_titulo2')}}">
					<thead>
						<tr>
							<th>{{trans('ortografia.dieresis_titulo2')}}</th>
							<th>Ejemplo 1</th>
							<th>Ejemplo 2</th>
						</tr>
					</thead>
					<tr>
						<td>{{trans('ortografia.dieresis_texto2')}}</td>
						<td>qüestió</td>
						<td>pingüí</td>
					</tr>
					<tr>
						<td>{{trans('ortografia.dieresis_texto3')}}</td>
						<td>raïm</td>
						<td>reüll</td>
					</tr>
					<tr>
						<td>{{trans('ortografia.dieresis_texto4')}}</td>
						<td>agraïa</td>
						<td>constituïa</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{trans('ortografia.dieresis_titulo3')}}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{trans('ortografia.byv_titulo3')}}">
					<thead>
						<tr>
							<th>{{trans('ortografia.dieresis_titulo3')}}</th>
							<th>Ejemplo 1</th>
							<th>Ejemplo 2</th>
						</tr>
					</thead>
					<tr>
						<td>{{trans('ortografia.dieresis_texto5')}}</td>
						<td>país</td>
						<td>conduíem</td>
					</tr>
					<tr>
						<td>{{trans('ortografia.dieresis_texto6')}}</td>
						<td>Infinitiu: disminuir</td>
						<td>Gerundi: agraint</td>
					</tr>
					<tr>
						<td></td>
						<td>Futur: intuiré</td>
						<td>Condicional: seduiria</td>
					</tr>					<tr>
						<td>{{trans('ortografia.dieresis_texto7')}}</td>
						<td>contraindicació</td>
						<td>coincidir</td>
					</tr>
					<tr>
						<td>{{trans('ortografia.dieresis_texto8')}}</td>
						<td>egoista</td>
						<td>Màrius</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
