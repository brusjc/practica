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
				<h2 class="box-title">{{trans('noms.noms_tituloH')}}</h2>
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
					<tr><td>Hada</td><td>Fada</td><td></td><td></td></tr>
					<tr><td>Hamlet</td><td>Hamlet</td><td></td><td></td></tr>
					<tr><td>Hasán</td><td>Hassan</td><td>Assan</td><td></td></tr>
					<tr><td>Héctor</td><td>Hèctor</td><td></td><td></td></tr>
					<tr><td>Heidi</td><td>Heidi</td><td></td><td></td></tr>
					<tr><td>Helios</td><td>Hèlios</td><td></td><td></td></tr>
					<tr><td>Hera</td><td>Hera</td><td></td><td></td></tr>
					<tr><td>Heracles</td><td>Hèracles</td><td></td><td></td></tr>
					<tr><td>Heráclito</td><td>Heràclit</td><td></td><td></td></tr>
					<tr><td>Hércules</td><td>Hèrcules</td><td></td><td></td></tr>
					<tr><td>Hermesinda</td><td>Hermessinda</td><td></td><td></td></tr>
					<tr><td>Herminia</td><td>Hermínia</td><td></td><td></td></tr>
					<tr><td>Hernán</td><td>Ferran</td><td></td><td></td></tr>
					<tr><td>Hernando</td><td>Ferran</td><td></td><td></td></tr>
					<tr><td>Herodes</td><td>Herodes</td><td></td><td></td></tr>
					<tr><td>Hesperia</td><td>Hespèria</td><td></td><td></td></tr>
					<tr><td>Hilaria</td><td>Hilària</td><td></td><td></td></tr>
					<tr><td>Hilario</td><td>Hilari</td><td></td><td></td></tr>
					<tr><td>Hipócrates</td><td>Hipòcrates</td><td></td><td></td></tr>
					<tr><td>Homero</td><td>Homer</td><td></td><td></td></tr>
					<tr><td>Honesto</td><td>Honest</td><td></td><td></td></tr>
					<tr><td>Honorio</td><td>Honori</td><td></td><td></td></tr>
					<tr><td>Horacio</td><td>Horaci</td><td></td><td></td></tr>
					<tr><td>Hortensia</td><td>Hortènsia</td><td></td><td></td></tr>
					<tr><td>Hugo</td><td>Hug</td><td>Huguet</td><td></td></tr>
					<tr><td>Humberto</td><td>Humbert</td><td></td><td></td></tr>
					<tr><td>Humildad</td><td>Humildad</td><td></td><td></td></tr>
					<tr><td>Humiliana</td><td>Humiliana</td><td></td><td></td></tr>
					<tr><td>Huseín</td><td>Husseín</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
