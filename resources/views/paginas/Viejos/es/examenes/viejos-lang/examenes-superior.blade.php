@extends('frontend.layouts.esfrontend')

@section('contentheader_title'){{ trans('esexamenes.superior_title') }}@endsection

@section('contentheader_h1'){{ trans('esexamenes.superior_h1') }}@endsection

@section('breadcrumb1')<a href="/examenes-jqcv">{{ trans('esexamenes.jqcv_breadcrumb') }}</a>@endsection

@section('descripcion'){{ trans('esexamenes.superior_descripcion') }}@endsection

@section('keywords'){{ trans('esexamenes.superior_keywords') }}@endsection

@section('main_content')

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 col-lg-6 justify-content-center align-items-stretch" data-aos="fade-right">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-7412986561454436"
				     data-ad-slot="6463281785"
				     data-ad-format="auto"
				     data-full-width-responsive="true">
				</ins>
				<script>(adsbygoogle = window.adsbygoogle || []).push({})</script>
            </div>
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
				<p>{!! trans('esexamenes.superior_texto1') !!}</p>
				<p>{{ trans('esexamenes.superior_texto2') }}</p>
				<p>{{ trans('esexamenes.superior_texto3') }}</p>
            </div>
        </div>
    </div>
</section>

<section>
	<div class="row content h-100">
		<div class="col-md-4 pt-5 order-2 centraimg">
			<img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_superior.svg" width="300px" title="{{ trans('esexamenes.superior_imgtitle100') }}" alt="{{ trans('esexamenes.superior_imgalt100') }}">
		</div>
		<div class="col-md-8 pt-5 order-1">
			<h2>{{ trans('esexamenes.superior_titulo100') }}</h2>
			<p>{!! trans('esexamenes.superior_texto101') !!}</p>
			<p>{{ trans('esexamenes.superior_texto102') }}</p>
			<p>{!! trans('esexamenes.superior_texto103') !!}</p>
		</div>
	</div>
</section>

<section class="about">
	@if($pruebas)
		<h2>{{ trans('esexamenes.superior_titulo200') }}</h2>
		<div class="row content mt-5">
			@if($pruebas['original']['status']['error']==0)
				@foreach($pruebas['original']['data'] as $key=>$nivel)
					<div class="col-lg-4 col-md-4">
						<a class="mb-2 btn btn-block btn-info pt-3 pb-3 mb-4" href="examen_a2/{{$nivel['codigo']}}">{{$nivel['nombre']}}</a>
					</div>
				@endforeach
			@endif
		@endif
	</div>
</section>

<section class="about">
	<div class="row content mt-5">
		<div class="col-lg-12 col-md-12">
			<div class="card">
				<div class="card-header">
					<h2>{{ trans('esexamenes.superior_titulo300') }}</h2>
					<div class="col-lg-9 col-md-9">
						@if(Auth::guest())
							{{ trans('message.solo usuarios registrados') }}
						@endif
					</div>
					<div class="col-lg-3 col-md-3">
						@if(Auth::guest())
							<a class="mb-2 btn btn-block btn-info" href="/login">{{ trans('message.login') }}</a>
						@endif
					</div>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<tr>
							<th>{{ trans('esexamenes.Examen') }}</th>
							<th>{{ trans('esexamenes.Fecha') }}</th>
							<th>{{ trans('esexamenes.Progreso') }}</th>
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
												<td><a href="exameninicio/{{$examen['id']}}">{{date('d-m-Y', strtotime($examen['created_at']))}}</a></td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar progress-bar-danger">
															{{$examen['porcentaje']}}%
														</div>
													</div>
												</td>
												<td><span class="badge bg-red">{{$examen['porcentaje']}}%</span></td>
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
</section>

@endsection
