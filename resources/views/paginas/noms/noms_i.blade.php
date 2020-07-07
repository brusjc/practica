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
				<h2 class="box-title">{{trans('noms.noms_tituloI')}}</h2>
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
					<tr><td>Ícaro</td><td>Ícar</td><td></td><td></td></tr>
					<tr><td>Idalia</td><td>Idàlia</td><td></td><td></td></tr>
					<tr><td>Idoia</td><td>Idoia</td><td></td><td></td></tr>
					<tr><td>Ifigenia</td><td>Ifigènia</td><td></td><td></td></tr>
					<tr><td>Ignacia</td><td>Ignàsia</td><td>Natxa</td><td>Nàsia</td></tr>
					<tr><td>Ignacio</td><td>Ignasi</td><td>Natxo</td><td></td></tr>
					<tr><td>Ígor</td><td>Ígor</td><td>Igor</td><td></td></tr>
					<tr><td>Ilda</td><td>Isda</td><td>Hilda</td><td></td></tr>
					<tr><td>Ildefonso</td><td>Ildefons</td><td></td><td></td></tr>
					<tr><td>Iluminada</td><td>Il·luminada</td><td></td><td></td></tr>
					<tr><td>Imanol</td><td>Imanol</td><td></td><td></td></tr>
					<tr><td>Imelda</td><td>Imelda</td><td></td><td></td></tr>
					<tr><td>Imperio</td><td>Imperi</td><td></td><td></td></tr>
					<tr><td>Indalecio</td><td>Indaleci</td><td></td><td></td></tr>
					<tr><td>Inés</td><td>Agnés</td><td></td><td></td></tr>
					<tr><td>Íngrid</td><td>Íngrid</td><td></td><td></td></tr>
					<tr><td>Inma</td><td>Imma</td><td>Immaculada</td><td></td></tr>
					<tr><td>Inmaculada</td><td>Immaculada</td><td>Imma</td><td></td></tr>
					<tr><td>Inocencia</td><td>Inocència</td><td></td><td></td></tr>
					<tr><td>Inocencio</td><td>Inocenci</td><td></td><td></td></tr>
					<tr><td>Íñigo</td><td>Enec</td><td></td><td></td></tr>
					<tr><td>Irene</td><td>Irene</td><td></td><td></td></tr>
					<tr><td>Ireneo</td><td>Ireneu</td><td></td><td></td></tr>
					<tr><td>Iris</td><td>Iris</td><td></td><td></td></tr>
					<tr><td>Irma</td><td>Irma</td><td></td><td></td></tr>
					<tr><td>Isaac</td><td>Isaac</td><td></td><td></td></tr>
					<tr><td>Isabel</td><td>Isabel</td><td></td><td></td></tr>
					<tr><td>Isabela</td><td>Isabel·la</td><td></td><td></td></tr>
					<tr><td>Isadora</td><td>Isadora</td><td></td><td></td></tr>
					<tr><td>Isaías</td><td>Isaïes</td><td></td><td></td></tr>
					<tr><td>Isaura</td><td>Isaura</td><td></td><td></td></tr>
					<tr><td>Isidora</td><td>Isidora</td><td></td><td></td></tr>
					<tr><td>Isidoro</td><td>Isidor</td><td>Doro</td><td></td></tr>
					<tr><td>Isidra</td><td>Isidra</td><td></td><td></td></tr>
					<tr><td>Ismael</td><td>Ismael</td><td></td><td></td></tr>
					<tr><td>Isolda</td><td>Isolda</td><td></td><td></td></tr>
					<tr><td>Israel</td><td>Israel</td><td></td><td></td></tr>
					<tr><td>Iván</td><td>Ivan</td><td></td><td></td></tr>
					<tr><td>Ivón</td><td>Ivó</td><td></td><td></td></tr>
					<tr><td>Ivona</td><td>Ivona</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
