@extends('layouts.app')

@section('contentheader_title')
    {{ trans('examenes.A1_title') }}
@endsection

@section('contentheader_h1')
    {{ trans('examenes.A1_h1') }}
@endsection

@section('breadcrumb1')
	<a href="/examenes-jqcv">{{ html_entity_decode(trans('examenes.jqcv_breadcrumb') )}}</a>
@endsection

@section('descripcion')
    {{ trans('examenes.A1_descripcion') }}
@endsection

@section('keywords')
    {{ trans('examenes.A1_keywords') }}
@endsection

@section('main_content')
<div class="row">
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
	<div class="col-7">
		<div class="comment-text">
			<p>{{ html_entity_decode(trans('examenes.A1_texto1') )}}</p>
			<ul>
				<li>{{ html_entity_decode(trans('examenes.A1_texto2') )}}</li>
				<li>{{ html_entity_decode(trans('examenes.A1_texto3') )}}</li>
				<li>{{ html_entity_decode(trans('examenes.A1_texto4') )}}</li>
			</ul>
			<p>{{ html_entity_decode(trans('examenes.A1_texto5') )}}</p>
		</div>
	</div>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('examenes.A1_texto7') )}}</p>
	<ul>
		<li>{{ html_entity_decode(trans('examenes.A1_texto8') )}}</li>
		<li>{{ html_entity_decode(trans('examenes.A1_texto9') )}}</li>
		<li>{{ html_entity_decode(trans('examenes.A1_texto10') )}}</li>
		<li>{{ html_entity_decode(trans('examenes.A1_texto11') )}}</li>
		<li>{{ html_entity_decode(trans('examenes.A1_texto12') )}}</li>
	</ul>
</div>


@endsection

