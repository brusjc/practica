@extends('layouts.app')

@section('contentheader_title'){{ trans('examenes.B1_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.B1_h1') }}@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('descripcion'){{ trans('examenes.B1_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.B1_keywords') }}@endsection

@section('main_content')

<div class="row"><div class="col-5">	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>	<ins class="adsbygoogle"	     style="display:block"	     data-ad-client="ca-pub-7412986561454436"	     data-ad-slot="6463281785"	     data-ad-format="auto"	     data-full-width-responsive="true"></ins>	<script>	     (adsbygoogle = window.adsbygoogle || []).push({});	</script></div><div class="col-7">	<div class="comment-text">		<p>{{ html_entity_decode(trans('examenes.B1_texto1') )}}</p>		<p>{{ html_entity_decode(trans('examenes.B1_texto2') )}}</p>		<p>{{ html_entity_decode(trans('examenes.B1_texto3') )}}</p>	</div></div>
</div>
<div class="comment-text"><p>{{ html_entity_decode(trans('examenes.B1_texto4') )}}</p><p>{{ html_entity_decode(trans('examenes.B1_texto5') )}} <a href="https://cvc.cervantes.es/ensenanza/biblioteca_ele/marco/" target="_blank">{{ html_entity_decode(trans('examenes.B1_texto6') )}}</a></p>
</div>

<div class="row mt-5">@if($pruebas)	@if($pruebas['original']['status']['error']==0)		@foreach($pruebas['original']['data'] as $key=>$nivel)			<div class="col-lg-4 col-md-4">				<a class="mb-2 btn btn-block btn-info" href="examen_b1/{{$nivel['codigo']}}">{{$nivel['nombre']}}</a>			</div>		@endforeach	@endif@endif
</div>

<div class="row  mt-5"><div class="col-md-12">	<div class="card">		<div class="card-header">			<h3>Nivel B1 - Probes usuario</h3>			@if(Auth::guest())				{{ trans('message.solo usuarios registrados') }}			@endif			<div class="pull-right">				@if(Auth::guest())					<a class="mb-2 btn btn-block btn-info" href="/login">{{ trans('message.login') }}</a>				@endif			</div>		</div>		<div class="card-body">			<table class="table table-bordered">				<tr>					<th>{{ trans('examenes.Examen') }}</th>					<th>{{ trans('examenes.Fecha') }}</th>					<th>{{ trans('examenes.Progreso') }}</th>					<th style="width: 5%">%</th>				</tr>				@if(!Auth::guest())					@if($pruebas)						@if($pruebas['original']['status']['error']==0)							@foreach($pruebas['original']['data'] as $prueba)								<tr>									<td>{{$prueba['nombre']}}</td>									<td></td>									<td></td>									<td></td>								</tr>								@foreach($prueba['examen'] as $examen)									<tr>										<td></td>										<td><a href="exameninicio/{{$examen['id']}}">{{date('d-m-Y', strtotime($examen['created_at']))}}</a></td>										<td>											<div class="progress progress-xs">												<div class="progress-bar progress-bar-primary">													{{$examen['porcentaje']}}%												</div>											</div>										</td>										<td><span class="badge bg-primary text-center">{{$examen['porcentaje']}}%</span></td>									</tr>								@endforeach												@endforeach						@endif					@endif				@endif			</table>		</div>	</div></div>
</div>

<div class="row"><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- Examenes - Bajo Introduccion - 728x90 --><ins class="adsbygoogle"     style="display:inline-block;width:728px;height:90px"     data-ad-client="ca-pub-7412986561454436"     data-ad-slot="1171860113"></ins><script>     (adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>
@endsection

