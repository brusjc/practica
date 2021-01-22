@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('examenes.exaSuperior_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.exaSuperior_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('breadcrumb3'){{ session('BC3texto') }}@endsection

@section('descripcion'){{trans('examenes.exaSuperior_descripcion1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaSuperior_descripcion2')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaSuperior_descripcion3')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaSuperior_descripcion4')}}@endsection

@section('keywords'){{trans('examenes.exaSuperior_keywords1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaSuperior_keywords2')}}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-1 centraimg">
                 @include('paginas.publi.superior50')
            </div>
            <div class="col-md-8 pt-5 order-2">
                <p>{!! trans('examenes.exaSuperior_texto1') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('examenes.exaSuperior_texto2') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('examenes.exaSuperior_texto3') !!}</p>
                <p>{!! trans('examenes.exaSuperior_texto4') !!}</p>
                <p>{!! trans('examenes.exaSuperior_texto5') !!}</p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-2 centraimg">
                <img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_superior.svg" width="300px" title="{{ trans('examenes.exaSuperior_imgtitle100') }} {{$datos['mes']}} {{$datos['ano']}}" alt="{{ trans('examenes.exaSuperior_imgalt100') }} {{$datos['mes']}} {{$datos['ano']}}">
            </div>
            <div class="col-md-8 pt-5 order-1">
                <h2>{{ trans('examenes.exaSuperior_titulo100') }} {{$datos['mes']}} {{ trans('examenes.exaSuperior_titulo101') }} {{$datos['ano']}}</h2>
                <p>{!! trans('examenes.exaSuperior_texto101') !!} {{$datos['mes']}} {{$datos['ano']}} {!! trans('examenes.exaSuperior_texto102') !!}</p>
                <p>{{trans('examenes.exaSuperior_texto103')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaSuperior_texto104')}}</p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ trans('examenes.exaSuperior_titulo200') }} {{$datos['mes']}} {{ trans('examenes.exaB1_titulo101') }} {{$datos['ano']}}</h2>
                        <div class="text-left">
                            @if(Auth::guest())
                                {{ ucfirst(trans('message.solo usuarios registrados')) }}
                            @endif
                        </div>
                        <div class="text-right">
                            @if(!Auth::guest())
                                <a href="/examennuevo/{{$codigo}}">
                                  <button type="button" class="btn btn-primary">{{ trans('message.examen_nuevo') }}</button>
                               </a>
                            @else
                                <a class="mb-2 btn btn-info" href="/login">{{ trans('message.login') }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>{{ trans('examenes.Examen') }}</th>
                                <th>{{ trans('examenes.Fecha') }}</th>
                                <th>{{ trans('examenes.Progreso') }}</th>
                                <th style="width: 5%">%</th>
                            </tr>
                            @if(!Auth::guest())
                                @if($examenes['original']['status']['error']==0)
                                    @foreach($examenes['original']['data'] as $examen)
                                        <tr>
                                            <td><a href="/exameninicio/{{$examen['id']}}">{{$examen['prueba']['nombre']}}</a></td>
                                            <td><a href="/exameninicio/{{$examen['id']}}">{{date('d-m-Y', strtotime($examen['created_at']))}}</a></td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-primary" style="width: {{$examen['porcentaje']}}%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary">{{$examen['porcentaje']}}%</span></td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection