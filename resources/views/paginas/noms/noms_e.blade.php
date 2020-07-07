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
				<h2 class="box-title">{{trans('noms.noms_tituloE')}}</h2>
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
					<tr><td>Edda</td><td>Edda</td><td></td><td></td></tr>
					<tr><td>Edelmira</td><td>Edelmira</td><td></td><td></td></tr>
					<tr><td>Edesia</td><td>Edèsia</td><td></td><td></td></tr>
					<tr><td>Edipo</td><td>Èdip</td><td></td><td></td></tr>
					<tr><td>Edmunda</td><td>Edmunda</td><td></td><td></td></tr>
					<tr><td>Edna</td><td>Edna</td><td></td><td></td></tr>
					<tr><td>Eduarda</td><td>Eduarda</td><td></td><td></td></tr>
					<tr><td>Eduardo</td><td>Eduard</td><td>Duard</td><td></td></tr>
					<tr><td>Eduvigis</td><td>Eduvigis</td><td></td><td></td></tr>
					<tr><td>Efesia</td><td>Efèsia</td><td></td><td></td></tr>
					<tr><td>Efrén</td><td>Efrem</td><td></td><td></td></tr>
					<tr><td>Eladia</td><td>El·làdia</td><td>Hel·làdia</td><td></td></tr>
					<tr><td>Eladio</td><td>El·ladi</td><td>Hel·ladi</td><td></td></tr>
					<tr><td>Electra</td><td>Electra</td><td></td><td></td></tr>
					<tr><td>Elena</td><td>Elena</td><td>Helena</td><td></td></tr>
					<tr><td>Eleonor</td><td>Elionora</td><td>Nora</td><td></td></tr>
					<tr><td>Eleucadia</td><td>Eleucàdia</td><td></td><td></td></tr>
					<tr><td>Eleuterio</td><td>Eleuteri</td><td></td><td></td></tr>
					<tr><td>Elfa</td><td>Elfa</td><td></td><td></td></tr>
					<tr><td>Elfo</td><td>Elf</td><td></td><td></td></tr>
					<tr><td>Elga </td><td>Elga</td><td>Helga</td><td></td></tr>
					<tr><td>Elia</td><td>Élia</td><td></td><td></td></tr>
					<tr><td>Eliana</td><td>Eliana</td><td></td><td></td></tr>
					<tr><td>Eliodoro</td><td>Eliodor</td><td>Heliodor</td><td></td></tr>
					<tr><td>Elisa</td><td>Elisa</td><td></td><td></td></tr>
					<tr><td>Elisabet</td><td>Elisabet</td><td></td><td></td></tr>
					<tr><td>Elisenda</td><td>Elisenda</td><td></td><td></td></tr>
					<tr><td>Eliseo</td><td>Eliseu</td><td></td><td></td></tr>
					<tr><td>Elíseo</td><td>Elisi</td><td></td><td></td></tr>
					<tr><td>Elma</td><td>Elma</td><td>Telma</td><td></td></tr>
					<tr><td>Elmo</td><td>Elm</td><td>Telm</td><td></td></tr>
					<tr><td>Elodia</td><td>Elòdia</td><td>Helòdia</td><td></td></tr>
					<tr><td>Eloína</td><td>Eloína</td><td></td><td></td></tr>
					<tr><td>Eloísa</td><td>Eloïsa</td><td>Heloïsa</td><td></td></tr>
					<tr><td>Eloy</td><td>Eloi</td><td></td><td></td></tr>
					<tr><td>Elsa</td><td>Elsa</td><td></td><td></td></tr>
					<tr><td>Elvira</td><td>Elvira</td><td></td><td></td></tr>
					<tr><td>Emilia</td><td>Emilia</td><td></td><td></td></tr>
					<tr><td>Emiliana</td><td>Emiliana</td><td></td><td></td></tr>
					<tr><td>Emilio</td><td>Emili</td><td></td><td></td></tr>
					<tr><td>Emma</td><td>Emma</td><td></td><td></td></tr>
					<tr><td>Emmanuela</td><td>Emmanuela</td><td>Emma</td><td></td></tr>
					<tr><td>Encarna</td><td>Encarna</td><td></td><td></td></tr>
					<tr><td>Encarnación</td><td>Encarnació</td><td></td><td></td></tr>
					<tr><td>Eneas</td><td>Enees</td><td></td><td></td></tr>
					<tr><td>Engracia</td><td>Engracia</td><td></td><td></td></tr>
					<tr><td>Enrique</td><td>Enric</td><td></td><td></td></tr>
					<tr><td>Enriqueta</td><td>Enriqueta</td><td></td><td></td></tr>
					<tr><td>Epicuro</td><td>Epicur</td><td></td><td></td></tr>
					<tr><td>Epifanía</td><td>Epifanía</td><td></td><td></td></tr>
					<tr><td>Epifanio</td><td>Epifani</td><td></td><td></td></tr>
					<tr><td>Erasmo</td><td>Erasme</td><td></td><td></td></tr>
					<tr><td>Erica</td><td>Érica</td><td></td><td></td></tr>
					<tr><td>Ermenegilda</td><td>Ermenegilda</td><td>Hermenegilda</td><td></td></tr>
					<tr><td>Ermesinda</td><td>Ermesinda</td><td></td><td></td></tr>
					<tr><td>Ernestina</td><td>Ernestina</td><td></td><td></td></tr>
					<tr><td>Ernesto</td><td>Ernest</td><td></td><td></td></tr>
					<tr><td>Escarlata</td><td>Escarlata</td><td></td><td></td></tr>
					<tr><td>Escipión</td><td>Escipió</td><td></td><td></td></tr>
					<tr><td>Esmeralda</td><td>Esmaragda</td><td></td><td></td></tr>
					<tr><td>Esperanza</td><td>Esperança</td><td></td><td></td></tr>
					<tr><td>Esteban</td><td>Esteve</td><td></td><td></td></tr>
					<tr><td>Estefanía</td><td>Estefania</td><td></td><td></td></tr>
					<tr><td>Estela</td><td>Estela</td><td></td><td></td></tr>
					<tr><td>Ester</td><td>Ester</td><td>Esther</td><td></td></tr>
					<tr><td>Estíbaliz</td><td>Estíbalis</td><td></td><td></td></tr>
					<tr><td>Estrella</td><td>Estela</td><td>Estrella</td><td>Estrela</td></tr>
					<tr><td>Etelvina</td><td>Etelvina</td><td></td><td></td></tr>
					<tr><td>Euduvigis</td><td>Euduvigis</td><td></td><td></td></tr>
					<tr><td>Eufrasia</td><td>Eufràsia</td><td></td><td></td></tr>
					<tr><td>Eugenia</td><td>Eugènia</td><td></td><td></td></tr>
					<tr><td>Eugenio</td><td>Eugeni</td><td></td><td></td></tr>
					<tr><td>Eulalia</td><td>Eulàlia</td><td>Eulària</td><td></td></tr>
					<tr><td>Eurípides</td><td>Eurípides</td><td></td><td></td></tr>
					<tr><td>Eusebia</td><td>Eusèbia</td><td></td><td></td></tr>
					<tr><td>Eusebio</td><td>Eusebi</td><td></td><td></td></tr>
					<tr><td>Eustaquia</td><td>Eustàquia</td><td></td><td></td></tr>
					<tr><td>Eva</td><td>Eva</td><td></td><td></td></tr>
					<tr><td>Evangelina</td><td>Evangelina</td><td></td><td></td></tr>
					<tr><td>Evaristo</td><td>Evarist</td><td></td><td></td></tr>
					<tr><td>Evelina</td><td>Evelina</td><td></td><td></td></tr>
					<tr><td>Exaltación</td><td>Exaltació</td><td></td><td></td></tr>
					<tr><td>Ezequiel</td><td>Ezequiel</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
