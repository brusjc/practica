@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('vocabulario.parentesco_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.parentesco_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.parentesco_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.parentesco_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/vocabulario/relacions-convencionals.svg" width="300px" title="{{ trans('vocabulario.parentesco_imgtitle20') }}" alt="{{ trans('vocabulario.parentesco_imgalt20') }}">
	        </div>
	        <div class="col-md-8 pt-5 order-2">
	            <h2>{{ trans('vocabulario.parentesco_titulo20') }}</h2>
	        	<div class="col-10">
					<table class="table table-bordered" summary="tabla de {{trans('vocabulario.parentesco_titulo20')}}">
						<thead>
							<th>{{ trans('vocabulario.parentesco_titulo2') }}</th>
							<th>{{ trans('vocabulario.parentesco_titulo3') }}</th>
							<th>{{ trans('vocabulario.parentesco_titulo4') }}</th>
						</thead>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto21') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto22') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto23') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto24') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto25') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto26') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto27') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto28') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto29') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto30') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto31') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto32') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto33') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto34') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto35') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto36') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto37') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto38') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto39') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto40') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto41') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto42') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto43') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto44') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto45') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto46') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto47') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto48') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto49') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto50') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto51') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto52') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto53') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto54') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto55') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto56') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto57') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto58') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto59') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto60') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto61') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto62') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto63') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto64') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto65') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto66') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto67') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto68') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto69') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto70') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto71') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto72') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto73') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto74') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto75') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto76') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto77') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto78') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto79') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto80') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto81') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto82') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto83') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto84') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto85') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto86') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto87') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto88') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto89') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto90') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto91') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto92') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto93') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto94') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto95') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto96') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto97') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto98') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto99') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto100') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto101') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto102') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto103') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto104') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto105') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto106') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto107') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto108') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto109') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto110') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto111') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto112') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto113') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto114') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto115') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto116') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto117') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto118') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto119') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto120') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto121') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto122') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto123') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto124') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto125') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto126') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto127') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto128') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto129') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto130') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto131') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto132') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto133') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto134') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto135') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto136') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto137') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto138') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto139') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto140') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto141') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto142') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto143') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto144') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto145') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto146') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto147') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto148') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto149') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto150') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto151') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto152') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto153') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto154') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto155') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto156') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto157') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto158') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto159') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto160') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto161') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto162') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto163') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto164') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto165') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto166') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto167') }}</td>
						</tr>
						<tr>
							<td>{{ trans('vocabulario.parentesco_texto168') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto169') }}</td>
							<td>{{ trans('vocabulario.parentesco_texto170') }}</td>
						</tr>
					</table>
				</div>
	        	<div class="col-12">
					<p>{{ trans('vocabulario.parentesco_texto20') }}</p>
	        	</div>
            </div>
        </div>
	</div>
</section>

<section class="container justify">
    <div class="container-fluid">
		<div class="row mt-5 mb-5">
			<div class="box-body pad table-responsive">
				<div class="col-md-3">
					<a href="/practicainicio/3"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
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
