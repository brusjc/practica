@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('vocabulario.meses_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('vocabulario.meses_h1') )}}@endsection

@section('breadcrumb1')<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('vocabulario.parentesco_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('vocabulario.parentesco_keywords') )}}@endsection

@section('main_content')

<section id="about" class="about">
    <div class="container-fluid">
	    <div class="row content">
	        <div class="col-md-6 pt-5 order-2">
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
	        <div class="col-md-6 pt-5 order-1">
				<p>{{ trans('vocabulario.meses_texto1') }}</p>
				<p>{{ trans('vocabulario.meses_texto2') }}</p>
				<p>{{ trans('vocabulario.meses_texto3') }}</p>
				<p>{{ trans('vocabulario.meses_texto4') }}</p>
				<p>{{ trans('vocabulario.meses_texto5') }}</p>
	        </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid mb-5">
        <div class="row content">
            <div class="col-md-5 pt-5 order-1">
	           <img class="img-fluid" src="/img/practicav/vocabulario/mesos-any.svg" width="300px" title="{{ trans('vocabulario.meses_imgtitle20') }}" alt="{{ trans('vocabulario.meses_imgalt20') }}">
	        </div>
	        <div class="col-md-7 pt-5 order-2">
	            <h2>{{ trans('vocabulario.meses_titulo20') }}</h2>
	        	<div class="col-9">
					<table class="table table-bordered" summary="tabla de {{trans('vocabulario.meses_titulo20')}}">
						<thead>
							<th>{{ trans('vocabulario.meses_titulo21') }}</th>
							<th>{{ trans('vocabulario.meses_titulo22') }}</th>
						</thead>
						<tr>
							<td>{{ trans('vocabulario.meses_texto20') }}</td>
							<td>{{ trans('vocabulario.meses_texto21') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto22') }}</td>
							<td>{{ trans('vocabulario.meses_texto23') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto24') }}</td>
							<td>{{ trans('vocabulario.meses_texto25') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto26') }}</td>
							<td>{{ trans('vocabulario.meses_texto27') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto28') }}</td>
							<td>{{ trans('vocabulario.meses_texto29') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto30') }}</td>
							<td>{{ trans('vocabulario.meses_texto31') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto32') }}</td>
							<td>{{ trans('vocabulario.meses_texto33') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto34') }}</td>
							<td>{{ trans('vocabulario.meses_texto35') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto36') }}</td>
							<td>{{ trans('vocabulario.meses_texto37') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto38') }}</td>
							<td>{{ trans('vocabulario.meses_texto39') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto40') }}</td>
							<td>{{ trans('vocabulario.meses_texto41') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.meses_texto42') }}</td>
							<td>{{ trans('vocabulario.meses_texto43') }}</td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

<div class="row mt-5 mb-5">
	<div class="box-body pad table-responsive">
		<div class="col-md-3">
			<a href="/practicainicio/5"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>
</div>

@endsection