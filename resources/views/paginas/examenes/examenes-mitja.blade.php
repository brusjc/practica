@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('examenes.mitja_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.mitja_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('examenes.mitja_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.mitja_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-1 centraimg">
                 @include('paginas.publi.superior50')
            </div>
            <div class="col-md-8 pt-5 order-2">
    			<p>{!! trans('examenes.mitja_texto1') !!}</p>
    			<p>{{ trans('examenes.mitja_texto2') }}</p>
    			<p>{!! trans('examenes.mitja_texto3') !!}</p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
    	<div class="row content h-100">
    		<div class="col-md-4 pt-5 order-2 centraimg">
    			<img class="img-fluid d-none d-sm-block" src="/img/practicav/examenes/examen_mitja.svg" width="300px" title="{{ trans('examenes.mitja_imgtitle100') }}" alt="{{ trans('examenes.mitja_imgalt100') }}">
    		</div>
    		<div class="col-md-8 pt-5 order-1">
    			<h2>{{ trans('examenes.mitja_titulo100') }}</h2>
    			<p>{!! trans('examenes.mitja_texto101') !!}</p>
    			<p>{{ trans('examenes.mitja_texto102') }}</p>
                <p>{{ trans('examenes.mitja_texto103') }} <a href="/{{session('lang')}}/examenes-c1">{{ trans('examenes.mitja_texto104') }}</a> {{ trans('examenes.mitja_texto105') }} <a href="https://cvc.cervantes.es/ensenanza/biblioteca_ele/marco/" rel="nofollow" target="_blank">{{ trans('examenes.mitja_texto106') }}</a></p>
    		</div>
    	</div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        @include("paginas.publi.examenes_bajo_introduccion_728x90")
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        @if($pruebas)
            <h2>{{ trans('examenes.mitja_titulo200') }}</h2>
            <div class="row content mt-5">
                @if($pruebas['original']['status']['error']==0)
                    @foreach($pruebas['original']['data'] as $key=>$nivel)
                        <div class="col-lg-4 col-md-4">
                            <a class="mb-2 btn btn-block btn-info pt-3 pb-3 mb-4" href="{{$miurl}}/{{$nivel['codigo']}}">{{$nivel['nombre']}}</a>
                        </div>
                    @endforeach
                @endif
            </div>
        @endif
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        @include("paginas.publi.examenes_bajo_introduccion_728x90")
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ trans('examenes.mitja_titulo300') }}</h2>
                        <div class="text-left">
                            @if(Auth::guest())
                                {{ ucfirst(trans('message.solo usuarios registrados')) }}
                            @endif
                        </div>
                        <div class="text-right">
                            @if(Auth::guest())
                                <a class="mb-2 btn btn-info" href="/login">{{ trans('message.login') }}</a>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>{{ ucfirst(trans('examenes.examen')) }}</th>
                                <th>{{ ucfirst(trans('examenes.fecha')) }}</th>
                                <th>{{ ucfirst(trans('examenes.progreso')) }}</th>
                                <th style="width: 5%">%</th>
                            </tr>
                            @if(!Auth::guest())
                                @if($pruebas)
                                    @if($pruebas['original']['status']['error']==0)
                                        @foreach($pruebas['original']['data'] as $prueba)
                                            <tr>
                                                <td>{{$prueba['nombre']}}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            @foreach($prueba['examen'] as $examen)
                                                <tr>
                                                    <td></td>
                                                    <td><a href="/exameninicio/{{$examen['id']}}">{{date('d-m-Y', strtotime($examen['created_at']))}}</a></td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-danger">
                                                                {{$examen['porcentaje']}}%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-red">{{$examen['porcentaje']}}%</span></td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    @endif
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
