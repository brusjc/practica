@extends('frontend.layouts.esfrontend')

@section('contentheader_title'){{ trans('esexamenes.exaB2_title') }}@endsection

@section('contentheader_h1'){{ trans('esexamenes.exaB2_h1') }}@endsection

@section('breadcrumb0')<a href="/es/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('breadcrumb3')<a href="{{session('BC3')}}">{{ session('BC3texto') }}</a>@endsection

@section('descripcion'){{trans('esexamenes.exaB2_descripcion1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('esexamenes.exaB2_descripcion2')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('esexamenes.exaB2_descripcion3')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('esexamenes.exaB2_descripcion4')}}@endsection

@section('keywords'){{trans('esexamenes.exaB2_keywords1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('esexamenes.exaB2_keywords2')}}@endsection

@section('main_content')

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg">
             @include('paginas.publi.superior50')
        </div>
        <div class="col-md-8 pt-5 order-2">
            <p>{!! trans('esexamenes.exaB2_texto1') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('esexamenes.exaB2_texto2') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('esexamenes.exaB2_texto3') !!}</p>
            <p>{!! trans('esexamenes.exaB2_texto4') !!}</p>
            <p>{!! trans('esexamenes.exaB2_texto5') !!}</p>
        </div>
    </div>
</section>

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-2 centraimg">
            <img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_B2.svg" width="300px" title="{{ trans('esexamenes.exaB2_imgtitle100') }} {{$datos['mes']}} {{$datos['ano']}}" alt="{{ trans('esexamenes.exaB2_imgalt100') }} {{$datos['mes']}} {{$datos['ano']}}">
        </div>
        <div class="col-md-8 pt-5 order-1">
            <h2>{{ trans('esexamenes.exaB2_titulo100') }} {{$datos['mes']}} {{ trans('esexamenes.exaB2_titulo101') }} {{$datos['ano']}}</h2>
            <p>{!! trans('esexamenes.exaB2_texto101') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('esexamenes.exaB2_texto102') !!}</p>
            <p>{{trans('esexamenes.exaB2_texto103')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('esexamenes.exaB2_texto104')}}</p>
        </div>
    </div>
</section>

<section>
    @include('paginas.es.examenes.comunes.examen_examenes')
</section>

@endsection
