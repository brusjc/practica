@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ trans('examenes.exaC1_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.exaC1_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('breadcrumb3')<a href="{{session('BC3')}}">{{ session('BC3texto') }}</a>@endsection

@section('descripcion'){{trans('examenes.exaC1_descripcion1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaC1_descripcion2')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaC1_descripcion3')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaC1_descripcion4')}}@endsection

@section('keywords'){{trans('examenes.exaC1_keywords1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaC1_keywords2')}}@endsection

@section('main_content')

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg">
             @include('paginas.publi.superior50')
        </div>
        <div class="col-md-8 pt-5 order-2">
            <p>{!! trans('examenes.exaC1_texto1') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('examenes.exaC1_texto2') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('examenes.exaC1_texto3') !!}</p>
            <p>{!! trans('examenes.exaC1_texto4') !!}</p>
            <p>{!! trans('examenes.exaC1_texto5') !!}</p>
        </div>
    </div>
</section>

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-2 centraimg">
            <img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_C1.svg" width="300px" title="{{ trans('examenes.exaC1_imgtitle100') }} {{$datos['mes']}} {{$datos['ano']}}" alt="{{ trans('examenes.exaC1_imgalt100') }} {{$datos['mes']}} {{$datos['ano']}}">
        </div>
        <div class="col-md-8 pt-5 order-1">
            <h2>{{ trans('examenes.exaC1_titulo100') }} {{$datos['mes']}} {{ trans('examenes.exaC1_titulo101') }} {{$datos['ano']}}</h2>
            <p>{!! trans('examenes.exaC1_texto101') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('examenes.exaC1_texto102') !!}</p>
            <p>{{trans('examenes.exaC1_texto103')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaC1_texto104')}}</p>
            <p>{{ trans('examenes.exaC1_texto105') }} <a href="https://cvc.cervantes.es/ensenanza/biblioteca_ele/marco/" rel="nofollow" target="_blank">{{ trans('examenes.exaC1_texto106') }}</a></p>
        </div>
    </div>
</section>

<section>
    @include('paginas.examenes.comunes.examen_examenes')
</section>

@endsection
