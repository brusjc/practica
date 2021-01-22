@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('ortografia.contraccio_title') }}@endsection

@section('contentheader_h1'){{ trans('ortografia.contraccio_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('ortografia.contraccio_descripcion') }}@endsection

@section('keywords'){{ trans('ortografia.contraccio_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1 centraimg">
				@include('paginas.ortografia.publi.superior50')
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p>{{ trans('ortografia.contraccio_texto1') }}</p>
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.contraccio_titulo20')}}">
					<thead>
						<tr>
						<th>{{ trans('ortografia.contraccio_titulo1') }}</th>
						<th>{{ trans('ortografia.contraccio_titulo2') }}</th>
						<th>{{ trans('ortografia.contraccio_titulo3') }}</th>
						<th>{{ trans('ortografia.contraccio_titulo4') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('ortografia.contraccio_texto2') }}</td>
						<td>{{ trans('ortografia.contraccio_texto3') }}</td>
						<td>{{ trans('ortografia.contraccio_texto4') }}</td>
						<td>{{ trans('ortografia.contraccio_texto5') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.contraccio_texto6') }}</td>
						<td>{{ trans('ortografia.contraccio_texto7') }}</td>
						<td>{{ trans('ortografia.contraccio_texto8') }}</td>
						<td>{{ trans('ortografia.contraccio_texto9') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.contraccio_texto10') }}</td>
						<td>{{ trans('ortografia.contraccio_texto11') }}</td>
						<td>{{ trans('ortografia.contraccio_texto12') }}</td>
						<td>{{ trans('ortografia.contraccio_texto13') }}</td>
					</tr>
				</table>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-12 mb-5">
	            <h2>{{ trans('ortografia.contraccio_titulo20') }}</h2>
	            <br/>
	            <ol>
	            	<li>{{ trans('ortografia.contraccio_texto20') }}</li>
	            	<li>{{ trans('ortografia.contraccio_texto21') }}</li>
	            </ol>
	        </div>
        </div>
	</div>
</section>

@include('paginas.ortografia.comunes.enlaces')

@endsection
