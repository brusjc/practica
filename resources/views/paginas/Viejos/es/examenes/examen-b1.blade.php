@extends('frontend.layouts.esfrontend')

@section('contentheader_title'){{ trans('esexamenes.exaB1_title') }}@endsection

@section('contentheader_h1'){{ trans('esexamenes.exaB1_h1') }}@endsection

@section('breadcrumb0')<a href="/es/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('breadcrumb3')<a href="{{session('BC3')}}">{{ session('BC3texto') }}</a>@endsection

@section('descripcion'){{trans('esexamenes.exaB1_descripcion1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('esexamenes.exaB1_descripcion2')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('esexamenes.exaB1_descripcion3')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('esexamenes.exaB1_descripcion4')}}@endsection

@section('keywords'){{trans('esexamenes.exaB1_keywords1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('esexamenes.exaB1_keywords2')}}@endsection

@section('main_content')

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg">
             @include('paginas.publi.superior50')
        </div>
        <div class="col-md-8 pt-5 order-2">
            <p>{!! trans('esexamenes.exaB1_texto1') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('esexamenes.exaB1_texto2') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('esexamenes.exaB1_texto3') !!}</p>
            <p>{!! trans('esexamenes.exaB1_texto4') !!}</p>
            <p>{!! trans('esexamenes.exaB1_texto5') !!}</p>
        </div>
    </div>
</section>

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-2 centraimg">
            <img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_b1.svg" width="300px" title="{{ trans('esexamenes.exaB1_imgtitle100') }} {{$datos['mes']}} {{$datos['ano']}}" alt="{{ trans('esexamenes.exaB1_imgalt100') }} {{$datos['mes']}} {{$datos['ano']}}">
        </div>
        <div class="col-md-8 pt-5 order-1">
            <h2>{{ trans('esexamenes.exaB1_titulo100') }} {{$datos['mes']}} {{ trans('esexamenes.exaB1_titulo101') }} {{$datos['ano']}}</h2>
            <p>{!! trans('esexamenes.exaB1_texto101') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('esexamenes.exaB1_texto102') !!}</p>
            <p>{{trans('esexamenes.exaB1_texto103')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('esexamenes.exaB1_texto104')}}</p>
            <p>{{ trans('esexamenes.exaB1_texto105') }} <a href="https://cvc.cervantes.es/ensenanza/biblioteca_ele/marco/" rel="nofollow" target="_blank">{{ trans('esexamenes.exaB1_texto106') }}</a></p>
        </div>
    </div>
</section>

<section>
    @include('paginas.es.examenes.comunes.examen_examenes')
</section>

@endsection
