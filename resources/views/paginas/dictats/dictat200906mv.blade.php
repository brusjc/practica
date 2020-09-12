@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('dictats.dictat200906mv_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('dictats.dictat200906mm_h1') )}}
@endsection

@section('breadcrumb1')
	<a href="/dictats">{{ trans('dictats.dictats_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('dictats.dictat200906mv_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('dictats.dictat200906mv_keywords') )}}
@endsection

@section('main_content')

<div class="row">
	<div class="col-7">
		<p>{{ html_entity_decode(trans('dictats.dictat200906mv_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('dictats.dictat200906mv_texto2') )}}</p>
		<p>{{ html_entity_decode(trans('dictats.dictat200906mv_texto3') )}}</p>
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

<div class="comment-text">
	<p>{{ html_entity_decode(trans('dictats.dictat200906mv_texto4') )}}</p>
	<ul>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mv_texto5') )}}</li>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mv_texto6') )}}</li>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mv_texto7') )}}</li>
	</ul>
</div>

<div class="comment-text">
	<h2>{{ html_entity_decode(trans('dictats.dictat200906mv_titulo1') )}}</h2>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('dictats.dictat200906mv_texto8') )}}</p>
	<ol>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mv_texto9') )}}</li>
		<audio src="/sonido/dictados/dictados200906mv.mp3" preload="none" controls></audio>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mv_texto10') )}}</li>
		<audio src="/sonido/dictados/dictados200906mvp.mp3" preload="none" controls></audio>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mv_texto11') )}}</li>
		<audio src="/sonido/dictados/dictados200906mv.mp3" preload="none" controls></audio>
	</ol>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('dictats.dictat200906mv_texto12') )}}</p>
	<p>{{ html_entity_decode(trans('dictats.dictat200906mv_texto13') )}}</p>
</div>

<div class="row">
	<div class="col-lg-4 col-md-4">
	</div>
	<div class="col-lg-4 col-md-4">
		<a class="btn btn-block btn-primary btn-lg" href="/dictat200906mv_comprobador">{{ html_entity_decode(trans('dictats.dictats_comprovaElTeuDictat') )}}</a>
	</div>
</div>




@endsection
