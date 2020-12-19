@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('noms.noms_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('noms.noms_titulo1') )}}
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('noms.noms_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('noms.noms_keywords') )}}
@endsection

@section('main_content')

<div class="comment-text">
	<p>{{ html_entity_decode(trans('noms.noms_texto1') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto2') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto3') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto4') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto5') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto6') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto7') )}}</p>
</div>

<div class="row">
	<div class="col-10">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{trans('noms.noms_tituloR')}}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.byv_titulo2')}}">
					<thead>
						<tr>
							<th>{{trans('noms.noms_titulo3')}}</th>
							<th>{{trans('noms.noms_titulo4')}}</th>
							<th>{{trans('noms.noms_titulo5')}}</th>
							<th>{{trans('noms.noms_titulo5')}}</th>
						</tr>
					</thead>
					<tr><td>Ra</td><td>Ra</td><td></td><td></td></tr>
					<tr><td>Rafael</td><td>Rafael</td><td>Rafel</td><td></td></tr>
					<tr><td>Rafaela</td><td>Rafaela</td><td>Rafela</td><td></td></tr>
					<tr><td>Raimunda</td><td>Raimunda</td><td>Raimona</td><td></td></tr>
					<tr><td>Raimundo</td><td>Raimon</td><td>Raimund</td><td></td></tr>
					<tr><td>Rainiero</td><td>Rainieri</td><td></td><td></td></tr>
					<tr><td>Raisa</td><td>Raisa</td><td></td><td></td></tr>
					<tr><td>Ramira</td><td>Ramira</td><td></td><td></td></tr>
					<tr><td>Ramiro</td><td>Ramir</td><td></td><td></td></tr>
					<tr><td>Ramón</td><td>Ramon</td><td></td><td></td></tr>
					<tr><td>Ramona</td><td>Ramona</td><td></td><td></td></tr>
					<tr><td>Ramsés</td><td>Ramsés</td><td></td><td></td></tr>
					<tr><td>Raquel</td><td>Raquel</td><td></td><td></td></tr>
					<tr><td>Raúl</td><td>Raül</td><td>Ràfols</td><td></td></tr>
					<tr><td>Rebeca</td><td>Rebeca</td><td></td><td></td></tr>
					<tr><td>Recareda</td><td>Recareda</td><td></td><td></td></tr>
					<tr><td>Recaredo</td><td>Recared</td><td></td><td></td></tr>
					<tr><td>Regina</td><td>Regina</td><td></td><td></td></tr>
					<tr><td>Reina</td><td>Reina</td><td></td><td></td></tr>
					<tr><td>Remedios</td><td>Remei</td><td></td><td></td></tr>
					<tr><td>Remigia</td><td>Remígia</td><td></td><td></td></tr>
					<tr><td>Remigio</td><td>Remigi</td><td></td><td></td></tr>
					<tr><td>Remo</td><td>Remus</td><td></td><td></td></tr>
					<tr><td>Rémulo</td><td>Rèmul</td><td></td><td></td></tr>
					<tr><td>Renata</td><td>Renada</td><td>Renata</td><td></td></tr>
					<tr><td>Renato</td><td>Renat</td><td></td><td></td></tr>
					<tr><td>Restituta</td><td>Restituta</td><td></td><td></td></tr>
					<tr><td>Resurección</td><td>Resurecció</td><td></td><td></td></tr>
					<tr><td>Reyes</td><td>Reis</td><td></td><td></td></tr>
					<tr><td>Ricarda</td><td>Ricarda</td><td></td><td></td></tr>
					<tr><td>Ricardo</td><td>Ricard</td><td></td><td></td></tr>
					<tr><td>Rigoberta</td><td>Rigoberta</td><td></td><td></td></tr>
					<tr><td>Rita</td><td>Rita</td><td></td><td></td></tr>
					<tr><td>Roberta</td><td>Roberta</td><td></td><td></td></tr>
					<tr><td>Roberto</td><td>Robert</td><td></td><td></td></tr>
					<tr><td>Robustiana</td><td>Robustiana</td><td></td><td></td></tr>
					<tr><td>Rocío</td><td>Ros</td><td></td><td></td></tr>
					<tr><td>Rodolfo</td><td>Rodolf</td><td></td><td></td></tr>
					<tr><td>Rodrigo</td><td>Roderic</td><td></td><td></td></tr>
					<tr><td>Rogelio</td><td>Roger</td><td>Rogeli</td><td></td></tr>
					<tr><td>Roldán</td><td>Rotlà</td><td>Rotlan</td><td></td></tr>
					<tr><td>Román</td><td>Romà</td><td></td><td></td></tr>
					<tr><td>Romea</td><td>Romea</td><td></td><td></td></tr>
					<tr><td>Romeo</td><td>Romeu</td><td></td><td></td></tr>
					<tr><td>Romero</td><td>Romer</td><td></td><td></td></tr>
					<tr><td>Romina</td><td>Romina</td><td></td><td></td></tr>
					<tr><td>Romualdo</td><td>Romuald</td><td></td><td></td></tr>
					<tr><td>Rómulo</td><td>Ròmul</td><td></td><td></td></tr>
					<tr><td>Roque</td><td>Roc</td><td></td><td></td></tr>
					<tr><td>Rosa</td><td>Rosa</td><td></td><td></td></tr>
					<tr><td>Rosalba</td><td>Rosalba</td><td></td><td></td></tr>
					<tr><td>Rosalía</td><td>Rosalia</td><td></td><td></td></tr>
					<tr><td>Rosalina</td><td>Rosalina</td><td></td><td></td></tr>
					<tr><td>Rosalinda</td><td>Rosalinda</td><td></td><td></td></tr>
					<tr><td>Rosana</td><td>Rosana</td><td>Rosanna</td><td></td></tr>
					<tr><td>Rosario</td><td>Rosari</td><td>Roser</td><td>Xaro</td></tr>
					<tr><td>Rosaura</td><td>Rosaura</td><td></td><td></td></tr>
					<tr><td>Rosenda</td><td>Rosenda</td><td></td><td></td></tr>
					<tr><td>Rosendo</td><td>Rossend</td><td></td><td></td></tr>
					<tr><td>Roxana</td><td>Roxana</td><td></td><td></td></tr>
					<tr><td>Rubén</td><td>Rubén</td><td></td><td></td></tr>
					<tr><td>Rufina</td><td>Rufina</td><td></td><td></td></tr>
					<tr><td>Rufino</td><td>Rufí</td><td></td><td></td></tr>
					<tr><td>Rufo</td><td>Ruf</td><td></td><td></td></tr>
					<tr><td>Ruiz</td><td>Roís</td><td></td><td></td></tr>
					<tr><td>Ruperta</td><td>Ruperta</td><td></td><td></td></tr>
					<tr><td>Ruperto</td><td>Rupert</td><td></td><td></td></tr>
					<tr><td>Ruth</td><td>Rut</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
