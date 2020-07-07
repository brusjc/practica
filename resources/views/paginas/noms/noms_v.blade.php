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
				<h2 class="box-title">{{trans('noms.noms_tituloV')}}</h2>
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
					<tr><td>Valdesca</td><td>Valdesca</td><td></td><td></td></tr>
					<tr><td>Valentín</td><td>Valentí</td><td></td><td></td></tr>
					<tr><td>Valentina</td><td>Valentina</td><td></td><td></td></tr>
					<tr><td>Valeria</td><td>Valèria</td><td></td><td></td></tr>
					<tr><td>Valeriano</td><td>Valerià</td><td></td><td></td></tr>
					<tr><td>Valerio</td><td>Valeri</td><td></td><td></td></tr>
					<tr><td>Vanesa</td><td>Vanessa</td><td></td><td></td></tr>
					<tr><td>Vedruna</td><td>Vedruna</td><td></td><td></td></tr>
					<tr><td>Venancia</td><td>Venància</td><td></td><td></td></tr>
					<tr><td>Venancio</td><td>Venanci</td><td></td><td></td></tr>
					<tr><td>Venceslao</td><td>Venceslau</td><td></td><td></td></tr>
					<tr><td>Venus</td><td>Venus</td><td></td><td></td></tr>
					<tr><td>Vera</td><td>Vera</td><td></td><td></td></tr>
					<tr><td>Verónica</td><td>Verònica</td><td></td><td></td></tr>
					<tr><td>Vespasiano</td><td>Vespasià</td><td></td><td></td></tr>
					<tr><td>Vicenta</td><td>Vicenta</td><td>Centa</td><td></td></tr>
					<tr><td>Vicente</td><td>Vicent</td><td>Cento</td><td></td></tr>
					<tr><td>Víctor</td><td>Víctor</td><td></td><td></td></tr>
					<tr><td>Victoria</td><td>Victòria</td><td></td><td></td></tr>
					<tr><td>Victoriana</td><td>Victoriana</td><td></td><td></td></tr>
					<tr><td>Victoriano</td><td>Victorià</td><td></td><td></td></tr>
					<tr><td>Victorino</td><td>Victorí</td><td></td><td></td></tr>
					<tr><td>Vida</td><td>Vida</td><td></td><td></td></tr>
					<tr><td>Vidal</td><td>Vidal</td><td></td><td></td></tr>
					<tr><td>Violeta</td><td>Violeta</td><td></td><td></td></tr>
					<tr><td>Virgilio</td><td>Virgili</td><td></td><td></td></tr>
					<tr><td>Virginia</td><td>Virgínia</td><td></td><td></td></tr>
					<tr><td>Viriato</td><td>Viriat</td><td></td><td></td></tr>
					<tr><td>Viridiana</td><td>Viridiana</td><td></td><td></td></tr>
					<tr><td>Virtudes</td><td>Virtuts</td><td></td><td></td></tr>
					<tr><td>Visitación</td><td>Visitació</td><td></td><td></td></tr>
					<tr><td>Vito</td><td>Vit</td><td>Vitus</td><td></td></tr>
					<tr><td>Viviana</td><td>Viviana</td><td></td><td></td></tr>
					<tr><td>Vladimiro</td><td>Vladimir</td><td></td><td></td></tr>
					<tr><td>Vulcano</td><td>Vulcà</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
