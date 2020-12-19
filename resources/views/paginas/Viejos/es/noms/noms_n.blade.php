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
				<h2 class="box-title">{{trans('noms.noms_tituloN')}}</h2>
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
					<tr><td>Nabucodonosor</td><td>Nabucodonosor</td><td></td><td></td></tr>
					<tr><td>Nacha</td><td>Natxa</td><td></td><td></td></tr>
					<tr><td>Nacho</td><td>Natxo</td><td></td><td></td></tr>
					<tr><td>Nadia</td><td>Nàdia</td><td></td><td></td></tr>
					<tr><td>Napoleón</td><td>Napoleó</td><td></td><td></td></tr>
					<tr><td>Narcisa</td><td>Narcisa</td><td></td><td></td></tr>
					<tr><td>Narciso</td><td>Narcís</td><td></td><td></td></tr>
					<tr><td>Natacha</td><td>Natatxa</td><td></td><td></td></tr>
					<tr><td>Natalia</td><td>Natàlia</td><td></td><td></td></tr>
					<tr><td>Nati</td><td>Nativitat</td><td></td><td></td></tr>
					<tr><td>Natividad</td><td>Nadala</td><td>Nativitat</td><td></td></tr>
					<tr><td>Nayara</td><td>Naiara</td><td></td><td></td></tr>
					<tr><td>Nazareno</td><td>Natzaré</td><td></td><td></td></tr>
					<tr><td>Nazaret</td><td>Natzaré</td><td></td><td></td></tr>
					<tr><td>Nazario</td><td>Nazari</td><td></td><td></td></tr>
					<tr><td>Nélida</td><td>Nèlida</td><td></td><td></td></tr>
					<tr><td>Nemesia</td><td>Nemèsia</td><td></td><td></td></tr>
					<tr><td>Nemesio</td><td>Nemesi</td><td></td><td></td></tr>
					<tr><td>Neptuno</td><td>Neptú</td><td></td><td></td></tr>
					<tr><td>Nerea</td><td>Nerea</td><td></td><td></td></tr>
					<tr><td>Nereida</td><td>Nereida</td><td></td><td></td></tr>
					<tr><td>Nereo</td><td>Nereu</td><td></td><td></td></tr>
					<tr><td>Nerón</td><td>Neró</td><td></td><td></td></tr>
					<tr><td>Néstor</td><td>Nèstor</td><td></td><td></td></tr>
					<tr><td>Nicanor</td><td>Nicanor</td><td></td><td></td></tr>
					<tr><td>Nicasio</td><td>Nicasi</td><td></td><td></td></tr>
					<tr><td>Nico</td><td>Nicodem</td><td>Nicolau</td><td>Nicomedes</td></tr>
					<tr><td>Nicodemo</td><td>Nicodem</td><td></td><td></td></tr>
					<tr><td>Nicolás</td><td>Colàs</td><td>Nicolau</td><td></td></tr>
					<tr><td>Nicolasa</td><td>Colassa</td><td>Nicolaua</td><td></td></tr>
					<tr><td>Nicomedes</td><td>Nicomedes</td><td></td><td></td></tr>
					<tr><td>Nieves</td><td>Neus</td><td></td><td></td></tr>
					<tr><td>Nina</td><td>Nina</td><td></td><td></td></tr>
					<tr><td>Ninfa</td><td>Nimfa</td><td></td><td></td></tr>
					<tr><td>Noé</td><td>Noé</td><td></td><td></td></tr>
					<tr><td>Noel</td><td>Noel</td><td></td><td></td></tr>
					<tr><td>Noelia</td><td>Noèlia</td><td></td><td></td></tr>
					<tr><td>Noemí</td><td>Noemí</td><td></td><td></td></tr>
					<tr><td>Nora</td><td>Nora</td><td></td><td></td></tr>
					<tr><td>Norberto</td><td>Norbert</td><td></td><td></td></tr>
					<tr><td>Norma</td><td>Norma</td><td></td><td></td></tr>
					<tr><td>Nuria</td><td>Núria</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
