@extends('layouts.frontandia.general')

@section('contentheader_title'){{trans('examenes.jqcv_title')}}@endsection

@section('contentheader_h1'){{ trans('examenes.jqcv_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1'){{session('BC1texto')}}@endsection

@section('descripcion'){{ trans('examenes.jqcv_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.jqcv_keywords') }}@endsection

@section('main_content')


@endsection







