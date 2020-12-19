@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('vocabulario.taula_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('vocabulario.taula_h1') )}}@endsection

@section('breadcrumb1')<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>@endsection

@section('descripcion'){{ html_entity_decode(trans('vocabulario.taula_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('vocabulario.taula_keywords') )}}@endsection

@section('main_content')

<div class="comment-text">
	<p>{{ html_entity_decode(trans('vocabulario.taula_texto1') )}}</p>
</div>

<div class="row">
	<div class="col-11">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.taula_titulo2') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{ trans('vocabulario.taula_titulo2') }}">
				<thead>
					<tr>
						<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
						<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
						<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
					</tr>
				</thead>
				<tr><td>torcaboques</td><td>servilleta</td><td> Peça quadrada de lli, de cotó, de paper, etc., que s'usa en els menjars per a netejar-se els llavis.</td></tr>
				<tr><td>torcamans</td><td>limpiamanos</td><td>Drap per a torcar-se les mans.</td></tr>
				<tr><td>les tovalles</td><td>las toallas</td><td>Peça de lli, de cotó, etc., de diferents mides, que es posa estesa sobre la taula en parar-la per servir el menjar.</td></tr>
				<tr><td>tapet</td><td>tapete o mantel</td><td>Cobretaula. Peça de roba, de tapisseria, de tela encerada, de teixit sintètic, etc., amb què es cobrix una taula.</td></tr>
				<tr><td>drap</td><td>trapo</td><td>Tros de tela, amb vores al voltant o bé sense, per a usos de neteja domèstica. </td></tr>
				<tr><td>forqueta</td><td>tenedor</td><td>Utensili de fusta, de plata, d'alumini, etc., en forma de forca, amb dos, tres o quatre puntes, el qual servix per a agarrar la vianda i portar-la a la boca, tallar-la, etc.</td></tr>
				<tr><td>cullera</td><td>cuchara</td><td>Utensili de metall, de fusta, etc., que té la forma d'una xicoteta pala amb la fulla concavada i ordinàriament de forma oval i que servix per a prendre una porció del contingut d'un recipient i transportar-la a un altre recipient o portar-la a la boca.</td></tr>
				<tr><td>ganivet</td><td>cuchillo</td><td>Instrument que consistix en una fulla generalment d'acer, amb una vora afilada, proveït d'un mànec i que servix per a tallar.</td></tr>
				<tr><td>got</td><td>vaso</td><td>Recipient de vidre, metall, etc., generalment de forma cilíndrica o lleugerament cònica, sense peu, que servix per a beure.</td></tr>
				<tr><td>pitxer</td><td>jarra</td><td>Recipient de terrissa, vidre, etc., sense peu i amb una ansa, per a contindre líquids, beure, etc.</td></tr>
				<tr><td>porró</td><td>porrón</td><td>Recipient de forma bulbosa o cònica que s'allarga per la part superior en un broc gran, per on s'ompli, i per la part inferior, en un altre de llarg que arranca de prop del fons i va aprimant-se, per la punta del qual brolla un rajolí de líquid en decantar convenientment el recipient.</td></tr>
				<tr><td>botella</td><td>botella</td><td>Recipient portàtil de vidre, de cristall, etc., de coll llarg i estret, destinat a contindre líquids.</td></tr>
				<tr><td>plat </td><td>plato</td><td>Disc de terrissa, de pisa, de porcellana, de metall, etc., alçat tot al voltant formant una concavitat de poca alçària i de fons pla, que és usat generalment per a posar-hi la porció de vianda que ha de consumir una persona.</td></tr>
				<tr><td>plat fondo</td><td>plato hondo</td><td>Disc de terrissa, de pisa, de porcellana, de metall, etc., alçat tot al voltant formant una concavitat de poca alçària i de fons pla, que és usat generalment per a posar-hi la porció de vianda que ha de consumir una persona.</td></tr>
				<tr><td>plat pla</td><td>plato llano</td><td>Disc de terrissa, de pisa, de porcellana, de metall, etc., alçat tot al voltant formant una concavitat de poca alçària i de fons pla, que és usat generalment per a posar-hi la porció de vianda que ha de consumir una persona.</td></tr>
				<tr><td>olla</td><td>olla</td><td>Recipient redó de terrissa o de metall, ventrut, generalment amb dos anses, que servix per a cuinar, fer bullir un líquid, etc.</td></tr>
				<tr><td>paella</td><td>paella</td><td>Utensili de cuina, de metall, en forma de vas redó ample i de poca altura, amb un mànec llarg o amb dos anses menudes, que servix per a fregir i coure menjars.</td></tr>
				<tr><td>cassola</td><td>cazuela</td><td>Recipient, ordinàriament redó i de terrissa o de metall, més ample que alt, que servix principalment per a cuinar.</td></tr>
				<tr><td>casset</td><td>cazo</td><td>Recipient menut de metall amb mànec.</td></tr>
				<tr><td>vaixella</td><td>vajilla</td><td>Conjunt de plats, plates, gots, tasses, etc., destinats al servici de la taula.</td></tr>
				<tr><td>setrill</td><td>aceitera</td><td>Recipient de vidre, de terrissa, de metall, etc., que servix per a contindre i abocar l'oli i el vinagre d'amanir, l'oli d'untar màquines, etc.</td></tr>
				<tr><td>pebrer</td><td>pimentera</td><td>Pimentonera</td></tr>
				<tr><td>joc de café</td><td>juego de café</td><td>Conjunt de tasses i recipient per a servir i prendre el café.</td></tr>
				<tr><td>joc de te</td><td>juego de té</td><td>Conjunt de tasses i recipient per a servir i prendre el te.</td></tr>
				<tr><td>joc de xocolate</td><td>juego de chocolate</td><td>Conjunt de tasses i recipient per a servir i prendre xocolate.</td></tr>
				<tr><td>fruiter</td><td>frutero</td><td>Plat o qualsevol altre recipient que s'utilitza per a tindre-hi fruita i servir-la a taula.</td></tr>
				<tr><td>safata</td><td>bandeja</td><td>Plat gran, molt planer, amb vores de poca alçària, que servix per a portar gots, tasses, etc., o per a presentar alguna cosa.</td></tr>
				<tr><td>graella</td><td>parrillas</td><td> Instrument de cuina que consistix en una sèrie de barretes de ferro paral·leles amb intersticis i col·locades en un bastiment també de ferro, sobre les quals es posa la vianda perquè reba l'acció directa de les brases o el foc.</td></tr>
				<tr><td>llevataps</td><td>sacacorchos</td><td>Espiral de metall amb un mànec, acabada en punta, que servix per a traure els taps de les botelles.</td></tr>
				<tr><td>obrellandes</td><td>abrelatas</td><td>Utensili, manual o elèctric, que s'usa per a obrir llandes.</td></tr>
				<tr><td>obridor</td><td>abridor</td><td>Utensili per a obrir llandes de conserves, botelles, etc.</td></tr>
				<tr><td>saler</td><td>salero</td><td>Recipient en què es conserva la sal o en què la sal se servix a taula.</td></tr>
				<tr><td>sucrera</td><td>azucarero</td><td>Recipient que s'usa per a guardar i servir el sucre.</td></tr>
				<tr><td>les setrilleres</td><td>las aceiteras y vinagreras</td><td>Xicotet utensili de metall, de fusta, etc., que porta dos setrills, l'un per a l'oli i l'altre per al vinagre.</td></tr>
				<tr><td>tassa</td><td>taza</td><td>Recipient xicotet de porcellana, de pisa, de terra, etc., amb ansa, per a prendre café, te, etc.</td></tr>
				<tr><td>bol</td><td>bol</td><td>Recipient de forma hemisfèrica de pisa, de porcellana, etc., destinat a contindre aliments líquids, llavar-se els dits, etc.</td></tr>
				<tr><td>embut</td><td>embudo</td><td>Utensili buit de forma cònica, amb el vèrtex prolongat per un tub, el qual s'empra, posant-lo en el forat o en el coll d'una bóta, botella, etc., per a passar líquids d'un recipient a un altre.</td></tr>
				<tr><td>tapadora</td><td>tapadera</td><td>Peça, generalment metàl·lica i de forma circular, que servix per a tapar atifells de boca ampla.</td></tr>
				<tr><td>setiet</td><td>salvamantel</td><td>Utensili d'espart, de metall, fusta, etc., sobre el qual es posen les cassoles, les olles, etc., que es porten a taula per a evitar que embruten o cremen les tovalles.</td></tr>
				<tr><td>cullerot</td><td>cucharón</td><td>Cullera gran en què la part còncava és generalment de forma hemisfèrica i que servix per a escudellar la sopa, un caldo, etc., a taula i per a remenar l'olla.</td></tr>
				<tr><td>pinces</td><td>pinzas</td><td>Instrument que consistix en dos braços que permeten agafar o subjectar coses xicotetes, obturar tubs elàstics, etc., al fer-hi pressió per la part central o pels extrems.</td></tr>
				<tr><td>botija</td><td>botijo</td><td>Atifell portàtil, més ample de dalt que del peu, amb una ansa en la part superior central i dos brocs, un per a omplir-lo (tòt) i l'altre, més xicotet (gallet), per a beure.</td></tr>
				<tr><td>cistella de pa</td><td>cesta de pan</td><td>Recipient format per un cércol i un fons de cordes entrellaçades, usat per a tindre-hi pa.</td></tr>
				<tr><td>tisores</td><td>tijeras</td><td>Instrument de tallar constituït per dos làmines entrecreuades i unides en el punt d'entrecreuament per un piu al voltant del qual poden girar, obrint-se en forma de X, proveïdes generalment d'un mànec cada una.</td></tr>
				<tr><td>trencanous</td><td>cascanueces</td><td>Instrument, generalment en forma de tenalles o pinces, per a trencar anous, ametles, etc.</td></tr>
				<tr><td>pot</td><td>bote</td><td>Recipient, generalment cilíndric, més alt que ample, que servix per a guardar conserves, tabac, medicaments, etc.</td></tr>
				<tr><td>davantal</td><td>delantal</td><td>Peça de vestir que cobrix la part de davant del cos per a resguardar el vestit. </td></tr>
				<tr><td>furgadents</td><td>palillo</td><td>Instrument consistent en una tigeta de fusta, ploma, etc., tallada en punta, que s'utilitza per a eliminar les restes de menjar que queden entre les dents després d'una menjada.</td></tr>
				<tr><td>canelobre</td><td>candelabro</td><td>Utensili consistent en un peu o una columna més o menys llargs, de dos braços o més, amb dolles per a aguantar dretes altres tantes candeles.</td></tr>
				<tr><td>boteller</td><td>botellero</td><td>Armari, estant, per a posar-hi les botelles.</td></tr>
				<tr><td>forn</td><td>horno</td><td>Lloc tancat dins del qual qualsevol tipus d'energia, generalment química o elèctrica, es convertix en energia calorífica per a transformar, físicament o químicament, la matèria que s'hi introduïx.</td></tr>
				<tr><td>taula</td><td>mesa</td><td>Moble que consistix en una peça llisa i plana sostinguda horitzontalment per tres o més potes o petges, que servix per a menjar, escriure, treballar, jugar, etc.</td></tr>
				<tr><td>cadira</td><td>silla</td><td>Seient individual amb respatler, generalment amb quatre petges i, a vegades, amb braços.</td></tr>
				<tr><td>llavaplats</td><td>lavavajillas</td><td>Màquina destinada a llavar els plats i la vaixella en general.</td></tr>
				<tr><td>microones</td><td>microondas</td><td>Forn que funciona amb ones electromagnètiques.</td></tr>
				<tr><td>tallador de companatge</td><td>cortafiambres</td><td>Aparell o màquina elèctrica que talla o divideix en parts una peça de companatge, xoriç, pernil,... </td></tr>
				<tr><td>escorreplats</td><td>escurridor</td><td>Bastiment amb ranures on es posen a escórrer els plats després de llavats.</td></tr>
				<tr><td>rebost</td><td>despensa</td><td>Lloc d'una casa  on es guarden els comestibles.</td></tr>
				<tr><td>nevera</td><td>nevera</td><td>Refrigerador, especialment el d'ús domèstic dedicat a mantindre frescs aliments o begudes o refredar-los.</td></tr>
				<tr><td>campana extractora</td><td>campana extractora</td><td>Aparell extractor dels fums d'una cuina situat damunt dels foguers que recorda la forma d'una campana.</td></tr>
				<tr><td>extractor</td><td>extractror</td><td>Ventilador utilitzat per a traure el fum, el vapor o l'aire viciat d'una habitació, d'una nau industrial, etc.</td></tr>
				<tr><td>pica</td><td>fregadero</td><td>Peça de pedra, terrissa, etc., amb una concavitat destinada a rebre o a contindre líquid, fixada a la paret, sostinguda per un peu, disposada a terra, etc.</td></tr>
				<tr><td>tovalloner </td><td>servilletero</td><td>Argolla per a subjectar un tovalló. Utensili per a posar-hi els tovallons de paper.</td></tr>
				<tr><td>batedora</td><td>batidora</td><td>Aparell culinari que permet triturar i mesclar els aliments.</td></tr>
				<tr><td>espremedora</td><td>exprimidor</td><td>Instrument que servix per a esprémer alguna cosa i arreplegar-ne el suc.</td></tr>
				<tr><td>congelador</td><td>congelador</td><td>Aparell o part d'un aparell utilitzat per a congelar o per a guardar productes congelats.</td></tr>
				<tr><td>cafetera</td><td>cafetera</td><td>Aparell per a obtindre la infusió de café. </td></tr>
				<tr><td>torradora</td><td>tostadora</td><td>Aparell per a torrar llesques de pa.</td></tr>
				<tr><td>sandvitxera</td><td>sandwichera</td><td>Electrodomèstic utilitzat per a preparar sandvitxos calents.</td></tr>
				<tr><td>ouera</td><td>huevera</td><td>Vaset de pisa, de metall, etc., per a servir i per a prendre els ous bullits.</td></tr>
				<tr><td>estrís de cuina</td><td>utensilios de cocina</td><td>Qualsevol dels arreus, les ferramentes i tots altres objectes, especialment manuals, que hi ha en una casa o que es porten damunt i que servixen per a fer un treball, prestar un servici determinat, etc.</td></tr>
				<tr><td>colador</td><td>colador</td><td>Atifell de cuina amb fons de tela, tela metàl·lica, planxa perforada, etc., que servix per a colar.</td></tr>
				<tr><td>perol</td><td>perol</td><td>Vas de metall, d'una forma aproximadament hemisfèrica, per a anar al foc. </td></tr>
				<tr><td>taula de tallar</td><td>tabla de cortar</td><td>Suport de fusta o de plàstic per a tallar aliments.</td></tr>
				<tr><td>fregall</td><td>estropajo</td><td>Manyoc d'espart, de fils d'alumini, esponja dura, etc., que servix per a fregar, especialment els plats, les rajoles, etc.</td></tr>
				<tr><td>palleta</td><td>cañita o pajita</td><td>Tubet per a xuplar begudes.</td></tr>
				<tr><td>termos</td><td>termo</td><td>Nom amb què és conegut comercialment el recipient Dewar, utilitzat especialment per a conservar calents o freds aliments, begudes, etc.</td></tr>
				<tr><td>glaçonera</td><td>cubitera</td><td>Motle per a fer glaçons. També, motle per a fer glaçons.</td></tr>
				<tr><td>motle</td><td>molde</td><td>Peça amb una cavitat en la qual s'introduïx una substància en forma de pols, de pasta o líquida perquè, al passar a l'estat sòlid, agarre la forma de la cavitat.</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row mt-3 mb-3">
	<div class="box-body pad table-responsive">
		<div class="col-md-3">
			<a href="/practicainicio/14"><button type="button" class="btn btn-block btn-primary btn-lg">Practica</button></a>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-11">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.taula_titulo3') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{ trans('vocabulario.taula_titulo3') }}">
				<thead>
					<tr>
						<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
						<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
						<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
					</tr>
				</thead>
				<tr><td>escudellar</td><td>vir en el plato</td><td> Distribuir (sopa, escudella, caldo, etc.), posant-lo en les escudelles o els plats. Servir-se en el plat.</td></tr>
				<tr><td>servir</td><td>vir en la mesa</td><td>A taula, fer el plat (a algú), abocar-li la beguda, etc.</td></tr>
				<tr><td>punxar</td><td>picar o pinchar</td><td>Ferir amb un objecte acabat en punxa o punta molt aguda, que forada i penetra.</td></tr>
				<tr><td>parar</td><td>preparar mesa</td><td>Posar una cosa en disposició de funcionar, de servir a un fi. </td></tr>
				<tr><td>desparar</td><td>tar la mesa</td><td>Traure el parament (d'una cosa). Desparar taula.</td></tr>
				<tr><td>cuinar</td><td>cocinar</td><td>Coure i preparar (menjar).</td></tr>
				<tr><td>tallar</td><td>cortar</td><td>Dividir en parts (una cosa) amb un instrument tallant. </td></tr>
				<tr><td>vessar</td><td>derramar o verter</td><td>Eixir, una substància líquida o disgregada, del recipient que la conté.</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-11">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.taula_titulo4') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{ trans('vocabulario.taula_titulo4') }}">
				<thead>
					<tr>
						<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
						<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
						<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
					</tr>
				</thead>
				<tr><td>bossa del fem</td><td>bolsa de la basura</td><td>Saquet de plàstic, etc., que sol estar dins del poal del fem i és utilitzat com a envàs de quantitats xicotetes de diversos materials pulverulents o granulars, …</td></tr>
				<tr><td>poal del fem</td><td>cubo de la basura</td><td>Recipient on es posen les deixalles que ha d'arreplegar el femater.</td></tr>
				<tr><td>ratllador</td><td>rallador</td><td>Utensili de cuina, de formes i materials diversos, amb forats de vores alçades i tallants utilitzat per a ratllar aliments.</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection
