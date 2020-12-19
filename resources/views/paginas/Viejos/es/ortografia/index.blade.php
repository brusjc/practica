@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.ortografia_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.ortografia_h1') )}}@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.ortografia_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.ortografia_keywords') )}}@endsection

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
				<p>{{ html_entity_decode(trans('ortografia.ortografia_texto1') )}}</p>
				<p>{{ html_entity_decode(trans('ortografia.ortografia_texto2') )}}</p>
            </div>
        </div>
    </div>
</section>

<section id="features" class="features">
	<div class="container">
		<h2>{{ trans('ortografia.ortografia_titulo2') }}</h2>
		<div class="row" data-aos="fade-left">
			<div class="col-lg-3 col-md-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
					<h3><a href="/el-nom-de-les-lletres">{{ trans('ortografia.vocalisme_breadcrumb') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<h3><a href="/byv">{{ trans('ortografia.byv_breadcrumb') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
					<h3><a href="/acentuacion">{{ trans('ortografia.acentuacion_breadcrumb') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
					<h3><a href="/eio">{{ trans('ortografia.eio_breadcrumb') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
					<h3><a href="/dieresis">{{ trans('ortografia.dieresis_breadcrumb') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
					<h3><a href="/diftong">{{ trans('ortografia.diptongos_breadcrumb') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
					<h3><a href="/diacritic">{{ trans('ortografia.diacritic_breadcrumb') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
					<h3><a href="/apostrof">{{ trans('ortografia.apostrof_breadcrumb') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
					<h3><a href="/contraccio">{{ trans('ortografia.contraccio_breadcrumb') }}</a></h3>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection
