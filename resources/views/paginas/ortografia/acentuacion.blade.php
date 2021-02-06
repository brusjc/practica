@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('ortografia.acentuacion_title') }}@endsection

@section('contentheader_h1'){{ trans('ortografia.acentuacion_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('ortografia.acentuacion_descripcion') }}@endsection

@section('keywords'){{ trans('ortografia.acentuacion_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-2 order-md-2" data-aos="fade-left">
				@include('paginas.ortografia.publi.superior50')
	        </div>
	        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
				<p>{{ trans('ortografia.acentuacion_texto1') }}</p>
				<p>{{ trans('ortografia.acentuacion_texto2') }}</p>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-xl-4 col-lg-5  centraimg" data-aos="fade-right">
	           <img class="img-fluid" src="/img/practicav/ortografia/tecla-acento.svg" width="250px" title="{{ trans('ortografia.acentuacion_imgtitle20') }}" alt="{{ trans('ortografia.acentuacion_imgalt20') }}">
	        </div>
	        <div class="col-xl-8 col-lg-7 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
	            <h2>{{ trans('ortografia.acentuacion_titulo20') }}</h2>
				<p>{{ trans('ortografia.acentuacion_texto20') }}</p>
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.acentuacion_titulo20')}}">
					<thead>
						<tr>
						<th colspan="2">{{ trans('ortografia.acentuacion_titulo20') }}</th>
						<th>{{ trans('ortografia.acentuacion_titulo21') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('ortografia.acentuacion_texto21') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto22') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto23') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.acentuacion_texto24') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto25') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto26') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.acentuacion_texto27') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto28') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto29') }}</td>
					</tr>
				</table>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-2 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid " src="/img/practicav/ortografia/acento.svg" width="250px" title="{{ trans('ortografia.acentuacion_imgtitle40') }}" alt="{{ trans('ortografia.acentuacion_imgalt40') }}">
	        </div>
	        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
	            <h2>{{ trans('ortografia.acentuacion_titulo40') }}</h2>
				<p>{{ trans('ortografia.acentuacion_texto40') }}</p>
				<table class="table table-bordered" summary="{{ trans('ortografia.acentuacion_titulo40') }}">
					<thead>
						<tr>
							<th>{{ trans('ortografia.acentuacion_titulo41') }}</th>
							<th>{{ trans('ortografia.acentuacion_titulo42') }}</th>
							<th>{{ trans('ortografia.acentuacion_titulo43') }}</th>
						</tr>
					</thead>
					<tr>
						<td>{{ trans('ortografia.acentuacion_texto41') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto42') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto43') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.acentuacion_texto44') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto45') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto46') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.acentuacion_texto47') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto48') }}</td>
						<td>{{ trans('ortografia.acentuacion_texto49') }}</td>
					</tr>
				</table>
	        </div>
	    </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid mt-5">
        <div class="row content h-100">
	        <div class="col-md-6 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/ortografia/acentuacion0.gif" width="350px" title="{{ trans('ortografia.acentuacion_imgtitle60') }}" alt="{{ trans('ortografia.acentuacion_imgalt60') }}">
	        </div>
	        <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-up">
	            <h2>{{trans('ortografia.acentuacion_titulo60')}}</h2>
				<p>{{ trans('ortografia.acentuacion_texto60') }}</p>
				<p>{{ trans('ortografia.acentuacion_texto61') }}</p>
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
    <div class="container-fluid mt-5">
        <div class="row content h-100">
	        <div class="col-md-6 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/ortografia/acentuacion1.gif" width="350px" title="{{ trans('ortografia.acentuacion_imgtitle70') }}" alt="{{ trans('ortografia.acentuacion_imgalt70') }}">
	        </div>
	        <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-up">
	            <h3>{{trans('ortografia.acentuacion_titulo70')}}</h3>
				<p>{{ trans('ortografia.acentuacion_texto70') }}</p>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid mt-5">
        <div class="row content h-100">
	        <div class="col-md-6 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/ortografia/acentuacion2.gif" width="350px" title="{{ trans('ortografia.acentuacion_imgtitle80') }}" alt="{{ trans('ortografia.acentuacion_imgalt80') }}">
	        </div>
	        <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-up">
	            <h3>{{trans('ortografia.acentuacion_titulo80')}}</h3>
				<p>{{ trans('ortografia.acentuacion_texto80') }}</p>
				<p><a href="/eio">{{ trans('ortografia.acentuacion_texto81') }}</a></p>
				<p>{{ trans('ortografia.acentuacion_texto82') }}</p>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid mt-5">
        <div class="row content h-100">
	        <div class="col-md-6 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/ortografia/acentuacion3.gif" width="350px" title="{{ trans('ortografia.acentuacion_imgtitle90') }}" alt="{{ trans('ortografia.acentuacion_imgalt90') }}">
	        </div>
	        <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-up">
	            <h3>{{trans('ortografia.acentuacion_titulo90')}}</h3>
				<p>{{ trans('ortografia.acentuacion_texto90') }}</p>
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
    <div class="container-fluid mt-5 center">
		<a href="/practicainicio/15"><button type="button" class="btn btn-primary btn-lg">Practica</button></a>
	</div>
</section>

@include('paginas.ortografia.comunes.enlaces')

<section class="container justify">
    <div class="container-fluid">
        @include("paginas.publi.examenes_bajo_introduccion_728x90")
    </div>
</section>

@endsection
