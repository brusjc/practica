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
				<h2 class="box-title">{{trans('noms.noms_tituloF')}}</h2>
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
					<tr><td>Fabián</td><td>Fabià</td><td></td><td></td></tr>
					<tr><td>Fabiana</td><td>Fabiana</td><td></td><td></td></tr>
					<tr><td>Fabio</td><td>Fabi</td><td></td><td></td></tr>
					<tr><td>Fabiola</td><td>Fabiola</td><td></td><td></td></tr>
					<tr><td>Facunda</td><td>Facunda</td><td></td><td></td></tr>
					<tr><td>Facundo</td><td>Facund</td><td></td><td></td></tr>
					<tr><td>Fátima</td><td>Fàtima</td><td></td><td></td></tr>
					<tr><td>Faustina</td><td>Faustina</td><td></td><td></td></tr>
					<tr><td>Faustiniana</td><td>Faustiniana</td><td></td><td></td></tr>
					<tr><td>Fausto</td><td>Faust</td><td></td><td></td></tr>
					<tr><td>Fe</td><td>Fe</td><td></td><td></td></tr>
					<tr><td>Federica</td><td>Federica</td><td></td><td></td></tr>
					<tr><td>Federico</td><td>Frederic</td><td>Fede</td><td></td></tr>
					<tr><td>Fedra</td><td>Fedra</td><td></td><td></td></tr>
					<tr><td>Felicia</td><td>Felícia</td><td></td><td></td></tr>
					<tr><td>Feliciana</td><td>Feliciana</td><td></td><td></td></tr>
					<tr><td>Feliciano</td><td>Felicià</td><td></td><td></td></tr>
					<tr><td>Felipa</td><td>Felipa</td><td></td><td></td></tr>
					<tr><td>Felipe</td><td>Felip</td><td></td><td></td></tr>
					<tr><td>Felisa</td><td>Feliça</td><td></td><td></td></tr>
					<tr><td>Félix</td><td>Feliç</td><td>Feliu</td><td>Fèlix</td></tr>
					<tr><td>Fermín</td><td>Fermí</td><td></td><td></td></tr>
					<tr><td>Fermina</td><td>Fermina</td><td></td><td></td></tr>
					<tr><td>Fernán</td><td>Ferran</td><td></td><td></td></tr>
					<tr><td>Fernanda</td><td>Ferranda</td><td></td><td></td></tr>
					<tr><td>Fernando</td><td>Ferran</td><td></td><td></td></tr>
					<tr><td>Fidel</td><td>Fidel</td><td></td><td></td></tr>
					<tr><td>Fidias</td><td>Fídies</td><td></td><td></td></tr>
					<tr><td>Filemón</td><td>Filemó</td><td></td><td></td></tr>
					<tr><td>Filiberta</td><td>Filiberta</td><td></td><td></td></tr>
					<tr><td>Filiberto</td><td>Filibert</td><td></td><td></td></tr>
					<tr><td>Filipina</td><td>Filipina</td><td></td><td></td></tr>
					<tr><td>Filipo</td><td>Filip</td><td></td><td></td></tr>
					<tr><td>Filomena</td><td>Filomena</td><td>Mena</td><td></td></tr>
					<tr><td>Fina</td><td>Fina</td><td></td><td></td></tr>
					<tr><td>Fiona</td><td>Fiona</td><td></td><td></td></tr>
					<tr><td>Flavia</td><td>Flàvia</td><td></td><td></td></tr>
					<tr><td>Flavio</td><td>Flavià</td><td></td><td></td></tr>
					<tr><td>Flérida</td><td>Flèrida</td><td></td><td></td></tr>
					<tr><td>Flor</td><td>Flor</td><td></td><td></td></tr>
					<tr><td>Flora</td><td>Flora</td><td></td><td></td></tr>
					<tr><td>Florencia</td><td>Florença</td><td>Florència</td><td></td></tr>
					<tr><td>Florencio</td><td>Florenci</td><td>Florenç</td><td></td></tr>
					<tr><td>Florentina</td><td>Florentina</td><td></td><td></td></tr>
					<tr><td>Florentino</td><td>Florentí</td><td></td><td></td></tr>
					<tr><td>Florinda</td><td>Florinda</td><td></td><td></td></tr>
					<tr><td>Floro</td><td>Florus</td><td></td><td></td></tr>
					<tr><td>Fortunata</td><td>Fortunata</td><td></td><td></td></tr>
					<tr><td>Fortunato</td><td>Fortunat</td><td></td><td></td></tr>
					<tr><td>Francina</td><td>Francina</td><td></td><td></td></tr>
					<tr><td>Francisca</td><td>Francesca</td><td>Curra</td><td>Quica</td></tr>
					<tr><td>Francisco</td><td>Francesc</td><td>Francés</td><td>Cesc</td></tr>
					<tr><td>Frida</td><td>Frida</td><td></td><td></td></tr>
					<tr><td>Froilán</td><td>Froilà</td><td></td><td></td></tr>
					<tr><td>Fructuosa</td><td>Fructuosa</td><td>Fruitosa</td><td></td></tr>
					<tr><td>Fructuoso</td><td>Fructuós</td><td>Fruitós</td><td></td></tr>
					<tr><td>Fuensanta</td><td>Fontsanta</td><td></td><td></td></tr>
					<tr><td>Fulgencio</td><td>Fulgenci</td><td></td><td></td></tr>
					<tr><td>Fulvia</td><td>Fúlvia</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
