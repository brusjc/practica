@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ trans('examenes.B1_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.B1_h1') }}@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('descripcion'){{ trans('examenes.B1_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.B1_keywords') }}@endsection

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
				<p>{!! trans('examenes.B1_texto1') !!}</p>
				<p>{{ trans('examenes.B1_texto2') }}</p>
				<p>{!! trans('examenes.B1_texto3') !!}</p>
            </div>
        </div>
    </div>
</section>

<section>
	<div class="row content h-100">
		<div class="col-md-4 pt-5 order-2 centraimg">
			<img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_b1.svg" width="300px" title="{{ trans('examenes.B1_imgtitle100') }}" alt="{{ trans('examenes.B1_imgalt100') }}">
		</div>
		<div class="col-md-8 pt-5 order-1">
			<h2>{{ trans('examenes.B1_titulo100') }}</h2>
			<p>{!! trans('examenes.B1_texto101') !!}</p>
			<p>{{ trans('examenes.B1_texto102') }}</p>
			<p>{{ trans('examenes.B1_texto103') }} <a href="https://cvc.cervantes.es/ensenanza/biblioteca_ele/marco/" rel="nofollow" target="_blank">{{ trans('examenes.B1_texto104') }}</a></p>
		</div>
	</div>
</section>


@endsection
