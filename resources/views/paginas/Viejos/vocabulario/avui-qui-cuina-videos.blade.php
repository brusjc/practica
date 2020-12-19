@extends('layouts.app')

@section('contentheader_title'){{ trans('vocabulario.cuinavideos_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.cuinavideos_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.cuinavideos_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.cuinavideos_keywords') }}@endsection

@section('main_content')

<div class="row">
	<div class="col-7">
		<p>{{ trans('vocabulario.cuinavideos_texto1') }}</p>
		<p>{{ trans('vocabulario.cuinavideos_texto2') }}</p>
		<p>{{ trans('vocabulario.cuinavideos_texto3') }}</p>
		<p>{{ trans('vocabulario.cuinavideos_texto4') }}</p>
		<p>{{ trans('vocabulario.cuinavideos_texto5') }}</p>
	</div>
	<div class="col-5">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-7412986561454436"
		     data-ad-slot="6463281785"
		     data-ad-format="auto"
		     data-full-width-responsive="true"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
</div>

<div class="timeline-item">
	<div class="timeline-body">
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://youtu.be/ab54WoX11po" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>



<iframe class="youtube-player" type="text/html" width="640" height="385" src="https://youtu.be/ab54WoX11po" frameborder="0"> </iframe>


@endsection
