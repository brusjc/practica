@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('ortografia.contraccio_title') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('ortografia.contraccio_h1') )}}
@endsection

@section('breadcrumb1')
	<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('ortografia.contraccio_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('ortografia.contraccio_keywords') )}}
@endsection

@section('main_content')

<div class="comment-text">
	<p>{{ html_entity_decode(trans('ortografia.contraccio_texto1') )}}</p>
</div>

<div class="row">
	<div class="col-7">
		<div class="card">
			<div class="box-body">
				<table class="table table-bordered" summary="{{trans('ortografia.contraccio_title')}}">
					<thead>
						<tr>
							<th>{{ html_entity_decode(trans('ortografia.contraccio_titulo2') )}}</th>
							<th>{{ html_entity_decode(trans('ortografia.contraccio_titulo3') )}}</th>
							<th>{{ html_entity_decode(trans('ortografia.contraccio_titulo4') )}}</th>
							<th>{{ html_entity_decode(trans('ortografia.contraccio_titulo5') )}}</th>
						</tr>
					</thead>
					<tr><td>a</td>		<td>al</td>		<td>als</td>	<td>als germans</td></tr>
					<tr><td>de</td>		<td>del</td>	<td>dels</td>	<td>del germà</td></tr>
					<tr><td>per</td>	<td>pel</td>	<td>pels</td>	<td>pels camins</td></tr>
				</table>
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

<div class="comment-text">
	<h2>{{ html_entity_decode(trans('ortografia.contraccio_titulo1') )}}</h2>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('ortografia.contraccio_texto2') )}}</p>
	<p>{{ html_entity_decode(trans('ortografia.contraccio_texto3') )}}</p>
</div>
@endsection
