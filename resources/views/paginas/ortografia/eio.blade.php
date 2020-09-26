@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.eio_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.eio_h1') )}}@endsection

@section('breadcrumb1')<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.eio_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.eio_keywords') )}}@endsection

@section('main_content')

<div class="comment-text">
	<p>{{ html_entity_decode(trans('ortografia.eio_texto1') )}}</p>
</div>

<div class="row">
	<div class="col-7">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ html_entity_decode(trans('ortografia.eio_titulo1') )}}</h2>
			</div>
			<div class="box-body">
				<div class="comment-text">
					<p>1) {{ html_entity_decode(trans('ortografia.eio_texto2') )}}</p>
					<p>2) {{ html_entity_decode(trans('ortografia.eio_texto3') )}}</p>
					<p>3) {{ html_entity_decode(trans('ortografia.eio_texto4') )}}</p>
					<p>4) {{ html_entity_decode(trans('ortografia.eio_texto5') )}}</p>
					<p>5) {{ html_entity_decode(trans('ortografia.eio_texto6') )}}</p>
				</div>
			</div>
		</div>
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

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ html_entity_decode(trans('ortografia.eio_titulo2') )}}</h2>
			</div>
			<div class="box-body">
				<div class="comment-text">
					<p>1) {{ html_entity_decode(trans('ortografia.eio_texto6') )}}</p>
					<p>2) {{ html_entity_decode(trans('ortografia.eio_texto7') )}}</p>
					<p>3) {{ html_entity_decode(trans('ortografia.eio_texto8') )}}</p>
					<p>4) {{ html_entity_decode(trans('ortografia.eio_texto9') )}}</p>
					<p>5) {{ html_entity_decode(trans('ortografia.eio_texto10') )}}</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
