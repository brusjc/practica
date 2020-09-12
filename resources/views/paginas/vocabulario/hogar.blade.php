@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('vocabulario.hogar_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('vocabulario.hogar_h1') )}}
@endsection

@section('breadcrumb1')
	<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('vocabulario.hogar_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('vocabulario.hogar_keywords') )}}
@endsection

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
		<p>{{ html_entity_decode(trans('vocabulario.hogar_texto1') )}}</p>
	</div>
</div>

<div class="row">
	<div class="col-11">
		<div class="card">
			<div class="box-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
						</tr>
					</thead>
					<tr><td>la cambra</td><td>Dormitorio</td><td>Habitació destinada a dormir o per a l'ús d'una persona o de diverses.</td></tr>
					<tr><td>el celobert</td><td>Almizcate</td><td>Espai situat dins d'una edificació o entre edificacions que ventila les cambres immediates alhora que els dóna llum.</td></tr>
					<tr><td>la cuina</td><td>Cocina</td><td>Estança de la casa on es prepara i es cou el menjar.</td></tr>
					<tr><td>El despatx</td><td>Despacho</td><td>Cambra d'una casa particular dedicada a l'estudi, a tasques de caràcter intel·lectual, a rebre-hi visites de negocis, etc.</td></tr>
					<tr><td>l'eixida</td><td>Salida</td><td> Part o obertura per on algú ix d'un lloc. </td></tr>
					<tr><td>el garatge</td><td>Garaje</td><td>Local destinat a guardar vehicles automòbils.</td></tr>
					<tr><td>l'habitació</td><td>Habitación</td><td>Cada una de les peces en què es dividix una casa per a ser habitada.</td></tr>
					<tr><td>el menjador</td><td>Comedor</td><td>Sala o habitació d'una casa destinada a menjar-hi.</td></tr>
					<tr><td>el passadís</td><td>Pasillo</td><td>Corredor, peça de pas al llarg de diferents cambres, apartaments, etc.</td></tr>
					<tr><td>el pati</td><td>Patio</td><td>Espai tancat i descobert en l'interior o a un costat d'un edifici.</td></tr>
					<tr><td>el rebedor</td><td>Recibidor</td><td>Peça a l'entrada d'una casa, d'un pis, etc., on es fa entrar i s'atén la persona que no es vol fer esperar fora.</td></tr>
					<tr><td>el rebost</td><td>Despensa</td><td>Lloc d'una casa, d'una nau, etc., on es guarden els comestibles.</td></tr>
					<tr><td>la sala d'estar</td><td>Sala de estar</td><td>Lloc de la casa on es fà la vida</td></tr>
					<tr><td>el soterrani</td><td>Sótano</td><td>Espai, recinte, situat per davall de la rasant del carrer.</td></tr>
					<tr><td>la terrassa</td><td>Terraza</td><td> Espai de terreny pla i més o menys elevat acabat en un o més dels seus costats per un mur</td></tr>
					<tr><td>la teulada</td><td>Tejado</td><td>Coberta d'un edifici o d'una altra construcció feta de teules.</td></tr>
					<tr><td>l'envà</td><td>Tabique</td><td>Paret prima formada generalment per rajoles posades de cantell i que normalment no suporta cap pes.</td></tr>
					<tr><td>la paret</td><td>Pared</td><td>Obra de fàbrica alçada a plom fins a una certa alçària, que servix per a tancar un espai de terreny, per a formar les cares laterals d'una casa, d'una cambra, etc., per a sostindre la coberta d'una construcció, etc.</td></tr>
					<tr><td>la xemeneia</td><td>Chimenea</td><td> Conducte vertical que dóna eixida a l'exterior al fum</td></tr>
					<tr><td>el balcó</td><td>Balcón</td><td>Fet a la paret d'un edifici que serveix per a il·luminar i ventilar l'interior</td></tr>
					<tr><td>la façana</td><td>Fachada</td><td>Part exterior d'un edifici</td></tr>
					<tr><td>la finestra</td><td>Ventana</td><td>Obertura feta en una paret per donar pas a la llum i a l'aire</td></tr>
					<tr><td>el sostre</td><td>Techo</td><td>Part interior d'una casa, d'una habitació o d'una altra construcció, que limita per dalt.</td></tr>
					<tr><td>el sòl</td><td>Suelo</td><td>Superfície de la terra considerada com a suport sobre el qual es mouen els éssers vius o sobre el qual s'assenten les coses.</td></tr>
					<tr><td>l'escala</td><td>Escalera</td><td>Conjunt d'escalons que servix per a pujar i baixar i per a comunicar pisos i nivells</td></tr>
					<tr><td>el replà</td><td>Rellano</td><td>Cada una de les superfícies planes d'una escala construïdes davant de les portes dels pisos o al cap d'un ram, especialment als angles del buc.</td></tr>
					<tr><td>l'escaló</td><td>Escalón</td><td>Cada un dels plans en què es descompon un tram d'escala </td></tr>
					<tr><td>la barana</td><td>Barandilla</td><td>Construcció que voreja un balcó</td></tr>
					<tr><td>la biga</td><td>Viga</td><td>Peça que servix per a suportar les càrregues sobre una paret o un pilar</td></tr>
					<tr><td>l'extintor</td><td>Extintor</td><td>Aparell que servix per a apagar un començament d'incendi</td></tr>
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
				<h2 class="box-title">{{ trans('vocabulario.hogar_titulo1') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{ trans('vocabulario.hogar_titulo1') }}">
					<thead>
						<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
						</tr>
					</thead>
					<tr><td>l'assecador</td><td>Secador</td><td>Aparell, dispositiu o instal·lació per a assecar alguna cosa.</td></tr>
					<tr><td>el bany</td><td>Cuarto de baño</td><td>Habitació especialment disposada per a poder-se banyar.</td></tr>
					<tr><td>la bàscula</td><td>Báscula</td><td>Dispositiu electrònic que té dos estats d'equilibri i és capaç de bascular de l'un a l'altre alternativament.</td></tr>
					<tr><td>la banyera</td><td>Bañera</td><td>Pica o recipient per a prendre banys.</td></tr>
					<tr><td>la pinta</td><td>Peine</td><td>Pinta llarga proveïda de pues espesses i amples.</td></tr>
					<tr><td>el raspall</td><td>Cepillo</td><td>Instrument que servix per a netejar</td></tr>
					<tr><td>el bronzejador</td><td>Bronceador</td><td>Preparat cosmètic destinat a millorar el bronzejament de la pell per l'acció del sol</td></tr>
					<tr><td>la colònia</td><td>Colonia</td><td>Aigua de Colònia. Líquid olorós usat per a perfumar.</td></tr>
					<tr><td>l'esprai</td><td>Spray</td><td>Líquid que es projecta a pressió en forma de polsim per mitjà d'un polvoritzador</td></tr>
					<tr><td>l'estora</td><td>la alfombra</td><td>Teixit fet de llates trenades de joncs que servix per a cobrir el paviment de les habitacions</td></tr>
					<tr><td>el lavabo</td><td>Lavabo</td><td>Pica de porcellana o ceràmica envernissada, destinada a llavar-se.</td></tr>
					<tr><td>l'aixeta</td><td>Grifo</td><td> Vàlvula d'accionament manual per a regular l'eixida d'un fluid</td></tr>
					<tr><td>la mampara</td><td>Mampara</td><td>Porta que cobrix l'obertura d'un portal ample, composta d'una part que va fixa al bastiment i que servix de marc, i d'una altra porta més menuda, la qual s'utilitza per a entrar i eixir.</td></tr>
					<tr><td>la màquina d'afaitar</td><td>Máquina de afeitar</td><td>Instrument per afeitar </td></tr>
					<tr><td>l'espuma</td><td>Espuma </td><td>Agregat de bambolles que es forma en la superfície d'un líquid violentament agitat</td></tr>
					<tr><td>el paper higiènic</td><td>Papel higiénico</td><td>Paper fi, estret, disposat en forma de rotlles o de plec, utilitzat per a usos sanitaris.</td></tr>
					<tr><td>la pasta de dents</td><td>Pasta de dientes</td><td>Es diu de la substància utilitzada per a netejar les dents.</td></tr>
					<tr><td>el xampú</td><td>Champú</td><td>Preparat capil·lar, cosmètic o medicinal, destinat a desgreixar i llavar els cabells.</td></tr>
					<tr><td>el tovalloler</td><td>Toallero</td><td>Barra, argolla o altre dispositiu on es penja una tovalla.</td></tr>
					<tr><td>el vàter</td><td>Váter</td><td>Comuna proveïda d'un depòsit d'aigua amb un dispositiu que permet fer caure a voluntat l'aigua del depòsit sobre el lloc on s'ha fet la deposició, per a netejar-lo.</td></tr>
					<tr><td>el tamboret</td><td>Taburete</td><td>Seient per a una sola persona sense respatler i sense braços</td></tr>
					<tr><td>l'espill</td><td>Espejo</td><td>Superfície de vidre o altre material que, per reflexió dels rajos de llum dóna imatges clares</td></tr>
					<tr><td>la planxa</td><td>Plancha</td><td>Aparell que seveix per a allisar el pèl</td></tr>
					<tr><td>el rul·lo</td><td>Rulo</td><td>Xicotet cilindre aguda i perforació a què s'enrotlla un floc de cabell per a arrissar-lo</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-11">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.hogar_titulo2') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{ trans('vocabulario.hogar_titulo2') }}">
					<thead>
						<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
						</tr>
					</thead>
					<tr><td>l'armari</td><td>Armario</td><td>Moble amb portes i proveït d'estants, penjadors, calaixos, etc., que servix per a guardar objectes</td></tr>
					<tr><td>la cadira</td><td>Silla</td><td>Seient individual amb respatler</td></tr>
					<tr><td>la butaca</td><td>Butaca</td><td>Cadira de braços de dimensions superiors a les normal i amb el respatler inclinat cap arrere</td></tr>
					<tr><td>el sofà</td><td>Sofá</td><td>Seient per a dos o més persones, que té respatler i braços</td></tr>
					<tr><td>el cendrer</td><td>Cenicero</td><td>Recipient per a tirar la cendra que es fa fumant</td></tr>
					<tr><td>la calaixera</td><td>Cómoda</td><td>Moble proveït d'un cos de calaixos superposats, destinat tradicionalment a guardar roba</td></tr>
					<tr><td>el coixí</td><td>Cojín</td><td>Sac de tela cosit per tots els costats, ple d'espuma de niló que serveix per a posar el cap</td></tr>
					<tr><td>la cortina</td><td>Cortina</td><td>Peça de tela que es penja per a adornar, abrigar, etc., darrere de les portes o les finestres, per a separar dos parts d'una habitació, davant d'un escenari, per a cobrir una estanteria, amagar un llit, etc.</td></tr>
					<tr><td>l'escriptori</td><td>Escritorio</td><td>Taula amb calaixos que servix per a guardar els utensilis d'escriure</td></tr>
					<tr><td> el gerro</td><td>Jarrón</td><td>Vas de terrissa cuita, vidre, metall, etc., de forma semblant a la d'una gerra, que servix per a posar-hi aigua, flors, etc.</td></tr>
					<tr><td>la ximenera</td><td>Chimenea</td><td>Lloc d'una casa amb paviment de pedra on es fa foc</td></tr>
					<tr><td>el llençol</td><td>Sábanas</td><td>Peça de llenç, de mides grans i forma rectangular, que es posa al llit </td></tr>
					<tr><td>el cobertor</td><td>Colcha</td><td> Peça de drap, de tela, de pell, etc., que s'estén sobre alguna cosa per a cobrir-la</td></tr>
					<tr><td>el llit</td><td>Cama</td><td>Moble que servix per a gitar-s'hi i dormir-hi, compost generalment d'un suport pla de fusta o de metall, on es col·loca el somier i el conjunt format pel matalaf, els llençols, els coixins, etc.</td></tr>
					<tr><td>la llitera</td><td>Litera</td><td>Conjunt de dos llits, construïts expressament l'un damunt de l'altre</td></tr>
					<tr><td>el matalàs</td><td>Colchón</td><td>Sac rectangular de tela cosit per tots els costats, ple de llana o de qualsevol altre material tou o elàstic, que es posa sobre un llit, i que servix per a gitar-s'hi damunt.</td></tr>
					<tr><td>la pereta</td><td>Bombilla</td><td>Espècie d'ampolla de vidre que a l'interior de la qual hi ha un filament metàl·lic, que produïx llum</td></tr>
					<tr><td>la màquina d'escriure</td><td>Máquina de escribir</td><td>Aparell que permet imprimir en paper uns caràcters tipogràfics per mitjà d'uns mecanismes de palanca</td></tr>
					<tr><td>el somier</td><td>Somier</td><td>Suport elàstic del matalàs</td></tr>
					<tr><td>la perxa</td><td>Percha</td><td>Peça llarga de fusta que servix per a penjar-hi robes</td></tr>
					<tr><td>el penja-robes</td><td>Perchero</td><td>Penjador o conjunt de penjadors per a penjar-hi peces de roba.</td></tr>
					<tr><td>la prestatgeria</td><td>Estanteria</td><td>Moble amb peus o fixat a la paret, eventualment tancat amb portes vidrieres, proveït d'estants i fet de diversos materials i diferents dimensions.</td></tr>
					<tr><td>la taula</td><td>Mesa</td><td>Moble sostingut horitzontalment per potes, que servix per a menjar, escriure, treballar…</td></tr>
					<tr><td>la tauleta de nit</td><td>Mesita de noche</td><td>Taula posada al costat del llit on es guarda la roba interior</td></tr>
					<tr><td>el test</td><td>Tiesto</td><td>Recipient de terrissa, que ple de terra, servix per a criar una planta</td></tr>
					<tr><td>el ventilador</td><td>Ventilador</td><td>Instrument usat per a renovar o refrescar l'aire d'un lloc tancat</td></tr>
					<tr><td>la taula-braser</td><td>Mesa camilla</td><td>Taula tapada de tela davall de la qual es posa el braser</td></tr>
					<tr><td>el bressol</td><td>Cuna</td><td>Llit de xiquet al qual es pot imprimir un moviment de balanceig</td></tr>
					<tr><td>el calaix</td><td>Cajón</td><td>Receptacle corredís d'un moble</td></tr>
					<tr><td>l'engronsadora</td><td>Mecedora</td><td>Seient que s'usa per a engrunsar-s'hi</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-11">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.hogar_titulo3') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{ trans('vocabulario.hogar_titulo3') }}">
					<thead>
						<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
						</tr>
					</thead>
					<tr><td>el vídeo</td><td>Vídeo</td><td>Magnetoscopi d'ús domèstic que utilitza cintes magnètiques normalitzades</td></tr>
					<tr><td>l'ordnador</td><td>Ordenador</td><td>Calculador digital amb emmagatzemament de dades</td></tr>
					<tr><td>la nevera</td><td>Nevera</td><td> Refrigerador d'ús domèstic dedicat a mantindre frescs aliments o begudes </td></tr>
					<tr><td>la llavadora</td><td>Lavadora</td><td>Màquina destinada a llavar-hi la roba</td></tr>
					<tr><td>l'assecadora</td><td>Secadora</td><td>Màquina elèctrica que servix per a assecar la roba.</td></tr>
					<tr><td>el radiocasset</td><td>Radiocasete</td><td> Aparell constituït per un receptor de ràdio i un magnetòfon de casset</td></tr>
					<tr><td>el forn</td><td>Horno</td><td>Lloc tancat dins del qual qualsevol tipus d'energia, generalment química o elèctrica, es convertix en energia calorífica per a transformar, físicament o químicament, la matèria que s'hi introduïx. </td></tr>
					<tr><td>el congelador</td><td>Congelador</td><td>Aparell o part d'un aparell utilitzat per a congelar </td></tr>
					<tr><td>la  cafetera</td><td>Cafetera</td><td>Recipient per a servir el café</td></tr>
					<tr><td>el telèfon</td><td>Teléfono</td><td>Aparell per a comunicar-se oralment a distància</td></tr>
					<tr><td>el microones</td><td>Microondas</td><td>Forn que funciona amb ones electromagnètiques</td></tr>
					<tr><td>la torradora</td><td>Torradora</td><td>Instrument per a torrar alguna cosa</td></tr>
					<tr><td>el televisor</td><td>Televisor</td><td>Transmissió a distància d'imatges en moviment i de sons per mitjà d'ones electromagnètiques o bé de cables.</td></tr>
					<tr><td>la càmera</td><td>Cámara</td><td>Dispositiu o aparell destinat a impressionar o a reproduir imatges</td></tr>
					<tr><td>l'aire acondicionat</td><td>Aire acondicionado</td><td>Aire que, tractat en un aparell o una instal·lació presenta les condicions de temperatura predeterminades</td></tr>
					<tr><td>l'espremedora</td><td>Exprimidora</td><td>Instrument que servix per a esprémer alguna cosa i arreplegar-ne el suc</td></tr>
					<tr><td>L'endoll</td><td>Enchufe</td><td>Dispositiu que servix per a connectar un aparell a la xàrcia elèctrica i que està constituït generalment d'una part fixa i d'una altra mòbil que va unida al cable de l'aparell.</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
