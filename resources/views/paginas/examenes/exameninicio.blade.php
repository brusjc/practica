@extends('layouts.frontandia.general')

@section('contentheader_title')Estructura del {{$examen['prueba']['nombre']}}@endsection

@section('contentheader_h1')Estructura del {{$examen['prueba']['nombre']}}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('breadcrumb3')<a href="{{session('BC3')}}">{{ session('BC3texto') }}</a>@endsection

@section('descripcion')"Realizando un examen"@endsection

@section('keywords')"Realizando examen"@endsection

@section('main_content')

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

@if(isset($message))
    <section class="container justify">
        <div class="container-fluid">
            <div class="alert alert-danger mt-5" role="alert">
                <div class="row mt-5">
                    <div class="col-md-2">
                        <i class="fa fa-exclamation-triangle fa-2x"></i>
                    </div>
                    <div class="col-md-8">
                        {{ trans('message.nouser') }}
                    </div>
                    <div class="col-md-2">
                        <a class="mb-2 btn btn-info" href="/login">{{ trans('message.login') }}</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endif

<section class="container justify">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-9">
                <div class="card">
                    <div class="card-header  with-border">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 8%">Área</th>
                                <th style="width: 62%">Subarea</th>
                                <th style="width: 20%">% finalizado</th>
                                <th style="width: 10%">Contestadas</th>
                                <th style="width: 10%">Puntos</th>
                            </tr>	            		
        					@if(!is_null($examen))
                                @foreach($examen['area'] as $key1=>$area)
                                    <tr>
                                        <td colspan="2">{{$area['temanombre']['nombre']}}</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-primary" style="width: {{$area['porcentaje']}}%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">{{$area['contestadas']}}/{{$area['total']}}</td>
                                        <td class="text-center">{{$area['nota']}}</td>
                                    </tr>
                                    @foreach($area['subarea'] as $key2=>$subarea)
                                        <tr>
                                            <td></td>
                                            @if($subarea['contestadas']>=$subarea['total'])
                                                <td>{{$subarea['subtemanombre']['nombre']}}</td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar progress-bar-primary" style="width: {{$subarea['porcentaje']}}%"> </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    {{$subarea['contestadas']}}/{{$subarea['total']}}
                                                </td>
                                                <td class="text-center">
                                                    {{$subarea['nota']}}
                                                </td>
                                            @elseif($examen['prueba']['grado_id']==8 && $key1==0 && $key2==1)
                                                <td>
                                                    <a href="/examenz/{{$id}}/{{$subarea['id']}}">{{$subarea['subtemanombre']['nombre']}}</a>
                                                </td>
                                                <td>
                                                    <a href="/examenz/{{$id}}/{{$subarea['id']}}">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-primary" style="width: {{$subarea['porcentaje']}}%"></div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examenz/{{$id}}/{{$subarea['id']}}">{{$subarea['contestadas']}}/{{$subarea['total']}}</a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examenz/{{$id}}/{{$subarea['id']}}">{{$subarea['nota']}}</a>
                                                </td>
                                            @elseif($examen['prueba']['grado_id']==7 && $key1==0 && $key2==2)
                                                <td>
                                                    <a href="/examenz/{{$id}}/{{$subarea['id']}}">{{$subarea['subtemanombre']['nombre']}}</a>
                                                </td>
                                                <td>
                                                    <a href="/examenz/{{$id}}/{{$subarea['id']}}">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-primary" style="width: {{$subarea['porcentaje']}}%"></div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examenz/{{$id}}/{{$subarea['id']}}">{{$subarea['contestadas']}}/{{$subarea['total']}}</a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examenz/{{$id}}/{{$subarea['id']}}">{{$subarea['nota']}}</a>
                                                </td>
                                            @else
                                                <td>
                                                    <a href="/examen/{{$id}}/{{$subarea['id']}}">{{$subarea['subtemanombre']['nombre']}}</a>
                                                </td>
                                                <td>
                                                    <a href="/examen/{{$id}}/{{$subarea['id']}}">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-primary" style="width: {{$subarea['porcentaje']}}%"></div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examen/{{$id}}/{{$subarea['id']}}">{{$subarea['contestadas']}}/{{$subarea['total']}}</a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/examen/{{$id}}/{{$subarea['id']}}">{{$subarea['nota']}}</a>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-3">
            	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        		<!-- Adaptable Vertical -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-7412986561454436"
                    data-ad-slot="4155848498"
                    data-ad-format="auto"
                    data-full-width-responsive="true">
                </ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
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


@endsection
