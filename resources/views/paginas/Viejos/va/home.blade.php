@extends('frontend.layouts.vafrontend')

@section('contentheader_title'){{ trans('vahome.home_title') }}@endsection

@section('contentheader_h1'){{ trans('vahome.home_h1') }}@endsection

@section('descripcion'){{ trans('vahome.home_descripcion') }}@endsection

@section('keywords'){{ trans('vahome.home_keywords') }}@endsection

@section('main_content')

<section id="about" class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-7 justify-content-center align-items-stretch" data-aos="fade-right">
                <img class="img-fluid " src="/img/practicav/graduacion300.svg" title="{{ trans('vahome.home_imgtitle1') }}" alt="{{ trans('vahome.home_imgalt1') }}">
            </div>
            <div class="col-xl-6 col-lg-5 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                <p>{{ trans('vahome.home_texto1') }}</p>
                <p>{{ trans('vahome.home_texto2') }}</p>
                <p>{{ trans('vahome.home_texto3') }}</p>
            </div>
        </div>
    </div>

    <div class="row content">
        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="/img/practicav/propuestacurso.svg" class="img-fluid" title="{{ trans('vahome.home_imgtitle2') }}" alt="{{ trans('vahome.home_imgalt2') }}">
        </div>
        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h2>{{ trans('vahome.home_titulo2') }}</h2>
            <p>{{ trans('vahome.home_texto4') }}</p>
            <p>{{ trans('vahome.home_texto5') }}</p>
            <p>{{ trans('vahome.home_texto6') }}</p>
        </div>
    </div>
</section>

<section id="pricing" class="pricing mt-5">
    <div class="container">
        <h2>{{ trans('vahome.home_titulo1') }}</h2>
        <div class="row" data-aos="fade-left">
            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <span class="advanced">JQCV</span>
                    <h3><a class="mb-2 btn btn-block btn-info font-weight-bold" href="/examenes-jqcv">{{ html_entity_decode(trans('vahome.home_titulo7') )}}</a></h3>
                    <p><a class="mb-2 btn btn-block btn-info" href="/examenes-jqcv">{{ html_entity_decode(trans('vahome.home_texto7') )}}</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <h3><a class="mb-2 btn btn-block btn-info font-weight-bold" href="/vocabulario">{{ html_entity_decode(trans('vahome.home_titulo8') )}}</a></h3>
                    <p><a class="mb-2 btn btn-block btn-info" href="/vocabulario">{{ html_entity_decode(trans('vahome.home_texto8') )}}</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <h3><a class="mb-2 btn btn-block btn-info font-weight-bold" href="/ortografia">{{ html_entity_decode(trans('vahome.home_titulo9') )}}</a></h3>
                    <p><a class="mb-2 btn btn-block btn-info" href="/ortografia">{{ html_entity_decode(trans('vahome.home_texto9') )}}</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">
                    <h3><a class="mb-2 btn btn-block btn-info font-weight-bold" href="/dictats">{{ html_entity_decode(trans('vahome.home_titulo10') )}}</a></h3>
                    <p><a class="mb-2 btn btn-block btn-info" href="/dictats">{{ html_entity_decode(trans('vahome.home_texto10') )}}</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="counts" class="counts">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="icofont-simple-smile"></i>
                    <span data-toggle="counter-up">10</span>
                    <p>{{ trans('vahome.home_titulo20') }}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="icofont-document-folder"></i>
                    <span data-toggle="counter-up">5</span>
                    <p>{{ trans('vahome.home_titulo21') }}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                    <i class="icofont-live-support"></i>
                    <span data-toggle="counter-up">40</span>
                    <p>{{ trans('vahome.home_titulo22') }}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                    <i class="icofont-users-alt-5"></i>
                    <span data-toggle="counter-up">218</span>
                    <p>{{ trans('vahome.home_titulo23') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
