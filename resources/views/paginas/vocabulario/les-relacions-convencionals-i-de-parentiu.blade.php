@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('vocabulario.parentesco_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('vocabulario.parentesco_titulo1') )}}
@endsection

@section('breadcrumb1')
	<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('vocabulario.parentesco_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('vocabulario.parentesco_keywords') )}}
@endsection

@section('main_content')

<div class="row">
	<div class="col-5">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-7412986561454436"
		     data-ad-slot="6463281785"
		     data-ad-format="auto"
		     data-full-width-responsive="true"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	<div class="col-7">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.parentesco_titulo2') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="tabla de las relaciones convencionales y de parentesco">
					<thead>
						<tr><th id="columna1" scope="col"> VALENCIÀ MASCULÍ</th>
						<th scope="col"> VALENCIÀ FEMENÍ</th>
						<th scope="col">CASTELLÁ</th>	</tr>
					</thead>
					<tr><td>Adoptat</td>		<td>Adoptada</td>		<td>Adoptado/a</td></tr>
					<tr><td>Amic</td>			<td>Amiga</td>			<td>Amigo/a</td></tr>
					<tr><td>Aniversari</td>		<td>-</td>			<td>Aniversario</td></tr>
					<tr><td>Apadrinament</td>		<td>-</td>			<td>apadrinar</td></tr>
					<tr><td>Avantpassat</td>		<td>Avantpassada</td>	<td>Antepasado /a</td></tr>
					<tr><td>Avi</td>			<td>Àvia</td>			<td>Abuelo/a</td></tr>
					<tr><td>Besavi</td>			<td>Besàvia</td>		<td>Bisabuelo</td></tr>
					<tr><td>Besnét</td>			<td>Besnéta</td>		<td>Biznieto/a</td></tr>
					<tr><td>Bessó</td>			<td>Bessona</td>		<td>Gemelos o mellizos</td></tr>
					<tr><td>Boda</td>			<td>-</td>			<td>Boda</td></tr>
					<tr><td>Casament</td>		<td>-</td>			<td>Casamiento</td></tr>
					<tr><td>Casori</td>			<td>-</td>			<td>Casamiento/Boda</td></tr>
					<tr><td>Col·lega</td>		<td>Col·lega</td>		<td>Colega</td></tr>
					<tr><td>Company</td>		<td>Companya</td>		<td>Compañero/a</td></tr>
					<tr><td>Conegut</td>		<td>Coneguda</td>		<td>Conocido/a</td></tr>
					<tr><td>Consogre</td>		<td>Consogra</td>		<td>Consuegro</td></tr>
					<tr><td>Cònjuge</td>		<td>Cònjuge</td>		<td>Cónyuge</td></tr>
					<tr><td>Cosí</td>			<td>Cosina</td>		<td>Primo/a</td></tr>
					<tr><td>Cunyat</td>			<td>Cunyada</td>		<td>Cuñado/a</td></tr>
					<tr><td>Espòs</td>			<td>Esposa</td>		<td>Esposo/a</td></tr>
					<tr><td>Divorciat</td>		<td>Divorciada</td>		<td>Divorciado/a</td></tr>
					<tr><td>Fadrí</td>			<td>Fadrina</td>		<td>Soltero/a</td></tr>
					<tr><td>Festeig</td>		<td>-</td>			<td>Festejo, salir, cortejo</td></tr>
					<tr><td>Fill</td>			<td>Filla</td>			<td>Hijo/a</td></tr>
					<tr><td>Fillastre</td>		<td>Fillastra</td>		<td>Hijastro/a</td></tr>
					<tr><td>Fillol</td>			<td>Fillola</td>		<td>Ahijado/a</td></tr>
					<tr><td>Gendre</td>			<td>Nora</td>			<td>Yerno/nuera</td></tr>
					<tr><td>Germà</td>			<td>Germana</td>		<td>Hermano/a</td></tr>
					<tr><td>Germanastre</td>		<td>Germanastra</td>	<td>Hermanastro/a</td></tr>
					<tr><td>Home</td>			<td>Dona</td>			<td>Hombre/mujer o Marido/mujer</td></tr>
					<tr><td>Marit</td>			<td>Muller</td>		<td>Marido/mujer</td></tr>
					<tr><td>Matrimoni</td>		<td>-</td>			<td>Matrimonio</td></tr>
					<tr><td>Nebot</td>			<td>Neboda</td>		<td>Sobrino/a</td></tr>
					<tr><td>Nóvio</td>			<td>Nóvia</td>			<td>Novio/novia</td></tr>
					<tr><td>Nét</td>			<td>Néta</td>			<td>Nieto/nieta</td></tr>
					<tr><td>Noces</td>			<td>-</td>			<td>Nupcias/ boda</td></tr>
					<tr><td>Oncle</td>			<td>Tia</td>			<td>Tío/ tía</td></tr>
					<tr><td>Orfe</td>			<td>Òrfena</td>		<td>Huérfano/a</td></tr>
					<tr><td>Padrí</td>			<td>Padrina</td>		<td>Padrino/madrina</td></tr>
					<tr><td>Pare</td>			<td>Mare</td>			<td>Padre/ madre</td></tr>
					<tr><td>Parella de fet</td>	<td>-</td>  			<td>Pareja de hecho</td></tr>
					<tr><td>Progenitor</td>		<td>Progenitora</td>	<td>Progenitor/a</td></tr>
					<tr><td>Promés</td>			<td>Promesa</td>		<td>Prometido/a</td></tr>
					<tr><td>Rebesavi</td>		<td>Rebesàvia</td>		<td>Tatarabuelo/a</td></tr>
					<tr><td>Rebesnét</td>		<td>Rebesnéta</td>		<td>Tataranieto/a</td></tr>
					<tr><td>Separació</td>		<td>-</td>			<td>Separación</td></tr>
					<tr><td>Separat</td>		<td>Separada</td>		<td>Separado/a</td></tr>
					<tr><td>Sogre</td>			<td>Sogra</td>			<td>Suegro/a</td></tr>
					<tr><td>Tutela</td>			<td>-</td>			<td>Tutela</td></tr>
					<tr><td>Vidu o viudo</td>	<td>Vídua o viuda</td>	<td>Viudo/a</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('vocabulario.parentesco_texto1') )}}</p>
</div>

<div class="box-body pad table-responsive">
	<p>Various types of buttons. Using the base class</p>
	<div class="col-md-3">
		<a href="/practicainicio/14"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
	</div>
</div>

@endsection
