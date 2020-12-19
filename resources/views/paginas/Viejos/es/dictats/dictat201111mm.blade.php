@extends('frontend.layouts.frontend')
@section('contentheader_title'){{ html_entity_decode(trans('dictats.dictat201111mm_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('dictats.dictat201111mm_h1') )}}@endsection

@section('breadcrumb1')<a href="/dictats">{{ trans('dictats.dictats_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('dictats.dictat201111mm_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('dictats.dictat201111mm_keywords') )}}@endsection

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
				<p>{{ html_entity_decode(trans('dictats.dictat201111mm_texto11') )}}</p>
				<ul>
					<li>{{ trans('dictats.dictat201111mm_texto12') }}</li>
					<li>{{ trans('dictats.dictat201111mm_texto13') }}</li>
					<li>{{ trans('dictats.dictat201111mm_texto14') }}</li>
				</ul>
	        </div>
        </div>
        <div class="row content">
            <div class="col-xl-5 col-lg-6 justify-content-center align-items-stretch" data-aos="fade-right">
	           <img class="img-fluid " src="/img/practicav/bocadillomitja.svg" width="400px" title="{{ trans('dictats.dictats_imgtitle2') }}" alt="{{ trans('dictats.dictats_imgalt2') }}">
	        </div>
	        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
				<h2>{{ trans('dictats.dictat201111mm_titulo1') }}</h2>
				<p>{{ trans('dictats.dictat201111mm_texto21') }}</p>
				<ol>
					<li>{{ trans('dictats.dictat201111mm_texto22') }}</li>
					<audio src="/sonido/dictados/dictados201111mm.mp3" preload="none" controls></audio>
					<li>{{ trans('dictats.dictat201111mm_texto23') }}</li>
					<audio src="/sonido/dictados/dictados201111mmp.mp3" preload="none" controls></audio>
					<li>{{ trans('dictats.dictat201111mm_texto24') }}</li>
					<audio src="/sonido/dictados/dictados201111mm.mp3" preload="none" controls></audio>
				</ol>
            </div>
        </div>
        <div class="row content">
	        <div class="col-12 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
				<p>{{ trans('dictats.dictat201111mm_texto31') }}</p>
				<p>{{ trans('dictats.dictat201111mm_texto32') }}</p>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about">
    <div class="container-fluid">
	    <div class="row content counts">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<div class="box box-info">
					<h2>{{ trans('dictats.dictat201111mm_titulo3') }}</h2>
					<form action='{{ action("DictatController@comprovaDictat") }}' method="POST" class="form-horizontal mb-10">
						{{csrf_field()}}

						<input type="hidden" name="_method" value="PUT">

						<div class="box-body">
							<div class="col-md-12">
								<div class="box box-solid">
									<div class="box-body">
										<div class="form-group">
						                  <textarea class="form-control" id="textoalumno" name="textoalumno" rows="5" placeholder="{{ trans('dictats.dictat201111mm_texto41') }}"></textarea>
						                </div>
									</div>
								</div>
							</div>						
						</div>

						<input id="dictado_id" type="hidden" name="dictado_id" value="1">
						<div class="box-footer row invoice-info">
							<div class="col-sm-6 invoice-col">
								<button type="submit" class="btn btn-info pull-right">{{ ucfirst(trans('general.aceptar')) }}</button>
							</div>
							<div class="col-sm-6 invoice-col">
								<a href="/dictats">{{ ucfirst(trans('general.volver')) }}</button></a>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>
</section>


@endsection
