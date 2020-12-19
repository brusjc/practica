@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.contraccio_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.contraccio_h1') )}}@endsection

@section('breadcrumb1')<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.contraccio_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.contraccio_keywords') )}}@endsection

@section('main_content')

<section id="about" class="about">
    <div class="container-fluid">
	    <div class="row content">
	        <div class="col-md-5 order-1">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-7412986561454436"
				     data-ad-slot="6463281785"
				     data-ad-format="auto"
				     data-full-width-responsive="true">
				</ins>
				<script>(adsbygoogle = window.adsbygoogle || []).push({})</script>
	        </div>
	        <div class="col-md-7 pt-5 order-2">
				<p>{{ trans('ortografia.contraccio_texto1') }}</p>
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.contraccio_titulo20')}}">
					<thead>
						<tr>
						<th>{{ trans('ortografia.contraccio_titulo1') }}</th>
						<th>{{ trans('ortografia.contraccio_titulo2') }}</th>
						<th>{{ trans('ortografia.contraccio_titulo3') }}</th>
						<th>{{ trans('ortografia.contraccio_titulo4') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('ortografia.contraccio_texto2') }}</td>
						<td>{{ trans('ortografia.contraccio_texto3') }}</td>
						<td>{{ trans('ortografia.contraccio_texto4') }}</td>
						<td>{{ trans('ortografia.contraccio_texto5') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.contraccio_texto6') }}</td>
						<td>{{ trans('ortografia.contraccio_texto7') }}</td>
						<td>{{ trans('ortografia.contraccio_texto8') }}</td>
						<td>{{ trans('ortografia.contraccio_texto9') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.contraccio_texto10') }}</td>
						<td>{{ trans('ortografia.contraccio_texto11') }}</td>
						<td>{{ trans('ortografia.contraccio_texto12') }}</td>
						<td>{{ trans('ortografia.contraccio_texto13') }}</td>
					</tr>
				</table>
	        </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid">
        <div class="row content">
	        <div class="col-12 mb-5">
	            <h2>{{ trans('ortografia.contraccio_titulo20') }}</h2>
	            <br/>
	            <ol>
	            	<li>{{ trans('ortografia.contraccio_texto20') }}</li>
	            	<li>{{ trans('ortografia.contraccio_texto21') }}</li>
	            </ol>
	        </div>
        </div>
	</div>
</section>

@endsection
