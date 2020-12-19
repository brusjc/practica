@extends('frontend.layouts.app')

@section('contentheader_title'){{trans('examenes.exaB1_title')}} {{$datos['mes']}} {{$datos['ano']}} de la JQCV</a>@endsection

@section('contentheader_h1')
    {{trans('examenes.exaB1_h1')}} {{$datos['mes']}} {{$datos['ano']}} de la JQCV</a>@endsection

@section('breadcrumb1')
    <a href="{{session('BC1')}}">{{ session('BC1texto') }}</a></a>@endsection

@section('breadcrumb2')
    <a href="{{session('BC2')}}">{{ session('BC2texto') }}</a></a>@endsection

@section('descripcion'){{trans('examenes.exaB1_descripcion1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaB1_descripcion2')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaB1_descripcion3')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaB1_descripcion4')}}</a>@endsection

@section('keywords'){{trans('examenes.exaB1_keywords1')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaB1_keywords2')}}</a>@endsection

@section('main_content')

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-2 centraimg">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-7412986561454436"
                 data-ad-slot="6463281785"
                 data-ad-format="auto"
                 data-full-width-responsive="true">
            </ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({})</script>
        </div>
        <div class="col-md-8 pt-5 order-1">
            <p>{!! trans('examenes.exaB1_texto1') !!} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaB1_texto2')}} {{$datos['mes']}} {{$datos['ano']}}  {{trans('examenes.exaB1_texto3')}}</p>
            <p>{{trans('examenes.exaB1_texto4')}}</p>
            <p>{{trans('examenes.exaB1_texto5')}}</p>
        </div>
    </div>
</section>

<section>
    <div class="row content h-100">
        <div class="col-md-4 pt-5 order-1 centraimg">
            <img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_b1.svg" width="300px" title="{{ trans('examenes.B1_imgtitle100') }}" alt="{{ trans('examenes.B1_imgalt100') }}">
        </div>
        <div class="col-md-8 pt-5 order-2">
            <h2>{{ trans('examenes.exaB1_titulo100') }} {{$datos['mes']}} {{ trans('examenes.exaB1_titulo101') }} {{$datos['ano']}}</h2>
            <p>{{trans('examenes.exaB1_texto101')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaB1_texto102')}}</p>
            <p>{{trans('examenes.exaB1_texto103')}} {{$datos['mes']}} {{$datos['ano']}} {{trans('examenes.exaB1_texto104')}}</p>
            <p>{{ trans('examenes.exaB1_texto105') }} <a href="https://cvc.cervantes.es/ensenanza/biblioteca_ele/marco/" rel="nofollow" target="_blank">{{ trans('examenes.exaB1_texto106') }}</a></p>

        </div>
    </div>
</section>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('examenes.exaB1_titulo200') }}</h2>
                <div class="col-12">
                    <div class="float-left">
                        @if(Auth::guest())
                            {{ trans('message.solo usuarios registrados') }}
                        @endif
                    </div>
                    <div class="float-right">
                        @if(!Auth::guest())
                            <a href="/examennuevo/{{$codigo}}" class="btn btn-primary">{{ trans('message.examen_nuevo') }}</a>
                        @else
                            <a href="/login" class="mb-2 btn btn-primary">{{ trans('message.login') }}</a>
                        @endif
                    </div>
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

@endsection
