@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('vocabulario.cos_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.cos_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.cos_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.cos_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
	    <div class="row content">
	        <div class="col-md-6 pt-5 order-2">
				@include('paginas.vocabulario.publi.superior50')
	        </div>
	        <div class="col-md-6 pt-5 order-1">
				<p>{{ trans('vocabulario.cos_texto1') }}</p>
				<p>{{ trans('vocabulario.cos_texto2') }}</p>
	        </div>
        </div>
    </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-5 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/vocabulario/cos-huma.svg" width="300px" title="{{ trans('vocabulario.cos_imgtitle20') }}" alt="{{ trans('vocabulario.cos_imgalt20') }}">
	        </div>
	        <div class="col-md-7 pt-5 order-2">
	            <h2>{{ trans('vocabulario.cos_titulo20') }}</h2>
	            <div class="col-8">
					<table class="table table-bordered" summary="tabla de {{trans('vocabulario.cos_titulo20')}}">
						<thead>
							<th>{{ trans('vocabulario.cos_titulo21') }}</th>
							<th>{{ trans('vocabulario.cos_titulo22') }}</th>
						</thead>
						<tr>
							<td>{{ trans('vocabulario.cos_texto21') }}</td>
							<td>{{ trans('vocabulario.cos_texto22') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto23') }}</td>
							<td>{{ trans('vocabulario.cos_texto24') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto25') }}</td>
							<td>{{ trans('vocabulario.cos_texto26') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto27') }}</td>
							<td>{{ trans('vocabulario.cos_texto28') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto29') }}</td>
							<td>{{ trans('vocabulario.cos_texto30') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto31') }}</td>
							<td>{{ trans('vocabulario.cos_texto32') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto33') }}</td>
							<td>{{ trans('vocabulario.cos_texto34') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto35') }}</td>
							<td>{{ trans('vocabulario.cos_texto36') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto37') }}</td>
							<td>{{ trans('vocabulario.cos_texto38') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto39') }}</td>
							<td>{{ trans('vocabulario.cos_texto40') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto41') }}</td>
							<td>{{ trans('vocabulario.cos_texto42') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto43') }}</td>
							<td>{{ trans('vocabulario.cos_texto44') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto45') }}</td>
							<td>{{ trans('vocabulario.cos_texto46') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto47') }}</td>
							<td>{{ trans('vocabulario.cos_texto48') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto49') }}</td>
							<td>{{ trans('vocabulario.cos_texto50') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto51') }}</td>
							<td>{{ trans('vocabulario.cos_texto52') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto53') }}</td>
							<td>{{ trans('vocabulario.cos_texto54') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto55') }}</td>
							<td>{{ trans('vocabulario.cos_texto56') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto57') }}</td>
							<td>{{ trans('vocabulario.cos_texto58') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto59') }}</td>
							<td>{{ trans('vocabulario.cos_texto60') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto61') }}</td>
							<td>{{ trans('vocabulario.cos_texto62') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto63') }}</td>
							<td>{{ trans('vocabulario.cos_texto64') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto65') }}</td>
							<td>{{ trans('vocabulario.cos_texto66') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto67') }}</td>
							<td>{{ trans('vocabulario.cos_texto68') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto69') }}</td>
							<td>{{ trans('vocabulario.cos_texto70') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto71') }}</td>
							<td>{{ trans('vocabulario.cos_texto72') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto73') }}</td>
							<td>{{ trans('vocabulario.cos_texto74') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto75') }}</td>
							<td>{{ trans('vocabulario.cos_texto76') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto77') }}</td>
							<td>{{ trans('vocabulario.cos_texto78') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto79') }}</td>
							<td>{{ trans('vocabulario.cos_texto80') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto81') }}</td>
							<td>{{ trans('vocabulario.cos_texto82') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto83') }}</td>
							<td>{{ trans('vocabulario.cos_texto84') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto85') }}</td>
							<td>{{ trans('vocabulario.cos_texto86') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto87') }}</td>
							<td>{{ trans('vocabulario.cos_texto88') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto89') }}</td>
							<td>{{ trans('vocabulario.cos_texto90') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto91') }}</td>
							<td>{{ trans('vocabulario.cos_texto92') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto93') }}</td>
							<td>{{ trans('vocabulario.cos_texto94') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto95') }}</td>
							<td>{{ trans('vocabulario.cos_texto96') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto97') }}</td>
							<td>{{ trans('vocabulario.cos_texto98') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto99') }}</td>
							<td>{{ trans('vocabulario.cos_texto100') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto101') }}</td>
							<td>{{ trans('vocabulario.cos_texto102') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto103') }}</td>
							<td>{{ trans('vocabulario.cos_texto104') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto105') }}</td>
							<td>{{ trans('vocabulario.cos_texto106') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto107') }}</td>
							<td>{{ trans('vocabulario.cos_texto108') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto109') }}</td>
							<td>{{ trans('vocabulario.cos_texto110') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto111') }}</td>
							<td>{{ trans('vocabulario.cos_texto112') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto113') }}</td>
							<td>{{ trans('vocabulario.cos_texto114') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto115') }}</td>
							<td>{{ trans('vocabulario.cos_texto116') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto117') }}</td>
							<td>{{ trans('vocabulario.cos_texto118') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto119') }}</td>
							<td>{{ trans('vocabulario.cos_texto120') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto121') }}</td>
							<td>{{ trans('vocabulario.cos_texto122') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto123') }}</td>
							<td>{{ trans('vocabulario.cos_texto124') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto125') }}</td>
							<td>{{ trans('vocabulario.cos_texto126') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto127') }}</td>
							<td>{{ trans('vocabulario.cos_texto128') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.cos_texto129') }}</td>
							<td>{{ trans('vocabulario.cos_texto130') }}</td>
						</tr>
					</table>
				</div>	
            </div>
        </div>
	</div>
</section>

<h2>{{ trans('vocabulario.cos_titulo140') }}</h2>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content  justify-content-center h-100">
	        <div class="col-md-6">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/gh5d-RNQ0UE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    	    </div>
	        <div class="col-md-6">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/iCN-GMQ8BGA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	        </div>
        </div>
	</div>
</section>

<section class="container justif my-5">
    <div class="container-fluid">
		<div class="row mt-5 mb-5">
			<div class="box-body pad table-responsive">
				<div class="col-md-4">
					<a href="/practicainicio/11"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
