@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('ortografia.ortografia_title') }}@endsection

@section('contentheader_h1'){{ trans('ortografia.ortografia_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('locale')}}/">Inicio</a>@endsection

@section('breadcrumb1'){{ session('BC1texto') }}@endsection

@section('descripcion'){{ trans('ortografia.ortografia_descripcion') }}@endsection

@section('keywords'){{ trans('ortografia.ortografia_keywords') }}@endsection

@section('main_content')

<section class="container justify">
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

<section class="container justify my-5">
    <div class="container-fluid">
        <div class="row">
			<h2>{{ trans('ortografia.ortografia_titulo2') }}</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/byv">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/byv-R.svg"/>
                        </div>
                        <br/>
                        <p class="center">{{ trans('ortografia.byv_breadcrumb') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/acentuacion">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/acentuacion-R.svg"/>
                        </div>
                        <br/>
                        <p class="center">{{ trans('ortografia.acentuacion_breadcrumb') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/eio">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/eyo-R.svg"/>
                        </div>
                        <br/>
                        <p class="center">{{ trans('ortografia.eio_breadcrumb') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/dieresis">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/dieresis-R.svg"/>
                        </div>
                        <br/>
                        <p class="center">{{ trans('ortografia.dieresis_breadcrumb') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/diptong">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/diptong-R.svg"/>
                        </div>
                        <br/>
                        <p class="center">{{ trans('ortografia.diptongos_breadcrumb') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/diacritic">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/diacritic-R.svg"/>
                        </div>
                        <br/>
                        <p class="center">{{ trans('ortografia.diacritic_breadcrumb') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/apostrof">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/apostrof-R.svg"/>
                        </div>
                        <br/>
                        <p class="center">{{ trans('ortografia.apostrof_breadcrumb') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/contraccio">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/contraccio-R.svg"/>
                        </div>
                        <br/>
                        <p class="center">{{ trans('ortografia.contraccio_breadcrumb') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/vocalisme">
                        <div class="service-icon center">
                        	<img class="ri-store-line" src="/img/practicav/ortografia/vocalisme-R.svg"/>
                        </div>
                        <br/>
                        <p class="center">{{ trans('ortografia.vocalisme_breadcrumb') }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Examenes - Bajo Introduccion - 728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7412986561454436"
             data-ad-slot="1171860113"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>

@include('paginas.ortografia.comunes.enlaces')

@endsection
