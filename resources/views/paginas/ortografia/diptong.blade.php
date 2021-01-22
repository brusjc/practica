@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('ortografia.diptongos_title') }}@endsection

@section('contentheader_h1'){{ trans('ortografia.diptongos_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('ortografia.diptongos_descripcion') }}@endsection

@section('keywords'){{ trans('ortografia.diptongos_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1">
				@include('paginas.ortografia.publi.superior50')
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p>{{ trans('ortografia.diptongos_texto1') }}</p>
	            <h2>{{ trans('ortografia.diptongos_titulo1') }}</h2>
				<p>{{ trans('ortografia.diptongos_texto2') }}</p>
				<div class="col-6">
					<table class="table table-bordered" summary="tabla de {{trans('ortografia.diptongos_titulo1')}}">
						<thead>
							<tr>
							<th colspan="2">{{ trans('ortografia.diptongos_titulo2') }}</th>
						</tr>
						</thead>
						<tr>
							<td>{{ trans('ortografia.diptongos_texto3') }}</td>
							<td>{{ trans('ortografia.diptongos_texto4') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.diptongos_texto5') }}</td>
							<td>{{ trans('ortografia.diptongos_texto6') }}</td>
						</tr>
					</table>
				</div>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-xl-4 col-lg-5 order-2 centraimg">
	        </div>
	        <div class="col-xl-8 col-lg-7 order-1">
	            <h2>{{ trans('ortografia.diptongos_titulo20') }}</h2>
				<p>{{ trans('ortografia.diptongos_texto20') }}</p>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-xl-4 col-lg-5 centraimg" data-aos="fade-right">
	           <img class="img-fluid" src="/img/practicav/ortografia/diptongo-creciente.gif" width="300px" title="{{ trans('ortografia.diptongos_imgtitle40') }}" alt="{{ trans('ortografia.diptongos_imgalt40') }}">
	        </div>
	        <div class="col-xl-8 col-lg-7 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">

	            <h3>{{ trans('ortografia.diptongos_titulo40') }}</h3>
				<p>{{ trans('ortografia.diptongos_texto40') }}</p>
				<p>{{ trans('ortografia.diptongos_texto41') }}</p>
				<p>{{ trans('ortografia.diptongos_texto42') }}</p>
	            <h4>{{ trans('ortografia.diptongos_titulo41') }}</h4>
				<p>{{ trans('ortografia.diptongos_texto43') }}</p>
				<div class="col-5">
					<table class="table table-bordered" summary="tabla de {{trans('ortografia.diptongos_titulo20')}}">
						<tr>
							<td>{{ trans('ortografia.diptongos_texto44') }}</td>
							<td>{{ trans('ortografia.diptongos_texto45') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.diptongos_texto46') }}</td>
							<td>{{ trans('ortografia.diptongos_texto47') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.diptongos_texto48') }}</td>
							<td>{{ trans('ortografia.diptongos_texto49') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.diptongos_texto50') }}</td>
							<td>{{ trans('ortografia.diptongos_texto51') }}</td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-xl-4 col-lg-5 centraimg" data-aos="fade-right">
	           <img class="img-fluid" src="/img/practicav/ortografia/diptongo-decreciente.gif" width="300px" title="{{ trans('ortografia.diptongos_imgtitle60') }}" alt="{{ trans('ortografia.diptongos_imgalt60') }}">
	        </div>
	        <div class="col-xl-8 col-lg-7 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">

	            <h3>{{ trans('ortografia.diptongos_titulo60') }}</h3>
				<p>{{ trans('ortografia.diptongos_texto60') }}</p>
				<p>{{ trans('ortografia.diptongos_texto61') }}</p>
	            <h4>{{ trans('ortografia.diptongos_titulo61') }}</h4>
				<p>{{ trans('ortografia.diptongos_texto62') }}</p>
				<div class="col-5">
					<table class="table table-bordered" summary="tabla de {{trans('ortografia.diptongos_titulo20')}}">
						<thead>
							<tr>
								<th>{{ trans('ortografia.diptongos_titulo62') }}</th>
								<th>{{ trans('ortografia.diptongos_titulo63') }}</th>
							</tr>
						</thead>
						<tr>
							<td>{{ trans('ortografia.diptongos_texto63') }}</td>
							<td>{{ trans('ortografia.diptongos_texto64') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.diptongos_texto65') }}</td>
							<td>{{ trans('ortografia.diptongos_texto66') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.diptongos_texto67') }}</td>
							<td>{{ trans('ortografia.diptongos_texto68') }}</td>
						</tr>
						<tr>
							<td></td>
							<td>{{ trans('ortografia.diptongos_texto69') }}</td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-12">
				<p>{{ trans('ortografia.diptongos_texto80') }}</p>
			</div>
        </div>
	</div>
</section>

@include('paginas.ortografia.comunes.enlaces')

@endsection
