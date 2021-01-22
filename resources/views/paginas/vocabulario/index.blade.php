@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('vocabulario.vocabulario_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.vocabulario_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1'){{session('BC1texto')}}@endsection

@section('descripcion'){{ trans('vocabulario.vocabulario_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.vocabulario_keywords') }}@endsection

@section('main_content')

<section class="container justify">
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

<section class="container justify">
    <div class="container-fluid">
        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
            <h2>{{ trans('vocabulario.vocabulario_titulo2') }}</h2>
			<p>{{ trans('vocabulario.vocabulario_texto3') }}</p>
			<p>{{ trans('vocabulario.vocabulario_texto4') }}</p>
			<p>{{ trans('vocabulario.vocabulario_texto5') }}</p>
			<p>{{ trans('vocabulario.vocabulario_texto6') }}</p>
        </div>
        <div class="row content h-100 center">
	        <div class="col-md-5 order-1 order-md-2 centraimg" data-aos="fade-left">
           <img class="img-fluid " src="/img/practicav/vocabulariovalenciano.svg" width="300px" title="{{ trans('vocabulario.vocabulario_imgtitle1') }}" alt="{{ trans('vocabulario.vocabulario_imgalt1') }}">
        </div>
    </div>
</section>


<section class="container justify my-5">
    <div class="container-fluid">
        <div class="row">
			<h2>{{ trans('vocabulario.vocabulario_titulo3') }}</h2>
        </div>
        <div class="row">
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/el-nom-de-les-lletres">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/Nomslletres.svg"/>
                        </div>
                        <p>{{ trans('message.nombresletras') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/parts-del-dia">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/partsdia.svg"/>
                        </div>
                        <p>{{ trans('message.partesdia') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/dies-de-la-setmana">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/diessetmana.svg"/>
                        </div>
                        <p>{{ trans('message.diassemana') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/les-hores">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/hores.svg"/>
                        </div>
                        <p>{{ trans('message.horas') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/numeros">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/numeros.svg"/>
                        </div>
                        <p>{{ trans('message.numeros') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/cos-huma">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/coshuma.svg"/>
                        </div>
                        <p>{{ trans('message.partescuerpo') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/avui-qui-cuina">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/cuina.svg"/>
                        </div>
                        <p>{{ trans('message.hoyquecocinamos') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/parem-taula">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/taula.svg"/>
                        </div>
                        <p>{{ trans('message.ponermesa') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/ciutat">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/ciutat.svg"/>
                        </div>
                        <p>{{ trans('message.ciudad') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/entre-teles">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/ropa.svg"/>
                        </div>
                        <p>{{ trans('message.entretelas') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/hogar">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/hogar.svg"/>
                        </div>
                        <p>{{ trans('message.casa') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/mesos-any">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/mesos-any.svg"/>
                        </div>
                        <p>{{ trans('message.mesesano') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('lang')}}/relacions-de-parentiu">
                        <div class="service-icon center">
                        	<img class="ri-store-line" style="color: #ffbb2c;" src="/img/practicav/vocabulario/parentiu.svg"/>
                        </div>
                        <p>{{ trans('message.relacionesconvencionales') }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
