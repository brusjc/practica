@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ trans('examenes.A1_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.A1_h1') }}@endsection

@section('breadcrumb1')<a href="/examenes-jqcv">{{ trans('examenes.jqcv_breadcrumb') }}</a>@endsection

@section('descripcion'){{ trans('examenes.A1_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.A1_keywords') }}@endsection

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
			<p>{{ trans('examenes.A1_texto1') }}</p>
			<ul>
				<li>{{ trans('examenes.A1_texto2') }}</li>
				<li>{{ trans('examenes.A1_texto3') }}</li>
				<li>{{ trans('examenes.A1_texto4') }}</li>
			</ul>
			<p>{!! trans('examenes.A1_texto5') !!}</p>
            </div>
        </div>
    </div>
</section>

<section class="about">
	<div class="row content">
		<div class="col-12">
			<p>{{ trans('examenes.A1_texto7') }}</p>
			<ul>
				<li>{{ trans('examenes.A1_texto8') }}</li>
				<li>{{ trans('examenes.A1_texto9') }}</li>
				<li>{{ trans('examenes.A1_texto10') }}</li>
				<li>{{ trans('examenes.A1_texto11') }}</li>
				<li>{{ trans('examenes.A1_texto12') }}</li>
			</ul>
		</div>
	</div>
</section>

@endsection
