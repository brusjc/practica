@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.vocalisme_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.vocalisme_h1') )}}@endsection

@section('breadcrumb1')<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.vocalisme_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.vocalisme_keywords') )}}@endsection

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
				<p>{{ trans('ortografia.vocalisme_texto1') }}</p>
				<p>{{ trans('ortografia.vocalisme_texto2') }}</p>
				<p>{{ trans('ortografia.vocalisme_texto3') }}</p>
	        </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid">
	        <div class="col-12">
	            <h2>{{ trans('ortografia.vocalisme_titulo20') }}</h2>
		        <div class="col-6">
					<table class="table table-bordered" summary="tabla de {{trans('ortografia.vocalisme_titulo20')}}">
						<thead>
							<tr>
							<th>{{ trans('ortografia.vocalisme_titulo21') }}</th>
							<th>{{ trans('ortografia.vocalisme_titulo22') }}</th>
							<th>{{ trans('ortografia.vocalisme_titulo23') }}</th>
						</tr>
						</thead>
						<tr>
							<td rowspan="2">{{ trans('ortografia.vocalisme_texto20') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto21') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto22') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.vocalisme_texto23') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto24') }}</td>
						</tr>
						<tr>
							<td rowspan="2">{{ trans('ortografia.vocalisme_texto25') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto26') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto27') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.vocalisme_texto28') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto29') }}</td>
						</tr>
						<tr>
							<td rowspan="2">{{ trans('ortografia.vocalisme_texto30') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto31') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto32') }}</td>
						</tr>
						<tr>
							<td>{{ trans('ortografia.vocalisme_texto33') }}</td>
							<td>{{ trans('ortografia.vocalisme_texto34') }}</td>
						</tr>
					</table>
				</div>
            </div>
        </div>
	</div>
</section>

@endsection
