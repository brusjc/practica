@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('dictats.dictat200906mv_title') }}@endsection

@section('contentheader_h1'){{ trans('dictats.dictat200906mv_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="/{{session('lang')}}/dictats">{{ trans('dictats.dictats_breadcrumb') }}</a>@endsection

@section('breadcrumb2'){{ trans('dictats.dictat200906mv_breadcrumb') }}</a>@endsection

@section('descripcion'){{ trans('dictats.dictat200906mv_descripcion') }}@endsection

@section('keywords'){{ trans('dictats.dictat200906mv_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-1 centraimg" data-aos="fade-left">
    			@include('paginas.dictats.publi.superior50')
            </div>
            <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
    			<p>{{ trans('dictats.dictat200906mv_texto11') }}</p>
    			<ul>
    				<li>{{ trans('dictats.dictat200906mv_texto12') }}</li>
    				<li>{{ trans('dictats.dictat200906mv_texto13') }}</li>
    				<li>{{ trans('dictats.dictat200906mv_texto14') }}</li>
    			</ul>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
            <div class="col-md-4 pt-5 order-1 centraimg" data-aos="fade-left">
               <img class="img-fluid " src="/img/practicav/examenes/bocadillomitja.svg" width="250px" title="{{ trans('dictats.dictats_imgtitle2') }}" alt="{{ trans('dictats.dictats_imgalt2') }}">
            </div>
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-right">
    			<h2>{{ trans('dictats.dictat200906mv_titulo1') }}</h2>
    			<p>{{ trans('dictats.dictat200906mv_texto21') }}</p>
    			<ol>
    				<li>{{ trans('dictats.dictat200906mv_texto22') }}</li>
    				<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
    				<li>{{ trans('dictats.dictat200906mv_texto23') }}</li>
    				<audio src="/sonido/dictados/dictados200906mmp.mp3" preload="none" controls></audio>
    				<li>{{ trans('dictats.dictat200906mv_texto24') }}</li>
    				<audio src="/sonido/dictados/dictados200906mm.mp3" preload="none" controls></audio>
    			</ol>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-12 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
    			<p>{{ trans('dictats.dictat200906mv_texto31') }}</p>
    			<p>{{ trans('dictats.dictat200906mv_texto32') }}</p>
            </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
	    <div class="row content counts">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<div class="box box-info">
					<h2>{{ trans('dictats.dictat200906mv_titulo3') }}</h2>
					<form action='{{ action("DictatController@comprovaDictat") }}' method="POST" class="form-horizontal mb-10">
						{{csrf_field()}}

						<input type="hidden" name="_method" value="PUT">

						<div class="box-body">
							<div class="col-md-12">
								<div class="box box-solid">
									<div class="box-body">
										<div class="form-group">
						                  <textarea class="form-control" id="textoalumno" name="textoalumno" rows="5" placeholder="{{ trans('dictats.dictat200906mv_texto41') }}"></textarea>
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

<section class="container justify">
    <div class="container-fluid">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Examenes - Bajo Introduccion - 728x90 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-7412986561454436"
             data-ad-slot="1171860113"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>


@endsection
