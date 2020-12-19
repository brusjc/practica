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
				<h2 class="box-title">{{trans('noms.noms_tituloC')}}</h2>
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
					<tr><td>Caín</td><td>Caïm</td><td></td><td></td></tr>
					<tr><td>Calíope</td><td>Cal·líope</td><td></td><td></td></tr>
					<tr><td>Calixta</td><td>Calixta</td><td></td><td></td></tr>
					<tr><td>Calixto</td><td>Calixt</td><td></td><td></td></tr>
					<tr><td>Camelia</td><td>Camèlia</td><td></td><td></td></tr>
					<tr><td>Camila</td><td> Camil·la</td><td></td><td></td></tr>
					<tr><td>Camilo</td><td>Camil</td><td></td><td></td></tr>
					<tr><td>Candela</td><td>Candela</td><td></td><td></td></tr>
					<tr><td>Candelaria</td><td>Candelera</td><td></td><td></td></tr>
					<tr><td>Cándida</td><td>Càndida</td><td></td><td></td></tr>
					<tr><td>Cándido</td><td>Càndid</td><td></td><td></td></tr>
					<tr><td>Caridad</td><td>Caritat</td><td></td><td></td></tr>
					<tr><td>Carina</td><td>Carina</td><td></td><td></td></tr>
					<tr><td>Carla</td><td>Carla</td><td></td><td></td></tr>
					<tr><td>Carlos</td><td>Carles</td><td></td><td></td></tr>
					<tr><td>Carlota</td><td>Carlota</td><td></td><td></td></tr>
					<tr><td>Carmela</td><td>Carmela</td><td></td><td></td></tr>
					<tr><td>Carmelo</td><td>Carmel</td><td></td><td></td></tr>
					<tr><td>Carmen</td><td>Carme</td><td></td><td></td></tr>
					<tr><td>Carmesina</td><td>Carmesina</td><td></td><td></td></tr>
					<tr><td>Carmina</td><td>Carmina</td><td></td><td></td></tr>
					<tr><td>Carola</td><td>Carola</td><td></td><td></td></tr>
					<tr><td>Carolina</td><td>Carolina</td><td></td><td></td></tr>
					<tr><td>Casandra</td><td>Cassandra</td><td></td><td></td></tr>
					<tr><td>Casiana</td><td>Cassiana</td><td></td><td></td></tr>
					<tr><td>Casilda</td><td>Casilda</td><td></td><td></td></tr>
					<tr><td>Casimira</td><td>Casimira</td><td></td><td></td></tr>
					<tr><td>Casimiro</td><td>Casimir</td><td></td><td></td></tr>
					<tr><td>Casiopea</td><td>Casiopea</td><td></td><td></td></tr>
					<tr><td>Cástor</td><td>Càstor</td><td></td><td></td></tr>
					<tr><td>Catalina</td><td>Caterina</td><td></td><td></td></tr>
					<tr><td>Catia</td><td>Càtia</td><td></td><td></td></tr>
					<tr><td>Cátulo</td><td>Càtul</td><td></td><td></td></tr>
					<tr><td>Cayetana</td><td>Caetana</td><td>Caietana</td><td>Gaietana</td></tr>
					<tr><td>Cayetano</td><td>Caetà</td><td>Caietà</td><td></td></tr>
					<tr><td>Cecília</td><td>Cecília</td><td></td><td></td></tr>
					<tr><td>Ceferina</td><td>Ceferina</td><td>Zeferina</td><td></td></tr>
					<tr><td>Celestina</td><td>Celestina</td><td></td><td></td></tr>
					<tr><td>Celia</td><td>Cèlia</td><td></td><td></td></tr>
					<tr><td>César</td><td>Cèsar</td><td></td><td></td></tr>
					<tr><td>Cesia</td><td>Cèsia</td><td></td><td></td></tr>
					<tr><td>Charo</td><td>Xaro</td><td>Rosario</td><td></td></tr>
					<tr><td>Chelo</td><td>Xelo</td><td>Consol</td><td></td></tr>
					<tr><td>Chima</td><td>Xima</td><td>Joaquima</td><td></td></tr>
					<tr><td>Chimo</td><td>Ximo</td><td></td><td></td></tr>
					<tr><td>Cibeles</td><td>Cíbele</td><td></td><td></td></tr>
					<tr><td>Cicerón</td><td>Ciceró</td><td></td><td></td></tr>
					<tr><td>Cinta</td><td>Cinta</td><td></td><td></td></tr>
					<tr><td>Cintia</td><td>Cintia</td><td></td><td></td></tr>
					<tr><td>Cipriano</td><td>Ciprià</td><td></td><td></td></tr>
					<tr><td>Cira</td><td>Cira</td><td></td><td></td></tr>
					<tr><td>Circe</td><td>Circe</td><td></td><td></td></tr>
					<tr><td>Ciriaca</td><td>Ciríaca</td><td></td><td></td></tr>
					<tr><td>Cirila</td><td>Ciril·la</td><td></td><td></td></tr>
					<tr><td>Clara</td><td>Clara</td><td></td><td></td></tr>
					<tr><td>Clarisa</td><td>Clarissa</td><td></td><td></td></tr>
					<tr><td>Claudio</td><td>Claudi</td><td></td><td></td></tr>
					<tr><td>Clemente</td><td>Clement</td><td>Climent</td><td></td></tr>
					<tr><td>Clementina</td><td>Clementina</td><td></td><td></td></tr>
					<tr><td>Cleo</td><td>Cleo</td><td></td><td></td></tr>
					<tr><td>Cleopatra</td><td>Cleòpatra</td><td></td><td></td></tr>
					<tr><td>Clío</td><td>Clio</td><td></td><td></td></tr>
					<tr><td>Cloe</td><td>Cloe</td><td></td><td></td></tr>
					<tr><td>Clotilde</td><td>Clotilde</td><td></td><td></td></tr>
					<tr><td>Concepción</td><td>Concepció</td><td>Conxa</td><td></td></tr>
					<tr><td>Consagración</td><td>Consagració</td><td></td><td></td></tr>
					<tr><td>Constancia</td><td>Constància</td><td></td><td></td></tr>
					<tr><td>Constantí</td><td>Constantino</td><td></td><td></td></tr>
					<tr><td>Consuelo</td><td>Consol</td><td>Xelo</td><td></td></tr>
					<tr><td>Cora</td><td>Cora</td><td></td><td></td></tr>
					<tr><td>Coral</td><td>Coral</td><td></td><td></td></tr>
					<tr><td>Cordelia</td><td>Cordèlia</td><td></td><td></td></tr>
					<tr><td>Corina</td><td>Corina</td><td></td><td></td></tr>
					<tr><td>Cornelia</td><td>Cornèlia</td><td></td><td></td></tr>
					<tr><td>Cornelio</td><td>Corneli</td><td>Cornell</td><td></td></tr>
					<tr><td>Cósima</td><td>Còssima</td><td></td><td></td></tr>
					<tr><td>Cosme</td><td>Cosme</td><td></td><td></td></tr>
					<tr><td>Covadonga</td><td>Covadonga</td><td></td><td></td></tr>
					<tr><td>Crispiana</td><td>Crispiana</td><td></td><td></td></tr>
					<tr><td>Crispín</td><td>Crispí</td><td></td><td></td></tr>
					<tr><td>Crispina</td><td>Crispina</td><td></td><td></td></tr>
					<tr><td>Cristián</td><td>Cristià</td><td></td><td></td></tr>
					<tr><td>Cristina</td><td>Cristina</td><td></td><td></td></tr>
					<tr><td>Cristo</td><td>Crist</td><td></td><td></td></tr>
					<tr><td>Cristóbal</td><td>Cristófol</td><td>Cristofor</td><td></td></tr>
					<tr><td>Cupido</td><td>Cupido</td><td></td><td></td></tr>
					<tr><td>Curra</td><td>Francesca</td><td></td><td></td></tr>
					<tr><td>Custodia</td><td>Custòdia</td><td></td><td></td></tr>
					<tr><td>Custodio</td><td>Custodi</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
