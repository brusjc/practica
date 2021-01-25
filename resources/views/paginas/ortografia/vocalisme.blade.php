@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('ortografia.vocalisme_title') }}@endsection

@section('contentheader_h1'){{ trans('ortografia.vocalisme_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('ortografia.vocalisme_descripcion') }}@endsection

@section('keywords'){{ trans('ortografia.vocalisme_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1">
				@include('paginas.ortografia.publi.superior50')
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p>{{ trans('ortografia.vocalisme_texto1') }}</p>
				<p>{{ trans('ortografia.vocalisme_texto2') }}</p>
				<p>{{ trans('ortografia.vocalisme_texto3') }}</p>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-12">
	            <h2>{{ trans('ortografia.vocalisme_titulo20') }}</h2>
		        <div class="col-6">
					<table class="table table-bordered" summary="tabla de {{trans('ortografia.vocalisme_titulo20')}}">
						<thead>
							<tr>
							<th>{{ trans('ortografia.vocalisme_titulo21') }}</th>
							<th>{{ trans('ortografia.vocalisme_titulo22') }}</th>
							<th>{{ trans('ortografia.vocalisme_titulo23') }}</th>
						</tr>
						</thead>
						<tr>
							<td rowspan="2">{{ trans('ortografia.vocalisme_texto20') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto21') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto22') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.vocalisme_texto23') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto24') }}</td>
						</tr>
						<tr>
							<td rowspan="2">{{ trans('ortografia.vocalisme_texto25') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto26') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto27') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.vocalisme_texto28') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto29') }}</td>
						</tr>
						<tr>
							<td rowspan="2">{{ trans('ortografia.vocalisme_texto30') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto31') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto32') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.vocalisme_texto33') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto34') }}</td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Examenes - Bajo Introduccion - 728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7412986561454436"
             data-ad-slot="1171860113"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>

@include('paginas.ortografia.comunes.enlaces')

@endsection
