@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('dictats.dictat200906mm_title') }}@endsection

@section('contentheader_h1'){{ trans('dictats.dictat200906mm_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('breadcrumb2')Comprobador@endsection


@section('descripcion'){{ trans('dictats.dictat200906mm_descripcion') }}@endsection

@section('keywords'){{ trans('dictats.dictat200906mm_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
		  		<div class="box box-primary direct-chat direct-chat-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Texto del dictado</h3>
					</div>
					<div class="box-body">
						@foreach($dictat as $palabra)
							{{ $palabra }} 
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row mt-5">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="box-title">Texto del dictado del alumno</h3>
					</div>
					<div class="box-body">
						@foreach($alumno as $palabra)
							{{ $palabra }} 
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row mt-0">
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Examenes - Bajo Introduccion - 728x90 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:728px;height:90px"
			     data-ad-client="ca-pub-7412986561454436"
			     data-ad-slot="1171860113">
			</ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
	</div>
</section>

@endsection

