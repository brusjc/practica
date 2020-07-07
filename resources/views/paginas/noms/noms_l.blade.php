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
				<h2 class="box-title">{{trans('noms.noms_tituloL')}}</h2>
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
					<tr><td>Ladislao</td><td>Ladislau</td><td></td><td></td></tr>
					<tr><td>Ladrón</td><td>Lladró</td><td></td><td></td></tr>
					<tr><td>Lanzarote</td><td>Lancelot</td><td></td><td></td></tr>
					<tr><td>Laoconte</td><td>Laocont</td><td>Laocoont</td><td></td></tr>
					<tr><td>Lara</td><td>Lara</td><td></td><td></td></tr>
					<tr><td>Laudelino</td><td>Laudelí</td><td></td><td></td></tr>
					<tr><td>Laura</td><td>Laura</td><td></td><td></td></tr>
					<tr><td>Laureano</td><td>Laureà</td><td></td><td></td></tr>
					<tr><td>Laurencia</td><td>Laurència</td><td></td><td></td></tr>
					<tr><td>Laurentina</td><td>Laurentina</td><td></td><td></td></tr>
					<tr><td>Lavinia</td><td>Lavínia</td><td></td><td></td></tr>
					<tr><td>Lázaro</td><td>Llàtzer</td><td></td><td></td></tr>
					<tr><td>Leandra</td><td>Leandra</td><td></td><td></td></tr>
					<tr><td>Leandro</td><td>Leandre</td><td></td><td></td></tr>
					<tr><td>Leila</td><td>Leila</td><td></td><td></td></tr>
					<tr><td>Leocadia</td><td>Leocàdia</td><td></td><td></td></tr>
					<tr><td>Leocadio</td><td>Leocadi</td><td></td><td></td></tr>
					<tr><td>León</td><td>Lleó</td><td></td><td></td></tr>
					<tr><td>Leonarda</td><td>Leonarda</td><td></td><td></td></tr>
					<tr><td>Leonardo</td><td>Lleonard</td><td></td><td></td></tr>
					<tr><td>Leoncio</td><td>Leonci</td><td></td><td></td></tr>
					<tr><td>Leónidas</td><td>Leònides</td><td></td><td></td></tr>
					<tr><td>Leonila</td><td>Leonil·la</td><td></td><td></td></tr>
					<tr><td>Leonor</td><td>Leonor</td><td>Nora</td><td></td></tr>
					<tr><td>Leopoldo</td><td>Leopold</td><td></td><td></td></tr>
					<tr><td>Leovigildo</td><td>Leovigild</td><td></td><td></td></tr>
					<tr><td>Leticia</td><td>Letícia</td><td></td><td></td></tr>
					<tr><td>Leví</td><td>Leví</td><td></td><td></td></tr>
					<tr><td>Levina</td><td>Levina</td><td></td><td></td></tr>
					<tr><td>Leyre</td><td>Leire</td><td></td><td></td></tr>
					<tr><td>Lía</td><td>Lia</td><td></td><td></td></tr>
					<tr><td>Liborio</td><td>Libori</td><td>Llibori</td><td></td></tr>
					<tr><td>Lidia</td><td>Lídia</td><td></td><td></td></tr>
					<tr><td>Liduvina</td><td>Liduvina</td><td></td><td></td></tr>
					<tr><td>Ligoria</td><td>Ligòria</td><td></td><td></td></tr>
					<tr><td>Liliana</td><td>Liliana</td><td></td><td></td></tr>
					<tr><td>Lina</td><td>Lina</td><td></td><td></td></tr>
					<tr><td>Linda</td><td>Linda</td><td></td><td></td></tr>
					<tr><td>Liria</td><td>Llíria</td><td></td><td></td></tr>
					<tr><td>Lirio</td><td>Lliri</td><td></td><td></td></tr>
					<tr><td>Lirios</td><td>Lliris</td><td></td><td></td></tr>
					<tr><td>Lisandro</td><td>Lisandre</td><td></td><td></td></tr>
					<tr><td>Lisardo</td><td>Lisard</td><td></td><td></td></tr>
					<tr><td>Lisias</td><td>Lísies</td><td></td><td></td></tr>
					<tr><td>Lola</td><td>Lola</td><td>Dolores</td><td></td></tr>
					<tr><td>Lorena</td><td>Lorena</td><td></td><td></td></tr>
					<tr><td>Lorenza</td><td>Llorença</td><td></td><td></td></tr>
					<tr><td>Lorenzo</td><td>Llorenç</td><td></td><td></td></tr>
					<tr><td>Loreto</td><td>Loreto</td><td>Lloret</td><td></td></tr>
					<tr><td>Lotario</td><td>Lotari</td><td></td><td></td></tr>
					<tr><td>Lourdes</td><td>Lorda</td><td>Lurdes</td><td></td></tr>
					<tr><td>Lucania</td><td>Lucània</td><td></td><td></td></tr>
					<tr><td>Lucía</td><td>Llúcia</td><td></td><td></td></tr>
					<tr><td>Luciano</td><td>Llucià</td><td></td><td></td></tr>
					<tr><td>Lucila</td><td>Lucil·la</td><td></td><td></td></tr>
					<tr><td>Lucinda</td><td>Lucinda</td><td></td><td></td></tr>
					<tr><td>Lucrecio</td><td>Lucreci</td><td></td><td></td></tr>
					<tr><td>Ludovico</td><td>Ludoví</td><td></td><td></td></tr>
					<tr><td>Luis</td><td>Lluís</td><td></td><td></td></tr>
					<tr><td>Lutardo</td><td>Lutard</td><td></td><td></td></tr>
					<tr><td>Lutero</td><td>Luter</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
