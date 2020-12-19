@extends('frontend.layouts.esfrontend')

@section('contentheader_title'){{trans('esexamenes.jqcv_title')}}@endsection

@section('contentheader_h1'){{ trans('esexamenes.jqcv_h1') }}@endsection

@section('breadcrumb0')<a href="/es/">Inicio</a>@endsection

@section('breadcrumb1')<a href="/es/examenes-jqcv">Exámenes JQCV</a>@endsection

@section('descripcion'){{ trans('esexamenes.jqcv_descripcion') }}@endsection

@section('keywords'){{ trans('esexamenes.jqcv_keywords') }}@endsection

@section('main_content')

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-2 centraimg">
             @include('paginas.publi.superior50')
        </div>
        <div class="col-md-8 pt-5 order-1">
			<p>{!! trans('esexamenes.jqcv_texto1') !!}</p>
			<p>{!! trans('esexamenes.jqcv_texto2')!!}</p>
			<p>{{ trans('esexamenes.jqcv_texto3') }}</p>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-a1">{{ trans('esexamenes.jqcv_titulo11') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-a1">{{ trans('esexamenes.jqcv_texto11') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-a2">{{ trans('esexamenes.jqcv_titulo12') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-a2">{{ trans('esexamenes.jqcv_texto12') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-b1">{{ trans('esexamenes.jqcv_titulo13') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-b1">{{ trans('esexamenes.jqcv_texto13') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-b2">{{ trans('esexamenes.jqcv_titulo14') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-b2">{{ trans('esexamenes.jqcv_texto14') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-c1">{{ trans('esexamenes.jqcv_titulo15') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-c1">{{ trans('esexamenes.jqcv_texto15') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-c2">{{ trans('esexamenes.jqcv_titulo16') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-c2">{{ trans('esexamenes.jqcv_texto16') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-elemental">{{ trans('esexamenes.jqcv_titulo17') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-elemental">{{ trans('esexamenes.jqcv_texto17') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-oral">{{ trans('esexamenes.jqcv_titulo18') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-oral">{{ trans('esexamenes.jqcv_texto18') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-mitja">{{ trans('esexamenes.jqcv_titulo19') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-mitja">{{ trans('esexamenes.jqcv_texto19') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-superior">{{ trans('esexamenes.jqcv_titulo20') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-superior">{{ trans('esexamenes.jqcv_texto20') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection







