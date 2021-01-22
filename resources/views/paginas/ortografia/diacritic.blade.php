@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('ortografia.diacritic_title') }}@endsection

@section('contentheader_h1'){{ trans('ortografia.diacritic_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('ortografia.diacritic_descripcion') }}@endsection

@section('keywords'){{ trans('ortografia.diacritic_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1">
				@include('paginas.ortografia.publi.superior50')
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p>{{ trans('ortografia.diacritic_texto1') }}</p>
				<p>{{ trans('ortografia.diacritic_texto2') }}</p>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-12">
	            <h2>{{ trans('ortografia.diacritic_titulo20') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.diacritic_titulo20')}}">
					<thead>
						<tr>
						<th>{{ trans('ortografia.diacritic_titulo21') }}</th>
						<th>{{ trans('ortografia.diacritic_titulo22') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto21') }}</td>
						<td>{{ trans('ortografia.diacritic_texto22') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto23') }}</td>
						<td>{{ trans('ortografia.diacritic_texto24') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto25') }}</td>
						<td>{{ trans('ortografia.diacritic_texto26') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto27') }}</td>
						<td>{{ trans('ortografia.diacritic_texto28') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto29') }}</td>
						<td>{{ trans('ortografia.diacritic_texto30') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto31') }}</td>
						<td>{{ trans('ortografia.diacritic_texto32') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto33') }}</td>
						<td>{{ trans('ortografia.diacritic_texto34') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto35') }}</td>
						<td>{{ trans('ortografia.diacritic_texto36') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto37') }}</td>
						<td>{{ trans('ortografia.diacritic_texto38') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto39') }}</td>
						<td>{{ trans('ortografia.diacritic_texto40') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto41') }}</td>
						<td>{{ trans('ortografia.diacritic_texto42') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto43') }}</td>
						<td>{{ trans('ortografia.diacritic_texto44') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto45') }}</td>
						<td>{{ trans('ortografia.diacritic_texto46') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto47') }}</td>
						<td>{{ trans('ortografia.diacritic_texto48') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto49') }}</td>
						<td>{{ trans('ortografia.diacritic_texto50') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto51') }}</td>
						<td>{{ trans('ortografia.diacritic_texto52') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto53') }}</td>
						<td>{{ trans('ortografia.diacritic_texto54') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto55') }}</td>
						<td>{{ trans('ortografia.diacritic_texto56') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto57') }}</td>
						<td>{{ trans('ortografia.diacritic_texto58') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto59') }}</td>
						<td>{{ trans('ortografia.diacritic_texto60') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto61') }}</td>
						<td>{{ trans('ortografia.diacritic_texto62') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto63') }}</td>
						<td>{{ trans('ortografia.diacritic_texto64') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto65') }}</td>
						<td>{{ trans('ortografia.diacritic_texto66') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.diacritic_texto67') }}</td>
						<td>{{ trans('ortografia.diacritic_texto68') }}</td>
					</tr>
				</table>
				<br/>
				<p>{{ trans('ortografia.diacritic_texto80') }}</p>
            </div>
        </div>
	</div>
</section>

<section class="container justify my-5">
    <div class="container-fluid center">
		<a href="/practicainicio/10"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>
</section>

@include('paginas.ortografia.comunes.enlaces')

@endsection
