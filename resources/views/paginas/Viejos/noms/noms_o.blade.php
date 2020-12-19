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
				<h2 class="box-title">{{trans('noms.noms_tituloO')}}</h2>
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
					<tr><td>Obdulia</td><td>Obdúlia</td><td></td><td></td></tr>
					<tr><td>Obdulio</td><td>Obduli</td><td></td><td></td></tr>
					<tr><td>Octavia</td><td>Octàvia</td><td></td><td></td></tr>
					<tr><td>Octaviano</td><td>Octavià</td><td></td><td></td></tr>
					<tr><td>Octavio</td><td>Octavi</td><td></td><td></td></tr>
					<tr><td>Odín</td><td>Odí</td><td>Odín</td><td></td></tr>
					<tr><td>Odiseo</td><td>Odisseu</td><td></td><td></td></tr>
					<tr><td>Ofelia</td><td>Ofèlia</td><td></td><td></td></tr>
					<tr><td>Olaya</td><td>Olalla</td><td></td><td></td></tr>
					<tr><td>Olegario</td><td>Oleguer</td><td></td><td></td></tr>
					<tr><td>Olga</td><td>Olga</td><td></td><td></td></tr>
					<tr><td>Olimpia</td><td>Olímpia</td><td></td><td></td></tr>
					<tr><td>Olimpio</td><td>Olimpi</td><td></td><td></td></tr>
					<tr><td>Oliva</td><td>Oliva</td><td></td><td></td></tr>
					<tr><td>Oliverio</td><td>Oliver</td><td>Oliveri</td><td></td></tr>
					<tr><td>Olivia</td><td>Olívia</td><td></td><td></td></tr>
					<tr><td>Olvido</td><td>Oblit</td><td></td><td></td></tr>
					<tr><td>Onésimo</td><td>Onèsim</td><td></td><td></td></tr>
					<tr><td>Onofre</td><td>Onofre</td><td></td><td></td></tr>
					<tr><td>Orfeo</td><td>Orfeu</td><td></td><td></td></tr>
					<tr><td>Oriana</td><td>Oriana</td><td></td><td></td></tr>
					<tr><td>Oriol</td><td>Oriol</td><td></td><td></td></tr>
					<tr><td>Orlando</td><td>Orland</td><td></td><td></td></tr>
					<tr><td>Ortuño</td><td>Fortuny</td><td></td><td></td></tr>
					<tr><td>Óscar</td><td>Òscar</td><td></td><td></td></tr>
					<tr><td>Osvaldo</td><td>Osvald</td><td></td><td></td></tr>
					<tr><td>Otelo</td><td>Otel·lo</td><td></td><td></td></tr>
					<tr><td>Otilia</td><td>Otília</td><td></td><td></td></tr>
					<tr><td>Otilio</td><td>Otili</td><td></td><td></td></tr>
					<tr><td>Ovidia</td><td>Ovídia</td><td></td><td></td></tr>
					<tr><td>Ovidio</td><td>Ovidi</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
