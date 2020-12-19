@extends('layouts.app')

@section('contentheader_title')
    Exàmens de la JQCV d’anteriors convocatòries
@endsection

@section('contentheader_h1')
    Exàmens de la JQCV d’anteriors convocatòries
@endsection

@section('descripcion')
    "Exàmens de la JQCV: practica els exàmens de la JQCV d anteriors convocatòries para poder evaluar tus conocimientos"
@endsection

@section('keywords')
    "Examen de la JQCV, Exàmens de valencià, Exàmens JQCV, probas JQCV, exàmens anteriors JQCV, Examenes de la JQCV, Examenes de la JQCV, pruebas JQCV, examenes de la JQCV de anteriores convocatorias"
@endsection

@section('main_content')
	<p>Exàmens de la JQCV (Junta Qualificadora de Coneixements de Valencià) és la pàgina en què anirem recopilant els exàmens de la JQCV que s’han realitzat fins ara i atenent a la nova estructura d’examen, de manera que podeu avaluar els vostres coneixements.</p>

	<p>Des de la nostra web pots realitzar els exàmens de la JQCV com si estigueres en la mateixa prova. Els diferents nivells (oral, elemental, mitjà i superior) estan estructurats de la mateixa manera que els exàmens de la JQCV perquè el nostre usuari estudiant s’habitue a la prova i no trobe dificultats, de tres respostes ha de triar una que és la resposta verdadera. A l’instant l’usuari sabrà la seua puntuació dels exàmens de la JQCV d’anteriors convocatòries gràcies al nostre sistema d’autoavaluació.</p>

	<p>Així, doncs, exàmens de la JQCV (Junta Qualificadora de Coneixements de Valencià) és una part de la nostra web que destinem a la teua pròpia autoavalución. Et recomanem que utilitzes esta opció únicament quan hages practicat prou sobre els nostres exercicis pràctics i la teua puntuació siga elevada, de manera que els exàmens de la JQCV seran nous i desconeguts encara que assumibles per al teu nivell de coneixements.</p>

	<p>En el nostre apartat d’Exàmens de la JQCV pretenem ajudar-te, facilitar el teu aprenentatge per a assimilar el nivell de coneixements necessaris i superar els distints nivells. Gràcies al nostre projecte de pràctica prendràs o recuperaràs la confiança per a afrontar qualsevol nivell dels exàmens de la JQCV, per mitjà de les proves d’anteriors convocatòries.</p>

	<p>T’animem així, a l’estudi detallat de les lliçons incloses en el nostre curs com a millor preparació possible per a resoldre satisfactòriament els exàmens. Ànim!</p>

	<h2>Exàmens JQCV</h2>

	<ul>
		<li><a href="http://www.jqcv.gva.es/va/">Comprova la nota de l’examen de la JQCV</a></li>
		@foreach($respuesta['data'] as $nivel)
			<li><a href="examen{{str_replace('à', 'a', $nivel['nombre'])}}">Examen {{$nivel['nombre']}}</a></li>
		@endforeach
	</ul>
@endsection
