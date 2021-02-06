@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('ortografia.byv_title') }}@endsection

@section('contentheader_h1'){{ trans('ortografia.byv_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('ortografia.byv_descripcion') }}@endsection

@section('keywords'){{ trans('ortografia.byv_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 pt-5 order-2 centraimg">
	           <img class="img-fluid" src="/img/practicav/ortografia/b.svg" width="250px" title="{{ trans('ortografia.byv_imgtitle20') }}" alt="{{ trans('ortografia.byv_imgalt20') }}">
	        </div>
	        <div class="col-md-8 pt-5 order-2">
	            <h2>{{ trans('ortografia.byv_titulo20') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.byv_titulo20')}}">
					<thead>
						<tr>
						<th>{{ trans('ortografia.byv_titulo1') }}</th>
						<th>{{ trans('ortografia.byv_titulo3') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('ortografia.byv_texto20') }}</td>
						<td>{{ trans('ortografia.byv_texto21') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.byv_texto22') }}</td>
						<td>{{ trans('ortografia.byv_texto23') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.byv_texto24') }}</td>
						<td>{{ trans('ortografia.byv_texto25') }}</td>
					</tr>
				</table>
				<p>{{ trans('ortografia.byv_titulo4') }}: {{ trans('ortografia.byv_texto26') }}</p> 
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
        <div class="row content h-100">
	        <div class="col-md-4 pt-5 order-2 centraimg">
	           <img class="img-fluid" src="/img/practicav/ortografia/v.svg" width="250px" title="{{ trans('ortografia.byv_imgtitle40') }}" alt="{{ trans('ortografia.byv_imgalt40') }}">
	        </div>
	        <div class="col-md-8 pt-5 order-1">
	            <h2>{{ trans('ortografia.byv_titulo40') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.byv_titulo40')}}">
					<thead>
						<tr>
						<th>{{ trans('ortografia.byv_titulo1') }}</th>
						<th>{{ trans('ortografia.byv_titulo3') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('ortografia.byv_texto40') }}</td>
						<td>{{ trans('ortografia.byv_texto41') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.byv_texto42') }}</td>
						<td>{{ trans('ortografia.byv_texto43') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.byv_texto44') }}</td>
						<td>{{ trans('ortografia.byv_texto45') }}</td>
					</tr>
				</table>
				<p>{{ trans('ortografia.byv_titulo4') }}: {{ trans('ortografia.byv_texto46') }}</p> 
	        </div>
	    </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content ml-2 mr-2">
         	<p>{{ trans('ortografia.byv_texto60') }}</p> 
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        @include("paginas.publi.examenes_bajo_introduccion_728x90")
    </div>
</section>

<section class="container justify">
    <div class="container-fluid center">
		<a href="/practicainicio/13"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
	</div>
</section>	

@include('paginas.ortografia.comunes.enlaces')

@endsection
