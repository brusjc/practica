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
				<h2 class="box-title">{{trans('noms.noms_tituloD')}}</h2>
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
					<tr><td>Daciano</td><td>Dacià</td><td></td><td></td></tr>
					<tr><td>Dafne</td><td>Dafne</td><td></td><td></td></tr>
					<tr><td>Dafnis</td><td>Dafnis</td><td></td><td></td></tr>
					<tr><td>Dalia</td><td>Dàlia</td><td></td><td></td></tr>
					<tr><td>Dalila</td><td>Dalila</td><td></td><td></td></tr>
					<tr><td>Dámaris</td><td>Dàmaris</td><td></td><td></td></tr>
					<tr><td>Dámaso</td><td>Damas</td><td></td><td></td></tr>
					<tr><td>Damián</td><td>Damià</td><td></td><td></td></tr>
					<tr><td>Damocles</td><td>Dàmocles</td><td></td><td></td></tr>
					<tr><td>Dánae</td><td>Dànae</td><td></td><td></td></tr>
					<tr><td>Daniel</td><td>Daniel</td><td>Dani</td><td></td></tr>
					<tr><td>Daniela</td><td>Daniela</td><td></td><td></td></tr>
					<tr><td>Dante</td><td>Dant</td><td></td><td></td></tr>
					<tr><td>Daría</td><td>Daria</td><td></td><td></td></tr>
					<tr><td>Darío</td><td>Dari</td><td>Darius</td><td></td></tr>
					<tr><td>David</td><td>David</td><td>Daviu</td><td></td></tr>
					<tr><td>Débora</td><td>Dèbora</td><td></td><td></td></tr>
					<tr><td>Delfín</td><td>Delfí</td><td></td><td></td></tr>
					<tr><td>Delfina</td><td>Delfina</td><td></td><td></td></tr>
					<tr><td>Delia</td><td>Dèlia</td><td></td><td></td></tr>
					<tr><td>Demetria</td><td>Demètria</td><td></td><td></td></tr>
					<tr><td>Demetrio</td><td>Demetri</td><td></td><td></td></tr>
					<tr><td>Demócrito</td><td>Demòcrit</td><td></td><td></td></tr>
					<tr><td>Demóstenes</td><td>Demòstenes</td><td></td><td></td></tr>
					<tr><td>Desamparados</td><td>Desamparats</td><td></td><td></td></tr>
					<tr><td>Desdémona</td><td>Desdèmona</td><td></td><td></td></tr>
					<tr><td>Desideria</td><td>Desidèria</td><td></td><td></td></tr>
					<tr><td>Desiderio</td><td>Desideri</td><td></td><td></td></tr>
					<tr><td>Desirée</td><td>Desiré</td><td></td><td></td></tr>
					<tr><td>Diana</td><td>Diana</td><td>Jana</td><td></td></tr>
					<tr><td>Diego</td><td>Diego</td><td>Dídac</td><td></td></tr>
					<tr><td>Digna</td><td>Disgna</td><td></td><td></td></tr>
					<tr><td>Diocleciano</td><td>Dioclecià</td><td></td><td></td></tr>
					<tr><td>Diógenes</td><td>Diògenes</td><td></td><td></td></tr>
					<tr><td>Dionisia</td><td>Dionisia</td><td></td><td></td></tr>
					<tr><td>Dionisio</td><td>Dionís</td><td>Dionisi</td><td></td></tr>
					<tr><td>Divina</td><td>Divina</td><td></td><td></td></tr>
					<tr><td>Dolores</td><td>Dolores</td><td>Lola</td><td></td></tr>
					<tr><td>Dominga</td><td>Dominica</td><td></td><td></td></tr>
					<tr><td>Domingo</td><td>Domingo</td><td>Doménec</td><td>Domenge</td></tr>
					<tr><td>Dominica</td><td>Dominica</td><td></td><td></td></tr>
					<tr><td>Domitila</td><td>Domitil·la</td><td></td><td></td></tr>
					<tr><td>Donata</td><td>Donata</td><td></td><td></td></tr>
					<tr><td>Donato</td><td>Donat</td><td></td><td></td></tr>
					<tr><td>Dora</td><td>Dora</td><td>Dorotea</td><td></td></tr>
					<tr><td>Doris</td><td>Doris</td><td></td><td></td></tr>
					<tr><td>Dorotea</td><td>Dorotea</td><td>Dora</td><td></td></tr>
					<tr><td>Dulce</td><td>Dolça</td><td></td><td></td></tr>
					<tr><td>Duna</td><td>Duna</td><td></td><td></td></tr>
					<tr><td>Dunia</td><td>Dúnia</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
