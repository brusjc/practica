@extends('layouts.app')

@section('contentheader_title'){{ trans('examenes.oral_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.oral_h1') }}@endsection

@section('breadcrumb1')<a href="/examenes-jqcv">{{ trans('examenes.jqcv_breadcrumb') }}</a>@endsection

@section('descripcion'){{ trans('examenes.oral_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.oral_keywords') }}@endsection

@section('main_content')

<div class="comment-text">
	<p>{{ trans('examenes.oral_texto1') }}</p>
	<p>{{ trans('examenes.oral_texto2') }}</p>
	<p>{!! trans('examenes.oral_texto3') !!}</p>
	<p>{{ trans('examenes.oral_texto4') }}</p>
</div>

<div class="row mt-5">
	@if($pruebas)
		@if($pruebas['original']['status']['error']==0)
			@foreach($pruebas['original']['data'] as $key=>$nivel)
				<div class="col-lg-4 col-md-4">
					<a class="mb-2 btn btn-block btn-info" href="examen_oral/{{$nivel['codigo']}}">{{$nivel['nombre']}}</a>
				</div>
			@endforeach
		@endif
	@endif
</div>

<div class="row mt-5">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3>Nivel Oral - Probes usuario</h3>
				@if(Auth::guest())
					{{ trans('message.solo usuarios registrados') }}
				@endif
				<div class="pull-right">
					@if(Auth::guest())
						<a class="mb-2 btn btn-block btn-info" href="/login">{{ trans('message.login') }}</a>
					@endif
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr>
						<th>{{ trans('examenes.Examen') }}</th>
						<th>{{ trans('examenes.Fecha') }}</th>
						<th>{{ trans('examenes.Progress') }}</th>
						<th style="width: 5%">%</th>
					</tr>
					@if(!Auth::guest())
						@if($pruebas)
							@if($pruebas['original']['status']['error']==0)
								@foreach($pruebas['original']['data'] as $prueba)
									<tr>
										<td>{{$prueba['nombre']}}</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									@foreach($prueba['examen'] as $examen)
										<tr>
											<td></td>
											<td>
												<a href="exameninicio/{{$examen['id']}}">{{date('d-m-Y', strtotime($examen['created_at']))}}</a>
											</td>
											<td>
												<div class="progress progress-xs">												<div class="progress-bar progress-bar-danger">
														{{$examen['porcentaje']}}%
													</div>
												</div>
											</td>
											<td>
												<span class="badge bg-red">{{$examen['porcentaje']}}%</span>
											</td>
										</tr>
									@endforeach
								@endforeach
							@endif
						@endif
					@endif
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

