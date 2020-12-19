@extends('frontend.layouts.frontend')

@section('contentheader_title'){{ trans('vocabulario.teles_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.teles_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.teles_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.teles_keywords') }}@endsection

@section('main_content')

<section id="about" class="about">
    <div class="row content">
        <div class="col-md-6 pt-5 order-2">
			@include('paginas.vocabulario.publi.superior50')
        </div>
        <div class="col-md-6 pt-5 order-1">
		<p>{{ trans('vocabulario.teles_texto1') }}</p>
		<p>{{ trans('vocabulario.teles_texto2') }}</p>
		<p>{{ trans('vocabulario.teles_texto3') }}</p>
		<p>{{ trans('vocabulario.teles_texto4') }}</p>
		<p>{{ trans('vocabulario.teles_texto5') }}</p>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
				<img class="img-fluid" src="/img/practicav/vocabulario/ropa.svg" width="300px" title="{{ trans('vocabulario.teles_imgtitle20') }}" alt="{{ trans('vocabulario.teles_imgalt20') }}">
			</div>
			<div class="col-md-8 pt-5 order-2">
				<h2>{{ trans('vocabulario.teles_titulo20') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.teles_titulo20')}}">
					<thead>
						<th>{{ trans('vocabulario.teles_titulo1') }}</th>
						<th>{{ trans('vocabulario.teles_titulo2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.teles_texto21') }}</td>
						<td>{{ trans('vocabulario.teles_texto22') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto23') }}</td>
						<td>{{ trans('vocabulario.teles_texto24') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto25') }}</td>
						<td>{{ trans('vocabulario.teles_texto26') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto27') }}</td>
						<td>{{ trans('vocabulario.teles_texto28') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto29') }}</td>
						<td>{{ trans('vocabulario.teles_texto30') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto31') }}</td>
						<td>{{ trans('vocabulario.teles_texto32') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto33') }}</td>
						<td>{{ trans('vocabulario.teles_texto34') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto35') }}</td>
						<td>{{ trans('vocabulario.teles_texto36') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto37') }}</td>
						<td>{{ trans('vocabulario.teles_texto38') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto39') }}</td>
						<td>{{ trans('vocabulario.teles_texto40') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto41') }}</td>
						<td>{{ trans('vocabulario.teles_texto42') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto43') }}</td>
						<td>{{ trans('vocabulario.teles_texto44') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto45') }}</td>
						<td>{{ trans('vocabulario.teles_texto46') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto47') }}</td>
						<td>{{ trans('vocabulario.teles_texto48') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto49') }}</td>
						<td>{{ trans('vocabulario.teles_texto50') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto51') }}</td>
						<td>{{ trans('vocabulario.teles_texto52') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto53') }}</td>
						<td>{{ trans('vocabulario.teles_texto54') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto55') }}</td>
						<td>{{ trans('vocabulario.teles_texto56') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto57') }}</td>
						<td>{{ trans('vocabulario.teles_texto58') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto59') }}</td>
						<td>{{ trans('vocabulario.teles_texto60') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto61') }}</td>
						<td>{{ trans('vocabulario.teles_texto62') }}</td>
					</tr>
				</table>
			</div>	
		</div>
	</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
				<img class="img-fluid" src="/img/practicav/vocabulario/ropa-intima.svg" width="300px" title="{{ trans('vocabulario.teles_imgtitle100') }}" alt="{{ trans('vocabulario.teles_imgalt100') }}">
			</div>
			<div class="col-md-8 pt-5 order-1">
				<h2>{{ trans('vocabulario.teles_titulo100') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.teles_titulo100')}}">
					<thead>
						<th>{{ trans('vocabulario.teles_titulo1') }}</th>
						<th>{{ trans('vocabulario.teles_titulo2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.teles_texto100') }}</td>
						<td>{{ trans('vocabulario.teles_texto101') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto102') }}</td>
						<td>{{ trans('vocabulario.teles_texto103') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto104') }}</td>
						<td>{{ trans('vocabulario.teles_texto105') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto106') }}</td>
						<td>{{ trans('vocabulario.teles_texto107') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto108') }}</td>
						<td>{{ trans('vocabulario.teles_texto109') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto110') }}</td>
						<td>{{ trans('vocabulario.teles_texto111') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto112') }}</td>
						<td>{{ trans('vocabulario.teles_texto113') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto114') }}</td>
						<td>{{ trans('vocabulario.teles_texto115') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto116') }}</td>
						<td>{{ trans('vocabulario.teles_texto117') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto118') }}</td>
						<td>{{ trans('vocabulario.teles_texto119') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto120') }}</td>
						<td>{{ trans('vocabulario.teles_texto121') }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
				<img class="img-fluid" src="/img/practicav/vocabulario/complementos.svg" width="300px" title="{{ trans('vocabulario.teles_imgtitle200') }}" alt="{{ trans('vocabulario.teles_imgalt200') }}">
			</div>	
			<div class="col-md-8 pt-5 order-2">
				<h2>{{ trans('vocabulario.teles_titulo200') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.teles_titulo200')}}">
					<thead>
						<th>{{ trans('vocabulario.teles_titulo1') }}</th>
						<th>{{ trans('vocabulario.teles_titulo2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.teles_texto200') }}</td>
						<td>{{ trans('vocabulario.teles_texto201') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto202') }}</td>
						<td>{{ trans('vocabulario.teles_texto203') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto204') }}</td>
						<td>{{ trans('vocabulario.teles_texto205') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto206') }}</td>
						<td>{{ trans('vocabulario.teles_texto207') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto208') }}</td>
						<td>{{ trans('vocabulario.teles_texto209') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto210') }}</td>
						<td>{{ trans('vocabulario.teles_texto211') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto212') }}</td>
						<td>{{ trans('vocabulario.teles_texto213') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto214') }}</td>
						<td>{{ trans('vocabulario.teles_texto215') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto216') }}</td>
						<td>{{ trans('vocabulario.teles_texto217') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto218') }}</td>
						<td>{{ trans('vocabulario.teles_texto219') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto220') }}</td>
						<td>{{ trans('vocabulario.teles_texto221') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto222') }}</td>
						<td>{{ trans('vocabulario.teles_texto223') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto224') }}</td>
						<td>{{ trans('vocabulario.teles_texto225') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto226') }}</td>
						<td>{{ trans('vocabulario.teles_texto227') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto228') }}</td>
						<td>{{ trans('vocabulario.teles_texto229') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto230') }}</td>
						<td>{{ trans('vocabulario.teles_texto231') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto232') }}</td>
						<td>{{ trans('vocabulario.teles_texto233') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto234') }}</td>
						<td>{{ trans('vocabulario.teles_texto235') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto236') }}</td>
						<td>{{ trans('vocabulario.teles_texto237') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto238') }}</td>
						<td>{{ trans('vocabulario.teles_texto239') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto240') }}</td>
						<td>{{ trans('vocabulario.teles_texto241') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto242') }}</td>
						<td>{{ trans('vocabulario.teles_texto243') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto244') }}</td>
						<td>{{ trans('vocabulario.teles_texto245') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto246') }}</td>
						<td>{{ trans('vocabulario.teles_texto247') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto248') }}</td>
						<td>{{ trans('vocabulario.teles_texto249') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto250') }}</td>
						<td>{{ trans('vocabulario.teles_texto251') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto252') }}</td>
						<td>{{ trans('vocabulario.teles_texto253') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto254') }}</td>
						<td>{{ trans('vocabulario.teles_texto255') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto256') }}</td>
						<td>{{ trans('vocabulario.teles_texto257') }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
				<img class="img-fluid" src="/img/practicav/vocabulario/zapatos.svg" width="300px" title="{{ trans('vocabulario.teles_imgtitle300') }}" alt="{{ trans('vocabulario.teles_imgalt300') }}">
			</div>
			<div class="col-md-8 pt-5 order-1">
				<h2>{{ trans('vocabulario.teles_titulo300') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.teles_titulo300')}}">
					<thead>
						<th>{{ trans('vocabulario.teles_titulo1') }}</th>
						<th>{{ trans('vocabulario.teles_titulo2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.teles_texto300') }}</td>
						<td>{{ trans('vocabulario.teles_texto301') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto302') }}</td>
						<td>{{ trans('vocabulario.teles_texto303') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto304') }}</td>
						<td>{{ trans('vocabulario.teles_texto305') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto306') }}</td>
						<td>{{ trans('vocabulario.teles_texto307') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto308') }}</td>
						<td>{{ trans('vocabulario.teles_texto309') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto310') }}</td>
						<td>{{ trans('vocabulario.teles_texto311') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto312') }}</td>
						<td>{{ trans('vocabulario.teles_texto313') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto314') }}</td>
						<td>{{ trans('vocabulario.teles_texto315') }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
				<img class="img-fluid" src="/img/practicav/vocabulario/boton.svg" width="300px" title="{{ trans('vocabulario.teles_imgtitle400') }}" alt="{{ trans('vocabulario.teles_imgalt400') }}">
			</div>	
			<div class="col-md-8 pt-5 order-2">
				<h2>{{ trans('vocabulario.teles_titulo400') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.teles_titulo400')}}">
					<thead>
						<th>{{ trans('vocabulario.teles_titulo1') }}</th>
						<th>{{ trans('vocabulario.teles_titulo2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.teles_texto400') }}</td>
						<td>{{ trans('vocabulario.teles_texto401') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto402') }}</td>
						<td>{{ trans('vocabulario.teles_texto403') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto404') }}</td>
						<td>{{ trans('vocabulario.teles_texto405') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto406') }}</td>
						<td>{{ trans('vocabulario.teles_texto407') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto408') }}</td>
						<td>{{ trans('vocabulario.teles_texto409') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto410') }}</td>
						<td>{{ trans('vocabulario.teles_texto411') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto412') }}</td>
						<td>{{ trans('vocabulario.teles_texto413') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto414') }}</td>
						<td>{{ trans('vocabulario.teles_texto415') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto416') }}</td>
						<td>{{ trans('vocabulario.teles_texto417') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto418') }}</td>
						<td>{{ trans('vocabulario.teles_texto419') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto420') }}</td>
						<td>{{ trans('vocabulario.teles_texto421') }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
	        </div>
			<div class="col-md-8 pt-5 order-1">
				<h2>{{ trans('vocabulario.teles_titulo500') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.teles_titulo500')}}">
					<thead>
						<th>{{ trans('vocabulario.teles_titulo1') }}</th>
						<th>{{ trans('vocabulario.teles_titulo2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.teles_texto500') }}</td>
						<td>{{ trans('vocabulario.teles_texto501') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto503') }}</td>
						<td>{{ trans('vocabulario.teles_texto504') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto506') }}</td>
						<td>{{ trans('vocabulario.teles_texto507') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto509') }}</td>
						<td>{{ trans('vocabulario.teles_texto510') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto512') }}</td>
						<td>{{ trans('vocabulario.teles_texto513') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto515') }}</td>
						<td>{{ trans('vocabulario.teles_texto516') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto518') }}</td>
						<td>{{ trans('vocabulario.teles_texto519') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto521') }}</td>
						<td>{{ trans('vocabulario.teles_texto522') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto524') }}</td>
						<td>{{ trans('vocabulario.teles_texto525') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto526') }}</td>
						<td>{{ trans('vocabulario.teles_texto527') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto528') }}</td>
						<td>{{ trans('vocabulario.teles_texto529') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto530') }}</td>
						<td>{{ trans('vocabulario.teles_texto531') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto532') }}</td>
						<td>{{ trans('vocabulario.teles_texto533') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto534') }}</td>
						<td>{{ trans('vocabulario.teles_texto535') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto536') }}</td>
						<td>{{ trans('vocabulario.teles_texto537') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto538') }}</td>
						<td>{{ trans('vocabulario.teles_texto539') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto540') }}</td>
						<td>{{ trans('vocabulario.teles_texto541') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto542') }}</td>
						<td>{{ trans('vocabulario.teles_texto543') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto544') }}</td>
						<td>{{ trans('vocabulario.teles_texto545') }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
	        </div>
			<div class="col-md-8 pt-5 order-2">
				<h2>{{ trans('vocabulario.teles_titulo600') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.teles_titulo600')}}">
					<thead>
						<th>{{ trans('vocabulario.teles_titulo1') }}</th>
						<th>{{ trans('vocabulario.teles_titulo2') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.teles_texto700') }}</td>
						<td>{{ trans('vocabulario.teles_texto701') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto702') }}</td>
						<td>{{ trans('vocabulario.teles_texto703') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto704') }}</td>
						<td>{{ trans('vocabulario.teles_texto705') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto706') }}</td>
						<td>{{ trans('vocabulario.teles_texto707') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto708') }}</td>
						<td>{{ trans('vocabulario.teles_texto709') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto710') }}</td>
						<td>{{ trans('vocabulario.teles_texto711') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto712') }}</td>
						<td>{{ trans('vocabulario.teles_texto713') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto714') }}</td>
						<td>{{ trans('vocabulario.teles_texto715') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto716') }}</td>
						<td>{{ trans('vocabulario.teles_texto717') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.teles_texto718') }}</td>
						<td>{{ trans('vocabulario.teles_texto719') }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<div class="row mt-5 mb-5">
	<div class="box-body pad table-responsive">
		<div class="col-md-3">
			<a href="/practicainicio/7"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>
</div>

@endsection
