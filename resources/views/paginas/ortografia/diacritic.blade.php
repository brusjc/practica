@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('ortografia.diacritic_title') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('ortografia.diacritic_h1') )}}
@endsection

@section('breadcrumb1')
	<a href="/ortografia">{{ trans('ortografia.ortografia_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('ortografia.diacritic_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('ortografia.diacritic_keywords') )}}
@endsection

@section('main_content')

<div class="row">
	<div class="col-6">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-7412986561454436"
		     data-ad-slot="6463281785"
		     data-ad-format="auto"
		     data-full-width-responsive="true"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	<div class="col-6">
		<div class="comment-text">
			<p>{{ html_entity_decode(trans('ortografia.diacritic_texto1') )}}</p>
			<p>{{ html_entity_decode(trans('ortografia.diacritic_texto2') )}}</p>
		</div>
	</div>
</div>

<div class="comment-text">
	<h2>{{ html_entity_decode(trans('ortografia.diacritic_titulo1') )}}</h2>
</div>

<div class="row">
	<div class="col-10">
		<div class="card">
			<div class="box-body">
				<table class="table table-bordered" summary="{{trans('ortografia.diacritic_titulo1')}}">
					<thead>
						<tr>
							<th class="text-center">{{trans('ortografia.diacritic_titulo2')}}</th>
							<th class="text-center">{{trans('ortografia.diacritic_titulo3')}}</th>
						</tr>
					</thead>
			<tr><td>{{trans('ortografia.diacritic_texto11')}}</td>	<td>{{trans('ortografia.diacritic_texto12')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto13')}}</td>	<td>{{trans('ortografia.diacritic_texto14')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto15')}}</td>	<td>{{trans('ortografia.diacritic_texto16')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto17')}}</td>	<td>{{trans('ortografia.diacritic_texto18')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto19')}}</td>	<td>{{trans('ortografia.diacritic_texto20')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto21')}}</td>	<td>{{trans('ortografia.diacritic_texto22')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto23')}}</td>	<td>{{trans('ortografia.diacritic_texto24')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto25')}}</td>	<td>{{trans('ortografia.diacritic_texto26')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto27')}}</td>	<td>{{trans('ortografia.diacritic_texto28')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto29')}}</td>	<td>{{trans('ortografia.diacritic_texto30')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto31')}}</td>	<td>{{trans('ortografia.diacritic_texto32')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto33')}}</td>	<td>{{trans('ortografia.diacritic_texto34')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto35')}}</td>	<td>{{trans('ortografia.diacritic_texto36')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto37')}}</td>	<td>{{trans('ortografia.diacritic_texto38')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto39')}}</td>	<td>{{trans('ortografia.diacritic_texto40')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto41')}}</td>	<td>{{trans('ortografia.diacritic_texto42')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto43')}}</td>	<td>{{trans('ortografia.diacritic_texto44')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto45')}}</td>	<td>{{trans('ortografia.diacritic_texto46')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto47')}}</td>	<td>{{trans('ortografia.diacritic_texto48')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto49')}}</td>	<td>{{trans('ortografia.diacritic_texto50')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto51')}}</td>	<td>{{trans('ortografia.diacritic_texto52')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto53')}}</td>	<td>{{trans('ortografia.diacritic_texto54')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto55')}}</td>	<td>{{trans('ortografia.diacritic_texto56')}}</td></tr>
			<tr><td>{{trans('ortografia.diacritic_texto57')}}</td>	<td>{{trans('ortografia.diacritic_texto58')}}</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="comment-text">
	<p>{{ html_entity_decode(trans('ortografia.diacritic_texto3') )}}</p>
</div>

@endsection
