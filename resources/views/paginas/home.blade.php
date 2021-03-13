@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('home.home_title') }}@endsection

@section('contentheader_h1'){{ trans('home.home_h1') }}@endsection

@section('descripcion'){{ trans('home.home_descripcion') }}@endsection

@section('keywords'){{ trans('home.home_keywords') }}@endsection

@section('main_content')

@if(isset($errors))
    <x-errores :errors=$errors></x-errores>
@endif

<section class="container justify">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5" data-aos="fade-right">
                <img class="img-fluid " src="/img/practicav/graduacion300.svg" title="{{ trans('home.home_imgtitle1') }}" alt="{{ trans('home.home_imgalt1') }}">
            </div>
            <div class="col-md-7" data-aos="fade-left">
                <p>{{ trans('home.home_texto1') }}</p>
                <p>{{ trans('home.home_texto2') }}</p>
                <p>{{ trans('home.home_texto3') }}</p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-md-7" data-aos="fade-up">
                <h2>{{ trans('home.home_titulo2') }}</h2>
                <p>{{ trans('home.home_texto4') }}</p>
                <p>{{ trans('home.home_texto5') }}</p>
                <p>{{ trans('home.home_texto6') }}</p>
            </div>
            <div class="col-md-5" data-aos="fade-left">
                <img src="/img/practicav/propuestacurso.svg" class="img-fluid" title="{{ trans('home.home_imgtitle2') }}" alt="{{ trans('home.home_imgalt2') }}">
            </div>
        </div>
    </div>
</section>

<section class="container justify my-5">
    <div class="container-fluid">
        <div class="row">
            <h2>{{ trans('home.home_titulo1') }}</h2>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/{{ session('locale') }}/examenes-jqcv">
                        <div class="service-icon center"><i class="fa fa-graduation-cap"></i></div>
                        <h3 class="center">{{ trans('home.home_titulo7') }}</h3>
                        <p class="center">{{ trans('home.home_texto7') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/{{ session('locale') }}/vocabulario">
                        <div class="service-icon center"><i class="fa fa-font"></i></div>
                        <h3 class="center">{{ trans('home.home_titulo8') }}</h3>
                        <p class="center">{{ trans('home.home_texto8') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/{{ session('locale') }}/ortografia">
                        <div class="service-icon center"><i class="fa fa-book"></i></div>
                        <h3 class="center">{{ trans('home.home_titulo9') }}</h3>
                        <p class="center">{{ trans('home.home_texto9') }}</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/{{ session('locale') }}/dictats">
                        <div class="service-icon center"><i class="fa fa-play"></i></div>
                        <h3 class="center">{{ trans('home.home_titulo10') }}</h3>
                        <p class="center">{{ trans('home.home_texto10') }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
