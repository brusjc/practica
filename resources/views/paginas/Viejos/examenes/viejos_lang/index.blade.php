@extends('frontend.layouts.frontend')

@section('contentheader_title'){{trans('examenes.jqcv_title')}}@endsection

@section('contentheader_h1'){{ trans('examenes.jqcv_h1') }}@endsection

@section('descripcion'){{ trans('examenes.jqcv_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.jqcv_keywords') }}@endsection

@section('main_content')

<section id="about" class="about">
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
				<p>{!! trans('examenes.jqcv_texto1') !!}</p>
				<p>{!! trans('examenes.jqcv_texto2')!!}</p>
				<p>{{ trans('examenes.jqcv_texto3') }}</p>
            </div>
        </div>
    </div>
</section>


<section id="features" class="features">
	<div class="row">
		<div class="col-lg-3 col-md-4 mt-4">
			<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
				<a href="/examenes-a1">{{ trans('examenes.jqcv_titulo11') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenes-a1">{{ trans('examenes.jqcv_texto11') }}</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 mt-4">
			<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
				<a href="/examenes-a2">{{ trans('examenes.jqcv_titulo12') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenes-a2">{{ trans('examenes.jqcv_texto12') }}</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 mt-4">
			<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
				<a href="/examenes-b1">{{ trans('examenes.jqcv_titulo13') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenes-b1">{{ trans('examenes.jqcv_texto13') }}</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 mt-4">
			<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
				<a href="/examenes-b2">{{ trans('examenes.jqcv_titulo14') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenes-b2">{{ trans('examenes.jqcv_texto14') }}</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 mt-4">
			<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
				<a href="/examenes-c1">{{ trans('examenes.jqcv_titulo15') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenes-c1">{{ trans('examenes.jqcv_texto15') }}</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 mt-4">
			<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
				<a href="/examenes-c2">{{ trans('examenes.jqcv_titulo16') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenes-c2">{{ trans('examenes.jqcv_texto16') }}</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 mt-4">
			<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
				<a href="/examenes-elemental">{{ trans('examenes.jqcv_titulo17') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenes-elemental">{{ trans('examenes.jqcv_texto17') }}</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 mt-4">
			<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
				<a href="/examenes-oral">{{ trans('examenes.jqcv_titulo18') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenes-oral">{{ trans('examenes.jqcv_texto18') }}</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 mt-4">
			<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
				<a href="/examenes-mitja">{{ trans('examenes.jqcv_titulo19') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenes-mitja">{{ trans('examenes.jqcv_texto19') }}</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 mt-4">
			<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
				<a href="/examenes-superior">{{ trans('examenes.jqcv_titulo20') }}</a>
				<a class="mb-2 btn btn-block btn-info" href="/examenes-superior">{{ trans('examenes.jqcv_texto20') }}</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="row">			
		<div class="col-lg-12 col-md-12">
			<p>{{ trans('examenes.jqcv_texto4') }}</p>
			<p>{{ trans('examenes.jqcv_texto5') }}</p>
		</div>
	</div>
</section>

@endsection
