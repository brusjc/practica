@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('dictats.dictats_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('dictats.dictats_h1') )}}@endsection

@section('breadcrumb1')<a href="/dictats">{{ trans('dictats.dictats_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('dictats.dictats_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('dictats.dictats_keywords') )}}@endsection

@section('main_content')

<section id="about" class="about">
    <div class="container-fluid">
	    <div class="row content">
	        <div class="col-md-5 order-2 order-md-2" data-aos="fade-left">
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
	        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
				<p>{{ trans('dictats.dictats_texto1') }}</p>
				<p>{{ trans('dictats.dictats_texto2') }}</p>
				<p>{{ trans('dictats.dictats_texto3') }}</p>
	        </div>
        </div>
        <div class="row content">
            <div class="col-xl-5 col-lg-6 justify-content-center align-items-stretch" data-aos="fade-right">
	           <img class="img-fluid" src="/img/practicav/dictats.svg" width="400px" title="{{ trans('dictats.dictats_imgtitle1') }}" alt="{{ trans('dictats.dictats_imgalt1') }}">
	        </div>
	        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
	            <h2>{{ trans('dictats.dictats_titulo4') }}</h2>
				<p>{{ trans('dictats.dictats_texto4') }}</p>
				<ul>
					<li>{{ html_entity_decode(trans('dictats.dictats_texto5') )}}</li>
					<li>{{ html_entity_decode(trans('dictats.dictats_texto6') )}}</li>
					<li>{{ html_entity_decode(trans('dictats.dictats_texto7') )}}</li>
				</ul>
            </div>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-5 order-2 order-md-2" data-aos="fade-left">
           <img class="img-fluid " src="/img/practicav/bocadillo.svg" width="400px" title="{{ trans('dictats.dictats_imgtitle2') }}" alt="{{ trans('dictats.dictats_imgalt2') }}">
        </div>
        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
	            <h2>{{ trans('dictats.dictats_titulo2') }}</h2>
				<p>{{ trans('dictats.dictats_texto8') }}</p>
				<ul>
					<li>{{ html_entity_decode(trans('dictats.dictats_texto9') )}}</li>
					<li>{{ html_entity_decode(trans('dictats.dictats_texto10') )}}</li>
					<li>{{ html_entity_decode(trans('dictats.dictats_texto11') )}}</li>
				</ul>
				<p>{{ trans('dictats.dictats_texto12') }}</p>
				<p>{{ trans('dictats.dictats_texto13') }}</p>
        </div>
    </div>
</section>


<section id="features" class="features">
	<div class="container">
		<h2>{{ trans('dictats.dictats_titulo3') }}</h2>
		<div class="row" data-aos="fade-left">
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
					<h3><a href="/dictat-mitja-junio-2009-mati">Dictat examen mitjà<br/><br/> juny 2009 matí</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<h3><a href="/dictat-mitja-junio-2009-vesprada">Dictat examen mitjà<br/><br/> juny 2009 vesprada</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<h3><a href="/dictat-mitja-junio-2010-mati">Dictat examen mitjà<br/><br/> juny 2010 matí</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<h3><a href="/dictat-mitja-junio-2010-vesprada">Dictat examen mitjà<br/><br/> juny 2010 vesprada</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<h3><a href="/dictat-mitja-novembre-2010-mati">Dictat examen mitjà<br/><br/> novembre 2010 matí</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<h3><a href="/dictat-mitja-novembre-2011-mati">Dictat examen mitjà<br/><br/> novembre 2011 matí</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<h3><a href="/dictat-mitja-novembre-2011-vesprada">{{ trans('dictats.dictat201111mv_breadcrumb') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
					<h3><a href=/dictat-superior-junio-2009">{{ trans('dictats.dictat200906sm_breadcrumb') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<h3><a href="/dictat-superior-junio-2010">{{ trans('dictats.dictat201006sm_breadcrumb') }}</a></h3>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection
