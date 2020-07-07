@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('dictats.dictat200906mm_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('dictats.dictat200906mm_h1') )}}
@endsection

@section('breadcrumb1')
	<a href="/dictatcs">{{ trans('dictats.dictat200906mm_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('dictats.dictat200906mm_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('dictats.dictat200906mm_keywords') )}}
@endsection

@section('main_content')

<div class="comment-text">
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto1') )}}</p>
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto2') )}}</p>
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto3') )}}</p>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto4') )}}</p>
	<ul>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto5') )}}</li>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto6') )}}</li>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto7') )}}</li>
	</ul>
</div>

<div class="comment-text">
	<h2>{{ html_entity_decode(trans('dictats.dictat200906mm_titulo2') )}}</h2>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto8') )}}</p>
	<ol>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto9') )}}</li>
		<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto10') )}}</li>
		<audio src="/sonido/dictados/dictados200906mmp.mp3" preload="none" controls></audio>
		<li>{{ html_entity_decode(trans('dictats.dictat200906mm_texto11') )}}</li>
		<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
	</ol>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto12') )}}</p>
	<p>{{ html_entity_decode(trans('dictats.dictat200906mm_texto13') )}}</p>
</div>




@endsection
