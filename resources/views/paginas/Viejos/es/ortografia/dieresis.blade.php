@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ html_entity_decode(trans('ortografia.dieresis_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('ortografia.dieresis_h1') )}}@endsection

@section('breadcrumb1')<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('ortografia.dieresis_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('ortografia.dieresis_keywords') )}}@endsection

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
				<p>{{ trans('ortografia.dieresis_texto1') }}</p>
	            <h2>{{ trans('ortografia.dieresis_titulo1') }}</h2>
	            <div class="col-md-6">
					<table class="table table-bordered" summary="tabla de {{trans('ortografia.dieresis_titulo20')}}">
						<thead>
							<tr>
							<th>{{ trans('ortografia.dieresis_titulo2') }}</th>
							<th>{{ trans('ortografia.dieresis_titulo3') }}</th>
						</tr>
						</thead>
						<tr>
							<td>{{ trans('ortografia.dieresis_texto2') }}</td>
							<td>{{ trans('ortografia.dieresis_texto3') }}</td>
						</tr>
					</table>
				</div>
	        </div>
        </div>
    </div>
</section>


<section class="about">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-xl-4 col-lg-5 order-2">
	           <img class="img-fluid" src="/img/practicav/ortografia/dieresis-i-u.svg" width="300px" title="{{ trans('ortografia.dieresis_imgtitle20') }}" alt="{{ trans('ortografia.dieresis_imgalt20') }}">
	        </div>
	        <div class="col-xl-8 col-lg-7 order-1">
	            <h2>{{ trans('ortografia.dieresis_titulo20') }}</h2>
	            <ol>
					<li>{{ trans('ortografia.dieresis_texto20') }}
						<ul>
							<li><i>{{ trans('ortografia.dieresis_texto21') }}</i></li>
							<li><i>{{ trans('ortografia.dieresis_texto22') }}</i></li>
						</ul>
					</li>
					<li>{{ trans('ortografia.dieresis_texto23') }}
						<ul>
							<li><i>{{ trans('ortografia.dieresis_texto24') }}</i></li>
							<li><i>{{ trans('ortografia.dieresis_texto25') }}</i></li>
						</ul>
					</li>
					<li>{{ trans('ortografia.dieresis_texto26') }}
						<ul>
							<li><i>{{ trans('ortografia.dieresis_texto27') }}</i></li>
							<li><i>{{ trans('ortografia.dieresis_texto28') }}</i></li>
						</ul>
					</li>
				</ol>
            </div>
        </div>
	</div>
</section>


<section class="about">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-xl-4 col-lg-5 justify-content-center align-items-stretch" data-aos="fade-right">
	           <img class="img-fluid" src="/img/practicav/ortografia/dieresis-tecla-i-u.svg" width="300px" title="{{ trans('ortografia.dieresis_imgtitle40') }}" alt="{{ trans('ortografia.dieresis_imgalt40') }}">
	        </div>
	        <div class="col-xl-8 col-lg-7 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
	            <h2>{{ trans('ortografia.dieresis_titulo40') }}</h2>
	            <ol>
					<li>{{ trans('ortografia.dieresis_texto40') }}
						<ul>
							<li><i>{{ trans('ortografia.dieresis_texto41') }}</i></li>
							<li><i>{{ trans('ortografia.dieresis_texto42') }}</i></li>
						</ul>
					</li>
					<li>{{ trans('ortografia.dieresis_texto43') }}
						<ul>
							<li><i>{{ trans('ortografia.dieresis_texto44') }}</i></li>
							<li><i>{{ trans('ortografia.dieresis_texto45') }}</i></li>
							<li><i>{{ trans('ortografia.dieresis_texto46') }}</i></li>
							<li><i>{{ trans('ortografia.dieresis_texto47') }}</i></li>
						</ul>
					</li>
					<li>{{ trans('ortografia.dieresis_texto48') }}
						<ul>
							<li><i>{{ trans('ortografia.dieresis_texto49') }}</i></li>
							<li><i>{{ trans('ortografia.dieresis_texto50') }}</i></li>
						</ul>
					</li>
					<li>{{ trans('ortografia.dieresis_texto51') }}
						<ul>
							<li><i>{{ trans('ortografia.dieresis_texto52') }}</i></li>
							<li><i>{{ trans('ortografia.dieresis_texto53') }}</i></li>
						</ul>
					</li>
				</ol>
            </div>
        </div>
	</div>
</section>

<div class="row mt-3">
	<div class="box-body pad table-responsive">
		<div class="col-md-3 mb-5">
			<a href="/practicainicio/8"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>
</div>

@endsection
