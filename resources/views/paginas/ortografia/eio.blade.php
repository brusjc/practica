@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ trans('ortografia.eio_title') }}@endsection

@section('contentheader_h1'){{ trans('ortografia.eio_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('ortografia.eio_descripcion') }}@endsection

@section('keywords'){{ trans('ortografia.eio_keywords') }}@endsection

@section('main_content')

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1">
				@include('paginas.ortografia.publi.superior50')
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p>{{ trans('ortografia.eio_texto1') }}</p>
	            <h2>{{ trans('ortografia.eio_titulo20') }}</h2>
	            <ul>
		            <li>{{ trans('ortografia.eio_texto20') }}</li>
		            <li>{{ trans('ortografia.eio_texto21') }}</li>
		            <li>{{ trans('ortografia.eio_texto22') }}</li>
		            <li>{{ trans('ortografia.eio_texto23') }}</li>
		            <li>{{ trans('ortografia.eio_texto24') }}</li>
				</ul>
	        </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100 mb-5">
            <div class="col-md-5 pt-5 order-2 centraimg">
	           <img class="img-fluid" src="/img/practicav/ortografia/e-o-obertas.svg" width="250px" title="{{ trans('ortografia.eio_imgtitle40') }}" alt="{{ trans('ortografia.eio_imgalt40') }}">
	        </div>
	        <div class="col-md-7 pt-5 order-1">
	            <h2>{{ trans('ortografia.eio_titulo40') }}</h2>
	            <ul>
					<li>{{ trans('ortografia.eio_texto40') }}</li>
					<li>{{ trans('ortografia.eio_texto41') }}</li>
					<li>{{ trans('ortografia.eio_texto42') }}</li>
				</ul>
            </div>
        </div>
	</div>
</section>

@include('paginas.ortografia.comunes.enlaces')

@endsection
