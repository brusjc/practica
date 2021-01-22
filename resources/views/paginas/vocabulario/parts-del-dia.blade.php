@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('vocabulario.partsdía_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.partsdía_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.partsdía_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.partsdía_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-2 order-md-2 centraimg" data-aos="fade-left">
				@include('paginas.vocabulario.publi.superior50')
	        </div>
	        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.partsdía_titulo1')}}">
					<thead>
							<th colspan="2"><h2>{{ trans('vocabulario.partsdía_titulo1') }}</h2></th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto1') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto2') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto3') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto4') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto5') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto6') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto7') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto8') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto9') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto10') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto11') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto12') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto13') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto14') }}</td>
					</tr>
				</table>
            </div>
        </div>
	</div>
</section>

@endsection
