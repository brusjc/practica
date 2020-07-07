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
				<h2 class="box-title">{{trans('noms.noms_tituloY')}}</h2>
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
					<tr><td>Yago</td><td>Iago</td><td></td><td></td></tr>
					<tr><td>Yaiza</td><td>Iaiza</td><td>Jaiza</td><td></td></tr>
					<tr><td>Yésica</td><td>Jéssica</td><td></td><td></td></tr>
					<tr><td>Yola</td><td>Iola</td><td></td><td></td></tr>
					<tr><td>Yolanda</td><td>Iolanda</td><td>Iolant</td><td></td></tr>
					<tr><td>Yorim</td><td>Jorim</td><td></td><td></td></tr>
					<tr><td>Yuste</td><td>Just</td><td></td><td></td></tr>
					<tr><td>Yusuf</td><td>Iussuf</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
