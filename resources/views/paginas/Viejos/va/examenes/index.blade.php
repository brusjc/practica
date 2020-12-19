@extends('frontend.layouts.vafrontend')

@section('contentheader_title'){{trans('vaexamenes.jqcv_title')}}@endsection

@section('contentheader_h1'){{ trans('vaexamenes.jqcv_h1') }}@endsection

@section('breadcrumb0')<a href="/va/">Inici</a>@endsection

@section('breadcrumb1')<a href="/va/examenes-jqcv">Exámenes JQCV</a>@endsection

@section('descripcion'){{ trans('vaexamenes.jqcv_descripcion') }}@endsection

@section('keywords'){{ trans('vaexamenes.jqcv_keywords') }}@endsection

@section('main_content')

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-2 centraimg">
             @include('paginas.publi.superior50')
        </div>
        <div class="col-md-8 pt-5 order-1">
			<p>{!! trans('vaexamenes.jqcv_texto1') !!}</p>
			<p>{!! trans('vaexamenes.jqcv_texto2')!!}</p>
			<p>{{ trans('vaexamenes.jqcv_texto3') }}</p>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/examenes-a1">{{ trans('vaexamenes.jqcv_titulo11') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/examenes-a1">{{ trans('vaexamenes.jqcv_texto11') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/examenes-a2">{{ trans('vaexamenes.jqcv_titulo12') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/examenes-a2">{{ trans('vaexamenes.jqcv_texto12') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/es/examenes-b1">{{ trans('vaexamenes.jqcv_titulo13') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/es/examenes-b1">{{ trans('vaexamenes.jqcv_texto13') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/examenes-b2">{{ trans('vaexamenes.jqcv_titulo14') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/examenes-b2">{{ trans('vaexamenes.jqcv_texto14') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/examenes-c1">{{ trans('vaexamenes.jqcv_titulo15') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/examenes-c1">{{ trans('vaexamenes.jqcv_texto15') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/examenes-c2">{{ trans('vaexamenes.jqcv_titulo16') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/examenes-c2">{{ trans('vaexamenes.jqcv_texto16') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/examenes-elemental">{{ trans('vaexamenes.jqcv_titulo17') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/examenes-elemental">{{ trans('vaexamenes.jqcv_texto17') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/examenes-oral">{{ trans('vaexamenes.jqcv_titulo18') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/examenes-oral">{{ trans('vaexamenes.jqcv_texto18') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/examenes-mitja">{{ trans('vaexamenes.jqcv_titulo19') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/examenes-mitja">{{ trans('vaexamenes.jqcv_texto19') }}</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><a  href="/examenes-superior">{{ trans('vaexamenes.jqcv_titulo20') }}</a></div>
                <div class="card-body text-primary">
                    <a href="/examenes-superior">{{ trans('vaexamenes.jqcv_texto20') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection







