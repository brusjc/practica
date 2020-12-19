@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('vocabulario.vocabulario_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('vocabulario.vocabulario_h1') )}}@endsection

@section('descripcion'){{ html_entity_decode(trans('vocabulario.vocabulario_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('vocabulario.vocabulario_keywords') )}}@endsection

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
		<p>{{ trans('vocabulario.vocabulario_texto1') }}</p>
		<p>{{ trans('vocabulario.vocabulario_texto2') }}</p>
            </div>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-5 order-2 order-md-2" data-aos="fade-left">
           <img class="img-fluid " src="/img/practicav/vocabulariovalenciano.svg" title="{{ trans('vocabulario.vocabulario_imgtitle1') }}" alt="{{ trans('vocabulario.vocabulario_imgalt1') }}">
        </div>
        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
            <h2>{{ trans('vocabulario.vocabulario_titulo2') }}</h2>
			<p>{{ trans('vocabulario.vocabulario_texto3') }}</p>
			<p>{{ trans('vocabulario.vocabulario_texto4') }}</p>
			<p>{{ trans('vocabulario.vocabulario_texto5') }}</p>
			<p>{{ trans('vocabulario.vocabulario_texto6') }}</p>
        </div>
    </div>
</section>


<section id="features" class="features">
	<div class="container">
		<h2>{{ trans('vocabulario.vocabulario_titulo3') }}</h2>
		<div class="row" data-aos="fade-left">
			<div class="col-lg-3 col-md-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
					<img src="/img/practicav/Nomslletres50.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/el-nom-de-les-lletres">{{ trans('message.nombresletras') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<img src="/img/practicav/partsdia.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/parts-del-dia">{{ trans('message.partesdia') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
					<img src="/img/practicav/diessetmana.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/dies-de-la-setmana">{{ trans('message.diassemana') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
					<img src="/img/practicav/hores.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/les-hores">{{ trans('message.horas') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
					<img src="/img/practicav/numeros.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/numeros">{{ trans('message.numeros') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
					<img src="/img/practicav/coshuma.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/cos-huma">{{ trans('message.partescuerpo') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
					<img src="/img/practicav/cuina.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/avui-qui-cuina">{{ trans('message.hoyquecocinamos') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
					<img src="/img/practicav/taula.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/parem-taula">{{ trans('message.ponermesa') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
					<img src="/img/practicav/ciudad.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/ciutat">{{ trans('message.ciudad') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
					<img src="/img/practicav/ropa.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/entre-teles">{{ trans('message.entretelas') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
					<img src="/img/practicav/hogar.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/hogar">{{ trans('message.casa') }}</a></h3>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
					<img src="/img/practicav/parentiu.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<h3><a href="/relacions-de-parentiu">{{ trans('message.relacionesconvencionales') }}</a></h3>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection
