@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ trans('vocabulario.cos_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.cos_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>@endsection

@section('descripcion'){{ trans('vocabulario.cos_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.cos_keywords') }}@endsection

@section('main_content')

<section class="about">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-md-5 pt-5 order-1">
               <img class="img-fluid" src="/img/practicav/vocabulario/cos-huma.svg" width="300px" title="{{ trans('vocabulario.cos_imgtitle20') }}" alt="{{ trans('vocabulario.cos_imgalt20') }}">
            </div>
            <div class="col-md-7 pt-5 order-2">
                <h2>{{ trans('vocabulario.cos_titulo20') }}</h2>
                <div class="col-8">
                    <table class="table table-bordered" summary="tabla de {{trans('vocabulario.cos_titulo20')}}">
                        <thead>
                            <th>{{ trans('vocabulario.cos_titulo21') }}</th>
                            <th>{{ trans('vocabulario.cos_titulo22') }}</th>
                        </thead>
                        <tr>
                            <td>{{ trans('vocabulario.cos_texto21') }}</td>
                            <td>{{ trans('vocabulario.cos_texto22') }}</td>
                        </tr>
                        <tr>
                            <td>{{ trans('vocabulario.cos_texto129') }}</td>
                            <td>{{ trans('vocabulario.cos_texto130') }}</td>
                        </tr>
                    </table>
                </div>  
            </div>
        </div>
    </div>
</section>

<section>
    @include('paginas.pruebas.practicas')
</section>



@endsection
