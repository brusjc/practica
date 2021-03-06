@extends('layouts.frontandia.general')

@section('contentheader_title'){{trans('examenes.jqcv_title')}}@endsection

@section('contentheader_h1'){{ trans('examenes.jqcv_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('locale')}}/">Inicio</a>@endsection

@section('breadcrumb1'){{session('BC1texto')}}@endsection

@section('descripcion'){{ trans('examenes.jqcv_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.jqcv_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-5">
                 @include('paginas.publi.superior50')
            </div>
            <div class="col-md-7">
                <p>{!! trans('examenes.jqcv_texto1') !!}</p>
                <p>{!! trans('examenes.jqcv_texto2')!!}</p>
                <p>{{ trans('examenes.jqcv_texto3') }}</p>
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

<section class="container justify">
    <div class="container-fluid">
        <div class="row">
            <h2>{{ trans('home.home_titulo1') }}</h2>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/{{session('locale')}}/examenes-a1"><h3>{{ trans('examenes.jqcv_titulo11') }}</h3><br/>{{ trans('examenes.jqcv_texto11') }}</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/{{session('locale')}}/examenes-a2"><h3>{{ trans('examenes.jqcv_titulo12') }}</h3><br/>{{ trans('examenes.jqcv_texto12') }}</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/{{session('locale')}}/examenes-b1"><h3>{{ trans('examenes.jqcv_titulo13') }}</h3><br/>{{ trans('examenes.jqcv_texto13') }}</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/examenes-b2"><h3>{{ trans('examenes.jqcv_titulo14') }}</h3><br/>{{ trans('examenes.jqcv_texto14') }}</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/{{session('locale')}}/examenes-c1"><h3>{{ trans('examenes.jqcv_titulo15') }}</h3><br/>{{ trans('examenes.jqcv_texto15') }}</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/{{session('locale')}}/examenes-c2"><h3>{{ trans('examenes.jqcv_titulo16') }}</h3><br/>{{ trans('examenes.jqcv_texto16') }}</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/{{session('locale')}}/examenes-elemental"><h3>{{ trans('examenes.jqcv_titulo17') }}</h3><br/>{{ trans('examenes.jqcv_texto17') }}</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/examenes-oral"><h3>{{ trans('examenes.jqcv_titulo18') }}</h3><br/>{{ trans('examenes.jqcv_texto18') }}</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a  href="/{{session('locale')}}/examenes-mitja"><h3>{{ trans('examenes.jqcv_titulo19') }}</h3><br/>{{ trans('examenes.jqcv_texto19') }}</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/examenes-superior"><h3>{{ trans('examenes.jqcv_titulo20') }}</h3><br/>{{ trans('examenes.jqcv_texto20') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection







