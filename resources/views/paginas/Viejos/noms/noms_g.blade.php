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
				<h2 class="box-title">{{trans('noms.noms_tituloG')}}</h2>
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
					<tr><td>Gabriel</td><td>Gabriel</td><td>Biel</td><td>Gabi</td></tr>
					<tr><td>Gabriela</td><td>Gabriela</td><td></td><td></td></tr>
					<tr><td>Gala</td><td>Gal·la</td><td></td><td></td></tr>
					<tr><td>Galatea</td><td>Galatea</td><td></td><td></td></tr>
					<tr><td>Galdina</td><td>Gaudina</td><td></td><td></td></tr>
					<tr><td>Galiana</td><td>Galiana</td><td></td><td></td></tr>
					<tr><td>Galilea</td><td>Galilea</td><td></td><td></td></tr>
					<tr><td>Galileo</td><td>Galileu</td><td></td><td></td></tr>
					<tr><td>Galindo</td><td>Galí</td><td></td><td></td></tr>
					<tr><td>Gallardo</td><td>Gallard</td><td></td><td></td></tr>
					<tr><td>Gardenia</td><td>Gardènia</td><td></td><td></td></tr>
					<tr><td>Gaspar</td><td>Gaspar</td><td></td><td></td></tr>
					<tr><td>Gaspara</td><td>Gaspara</td><td></td><td></td></tr>
					<tr><td>Gema</td><td>Gemma</td><td></td><td></td></tr>
					<tr><td>Genoveva</td><td>Genoveva</td><td></td><td></td></tr>
					<tr><td>Georgia</td><td>Geòrgia</td><td></td><td></td></tr>
					<tr><td>Georgina</td><td>Georgina</td><td></td><td></td></tr>
					<tr><td>Geralda</td><td>Geralda</td><td>Gueralda</td><td></td></tr>
					<tr><td>Gerarda</td><td>Gerarda</td><td>Gueraua</td><td></td></tr>
					<tr><td>Gerardo</td><td>Gerard</td><td>Guerau</td><td></td></tr>
					<tr><td>Germán</td><td>Germà</td><td></td><td></td></tr>
					<tr><td>Germana</td><td>Germana</td><td></td><td></td></tr>
					<tr><td>Gertrudis</td><td>Gertrudis</td><td></td><td></td></tr>
					<tr><td>Gervasia</td><td>Gervàsia</td><td></td><td></td></tr>
					<tr><td>Gilberta</td><td>Gilaberta</td><td>Gilberta</td><td>Gelaberta</td></tr>
					<tr><td>Gilberto</td><td>Gilbert</td><td>Gilabert</td><td>Gelabert</td></tr>
					<tr><td>Gina</td><td>Gina</td><td></td><td></td></tr>
					<tr><td>Ginebra</td><td>Ginebra</td><td></td><td></td></tr>
					<tr><td>Ginés</td><td>Genís</td><td></td><td></td></tr>
					<tr><td>Gisela</td><td>Gisela</td><td></td><td></td></tr>
					<tr><td>Giselda</td><td>Giselda</td><td></td><td></td></tr>
					<tr><td>Gladis</td><td>Gladis</td><td></td><td></td></tr>
					<tr><td>Glenda</td><td>Glenda</td><td></td><td></td></tr>
					<tr><td>Gloria</td><td>Glòria</td><td></td><td></td></tr>
					<tr><td>Gonzalo</td><td>Gonçal</td><td></td><td></td></tr>
					<tr><td>Gracia</td><td>Gràcia</td><td></td><td></td></tr>
					<tr><td>Graciela</td><td>Graciel·la</td><td></td><td></td></tr>
					<tr><td>Gregoria</td><td>Gregòria</td><td></td><td></td></tr>
					<tr><td>Gregorio</td><td>Gregori</td><td></td><td></td></tr>
					<tr><td>Greta</td><td>Greta</td><td></td><td></td></tr>
					<tr><td>Griselda</td><td>Griselda</td><td></td><td></td></tr>
					<tr><td>Grisolda</td><td>Grisolda</td><td></td><td></td></tr>
					<tr><td>Guadalupe</td><td>Guadalupe</td><td>Lupe</td><td></td></tr>
					<tr><td>Güelfa</td><td>Güelfa</td><td></td><td></td></tr>
					<tr><td>Guillén</td><td>Guillem</td><td></td><td></td></tr>
					<tr><td>Guillerma</td><td>Guillema</td><td></td><td></td></tr>
					<tr><td>Guillermina</td><td>Guillermina</td><td>Mina</td><td></td></tr>
					<tr><td>Guillermo</td><td>Guillem</td><td></td><td></td></tr>
					<tr><td>Guiomar</td><td>Guiomar</td><td></td><td></td></tr>
					<tr><td>Gumersinda</td><td>Gumersinda</td><td></td><td></td></tr>
					<tr><td>Gustavo</td><td>Gustau</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
