@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ trans('examenes.superior_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.superior_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('descripcion'){{ trans('examenes.superior_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.superior_keywords') }}@endsection

@section('main_content')

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg">
             @include('paginas.publi.superior50')
        </div>
        <div class="col-md-8 pt-5 order-2">
			<p>{!! trans('examenes.superior_texto1') !!}</p>
			<p>{{ trans('examenes.superior_texto2') }}</p>
			<p>{!! trans('examenes.superior_texto3') !!}</p>
        </div>
    </div>
</section>

<section>
	<div class="row content h-100">
		<div class="col-md-4 pt-5 order-2 centraimg">
			<img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_superior.svg" width="300px" title="{{ trans('examenes.superior_imgtitle100') }}" alt="{{ trans('examenes.superior_imgalt100') }}">
		</div>
		<div class="col-md-8 pt-5 order-1">
			<h2>{{ trans('examenes.superior_titulo100') }}</h2>
			<p>{!! trans('examenes.superior_texto101') !!}</p>
			<p>{{ trans('examenes.superior_texto102') }}</p>
            <p>{{ trans('examenes.superior_texto103') }} <a href="/{{session('lang')}}/examenes-c2">{{ trans('examenes.superior_texto104') }}</a> {{ trans('examenes.superior_texto105') }} <a href="https://cvc.cervantes.es/ensenanza/biblioteca_ele/marco/" rel="nofollow" target="_blank">{{ trans('examenes.superior_texto106') }}</a></p>
		</div>
	</div>
</section>

<section>
    @include('paginas.examenes.comunes.examenes_pruebas')
</section>

<section>
    @include('paginas.examenes.comunes.examenes_examenes')
</section>

@endsection
