@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ trans('ortografia.ortografia_title') }}@endsection

@section('contentheader_h1'){{ trans('ortografia.ortografia_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1'){{ session('BC1texto') }}@endsection

@section('descripcion'){{ trans('ortografia.ortografia_descripcion') }}@endsection

@section('keywords'){{ trans('ortografia.ortografia_keywords') }}@endsection

@section('main_content')

<section>
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-xl-5 col-lg-6 justify-content-center align-items-stretch" data-aos="fade-right">
				@include('paginas.ortografia.publi.superior50')
            </div>
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
				<p>{{ trans('ortografia.ortografia_texto1') }}</p>
				<p>{{ trans('ortografia.ortografia_texto2') }}</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
			<h2>{{ trans('ortografia.ortografia_titulo2') }}</h2>
			<div class="row" data-aos="fade-left">
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
						<h3><a href="/{{session('lang')}}/byv">{{ trans('ortografia.byv_breadcrumb') }}</a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
						<h3><a href="/{{session('lang')}}/acentuacion">{{ trans('ortografia.acentuacion_breadcrumb') }}</a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
						<h3><a href="/{{session('lang')}}/eio">{{ trans('ortografia.eio_breadcrumb') }}</a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
						<h3><a href="/{{session('lang')}}/dieresis">{{ trans('ortografia.dieresis_breadcrumb') }}</a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
						<h3><a href="/{{session('lang')}}/diftong">{{ trans('ortografia.diptongos_breadcrumb') }}</a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
						<h3><a href="/{{session('lang')}}/diacritic">{{ trans('ortografia.diacritic_breadcrumb') }}</a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
						<h3><a href="/{{session('lang')}}/apostrof">{{ trans('ortografia.apostrof_breadcrumb') }}</a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
						<h3><a href="/{{session('lang')}}/contraccio">{{ trans('ortografia.contraccio_breadcrumb') }}</a></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 mt-4">
					<div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
						<h3><a href="/{{session('lang')}}/vocalisme">{{ trans('ortografia.vocalisme_breadcrumb') }}</a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('paginas.ortografia.comunes.enlaces')

@endsection
