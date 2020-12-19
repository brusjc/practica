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
				<h2 class="box-title">{{trans('noms.noms_tituloP')}}</h2>
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
					<tr><td>Pablo</td><td>Pau</td><td></td><td></td></tr>
					<tr><td>Paca</td><td>Paca</td><td></td><td></td></tr>
					<tr><td>Paco</td><td>Paco</td><td></td><td></td></tr>
					<tr><td>Palmira</td><td>Palmira</td><td></td><td></td></tr>
					<tr><td>Paloma</td><td>Coloma</td><td></td><td></td></tr>
					<tr><td>Pamela</td><td>Pamela</td><td></td><td></td></tr>
					<tr><td>Pancha</td><td>Francesca</td><td></td><td></td></tr>
					<tr><td>Pancho</td><td>Francesc</td><td></td><td></td></tr>
					<tr><td>Pancracio</td><td>Pancraç</td><td>Pancraci</td><td></td></tr>
					<tr><td>Pandora</td><td>Pandora</td><td></td><td></td></tr>
					<tr><td>Pánfla</td><td>Pàmfila</td><td></td><td></td></tr>
					<tr><td>Paola</td><td>Paola</td><td></td><td></td></tr>
					<tr><td>Parménides</td><td>Parmènides</td><td></td><td></td></tr>
					<tr><td>Pascual</td><td>Pasqual</td><td></td><td></td></tr>
					<tr><td>Pascuala</td><td>Pasquala</td><td></td><td></td></tr>
					<tr><td>Pastor</td><td>Pastor</td><td></td><td></td></tr>
					<tr><td>Pastora</td><td>Pastora</td><td></td><td></td></tr>
					<tr><td>Patricia</td><td>Patricia</td><td></td><td></td></tr>
					<tr><td>Patricio</td><td>Patrici</td><td></td><td></td></tr>
					<tr><td>Patro</td><td>Patrocini</td><td></td><td></td></tr>
					<tr><td>Patrocinio</td><td>Patrocini</td><td></td><td></td></tr>
					<tr><td>Paula</td><td>Paula</td><td></td><td></td></tr>
					<tr><td>Paulina</td><td>Paulina</td><td>Lina</td><td></td></tr>
					<tr><td>Paulino</td><td>Paulí</td><td></td><td></td></tr>
					<tr><td>Paz</td><td>Pau</td><td></td><td></td></tr>
					<tr><td>Pedro</td><td>Pere</td><td>Peiró</td><td></td></tr>
					<tr><td>Pelayo</td><td>Pelai</td><td></td><td></td></tr>
					<tr><td>Pepa</td><td>Pepa</td><td></td><td></td></tr>
					<tr><td>Pepe</td><td>Pep</td><td></td><td></td></tr>
					<tr><td>Perseo</td><td>Perseu</td><td></td><td></td></tr>
					<tr><td>Petra</td><td>Petra</td><td></td><td></td></tr>
					<tr><td>Petronila</td><td>Petronil·la</td><td>Peronella</td><td></td></tr>
					<tr><td>Piedad</td><td>Pietat</td><td></td><td></td></tr>
					<tr><td>Pilar</td><td>Pilar</td><td></td><td></td></tr>
					<tr><td>Pilato</td><td>Pilat</td><td></td><td></td></tr>
					<tr><td>Pilatos</td><td>Pilat</td><td></td><td></td></tr>
					<tr><td>Píndaro</td><td>Píndar</td><td></td><td></td></tr>
					<tr><td>Pío</td><td>Pius</td><td></td><td></td></tr>
					<tr><td>Pitágoras</td><td>Pitàgores</td><td></td><td></td></tr>
					<tr><td>Plácido</td><td>Plàcid</td><td></td><td></td></tr>
					<tr><td>Platón</td><td>Plató</td><td></td><td></td></tr>
					<tr><td>Plauto</td><td>Plaute</td><td></td><td></td></tr>
					<tr><td>Plinio</td><td>Plini</td><td></td><td></td></tr>
					<tr><td>Plutarco</td><td>Plutarc</td><td></td><td></td></tr>
					<tr><td>Policarpo</td><td>Policarp</td><td></td><td></td></tr>
					<tr><td>Policleto</td><td>Policlet</td><td></td><td></td></tr>
					<tr><td>Polifemo</td><td>Polifem</td><td></td><td></td></tr>
					<tr><td>Pompeyo</td><td>Pompeu</td><td></td><td></td></tr>
					<tr><td>Ponciano</td><td>Ponça</td><td>Poncià</td><td></td></tr>
					<tr><td>Poseidón</td><td>Posidó</td><td></td><td></td></tr>
					<tr><td>Príamo</td><td>Príam</td><td></td><td></td></tr>
					<tr><td>Primitiva</td><td>Primitiva</td><td></td><td></td></tr>
					<tr><td>Primitivo</td><td>Primitiu</td><td></td><td></td></tr>
					<tr><td>Primo</td><td>Prim</td><td></td><td></td></tr>
					<tr><td>Priscila</td><td>Priscil·la</td><td></td><td></td></tr>
					<tr><td>Prometeo</td><td>Prometeu</td><td></td><td></td></tr>
					<tr><td>Protágoras</td><td>Protàgores</td><td></td><td></td></tr>
					<tr><td>Ptolomeo</td><td>Ptolomeu</td><td>Tolomeu</td><td></td></tr>
					<tr><td>Publio</td><td>Publi</td><td></td><td></td></tr>
					<tr><td>Pura</td><td>Pura</td><td></td><td></td></tr>
					<tr><td>Purificación</td><td>Purificació</td><td>Pura</td><td></td></tr>
					<tr><td>Purísima</td><td>Puríssima</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
