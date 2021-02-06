@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('ortografia.apostrof_title') }}@endsection

@section('contentheader_h1'){{ trans('ortografia.apostrof_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('ortografia.apostrof_descripcion') }}@endsection

@section('keywords'){{ trans('ortografia.apostrof_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-6 order-1 order-md-2 centraimg" data-aos="fade-left">
				@include('paginas.ortografia.publi.superior50')
	        </div>
	        <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-up">
				<p>{{ trans('ortografia.apostrof_texto1') }}</p>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-6 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/ortografia/apostrofo-el-l-n.svg" width="300px" title="{{ trans('ortografia.apostrof_imgtitle20') }}" alt="{{ trans('ortografia.apostrof_imgalt20') }}">
	        </div>
	        <div class="col-md-6 pt-5 order-2">
	            <h2>{{ trans('ortografia.apostrof_titulo20') }}</h2>
	            <h3>{{ trans('ortografia.apostrof_titulo2') }}</h3>
	            <ul>
	            	<li>{{ trans('ortografia.apostrof_texto20') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto21') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto22') }}:
	            		<p><i>{{ trans('ortografia.apostrof_texto23') }}</i></p>
	            	</li>
					<li>{{ trans('ortografia.apostrof_texto24') }}:
	            		<p><i>{{ trans('ortografia.apostrof_texto25') }}</i></p>
	            	</li>
	            </ul>
	            <h3>{{ trans('ortografia.apostrof_titulo3') }}</h3>
	            <ul>
	            	<li>{{ trans('ortografia.apostrof_texto26') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto27') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto28') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto29') }}</i></p>
	            	</li>
	            </ul>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        @include("paginas.publi.examenes_bajo_introduccion_728x90")
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-2 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid " src="/img/practicav/ortografia/apostrofo-la-l-n.svg" width="300px" title="{{ trans('ortografia.apostrof_imgtitle40') }}" alt="{{ trans('ortografia.apostrof_imgalt40') }}">
	        </div>
	        <div class="col-md-7 pt-5 order-1">
	            <h2>{{ trans('ortografia.apostrof_titulo40') }}</h2>
	            <h3>{{ trans('ortografia.apostrof_titulo2') }}</h3>
	            <ul>
	            	<li>{{ trans('ortografia.apostrof_texto40') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto41') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto42') }}:
	            		<p><i>{{ trans('ortografia.apostrof_texto43') }}</i></p>
	            	</li>
	            </ul>
	            <h3>{{ trans('ortografia.apostrof_titulo3') }}</h3>
	            <ul>
	            	<li>{{ trans('ortografia.apostrof_texto44') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto45') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto46') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto47') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto48') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto49') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto50') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto51') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto52') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto53') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto54') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto55') }}</i></p>
	            	</li>
	            </ul>
	        </div>
	    </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-6 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid " src="/img/practicav/ortografia/apostrofo-d.svg" width="250px" title="{{ trans('ortografia.apostrof_imgtitle60') }}" alt="{{ trans('ortografia.apostrof_imgalt60') }}">
	        </div>
	        <div class="col-md-6 pt-5 order-2">
	            <h2>{{ trans('ortografia.apostrof_titulo60') }}</h2>
	            <h3>{{ trans('ortografia.apostrof_titulo2') }}</h3>
	            <ul>
	            	<li>{{ trans('ortografia.apostrof_texto60') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto61') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto62') }}:
	            		<p><i>{{ trans('ortografia.apostrof_texto63') }}</i></p>
	            	</li>
	            </ul>
	            <h3>{{ trans('ortografia.apostrof_titulo3') }}</h3>
	            <ul>
	            	<li>{{ trans('ortografia.apostrof_texto64') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto65') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto66') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto67') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto68') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto69') }}</i></p>
	            	</li>
	            	<li>{{ trans('ortografia.apostrof_texto70') }}: 
	            		<p><i>{{ trans('ortografia.apostrof_texto71') }}</i></p>
	            	</li>
	            </ul>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-6 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/ortografia/apostrofo.svg" width="250px" title="{{ trans('ortografia.apostrof_imgtitle80') }}" alt="{{ trans('ortografia.apostrof_imgalt80') }}">
	        </div>
	        <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-up">
	            <h3>{{trans('ortografia.apostrof_titulo4')}}</h3>
				<p>{{ trans('ortografia.apostrof_texto80') }}</p>
				<p>{{ trans('ortografia.apostrof_texto81') }}</p>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        @include("paginas.publi.examenes_bajo_introduccion_728x90")
    </div>
</section>

@include('paginas.ortografia.comunes.enlaces')

@endsection
