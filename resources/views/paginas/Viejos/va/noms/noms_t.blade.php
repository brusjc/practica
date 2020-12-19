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
				<h2 class="box-title">{{trans('noms.noms_tituloT')}}</h2>
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
					<tr><td>Tácito</td><td>Tàcit</td><td></td><td></td></tr>
					<tr><td>Tadeo</td><td>Tadeu</td><td></td><td></td></tr>
					<tr><td>Talía</td><td>Talia</td><td></td><td></td></tr>
					<tr><td>Tamara</td><td>Tamara</td><td></td><td></td></tr>
					<tr><td>Tancredo</td><td>Tancred</td><td></td><td></td></tr>
					<tr><td>Tania</td><td>Tània</td><td></td><td></td></tr>
					<tr><td>Tano</td><td>Tano</td><td></td><td></td></tr>
					<tr><td>Tatiana</td><td>Tatiana</td><td></td><td></td></tr>
					<tr><td>Tecla</td><td>Tecla</td><td></td><td></td></tr>
					<tr><td>Telémaco</td><td>Telèmac</td><td></td><td></td></tr>
					<tr><td>Telma</td><td>Elma</td><td>Telma</td><td></td></tr>
					<tr><td>Telmo</td><td>Elm</td><td>Telm</td><td></td></tr>
					<tr><td>Teócrito</td><td>Teòcrit</td><td></td><td></td></tr>
					<tr><td>Teodomiro</td><td>Teodomir</td><td></td><td></td></tr>
					<tr><td>Teodora</td><td>Teodora</td><td></td><td></td></tr>
					<tr><td>Teodoro</td><td>Teodor</td><td></td><td></td></tr>
					<tr><td>Teodosia</td><td>Teodòsia</td><td></td><td></td></tr>
					<tr><td>Teodosio</td><td>Teodosi</td><td></td><td></td></tr>
					<tr><td>Teófila</td><td>Teòfila</td><td></td><td></td></tr>
					<tr><td>Teófilo</td><td>Teòfil</td><td></td><td></td></tr>
					<tr><td>Tere</td><td>Teresa</td><td></td><td></td></tr>
					<tr><td>Terencia</td><td>Terència</td><td></td><td></td></tr>
					<tr><td>Terencio</td><td>Terenci</td><td></td><td></td></tr>
					<tr><td>Teresa</td><td>Teresa</td><td></td><td></td></tr>
					<tr><td>Teresina</td><td>Teresina</td><td></td><td></td></tr>
					<tr><td>Teseo</td><td>Teseu</td><td></td><td></td></tr>
					<tr><td>Thais</td><td>Tais</td><td>Thais</td><td></td></tr>
					<tr><td>Tiberia</td><td>Tibèria</td><td></td><td></td></tr>
					<tr><td>Tiberio</td><td>Tiberi</td><td></td><td></td></tr>
					<tr><td>Timón</td><td>Timó</td><td></td><td></td></tr>
					<tr><td>Timotea</td><td>Timotea</td><td></td><td></td></tr>
					<tr><td>Timoteo</td><td>Timoteu</td><td></td><td></td></tr>
					<tr><td>Tina</td><td>Constantina</td><td></td><td></td></tr>
					<tr><td>Tirante</td><td>Tirant</td><td></td><td></td></tr>
					<tr><td>Tirso</td><td>Tirs</td><td></td><td></td></tr>
					<tr><td>Tobías</td><td>Tobies</td><td></td><td></td></tr>
					<tr><td>Tomás</td><td>Tomàs</td><td></td><td></td></tr>
					<tr><td>Tomasa</td><td>Tomasa</td><td></td><td></td></tr>
					<tr><td>Tona</td><td>Tona</td><td>Antònia</td><td></td></tr>
					<tr><td>Toni</td><td>Tono</td><td>Toni</td><td></td></tr>
					<tr><td>Torcuato</td><td>Torquat</td><td></td><td></td></tr>
					<tr><td>Toribia</td><td>Toríbia</td><td></td><td></td></tr>
					<tr><td>Toribio</td><td>Toribi</td><td></td><td></td></tr>
					<tr><td>Trajano</td><td>Trajà</td><td></td><td></td></tr>
					<tr><td>Trinidad</td><td>Trinitat</td><td></td><td></td></tr>
					<tr><td>Tristán</td><td>Tristany</td><td></td><td></td></tr>
					<tr><td>Tula</td><td>Tula</td><td></td><td></td></tr>
					<tr><td>Tulia</td><td>Túlia</td><td></td><td></td></tr>
					<tr><td>Tulio</td><td>Tul·li</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
