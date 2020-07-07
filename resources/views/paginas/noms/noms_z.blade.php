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
				<h2 class="box-title">{{trans('noms.noms_tituloZ')}}</h2>
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
					<tr><td>Zabulón</td><td>Zabuló</td><td></td><td></td></tr>
					<tr><td>Zacarías</td><td>Zacaries</td><td></td><td></td></tr>
					<tr><td>Zaida</td><td>Zaida</td><td></td><td></td></tr>
					<tr><td>Zaíra</td><td>Zaïra</td><td></td><td></td></tr>
					<tr><td>Zaratustra</td><td>Zaratustra</td><td></td><td></td></tr>
					<tr><td>Zedebeo</td><td>Zedebeu</td><td></td><td></td></tr>
					<tr><td>Zenaida</td><td>Zenaida</td><td></td><td></td></tr>
					<tr><td>Zenón</td><td>Zenó</td><td>Zenon</td><td></td></tr>
					<tr><td>Zeus</td><td>Zeus</td><td></td><td></td></tr>
					<tr><td>Zita</td><td>Zita</td><td></td><td></td></tr>
					<tr><td>Zoe</td><td>Zoé</td><td></td><td></td></tr>
					<tr><td>Zoel</td><td>Zoel</td><td></td><td></td></tr>
					<tr><td>Zoilo</td><td>Zoilo</td><td></td><td></td></tr>
					<tr><td>Zoraida</td><td>Zoraida</td><td></td><td></td></tr>
					<tr><td>Zósima</td><td>Zòsima</td><td></td><td></td></tr>
					<tr><td>Zósimo</td><td>Zòsim</td><td></td><td></td></tr>
					<tr><td>Zulema</td><td>Zuelema</td><td>Sulema</td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection
