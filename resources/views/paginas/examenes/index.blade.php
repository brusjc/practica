@extends('frontend.layouts.frontend')

@section('contentheader_title'){{trans('examenes.jqcv_title')}}@endsection

@section('contentheader_h1'){{ trans('examenes.jqcv_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="/{{session('lang')}}/examenes-jqcv">Exámenes JQCV</a>@endsection

@section('descripcion'){{ trans('examenes.jqcv_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.jqcv_keywords') }}@endsection

@section('main_content')

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-2 centraimg">
             @include('paginas.publi.superior50')
        </div>
        <div class="col-md-8 pt-5 order-1">
            <p>{!! trans('examenes.jqcv_texto1') !!}</p>
            <p>{!! trans('examenes.jqcv_texto2')!!}</p>
            <p>{{ trans('examenes.jqcv_texto3') }}</p>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/{{session('lang')}}/examenes-a1">{{ trans('examenes.jqcv_titulo11') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/{{session('lang')}}/examenes-a1">{{ trans('examenes.jqcv_texto11') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/{{session('lang')}}/examenes-a2">{{ trans('examenes.jqcv_titulo12') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/{{session('lang')}}/examenes-a2">{{ trans('examenes.jqcv_texto12') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/{{session('lang')}}/examenes-b1">{{ trans('examenes.jqcv_titulo13') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/{{session('lang')}}/examenes-b1">{{ trans('examenes.jqcv_texto13') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/{{session('lang')}}/examenes-b2">{{ trans('examenes.jqcv_titulo14') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/{{session('lang')}}/examenes-b2">{{ trans('examenes.jqcv_texto14') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/{{session('lang')}}/examenes-c1">{{ trans('examenes.jqcv_titulo15') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/{{session('lang')}}/examenes-c1">{{ trans('examenes.jqcv_texto15') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/{{session('lang')}}/examenes-c2">{{ trans('examenes.jqcv_titulo16') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/{{session('lang')}}/examenes-c2">{{ trans('examenes.jqcv_texto16') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/{{session('lang')}}/examenes-elemental">{{ trans('examenes.jqcv_titulo17') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/{{session('lang')}}/examenes-elemental">{{ trans('examenes.jqcv_texto17') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/{{session('lang')}}/examenes-oral">{{ trans('examenes.jqcv_titulo18') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/{{session('lang')}}/examenes-oral">{{ trans('examenes.jqcv_texto18') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/{{session('lang')}}/examenes-mitja">{{ trans('examenes.jqcv_titulo19') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/{{session('lang')}}/examenes-mitja">{{ trans('examenes.jqcv_texto19') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/{{session('lang')}}/examenes-superior">{{ trans('examenes.jqcv_titulo20') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/{{session('lang')}}/examenes-superior">{{ trans('examenes.jqcv_texto20') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection







