@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('vocabulario.diassemana_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('vocabulario.diassemana_h1') )}}@endsection

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
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.diassemana_titulo1')}}">
					<thead>
						<tr>
						<th>{{ trans('vocabulario.diassemana_titulo2') }}</th>
						<th>{{ trans('vocabulario.diassemana_titulo3') }}</th>
						<th>{{ trans('vocabulario.diassemana_titulo4') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto1') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto2') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto3') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto4') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto5') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto6') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto7') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto8') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto9') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto10') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto11') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto12') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto13') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto14') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto15') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto16') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto17') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto18') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.diassemana_texto19') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto20') }}</td>
						<td>{{ trans('vocabulario.diassemana_texto21') }}</td>
					</tr>
				</table>
            </div>
        </div>
	</div>
</section>

@endsection
