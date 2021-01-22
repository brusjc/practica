@extends('layouts.frontandia.general')

@section('contentheader_title'){{ trans('vocabulario.lletres_title') }}@endsection

@section('contentheader_h1'){{ trans('vocabulario.lletres_h1') }}@endsection

@section('breadcrumb0')<a href="/{{session('lang')}}/">Inicio</a>@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2'){{ session('BC2texto') }}@endsection

@section('descripcion'){{ trans('vocabulario.lletres_descripcion') }}@endsection

@section('keywords'){{ trans('vocabulario.lletres_keywords') }}@endsection

@section('main_content')

<section class="container justify">
    <div class="container-fluid">
	    <div class="container-fluid">
	        <div class="row content h-100">
		        <div class="col-md-5 order-1 order-md-2 centraimg" data-aos="fade-left">
					@include('paginas.vocabulario.publi.superior50')
		        </div>
		        <div class="col-md-7 pt-5 order-1 order-md-1" data-aos="fade-up">
					<p>{{ trans('vocabulario.lletres_texto1') }}</p>
					<p>{{ trans('vocabulario.lletres_texto2') }}</p>
					<p>{{ trans('vocabulario.lletres_texto3') }}</p>
					<p>{{ trans('vocabulario.lletres_texto4') }}</p>
		        </div>
	        </div>
	    </div>
   </div>
</section>

<section class="container justify">
    <div class="container-fluid">
        <div class="row content h-100">
	        <div class="col-md-4 order-1 order-md-2 centraimg" data-aos="fade-left">
	           <img class="img-fluid" src="/img/practicav/vocabulario/nom-de-les-lletres.svg" width="300px" title="{{ trans('vocabulario.lletres_imgtitle20') }}" alt="{{ trans('vocabulario.lletres_imgalt20') }}">
	        </div>
	        <div class="col-xl-8 col-lg-7 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
	            <h2>{{ trans('vocabulario.lletres_titulo20') }}</h2>
				<table class="table table-bordered" summary="tabla de {{trans('vocabulario.lletres_titulo20')}}">
					<thead>
						<tr>
						<th>{{ trans('vocabulario.lletres_titulo21') }}</th>
						<th>{{ trans('vocabulario.lletres_titulo22') }}</th>
						<th>{{ trans('vocabulario.lletres_titulo23') }}</th>
					</tr>
					</thead>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto20') }}</td>
						<td>{{ trans('vocabulario.lletres_texto21') }}</td>
						<td>{{ trans('vocabulario.lletres_texto22') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto23') }}</td>
						<td>{{ trans('vocabulario.lletres_texto24') }}</td>
						<td>{{ trans('vocabulario.lletres_texto25') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto26') }}</td>
						<td>{{ trans('vocabulario.lletres_texto27') }}</td>
						<td>{{ trans('vocabulario.lletres_texto28') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto29') }}</td>
						<td>{{ trans('vocabulario.lletres_texto30') }}</td>
						<td>{{ trans('vocabulario.lletres_texto31') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto32') }}</td>
						<td>{{ trans('vocabulario.lletres_texto33') }}</td>
						<td>{{ trans('vocabulario.lletres_texto34') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto35') }}</td>
						<td>{{ trans('vocabulario.lletres_texto36') }}</td>
						<td>{{ trans('vocabulario.lletres_texto37') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto38') }}</td>
						<td>{{ trans('vocabulario.lletres_texto39') }}</td>
						<td>{{ trans('vocabulario.lletres_texto40') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto41') }}</td>
						<td>{{ trans('vocabulario.lletres_texto42') }}</td>
						<td>{{ trans('vocabulario.lletres_texto43') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto44') }}</td>
						<td>{{ trans('vocabulario.lletres_texto45') }}</td>
						<td>{{ trans('vocabulario.lletres_texto46') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto47') }}</td>
						<td>{{ trans('vocabulario.lletres_texto48') }}</td>
						<td>{{ trans('vocabulario.lletres_texto49') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto50') }}</td>
						<td>{{ trans('vocabulario.lletres_texto51') }}</td>
						<td>{{ trans('vocabulario.lletres_texto52') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto53') }}</td>
						<td>{{ trans('vocabulario.lletres_texto54') }}</td>
						<td>{{ trans('vocabulario.lletres_texto55') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto56') }}</td>
						<td>{{ trans('vocabulario.lletres_texto57') }}</td>
						<td>{{ trans('vocabulario.lletres_texto58') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto59') }}</td>
						<td>{{ trans('vocabulario.lletres_texto60') }}</td>
						<td>{{ trans('vocabulario.lletres_texto61') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto62') }}</td>
						<td>{{ trans('vocabulario.lletres_texto63') }}</td>
						<td>{{ trans('vocabulario.lletres_texto64') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto65') }}</td>
						<td>{{ trans('vocabulario.lletres_texto66') }}</td>
						<td>{{ trans('vocabulario.lletres_texto67') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto68') }}</td>
						<td>{{ trans('vocabulario.lletres_texto69') }}</td>
						<td>{{ trans('vocabulario.lletres_texto70') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto71') }}</td>
						<td>{{ trans('vocabulario.lletres_texto72') }}</td>
						<td>{{ trans('vocabulario.lletres_texto73') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto74') }}</td>
						<td>{{ trans('vocabulario.lletres_texto75') }}</td>
						<td>{{ trans('vocabulario.lletres_texto76') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto77') }}</td>
						<td>{{ trans('vocabulario.lletres_texto78') }}</td>
						<td>{{ trans('vocabulario.lletres_texto79') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto80') }}</td>
						<td>{{ trans('vocabulario.lletres_texto81') }}</td>
						<td>{{ trans('vocabulario.lletres_texto82') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto83') }}</td>
						<td>{{ trans('vocabulario.lletres_texto84') }}</td>
						<td>{{ trans('vocabulario.lletres_texto85') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto86') }}</td>
						<td>{{ trans('vocabulario.lletres_texto87') }}</td>
						<td>{{ trans('vocabulario.lletres_texto88') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto89') }}</td>
						<td>{{ trans('vocabulario.lletres_texto90') }}</td>
						<td>{{ trans('vocabulario.lletres_texto91') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto92') }}</td>
						<td>{{ trans('vocabulario.lletres_texto93') }}</td>
						<td>{{ trans('vocabulario.lletres_texto94') }}</td>
					</tr>
					<tr>
						<td>{{ trans('vocabulario.lletres_texto95') }}</td>
						<td>{{ trans('vocabulario.lletres_texto96') }}</td>
						<td>{{ trans('vocabulario.lletres_texto97') }}</td>
					</tr>
				</table>
            </div>
        </div>
	</div>
</section>


@endsection
