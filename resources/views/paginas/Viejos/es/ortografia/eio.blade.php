@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.eio_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.eio_h1') )}}@endsection

@section('breadcrumb1')<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.eio_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.eio_keywords') )}}@endsection

@section('main_content')

<section id="about" class="about">
    <div class="container-fluid">
	    <div class="row content">
	        <div class="col-md-5 order-1">
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
	        <div class="col-md-7 pt-5 order-2">
				<p>{{ trans('ortografia.eio_texto1') }}</p>
	            <h2>{{ trans('ortografia.eio_titulo20') }}</h2>
	            <ul>
		            <li>{{ trans('ortografia.eio_texto20') }}</li>
		            <li>{{ trans('ortografia.eio_texto21') }}</li>
		            <li>{{ trans('ortografia.eio_texto22') }}</li>
		            <li>{{ trans('ortografia.eio_texto23') }}</li>
		            <li>{{ trans('ortografia.eio_texto24') }}</li>
				</ul>
	        </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid">
        <div class="row content mb-5">
            <div class="col-md-5 pt-5 order-2">
	           <img class="img-fluid" src="/img/practicav/ortografia/e-o-obertas.svg" width="300px" title="{{ trans('ortografia.eio_imgtitle40') }}" alt="{{ trans('ortografia.eio_imgalt40') }}">
	        </div>
	        <div class="col-md-7 pt-5 order-1">
	            <h2>{{ trans('ortografia.eio_titulo40') }}</h2>
	            <ul>
					<li>{{ trans('ortografia.eio_texto40') }}</li>
					<li>{{ trans('ortografia.eio_texto41') }}</li>
					<li>{{ trans('ortografia.eio_texto42') }}</li>
				</ul>
            </div>
        </div>
	</div>
</section>

@endsection
