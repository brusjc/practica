@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('vocabulario.partsdía_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('vocabulario.partsdía_h1') )}}@endsection

@section('breadcrumb1')<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('vocabulario.parentesco_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('vocabulario.parentesco_keywords') )}}@endsection

@section('main_content')

<section id="about" class="about">
    <div class="container-fluid">
	    <div class="row content">
	        <div class="col-md-5 order-2 order-md-2" data-aos="fade-left">
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
	        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.partsdía_titulo1')}}">
					<thead>
							<th colspan="2">{{ trans('vocabulario.partsdía_titulo1') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto1') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto2') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto3') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto4') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto5') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto6') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto7') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto8') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto9') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto10') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto11') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto12') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.partsdía_texto13') }}</td>
						<td>{{ trans('vocabulario.partsdía_texto14') }}</td>
					</tr>
				</table>
            </div>
        </div>
	</div>
</section>

@endsection
