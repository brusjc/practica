@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('vocabulario.casa_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.casa_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.casa_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.casa_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-6 pt-5 order-2">
				@include('paginas.vocabulario.publi.superior50')
		    </div>
	        <div class="col-md-6 pt-5 order-1">
				<p>{{ trans('vocabulario.casa_texto1') }}</p>
				<p>{{ trans('vocabulario.casa_texto2') }}</p>
	        </div>
	    </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 pt-5 order-2">
				<img class="img-fluid" src="/img/practicav/vocabulario/casa.svg" width="200px" title="{{ trans('vocabulario.casa_imgtitle20') }}" alt="{{ trans('vocabulario.casa_imgalt20') }}"/>
			</div>
			<div class="col-md-7 pt-5 order-1">
				<h2>{{ trans('vocabulario.casa_titulo20') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.casa_titulo20')}}">
					<thead>
						<th>{{ trans('vocabulario.vocabulario_comun1') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun4') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun4') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.casa_texto21') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto22') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto23') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto24') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto25') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto26') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto27') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto28') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto29') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto30') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto31') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto32') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto33') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto34') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto35') }}</td>
						<td>{{ trans('vocabulario.casa_texto36') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto37') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto38') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto39') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto40') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto41') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto42') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto43') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto44') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto45') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto46') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto47') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto48') }}</td>
						<td>{{ trans('vocabulario.casa_texto49') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto50') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto51') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto52') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto53') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto54') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto55') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto56') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto57') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto58') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto59') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto60') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto61') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto62') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto63') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto64') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto65') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto66') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto67') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto68') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto69') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto70') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto71') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto72') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto73') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto74') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto75') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto76') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto77') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto78') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto79') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto80') }}</td>
					</tr>
				</table>
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
	        <div class="col-md-3 order-1 order-md-2" data-aos="fade-right">
				<img class="img-fluid" src="/img/practicav/vocabulario/bany.svg" width="200px" title="{{ trans('vocabulario.casa_imgtitle100') }}" alt="{{ trans('vocabulario.casa_imgalt100') }}">
			</div>
			<div class="col-md-9 pt-5 order-2">
				<h2>{{ trans('vocabulario.casa_titulo100') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.casa_titulo100')}}">
					<thead>
						<th>{{ trans('vocabulario.vocabulario_comun1') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun4') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun4') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.casa_texto100') }}</td>
						<td>{{ trans('vocabulario.casa_texto101') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto102') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto103') }}</td>
						<td>{{ trans('vocabulario.casa_texto104') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto105') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto106') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto107') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto108') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto109') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto110') }}</td>
						<td>{{ trans('vocabulario.casa_texto111') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto112') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto113') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto114') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto115') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto116') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto117') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto118') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto119') }}</td>
						<td>{{ trans('vocabulario.casa_texto120') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto121') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto122') }}</td>
						<td>{{ trans('vocabulario.casa_texto123') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto124') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto125') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto126') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto127') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto128') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto129') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto130') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto131') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto132') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto133') }}</td>
						<td>{{ trans('vocabulario.casa_texto134') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto135') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto136') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto137') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto138') }}</td>
						<td>{{ trans('vocabulario.casa_texto139') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto140') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto141') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto142') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto143') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto144') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto145') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto146') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto147') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto148') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto149') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto150') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto151') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto152') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto153') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto154') }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
				<img class="img-fluid" src="/img/practicav/vocabulario/muebles.svg" width="200px" title="{{ trans('vocabulario.casa_imgtitle200') }}" alt="{{ trans('vocabulario.casa_imgalt200') }}">
			</div>
			<div class="col-md-8 pt-5 order-1">
				<h2>{{ trans('vocabulario.casa_titulo200') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.casa_titulo200')}}">
					<thead>
						<th>{{ trans('vocabulario.vocabulario_comun1') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun4') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun4') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.casa_texto200') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto201') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto202') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto203') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto204') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto205') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto206') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto207') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto208') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto209') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto210') }}</td>
						<td>{{ trans('vocabulario.casa_texto211') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto212') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto213') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto214') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto215') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto216') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto217') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto218') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto219') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto220') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto221') }}</td>
						<td>{{ trans('vocabulario.casa_texto222') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto223') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto224') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto225') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto226') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto227') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto228') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto229') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto230') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto231') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto232') }}</td>
						<td>{{ trans('vocabulario.casa_texto233') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto234') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto235') }}</td>
						<td>{{ trans('vocabulario.casa_texto236') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto237') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto238') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto239') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto240') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto241') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto242') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto243') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto244') }}</td>
						<td>{{ trans('vocabulario.casa_texto245') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto246') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto247') }}</td>
						<td>{{ trans('vocabulario.casa_texto248') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto249') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto250') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto251') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto252') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto253') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto254') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto255') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto256') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto257') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto258') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto259') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto260') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto261') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto262') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto263') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto264') }}</td>
						<td>{{ trans('vocabulario.casa_texto265') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto266') }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-2 order-md-2" data-aos="fade-left">
				<img class="img-fluid" src="/img/practicav/vocabulario/electrodomesticos.svg" width="200px" title="{{ trans('vocabulario.casa_imgtitle300') }}" alt="{{ trans('vocabulario.casa_imgalt300') }}">
			</div>
			<div class="col-md-8 pt-5 order-1">
				<h2>{{ trans('vocabulario.casa_titulo300') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.casa_titulo300')}}">
					<thead>
						<th>{{ trans('vocabulario.vocabulario_comun1') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun4') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun4') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.casa_texto300') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto301') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto302') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto303') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto304') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto305') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto306') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto307') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto308') }}</td>
						<td>{{ trans('vocabulario.casa_texto309') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto310') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto311') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto312') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto313') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto314') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto315') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto316') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto317') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto318') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto319') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto320') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto321') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto322') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto323') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto324') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto325') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto326') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto327') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto328') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto329') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto330') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto331') }}</td>
						<td></td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto332') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.casa_texto333') }}</td>
						<td>{{ trans('vocabulario.casa_texto334') }}</td>
						<td></td>
						<td>{{ trans('vocabulario.casa_texto335') }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row mt-5 mb-5">
			<div class="box-body pad table-responsive">
				<div class="col-md-3">
					<a href="/practicainicio/6"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
        @include("paginas.publi.examenes_bajo_introduccion_728x90")
    </div>
</section>

@endsection
