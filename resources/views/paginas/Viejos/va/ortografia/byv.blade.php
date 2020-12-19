@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.byv_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.byv_h1') )}}@endsection

@section('breadcrumb1')<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.byv_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.byv_keywords') )}}@endsection

@section('main_content')

<section id="about" class="about">
    <div class="container-fluid">
	    <div class="row content">
	        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
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
	        <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-up">
				<p>{{ html_entity_decode(trans('ortografia.byv_texto1') )}}</p>
	        </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid">
        <div class="row content">
	        <div class="col-md-5 order-1">
	           <img class="img-fluid" src="/img/practicav/ortografia/b.svg" width="300px" title="{{ trans('ortografia.byv_imgtitle20') }}" alt="{{ trans('ortografia.byv_imgalt20') }}">
	        </div>
	        <div class="col-md-6 pt-5 order-2">
	            <h2>{{ trans('ortografia.byv_titulo20') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.byv_titulo20')}}">
					<thead>
						<tr>
						<th>{{ trans('ortografia.byv_titulo1') }}</th>
						<th>{{ trans('ortografia.byv_titulo3') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('ortografia.byv_texto20') }}</td>
						<td>{{ trans('ortografia.byv_texto21') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.byv_texto22') }}</td>
						<td>{{ trans('ortografia.byv_texto23') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.byv_texto24') }}</td>
						<td>{{ trans('ortografia.byv_texto25') }}</td>
					</tr>
				</table>
				<p>{{ trans('ortografia.byv_titulo4') }}: {{ trans('ortografia.byv_texto26') }}</p> 
            </div>
        </div>
	</div>
</section>

<section class="about">
    <div class="container-fluid">
	    <div class="row content">
	        <div class="col-md-5 order-2">
	           <img class="img-fluid " src="/img/practicav/ortografia/v.svg" width="250px" title="{{ trans('ortografia.byv_imgtitle40') }}" alt="{{ trans('ortografia.byv_imgalt40') }}">
	        </div>
	        <div class="col-md-7 pt-5 order-1">
	            <h2>{{ trans('ortografia.byv_titulo40') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.byv_titulo40')}}">
					<thead>
						<tr>
						<th>{{ trans('ortografia.byv_titulo1') }}</th>
						<th>{{ trans('ortografia.byv_titulo3') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('ortografia.byv_texto40') }}</td>
						<td>{{ trans('ortografia.byv_texto41') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.byv_texto42') }}</td>
						<td>{{ trans('ortografia.byv_texto43') }}</td>
					</tr>
					<tr>
						<td>{{ trans('ortografia.byv_texto44') }}</td>
						<td>{{ trans('ortografia.byv_texto45') }}</td>
					</tr>
				</table>
				<p>{{ trans('ortografia.byv_titulo4') }}: {{ trans('ortografia.byv_texto46') }}</p> 
	        </div>
	    </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid mt-5">
        <div class="row content ml-2 mr-2">
         	<p>{{ trans('ortografia.byv_texto60') }}</p> 
        </div>
	</div>
</section>


<div class="row mt-5 mb-5">
	<div class="box-body pad table-responsive">
		<div class="col-md-3">
			<a href="/practicainicio/13"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>
</div>


@endsection
