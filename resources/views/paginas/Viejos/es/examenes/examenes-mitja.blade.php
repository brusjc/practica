@extends('frontend.layouts.esfrontend')

@section('contentheader_title'){{ trans('esexamenes.mitja_title') }}@endsection

@section('contentheader_h1'){{ trans('esexamenes.mitja_h1') }}@endsection

@section('breadcrumb0')<a href="/es/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('descripcion'){{ trans('esexamenes.mitja_descripcion') }}@endsection

@section('keywords'){{ trans('esexamenes.mitja_keywords') }}@endsection

@section('main_content')

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg">
             @include('paginas.publi.superior50')
        </div>
        <div class="col-md-8 pt-5 order-2">
			<p>{!! trans('esexamenes.mitja_texto1') !!}</p>
			<p>{{ trans('esexamenes.mitja_texto2') }}</p>
			<p>{!! trans('esexamenes.mitja_texto3') !!}</p>
        </div>
    </div>
</section>

<section>
	<div class="row content h-100">
		<div class="col-md-4 pt-5 order-2 centraimg">
			<img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_mitja.svg" width="300px" title="{{ trans('esexamenes.mitja_imgtitle100') }}" alt="{{ trans('esexamenes.mitja_imgalt100') }}">
		</div>
		<div class="col-md-8 pt-5 order-1">
			<h2>{{ trans('esexamenes.mitja_titulo100') }}</h2>
			<p>{!! trans('esexamenes.mitja_texto101') !!}</p>
			<p>{{ trans('esexamenes.mitja_texto102') }}</p>
			<p>{!! trans('esexamenes.mitja_texto103') !!}</p>
		</div>
	</div>
</section>

<section>
    @include('paginas.es.examenes.comunes.examenes_pruebas')
</section>

<section>
    @include('paginas.es.examenes.comunes.examenes_examenes')
</section>

@endsection
