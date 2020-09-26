@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('vocabulario.horas_titulo1') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('vocabulario.horas_h1') )}}@endsection

@section('breadcrumb1')<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('vocabulario.horas_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('vocabulario.horas_keywords') )}}@endsection

@section('main_content')

<div class="row">
	<div class="col-5">
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
	<div class="col-7">
		<p>{{ html_entity_decode(trans('vocabulario.horas_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.horas_texto2') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.horas_texto3') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.horas_texto4') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.horas_texto5') )}}</p>
	</div>
</div>

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.horas_titulo2') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="les hores: hora exacta">
					<tr>
						<td  colspan="3">Quan és l'hora exacta es diu el nom de l'hora. Ara bé, a partir del mig dia es pot dir les tretze hores, les catorze hores,… fins les vint-i quatre hores, però no és habitual.</td>
					</tr>
					<tr>
						<td class="table20">La una</td>	
						<td class="table10">01:00 h</td>
						<td class="table10">13:00 h</td>
					</tr>
					<tr><td>Les dos</td>		<td>02:00 h</td>	<td>14:00 h</td>	</tr>
					<tr><td>Les tres</td>		<td>03:00 h</td>	<td>15:00 h</td>	</tr>
					<tr><td>Les quatre</td>		<td>04:00 h</td>	<td>16:00 h</td>	</tr>
					<tr><td>Les cinc</td>		<td>05:00 h</td>	<td>17:00 h</td>	</tr>
					<tr><td>Les sis</td>		<td>06:00 h</td>	<td>18:00 h</td>	</tr>
					<tr><td>Les set</td>		<td>07:00 h</td>	<td>19:00 h</td>	</tr>
					<tr><td>Les huit</td>		<td>08:00 h</td>	<td>20:00 h</td>	</tr>
					<tr><td>Les nou</td>		<td>09:00 h</td>	<td>21:00 h</td>	</tr>
					<tr><td>Les deu</td>		<td>10:00 h</td>	<td>22:00 h</td>	</tr>
					<tr><td>Les onze</td>		<td>11:00 h</td>	<td>23:00 h</td>	</tr>
					<tr><td>Les dotze</td>		<td>12:00 h</td>	<td>24:00 h</td>	</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.horas_titulo3') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="les hores: i quart">
					<tr>
						<td  colspan="3">Per a dir l'hora però passats quinze minuts. Fòrmula: hora + i + quart.</td>
					</tr>
				<tr><td>Les dos i quart</td>		<td>02:15 h</td>	<td>14:15 h</td>	</tr>
				<tr><td>Les tres i quart</td>		<td>03:15 h</td>	<td>15:15 h</td>	</tr>
				<tr><td>Les quatre i quart</td>		<td>04:15 h</td>	<td>16:15 h</td>	</tr>
				<tr><td>Les cinc i quart</td>		<td>05:15 h</td>	<td>17:15 h</td>	</tr>
				<tr><td>Les sis i quart</td>		<td>06:15 h</td>	<td>18:15 h</td>	</tr>
				<tr><td>Les set i quart</td>		<td>07:15 h</td>	<td>19:15 h</td>	</tr>
				<tr><td>Les huit i quart</td>		<td>08:15 h</td>	<td>20:15 h</td>	</tr>
				<tr><td>Les nou i quart</td>		<td>09:15 h</td>	<td>21:15 h</td>	</tr>
				<tr><td>Les deu i quart</td>		<td>10:15 h</td>	<td>22:15 h</td>	</tr>
				<tr><td>Les onze i quart</td>		<td>11:15 h</td>	<td>23:15 h</td>	</tr>
				<tr><td>Les dotze i quart</td>		<td>12:15 h</td>	<td>24:15 h</td>	</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.horas_titulo4') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="les hores: i mitja">
					<tr>
						<td  colspan="3">Per a dir una hora i trenta minuts. Fòrmula: hora + i + mitja.</td>
					</tr>
				<tr><td>Les dos i mitja</td>		<td>02:30 h</td>	<td>14:30 h</td>	</tr>
				<tr><td>Les tres i mitja</td>		<td>03:30 h</td>	<td>15:30 h</td>	</tr>
				<tr><td>Les quatre i mitja</td>		<td>04:30 h</td>	<td>16:30 h</td>	</tr>
				<tr><td>Les cinc i mitja</td>		<td>05:30 h</td>	<td>17:30 h</td>	</tr>
				<tr><td>Les sis i mitja</td>		<td>06:30 h</td>	<td>18:30 h</td>	</tr>
				<tr><td>Les set i mitja</td>		<td>07:30 h</td>	<td>19:30 h</td>	</tr>
				<tr><td>Les huit i mitja</td>		<td>08:30 h</td>	<td>20:30 h</td>	</tr>
				<tr><td>Les nou i mitja</td>		<td>09:30 h</td>	<td>21:30 h</td>	</tr>
				<tr><td>Les deu i mitja</td>		<td>10:30 h</td>	<td>22:30 h</td>	</tr>
				<tr><td>Les onze i mitja</td>		<td>11:30 h</td>	<td>23:30 h</td>	</tr>
				<tr><td>Les dotze i mitja</td>		<td>12:30 h</td>	<td>24:30 h</td>	</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.horas_titulo5') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="les hores: menys quart">
					<tr>
						<td  colspan="3">Per a dir una hora i quaranta cinc minuts, és a dir, una hora i tres quarts, és diu l'hora següent menys quart. Fòrmula: hora (següent) menys quart. També és pot dir l'hora i quaranta cinc minuts. Fòrmula: hora + i + quaranta cinc minuts.</td>
					</tr>
					<tr><td>Les dos menys quart</td>		<td>01:45 h</td>	<td>13:45 h</td>	</tr>
					<tr><td>Les tres menys quart</td>		<td>02:45 h</td>	<td>14:45 h</td>	</tr>
					<tr><td>Les quatre menys quart</td>		<td>03:45 h</td>	<td>15:45 h</td>	</tr>
					<tr><td>Les cinc menys quart</td>		<td>04:45 h</td>	<td>16:45 h</td>	</tr>
					<tr><td>Les sis menys quart</td>		<td>05:45 h</td>	<td>17:45 h</td>	</tr>
					<tr><td>Les set menys quart</td>		<td>06:45 h</td>	<td>18:45 h</td>	</tr>
					<tr><td>Les huit menys quart</td>		<td>07:45 h</td>	<td>19:45 h</td>	</tr>
					<tr><td>Les nou menys quart</td>		<td>08:45 h</td>	<td>20:45 h</td>	</tr>
					<tr><td>Les deu menys quart</td>		<td>9:45 h</td>		<td>21:45 h</td>	</tr>
					<tr><td>Les onze menys quart</td>		<td>10:45 h</td>	<td>22:45 h</td>	</tr>
					<tr><td>Les dotze menys quart</td>		<td>11:45 h</td>	<td>23:45 h</td>	</tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.horas_titulo6') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="les hores: alguns minuts">
					<tr>
						<td  colspan="3">Per a dir l'hora i alguns minuts. Fòrmula: l'hora + i + minuts.</td>
					</tr>
					<tr><td>Les set i vint-i- tres</td>		<td>07:23 h</td>	<td>19:23 h</td>	</tr>
					<tr><td>La una i dotze</td>				<td>01:12 h</td>	<td>13:12 h</td>	</tr>
					<tr><td>Les tres menys cinc</td>		<td>02:55 h</td>	<td>14:55 h</td>	</tr>
					<tr><td>Les deu menys vint</td>			<td>09:40 h</td>	<td>21:40 h</td>	</tr>
					<tr><td>Les quatre menys deu</td>		<td>03:50 h</td>	<td>15:50 h</td>	</tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
