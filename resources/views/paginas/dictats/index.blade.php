@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('dictats.dictats_title') }}@endsection

@section('contentheader_h1'){{ trans('dictats.dictats_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('locale')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="/dictats">{{ trans('dictats.dictats_breadcrumb') }}</a>@endsection

@section('descripcion'){{ trans('dictats.dictats_descripcion') }}@endsection

@section('keywords'){{ trans('dictats.dictats_keywords') }}@endsection

@section('main_content')

<section class="container justify">
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
				<p>{{ trans('dictats.dictats_texto1') }}</p>
				<p>{{ trans('dictats.dictats_texto2') }}</p>
				<p>{{ trans('dictats.dictats_texto3') }}</p>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content">
            <div class="col-md-5 order-2 order-md-2" data-aos="fade-right">
	           <img class="img-fluid" src="/img/practicav/dictats.svg" width="250px" title="{{ trans('dictats.dictats_imgtitle1') }}" alt="{{ trans('dictats.dictats_imgalt1') }}">
	        </div>
	        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-left">
	            <h2>{{ trans('dictats.dictats_titulo4') }}</h2>
				<p>{{ trans('dictats.dictats_texto4') }}</p>
				<ul>
					<li>{{ trans('dictats.dictats_texto5') }}</li>
					<li>{{ trans('dictats.dictats_texto6') }}</li>
					<li>{{ trans('dictats.dictats_texto7') }}</li>
				</ul>
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

<section class="container justify">
    <div class="container-fluid">
	    <div class="row content">
	        <div class="col-md-5 order-2 order-md-2" data-aos="fade-left">
	           <img class="img-fluid " src="/img/practicav/dictats/dictats.svg" width="250px" title="{{ trans('dictats.dictats_imgtitle2') }}" alt="{{ trans('dictats.dictats_imgalt2') }}">
	        </div>
	        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
				<h2>{{ trans('dictats.dictats_titulo2') }}</h2>
				<p>{{ trans('dictats.dictats_texto8') }}</p>
				<ul>
					<li>{{ trans('dictats.dictats_texto9') }}</li>
					<li>{{ trans('dictats.dictats_texto10') }}</li>
					<li>{{ trans('dictats.dictats_texto11') }}</li>
				</ul>
				<p>{{ trans('dictats.dictats_texto12') }}</p>
				<p>{{ trans('dictats.dictats_texto13') }}</p>
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

<section class="container justify my-5">
    <div class="container-fluid">
        <div class="row">
			<h2>{{ trans('dictats.dictats_titulo3') }}</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/dictat-mitja-junio-2009-mati">
                        <p class="center">Examen mitjà</p>
                    	<p class="center">juny 2009 matí</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/dictat-mitja-junio-2009-vesprada">
                        <p class="center">Examen mitjà</p>
                    	<p class="center">juny 2009 vesprada</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/dictat-mitja-junio-2010-mati">
                        <p class="center">Examen mitjà</p>
                    	<p class="center">juny 2009 matí</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/dictat-mitja-junio-2010-vesprada">
                        <p class="center">Examen mitjà</p>
                    	<p class="center">juny 2010 vesprada</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/dictat-mitja-novembre-2010-mati">
                        <p class="center">Examen mitjà</p>
                    	<p class="center">novembre 2010 matí</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/dictat-mitja-novembre-2011-mati">
                        <p class="center">Examen mitjà</p>
                    	<p class="center">novembre 2011 matí</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/dictat-mitja-novembre-2011-vesprada">
                        <p class="center">Examen mitjà</p>
                    	<p class="center">novembre 2011 vesprada</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/dictat-superior-junio-2009-mati">
                        <p class="center">Examen superior</p>
                    	<p class="center">juny 2009 matí</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 center">
                <div class="service wow fadeInUp">
                    <a href="/{{session('locale')}}/dictat-superior-junio-2010-mati">
                        <p class="center">Examen superior</p>
                    	<p class="center">juny 2010 matí</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
