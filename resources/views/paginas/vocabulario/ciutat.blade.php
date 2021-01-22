@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('vocabulario.ciutat_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.ciutat_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.ciutat_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.ciutat_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="col-md-6 pt-5 order-2">
			@include('paginas.vocabulario.publi.superior50')
        </div>
        <div class="col-md-6 pt-5 order-1">
		<p>{{ html_entity_decode(trans('vocabulario.ciutat_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.ciutat_texto2') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.ciutat_texto3') )}}</p>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
				<img class="img-fluid" src="/img/practicav/vocabulario/ciutat.svg" width="300px" title="{{ trans('vocabulario.ciutat_imgtitle20') }}" alt="{{ trans('vocabulario.ciutat_imgalt20') }}">
			</div>
			<div class="col-md-8 pt-5 order-1">
				<h2>{{ trans('vocabulario.ciutat_titulo20') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.ciutat_titulo20')}}">
					<thead>
						<th>{{ trans('vocabulario.vocabulario_comun1') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun2') }}</th>
						<th>{{ trans('vocabulario.vocabulario_comun3') }}</th>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto21') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto22') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto23') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto24') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto25') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto26') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto27') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto28') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto29') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto30') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto31') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto32') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto33') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto34') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto35') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto36') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto37') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto38') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto39') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto40') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto41') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto42') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto43') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto44') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto45') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto46') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto47') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto48') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto49') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto50') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto51') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto52') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto53') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto54') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto55') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto56') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto57') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto58') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto59') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto60') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto61') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto62') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto63') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto64') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto65') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto66') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto67') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto68') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto69') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto70') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto71') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto72') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto73') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto74') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto75') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto76') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto77') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto78') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto79') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto80') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto81') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto82') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto83') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto84') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto85') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto86') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto87') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto88') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto89') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto90') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto91') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto92') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto93') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto94') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto95') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto96') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto97') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto98') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto99') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto100') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto101') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto102') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto103') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto104') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto105') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto106') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto107') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto108') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto109') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto110') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto111') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto112') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto113') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto114') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto115') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto116') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto117') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto118') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto119') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto120') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto121') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto122') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto123') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto124') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto125') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto126') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto127') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto128') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto129') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto130') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto131') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto132') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto133') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto134') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto135') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto136') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto137') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto138') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto139') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto140') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto141') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto142') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto143') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto144') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto145') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto146') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto147') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto148') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto149') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto150') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto151') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto152') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto153') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto154') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto155') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto156') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto157') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto158') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto159') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto160') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto161') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto162') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto163') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto164') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto165') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto166') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto167') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto168') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto169') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto170') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto171') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto172') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto173') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto174') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto175') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto176') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto177') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto178') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto179') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto180') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto181') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto182') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto183') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto184') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto185') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto186') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto187') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto188') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto189') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto190') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto191') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto192') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto193') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto194') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto195') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto196') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto197') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto198') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto199') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto200') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto201') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto202') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto203') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto204') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto205') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto206') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto207') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto208') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto209') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto210') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto211') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto212') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto213') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto214') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto215') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto216') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto217') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto218') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto219') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto220') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto221') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto222') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto223') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto224') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto225') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto226') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto227') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto228') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto229') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto230') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto231') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto232') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto233') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto234') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto235') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto236') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto237') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto238') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto239') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto240') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto241') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto242') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto243') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto244') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto245') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto246') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto247') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto248') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto249') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto250') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto251') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto252') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto253') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto254') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto255') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto256') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto257') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto258') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto259') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto260') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto261') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto262') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto263') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto264') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto265') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto266') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto267') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto268') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto269') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto270') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto271') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto272') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto273') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto274') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto275') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto276') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto277') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto278') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.ciutat_texto279') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto280') }}</td>
						<td>{{ trans('vocabulario.ciutat_texto281') }}</td>
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
					<a href="/practicainicio/12"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
