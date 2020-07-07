@extends('layouts.app')

@section('contentheader_title')
    {{trans('examenes.exaC1_title')}} {{$datos['mes']}} {{$datos['ano']}} de la JQCV
@endsection

@section('contentheader_h1')
    {{trans('examenes.exaC1_titulo1')}} {{$datos['mes']}} {{$datos['ano']}} de la JQCV
@endsection

@section('breadcrumb1')
	<a href="/examenes-jqcv">{{trans('examenes.jqcv_breadcrumb')}}</a>
@endsection

@section('breadcrumb2')
	<a href="/examenC1">{{trans('examenes.C1_breadcrumb')}}</a>
@endsection

@section('descripcion')
    {{trans('examenes.exaC1_descripcion1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaC1_descripcion2')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaC1_descripcion3')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaC1_descripcion4')}}
@endsection

@section('keywords')
    {{trans('examenes.exaC1_keywords1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaC1_keywords2')}}
@endsection

@section('main_content')

<div class="row">
	<div class="col-7">
		<div class="comment-text">
			<p>{{html_entity_decode(trans('examenes.exaC1_texto1'))}} {{$datos['mes']}} {{$datos['ano']}} {{html_entity_decode(trans('examenes.exaC1_texto2'))}} {{$datos['mes']}} {{$datos['ano']}}  {{html_entity_decode(trans('examenes.exaC1_texto3'))}}</p>
			<p>{{html_entity_decode(trans('examenes.exaC1_texto4'))}}</p>
			<p>{{html_entity_decode(trans('examenes.exaC1_texto5'))}} {{$datos['mes']}} {{$datos['ano']}} {{html_entity_decode(trans('examenes.exaC1_texto6'))}}</p>
		</div>
	</div>
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
</div>

<div class="comment-text">
	<p>{{html_entity_decode(trans('examenes.exaC1_texto7'))}} {{$datos['mes']}} {{$datos['ano']}} {{html_entity_decode(trans('examenes.exaC1_texto8'))}}</p>
</div>

<div class="row  mt-5">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3>Nivel C1 {{$datos['mes']}} {{$datos['ano']}} - Probes usuario</h3>
				@if(Auth::guest())
					{{ trans('message.solo usuarios registrados') }}
				@endif
				<div class="pull-right">
					@if(!Auth::guest())
						<a href="/examennuevo/{{$codigo}}">
							<button type="button" class="btn btn-primary">{{ trans('message.examen_nuevo') }}</button>
						</a>
					@else
						<a class="mb-2 btn btn-block btn-info" href="/login">{{ trans('message.login') }}</a>
					@endif
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th>{{ trans('examenes.Examen') }}</th>
						<th>{{ trans('examenes.Fecha') }}</th>
						<th>{{ trans('examenes.Progreso') }}</th>
						<th style="width: 5%">%</th>
					</tr>

					@if(!Auth::guest())
						@if($examenes['original']['status']['error']==0)
							@foreach($examenes['original']['data'] as $examen)
								<tr>
									<td><a href="/exameninicio/{{$examen['id']}}">{{$examen['prueba']['nombre']}}</a></td>
									<td><a href="/exameninicio/{{$examen['id']}}">{{date('d-m-Y', strtotime($examen['created_at']))}}</a></td>
									<td>
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-danger" style="width: {{$examen['porcentaje']}}%"></div>
										</div>
									</td>
									<td><span class="badge bg-red">{{$examen['porcentaje']}}%</span></td>
								</tr>
							@endforeach
						@endif
					@endif
				</table>
			</div>
		</div>
	</div>
</div>

@endsection
