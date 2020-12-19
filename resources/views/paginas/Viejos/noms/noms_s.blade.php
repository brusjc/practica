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
				<h2 class="box-title">{{trans('noms.noms_tituloS')}}</h2>
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
					<tr><td>Sabina</td><td>Sabina</td><td></td><td></td></tr>
					<tr><td>Sabino</td><td>Sabí</td><td></td><td></td></tr>
					<tr><td>Sabrina</td><td>Sabrina</td><td></td><td></td></tr>
					<tr><td>Sacramento</td><td>Sacrament</td><td></td><td></td></tr>
					<tr><td>Sagrario</td><td>Sagrari</td><td></td><td></td></tr>
					<tr><td>Salomé</td><td>Salomé</td><td></td><td></td></tr>
					<tr><td>Salomón</td><td>Salomó</td><td></td><td></td></tr>
					<tr><td>Salud</td><td>Salut</td><td></td><td></td></tr>
					<tr><td>Salustio</td><td>Salusti</td><td></td><td></td></tr>
					<tr><td>Salvador</td><td>Salvador</td><td>Doro</td><td>Voro</td></tr>
					<tr><td>Salvadora</td><td>Salvadora</td><td></td><td></td></tr>
					<tr><td>Sam</td><td>Sam</td><td></td><td></td></tr>
					<tr><td>Samanta</td><td>Samanta</td><td></td><td></td></tr>
					<tr><td>Samuel</td><td>Samuel</td><td>Sam</td><td></td></tr>
					<tr><td>Sancha</td><td>Sança</td><td></td><td></td></tr>
					<tr><td>Sancho</td><td>Sanç</td><td></td><td></td></tr>
					<tr><td>Sandra</td><td>Sandra</td><td></td><td></td></tr>
					<tr><td>Sandro</td><td>Sandre</td><td></td><td></td></tr>
					<tr><td>Sansón</td><td>Samsó</td><td></td><td></td></tr>
					<tr><td>Santiago</td><td>Santiago</td><td>Santi</td><td></td></tr>
					<tr><td>Santos</td><td>Sants</td><td></td><td></td></tr>
					<tr><td>Sara</td><td>Sara</td><td></td><td></td></tr>
					<tr><td>Saray</td><td>Sarai</td><td></td><td></td></tr>
					<tr><td>Saturnina</td><td>Sadurnina</td><td></td><td></td></tr>
					<tr><td>Saturnino</td><td>Sadurní</td><td></td><td></td></tr>
					<tr><td>Saturno</td><td>Saturn</td><td></td><td></td></tr>
					<tr><td>Saúl</td><td>Saül</td><td></td><td></td></tr>
					<tr><td>Saula</td><td>Saula</td><td></td><td></td></tr>
					<tr><td>Saulo</td><td>Saule</td><td></td><td></td></tr>
					<tr><td>Sebastián</td><td>Sebastià</td><td></td><td></td></tr>
					<tr><td>Sebastiana</td><td>Sebastiana</td><td></td><td></td></tr>
					<tr><td>Secundina</td><td>Secundiga</td><td></td><td></td></tr>
					<tr><td>Secundino</td><td>Secundí</td><td></td><td></td></tr>
					<tr><td>Séfora</td><td>Sèfora</td><td></td><td></td></tr>
					<tr><td>Semíramis</td><td>Semíramis</td><td></td><td></td></tr>
					<tr><td>Sempronio</td><td>Semproni</td><td></td><td></td></tr>
					<tr><td>Séneca</td><td>Sèneca</td><td></td><td></td></tr>
					<tr><td>Serafina</td><td>Serafina</td><td></td><td></td></tr>
					<tr><td>Serena</td><td>Serena</td><td></td><td></td></tr>
					<tr><td>Sergio</td><td>Sergi</td><td></td><td></td></tr>
					<tr><td>Servacio</td><td>Servaci</td><td></td><td></td></tr>
					<tr><td>Servando</td><td>Servand</td><td></td><td></td></tr>
					<tr><td>Set</td><td>Set</td><td></td><td></td></tr>
					<tr><td>Severiana</td><td>Severiana</td><td></td><td></td></tr>
					<tr><td>Severiano</td><td>Severià</td><td></td><td></td></tr>
					<tr><td>Sibila</td><td>Sibil·la</td><td></td><td></td></tr>
					<tr><td>Sibilia</td><td>Sibília</td><td></td><td></td></tr>
					<tr><td>Silvana</td><td>Silvana</td><td></td><td></td></tr>
					<tr><td>Silvestre</td><td>Silvestre</td><td></td><td></td></tr>
					<tr><td>Silvia</td><td>Síllvia</td><td></td><td></td></tr>
					<tr><td>Silvina</td><td>Silvina</td><td></td><td></td></tr>
					<tr><td>Silvio</td><td>Silvi</td><td></td><td></td></tr>
					<tr><td>Simeón</td><td>Simeó</td><td></td><td></td></tr>
					<tr><td>Simón</td><td>Simó</td><td></td><td></td></tr>
					<tr><td>Simona</td><td>Simona</td><td></td><td></td></tr>
					<tr><td>Sinforosa</td><td>Simforosa</td><td></td><td></td></tr>
					<tr><td>Sinforoso</td><td>Simforós</td><td></td><td></td></tr>
					<tr><td>Sixto</td><td>Sixt</td><td>Sixte</td><td></td></tr>
					<tr><td>Socorro</td><td>Socors</td><td></td><td></td></tr>
					<tr><td>Sócrates</td><td>Sòcrates</td><td></td><td></td></tr>
					<tr><td>Sofía</td><td>Sofia</td><td></td><td></td></tr>
					<tr><td>Sófocles</td><td>Sòfocles</td><td></td><td></td></tr>
					<tr><td>Sol</td><td>Sol</td><td></td><td></td></tr>
					<tr><td>Soledad</td><td>Soledat</td><td></td><td></td></tr>
					<tr><td>Solimán</td><td>Solimà</td><td></td><td></td></tr>
					<tr><td>Sonia</td><td>Sònia</td><td></td><td></td></tr>
					<tr><td>Soraya</td><td>Soraia</td><td></td><td></td></tr>
					<tr><td>Suetonio</td><td>Suetoni</td><td></td><td></td></tr>
					<tr><td>Susana</td><td>Susanna</td><td></td><td></td></tr>
					<tr><td>Susi</td><td>Susanna</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
