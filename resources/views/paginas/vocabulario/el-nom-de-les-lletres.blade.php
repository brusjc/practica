@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('vocabulario.lletres_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('vocabulario.lletres_titulo1') )}}
@endsection

@section('breadcrumb1')
	<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('vocabulario.lletres_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('vocabulario.lletres_keywords') )}}
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
		<p>{{ html_entity_decode(trans('vocabulario.lletres_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.lletres_texto2') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.lletres_texto3') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.lletres_texto4') )}}</p>
	</div>
</div>

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">El nom de les lletres</h3>
		</div>

		<div class="box-body no-padding">
			<table class="table table-condensed" summary="tabla con las letras del abecedario, su nombre en valenciano y un ejemplo de cada una de ellas.">
				<tr>
					<th>Lletra</th>
					<th>Nom</th>
					<th>Exemple</th>
				</tr>
				<tr><td>A, a</td><td>a</td><td>anar</td></tr>
				<tr><td>B, b</td><td>be (alta)</td><td>balan&ccedil;a</td></tr>
				<tr><td>C, c</td><td>ce</td><td>cantar</td></tr>
				<tr><td>D, d</td><td>de</td><td>dit</td></tr>
				<tr><td>E, e</td><td>e</td><td>elegant</td></tr>
				<tr><td>F, f</td><td>efe, efa, ef</td><td>favorit</td></tr>
				<tr><td>G, g</td><td>ge</td><td>gat</td></tr>
				<tr><td>H, h</td><td>hac</td><td>habilitat</td></tr>
				<tr><td>I, i</td><td>i llatina</td><td>iaia</td></tr>
				<tr><td>J, j</td><td>jota</td><td>jacuzzi</td></tr>
				<tr><td>K, k</td><td>ca</td><td>karate</td></tr>
				<tr><td>L, l</td><td>ele, ela o el</td><td>laberint</td></tr>
				<tr><td>M, m</td><td>eme, ema o em</td><td>mare</td></tr>
				<tr><td>N, n</td><td>ene o ena o en</td><td>nas</td></tr>
				<tr><td>O, o</td><td>o</td><td>orella</td></tr>
				<tr><td>P, p</td><td>pe</td><td>ploure</td></tr>
				<tr><td>Q, q</td><td>cu</td><td>qüestió</td></tr>
				<tr><td>R, r</td><td>erre, erra o er</td><td>rialla</td></tr>
				<tr><td>S, s</td><td>esse, essa o es</td><td>sucre</td></tr>
				<tr><td>T, t</td><td>te</td><td>tabal</td></tr>
				<tr><td>U, u</td><td>u</td><td>udolar</td></tr>
				<tr><td>V, v</td><td>ve (baixa)</td><td>veritat</td></tr>
				<tr><td>W, w</td><td>ve (doble)</td><td>walkman</td></tr>
				<tr><td>X, x</td><td>ics o xeix</td><td>xica</td></tr>
				<tr><td>Y, y</td><td>i grega</td><td>espanya</td></tr>
				<tr><td>Z, z</td><td>zeta</td><td>zebra</td></tr>
			</table>
		</div>
	</div>

@endsection
