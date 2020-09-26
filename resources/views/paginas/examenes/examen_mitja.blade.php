@extends('layouts.app')

@section('contentheader_title')Examen Mitja {{$datos['mes']}} {{$datos['ano']}} de la JQCV@endsection

@section('contentheader_h1')Examen Mitja {{$datos['mes']}} {{$datos['ano']}} de la JQCV@endsection

@section('breadcrumb1')<a href="/examenes-jqcv">{{ trans('examenes.jqcv_breadcrumb') }}</a>@endsection

@section('breadcrumb2')<a href="/examenmitja">{{ trans('examenes.mitja_breadcrumb') }}</a>@endsection

@section('descripcion')"Examen Mitja {{$datos['mes']}} {{$datos['ano']}} de la JQCV: practica el Examen Mitja de {{$datos['mes']}} {{$datos['ano']}} de la JQCV. Pots realitzar l examen del nivell Mitja de {{$datos['mes']}} del {{$datos['ano']}} de la JQCV com si estigueres en la mateixa prova."@endsection

@section('keywords')"Examen Mitja {{$datos['mes']}} {{$datos['ano']}} de la JQCV, Examen Mitja de valencià, exàmens de la JQCV, Exàmens de valencià, Exàmens JQCV, probas JQCV, exàmens anteriors JQCV"@endsection

@section('main_content')<p>En Examen Mitja de {{$datos['mes']}} {{$datos['ano']}} de la JQCV (Junta Qualificadora de Coneixements de Valencià), pots realitzar l'examen del nivell Mitja de {{$datos['mes']}} del {{$datos['ano']}} com si estigueres en la mateixa prova.</p>
  <p>Perquè no trobes diferències amb l'examen real, la nostra pàgina www.practicavalenciano.es, estructura l'examen Mitja de la mateixa manera que els exàmens de la JQCV (Junta Qualificadora de Coneixements de Valencià), és a dir, tres respostes a triar una com verdadera. A més a més, amb la novetat del nostre sistema d'autoavaluació, pel qual l'usuari de la nostra pàgina, estudiant dels exàmens de la Junta Qualificadora de Coneixements de Valencià (Exàmens JQCV), puga saber a l'instant la seua puntuació respecte al seu examen, en este cas, el nivell Mitja de la JQCV.</p>
  <p>Ja que l'Examen Mitja de {{$datos['mes']}} {{$datos['ano']}} de la JQCV (Junta Qualificadora de Coneixements de Valencià) conté les mateixes preguntes que l'examen real i en el mateix orde, t'aconsellem que utilitzes esta opció únicament quan hages practicat prou amb els nostres exercicis pràctics.</p>
  <p>T'animem així, a l'estudi de les lliçons incloses en el nostre curs per a prendre confiança, eficàcia i aconseguir resoldre satisfactòriament l'examen Mitja de {{$datos['mes']}} {{$datos['ano']}} de la JQCV.</p>

<div class="row  mt-5"><div class="col-md-12">	<div class="card">		<div class="card-header">			<h3>Nivel Mitjà {{$datos['mes']}} {{$datos['ano']}} - Probes usuario</h3>			@if(Auth::guest())				{{ trans('message.solo usuarios registrados') }}			@endif			<div class="pull-right">				@if(!Auth::guest())					<a href="/examennuevo/{{$codigo}}">						<button type="button" class="btn btn-primary">{{ trans('message.examen_nuevo') }}</button>					</a>				@else					<a class="mb-2 btn btn-block btn-info" href="/login">{{ trans('message.login') }}</a>				@endif			</div>		</div>		<div class="card-body">			<table class="table table-bordered">				<tr>					<th>{{ trans('examenes.Examen') }}</th>					<th>{{ trans('examenes.Fecha') }}</th>					<th>{{ trans('examenes.Progreso') }}</th>					<th style="width: 5%">%</th>				</tr>
				@if(!Auth::guest())					@if($examenes['original']['status']['error']==0)						@foreach($examenes['original']['data'] as $examen)							<tr>								<td><a href="/exameninicio/{{$examen['id']}}">{{$examen['prueba']['nombre']}}</a></td>								<td><a href="/exameninicio/{{$examen['id']}}">{{date('d-m-Y', strtotime($examen['created_at']))}}</a></td>								<td>									<div class="progress progress-xs">										<div class="progress-bar progress-bar-danger" style="width: {{$examen['porcentaje']}}%"></div>									</div>								</td>								<td><span class="badge bg-red">{{$examen['porcentaje']}}%</span></td>							</tr>						@endforeach					@endif				@endif			</table>		</div>	</div></div>
</div>@endsection
