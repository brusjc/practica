@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ trans('vocabulario.vocabulario_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.vocabulario_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1'){{session('BC1texto')}}@endsection

@section('descripcion'){{ trans('vocabulario.vocabulario_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.vocabulario_keywords') }}@endsection

@section('main_content')

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1 order-md-2 centraimg" data-aos="fade-left">
				@include('paginas.vocabulario.publi.superior50')
            </div>
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
				<p>{{ trans('vocabulario.vocabulario_texto1') }}</p>
				<p>{{ trans('vocabulario.vocabulario_texto2') }}</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1 order-md-2 centraimg" data-aos="fade-left">
           <img class="img-fluid " src="/img/practicav/vocabulariovalenciano.svg" width="300px" title="{{ trans('vocabulario.vocabulario_imgtitle1') }}" alt="{{ trans('vocabulario.vocabulario_imgalt1') }}">
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


<section>
	<div class="container">
		<h2>{{ trans('vocabulario.vocabulario_titulo3') }}</h2>
		<div class="row mt-5" data-aos="fade-left">
			<div class="col-lg-3 col-md-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
					<img src="/img/practicav/vocabulario/Nomslletres.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/el-nom-de-les-lletres">{{ trans('message.nombresletras') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
					<img src="/img/practicav/vocabulario/partsdia.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/parts-del-dia">{{ trans('message.partesdia') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-md-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
					<img src="/img/practicav/vocabulario/diessetmana.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/dies-de-la-setmana">{{ trans('message.diassemana') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
					<img src="/img/practicav/vocabulario/hores.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/les-hores">{{ trans('message.horas') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
					<img src="/img/practicav/vocabulario/numeros.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/numeros">{{ trans('message.numeros') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
					<img src="/img/practicav/vocabulario/coshuma.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/cos-huma">{{ trans('message.partescuerpo') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
					<img src="/img/practicav/vocabulario/cuina.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/avui-qui-cuina">{{ trans('message.hoyquecocinamos') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
					<img src="/img/practicav/vocabulario/taula.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/parem-taula">{{ trans('message.ponermesa') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
					<img src="/img/practicav/vocabulario/ciutat.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/ciutat">{{ trans('message.ciudad') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
					<img src="/img/practicav/vocabulario/ropa.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/entre-teles">{{ trans('message.entretelas') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
					<img src="/img/practicav/vocabulario/hogar.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/hogar">{{ trans('message.casa') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
					<img src="/img/practicav/vocabulario/mesos-any.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/mesos-any">{{ trans('message.mesesano') }}</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 mt-4">
				<div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
					<img src="/img/practicav/vocabulario/parentiu.svg" class="ri-store-line" style="color: #ffbb2c;"></img>
					<p class="pl-4"><a href="/{{session('lang')}}/relacions-de-parentiu">{{ trans('message.relacionesconvencionales') }}</a></p>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection
