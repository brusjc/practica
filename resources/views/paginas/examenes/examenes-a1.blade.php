@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('examenes.A1_title') }}@endsection

@section('contentheader_h1'){{ trans('examenes.A1_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('examenes.A1_descripcion') }}@endsection

@section('keywords'){{ trans('examenes.A1_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-1 centraimg">
                 @include('paginas.publi.superior50')
            </div>
            <div class="col-md-8 pt-5 order-2">
    			<p>{!! trans('examenes.A1_texto1') !!}</p>
    			<ul>
    				<li>{{ trans('examenes.A1_texto2') }}</li>
    				<li>{{ trans('examenes.A1_texto3') }}</li>
    				<li>{{ trans('examenes.A1_texto4') }}</li>
    			</ul>
    			<p>{!! trans('examenes.A1_texto5') !!}</p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
    	<div class="row content">
    		<div class="col-12">
    			<p>{{ trans('examenes.A1_texto7') }}</p>
    			<ul>
    				<li>{{ trans('examenes.A1_texto8') }}</li>
    				<li>{{ trans('examenes.A1_texto9') }}</li>
    				<li>{{ trans('examenes.A1_texto10') }}</li>
    				<li>{{ trans('examenes.A1_texto11') }}</li>
    				<li>{{ trans('examenes.A1_texto12') }}</li>
    			</ul>
    		</div>
    	</div>
    </div>
</section>

@endsection
