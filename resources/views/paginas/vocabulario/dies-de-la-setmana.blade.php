@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('vocabulario.diassemana_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.diassemana_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.parentesco_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.parentesco_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1 order-md-2 centraimg" data-aos="fade-left">
				@include('paginas.vocabulario.publi.superior50')
	        </div>
	        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.diassemana_titulo1')}}">
					<thead>
						<tr>
						<th>{{ trans('vocabulario.diassemana_titulo2') }}</th>
						<th>{{ trans('vocabulario.diassemana_titulo3') }}</th>
						<th>{{ trans('vocabulario.diassemana_titulo4') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto1') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto2') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto3') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto4') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto5') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto6') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto7') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto8') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto9') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto10') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto11') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto12') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto13') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto14') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto15') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto16') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto17') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto18') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto19') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto20') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto21') }}</td>
					</tr>
				</table>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        @include("paginas.publi.examenes_bajo_introduccion_728x90")
    </div>
</section>

@endsection
