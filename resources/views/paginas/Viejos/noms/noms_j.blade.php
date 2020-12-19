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
				<h2 class="box-title">{{trans('noms.noms_tituloJ')}}</h2>
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
					<tr><td>Jacinta</td><td>Jacinta</td><td></td><td></td></tr>
					<tr><td>Jacinto</td><td>Jacint</td><td>Cinto</td><td></td></tr>
					<tr><td>Jacob</td><td>Jacob</td><td></td><td></td></tr>
					<tr><td>Jacoba</td><td>Jacoba</td><td></td><td></td></tr>
					<tr><td>Jacobo</td><td>Jaume</td><td></td><td></td></tr>
					<tr><td>Jael</td><td>Jael</td><td></td><td></td></tr>
					<tr><td>Jaime</td><td>Jaume</td><td></td><td></td></tr>
					<tr><td>Jalef</td><td>Halef</td><td></td><td></td></tr>
					<tr><td>Jasmina</td><td>Jasmina</td><td>Iasmina</td><td></td></tr>
					<tr><td>Javier</td><td>Xavier</td><td>Xavi</td><td></td></tr>
					<tr><td>Jazmín</td><td>Gesmí</td><td>Gessamí</td><td>Gesmil</td></tr>
					<tr><td>Jenaro</td><td>Genar</td><td>Gener</td><td>Giner</td></tr>
					<tr><td>Jeremías</td><td>Jeremíes</td><td></td><td></td></tr>
					<tr><td>Jerónimo</td><td>Jeroni</td><td>Geroni</td><td></td></tr>
					<tr><td>Jesucristo</td><td>Jesucrist</td><td></td><td></td></tr>
					<tr><td>Jesús</td><td>Jesús</td><td></td><td></td></tr>
					<tr><td>Jesusa</td><td>Jesusa</td><td></td><td></td></tr>
					<tr><td>Jimena</td><td>Ximena</td><td>Eiximena</td><td></td></tr>
					<tr><td>Jimeno</td><td>Ximeno</td><td>Eiximén</td><td></td></tr>
					<tr><td>Joaquín</td><td>Joaquim</td><td>Ximo</td><td>Quim</td></tr>
					<tr><td>Joaquina</td><td>Joaquima</td><td>Xima</td><td>Quima</td></tr>
					<tr><td>Job</td><td>Job</td><td></td><td></td></tr>
					<tr><td>Jonás</td><td>Jonàs</td><td></td><td></td></tr>
					<tr><td>Jordana</td><td>Jordana</td><td></td><td></td></tr>
					<tr><td>Jorge</td><td>Jordi</td><td></td><td></td></tr>
					<tr><td>José</td><td>Josép</td><td></td><td></td></tr>
					<tr><td>Josefa</td><td>Josepa</td><td>Pepa</td><td></td></tr>
					<tr><td>Josefina</td><td>Josefina</td><td></td><td></td></tr>
					<tr><td>Josué</td><td>Josué</td><td></td><td></td></tr>
					<tr><td>Juan</td><td>Joan</td><td>Joanot</td><td>Joano</td></tr>
					<tr><td>Juana</td><td>Joana</td><td></td><td></td></tr>
					<tr><td>Judas</td><td>Judes</td><td></td><td></td></tr>
					<tr><td>Judit</td><td>Judit</td><td></td><td></td></tr>
					<tr><td>Julia</td><td>Júlia</td><td></td><td></td></tr>
					<tr><td>Julián</td><td>Julià</td><td></td><td></td></tr>
					<tr><td>Juliana</td><td>Juliana</td><td></td><td></td></tr>
					<tr><td>Julieta</td><td>Julieta</td><td></td><td></td></tr>
					<tr><td>Julio</td><td>Juli</td><td></td><td></td></tr>
					<tr><td>June</td><td>June</td><td></td><td></td></tr>
					<tr><td>Júpiter</td><td>Júpiter</td><td></td><td></td></tr>
					<tr><td>Justa</td><td>Justa</td><td></td><td></td></tr>
					<tr><td>Justina</td><td>Justina</td><td></td><td></td></tr>
					<tr><td>Justiniano</td><td>Justinià</td><td></td><td></td></tr>
					<tr><td>Justíno</td><td>Justí</td><td></td><td></td></tr>
					<tr><td>Justo</td><td>Just</td><td></td><td></td></tr>
					<tr><td>Juvenal</td><td>Juvenal</td><td></td><td></td></tr>
					<tr><td>Juvencio</td><td>Juvenci</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
