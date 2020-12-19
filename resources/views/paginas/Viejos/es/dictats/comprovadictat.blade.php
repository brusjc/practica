@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('dictats.dictat200906mm_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('dictats.dictat200906mm_h1') )}}@endsection

@section('breadcrumb1'){{ session('BC1texto') }}@endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('breadcrumb3')<a href="{{session('BC3')}}">{{ session('BC3texto') }}</a>@endsection

@section('breadcrumb4')<a href="{{session('BC4')}}">{{ session('BC4texto') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('dictats.dictat200906mm_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('dictats.dictat200906mm_keywords') )}}@endsection

@section('main_content')

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
@endsection

