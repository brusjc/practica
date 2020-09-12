@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('vocabulario.cuina_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('vocabulario.cuina_h1') )}}
@endsection

@section('breadcrumb1')
	<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('vocabulario.cuina_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('vocabulario.cuina_keywords') )}}
@endsection

@section('main_content')

	<div class="comment-text">
		<p>{{ html_entity_decode(trans('vocabulario.cuina_texto1') )}}</p>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo2') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo2') }}">
					<thead>
						<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
						</tr>
					</thead>
						<tr><td>caqui</td><td>caqui</td><td> Fruit comestible del caquier, d'aparença exterior paregut a la tomaca.</td></tr>
						<tr><td>coco</td><td>coco</td><td>Fruit comestible del cocoter.</td></tr>
						<tr><td>codony</td><td>membrillo</td><td>Fruit del codonyer.</td></tr>
						<tr><td>dàtil</td><td>dátil</td><td>Fruit de la palmera datilera</td></tr>
						<tr><td>gínjol</td><td>azufaifa</td><td>Fruit del ginjoler. El gínjol és de color rogenc i té la grandària d'una oliva.</td></tr>
						<tr><td>kiwi</td><td>kiwi</td><td>Fruit de l'actinídia, de forma oblonga i color verd, recoberta per una pell marró fina, rasposa i amb borrissol, que té un gust fresc i lleugerament àcid.</td></tr>
						<tr><td>mango</td><td>mango</td><td>Fruit del mango. Arbre perennifoli de la família de les anacardiàcies (Mangifera indica), de fulles lanceolades coriàcies, flors rosades en panícules terminals i fruits comestibles (mangos).</td></tr>
						<tr><td>meló d'aigua</td><td>sandía</td><td>Fruit de la planta Cucumis citrullus, varietat jace, gros, redó, de carn dolça i molt refrescant.</td></tr>
						<tr><td>meló d'olor</td><td>melón</td><td>Varietat del meló ovalat que es conserva molts mesos sense podrir-se.</td></tr>
						<tr><td>perelló</td><td>pero</td><td>Fruit del perelloner. D'aspecte globós.</td></tr>
						<tr><td>plàtan</td><td>plátano</td><td>Banana. Fruit comestible</td></tr>
						<tr><td>pomelo</td><td>pomelo</td><td>Fruit d'este arbre, paregut a la taronja, amb la corfa de color groc pàl·lid i la polpa àcida i un poc amargant.</td></tr>
						<tr><td>raïm</td><td>uva</td><td>Fruita comestible de la vinya (Vitis vinifera), constituïda per una panícula de fruits en baia (els grans de raïm), de diversos colors, formats per una pellorfa, la polpa i unes quantes llavors.</td></tr>
						<tr><td>bacora</td><td>breva</td><td>Figa primerenca que certes varietats de figuera fan pel juny o pel juliol.</td></tr>
						<tr><td>bresquilla</td><td>melocotón</td><td>Fruit de la bresquillera. D'aspecte globós, vellutat, groguenc o rogenc, comestible.</td></tr>
						<tr><td>bresquilla de rotllet</td><td>durazno</td><td></td></tr>
						<tr><td>carabassa</td><td>calabaza</td><td>Fruit en pepònide de la carabassera, del qual poden distingir-se les varietats.</td></tr>
						<tr><td>castanya</td><td>castaña</td><td>Llavor comestible del castanyer. Fruit del castanyer.</td></tr>
						<tr><td>cirera</td><td>cereza</td><td>Fruit del cirerer</td></tr>
						<tr><td>cirera cruixalenca</td><td>picota</td><td></td></tr>
						<tr><td>figa</td><td>higo</td><td>Siconi de la figuera, de forma de pera, i amb la pell verdosa, morada o negra, segons les varietats.</td></tr>
						<tr><td>figa de pala</td><td>higo chumbo</td><td>Fruit de la palera.</td></tr>
						<tr><td>llima</td><td>limón</td><td>Fruit de la llimera.</td></tr>
						<tr><td>maduixa</td><td>fresa</td><td>Infructescència comestible de la maduixera, constituïda pel receptacle floral, carnós i aromàtic, sobre el qual s'inserixen els fruits, menuts i aqueniformes.</td></tr>
						<tr><td>magrana</td><td>granada</td><td>Fruit del magraner.</td></tr>
						<tr><td>mandarina</td><td>mandarina</td><td>Fruit del mandariner, comestible, semblant a la taronja, però més menut, deprimit, de pela prima i de bon pelar i d'un gust més suau.</td></tr>
						<tr><td>móra</td><td>mora</td><td>Pluridrupa de l'esbarzer.Fosc, negre o roja.</td></tr>
						<tr><td>móra roja</td><td>frambuesa</td><td>Gerd.</td></tr>
						<tr><td>nespra</td><td>níspero</td><td>Fruit del nisprer. Fruits bruns comestibles.</td></tr>
						<tr><td>nou</td><td>nuez</td><td>Fruit de l'anouer. Fruit indehiscent unilocular i monosperm, de pericarpi llenyós.</td></tr>
						<tr><td>papaia</td><td>papaya</td><td>Fruits bacciformes del papaier.</td></tr>
						<tr><td>pera</td><td>pera</td><td>Fruit de la perera. Fruit comestible cultivat a totes les zones temperades.</td></tr>
						<tr><td>pinya</td><td>piña</td><td>Ananàs. Planta herbàcia biennal de la família de les bromeliàcies (Ananas comosus), originària de l'Amèrica tropical, de fulles llargues i agudes, disposades en roseta, i flors en inflorescències que donen lloc a una infructescència comestible anomenada pinya tropical o d'Amèrica.</td></tr>
						<tr><td>poma</td><td>manzana</td><td>Fruit comestible de la pomera.</td></tr>
						<tr><td>pruna</td><td>ciruelo</td><td>Fruit comestible de la prunera.</td></tr>
						<tr><td>taronja</td><td>naranja</td><td>Fruit comestible del taronger.</td></tr>
						<tr><td>xirimoia</td><td>chirimoya</td><td>Fruit comestible del xirimoier. </td></tr>
						<tr><td>albercoc</td><td>albaricoque</td><td> Fruit comestible de l'albercoquer.</td></tr>
						<tr><td>alvocat</td><td>aguacate</td><td>Fruit de l'alvocater.</td></tr>
						<tr><td>ametla</td><td>almendra</td><td>Llavor comestible de l'ametler.</td></tr>
						<tr><td>arboç</td><td>madroño</td><td>Fruit de l'alborcer.</td></tr>
						<tr><td>avellana</td><td>avellana</td><td>Fruit de l'avellaner.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<h3 class="box-title">{{ trans('vocabulario.cuina_titulo14') }}</h3>
	<div class="row mb-5">
		<div class="col-4">
		</div>	
		<div class="col-md-4">
			<a class="btn btn-block btn-primary btn-lg" href="/practicainicio/14">{{ trans('vocabulario.cuina_titulo14') }}</a>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo3') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo3') }}">
						<thead>
							<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
						<tr><td>lletuga</td><td>lechuga</td><td>Planta herbàcia de la família de les compostes (Lactuca sativa), de fulles basals grans i blanes.</td></tr>
						<tr><td>cogombre</td><td>pepino</td><td>Fruit d'una planta herbàcia de la família de les cucurbitàcies (Cucumis sativus), ajaguda, proveïda de circells, de flors grogues axil·lars. És fruits en pepònide.</td></tr>
						<tr><td>jolivert</td><td>perejil</td><td>Planta herbàcia biennal de la família de les umbel·líferes (Petroselinum crispum), de fulles tripinnades (emprades com a condiment), flors d'un verd groguenc i fruits en diaqueni.</td></tr>
						<tr><td>moniato</td><td>boniato</td><td>Tubèrcul del moniato.</td></tr>
						<tr><td>nap</td><td>nabo</td><td>Planta herbàcia anual o biennal de la família de les crucíferes (Brassica napus), d'arrel carnosa, flors grogues en inflorescències racemoses i fruits en síliqua, cultivada per les seues arrels, comestibles, i les llavors, oleíferes.</td></tr>
						<tr><td>rave</td><td>rabano</td><td>Arrel comestible de la ravenera.</td></tr>
						<tr><td>xampinyó</td><td>champiñón</td><td>Planta herbàcia vivaç de la família de les liliàcies (Allium sativum), d'olor forta, tija culminada per una umbel·la de flors blanques o roges, i bulb arredonit i comestible.</td></tr>
						<tr><td>all</td><td>ajo</td><td>Planta herbàcia vivaç de la família de les liliàcies (Allium sativum), d'olor forta, tija culminada per una umbel·la de flors blanques o roges, i bulb arredonit i comestible.</td></tr>
						<tr><td>alls tendres</td><td>ajos tiernos</td><td></td></tr>
						<tr><td>bolets</td><td>setas</td><td>Gènere de basidiomicets de la família de les boletàcies (Boletus sp), carnosos, amb diversos subgèneres i amb moltes espècies comestibles.</td></tr>
						<tr><td>espinacs</td><td>espinacas</td><td>Planta herbàcia anual de la família de les quenopodiàcies (Spinacia oleracea), de tija dreta i ramificada, amb fulles sagitades que es menja com a verdura.</td></tr>
						<tr><td>bleda</td><td>acelga</td><td>Planta herbàcia anual de la família de les quenopodiàcies (Beta vulgaris varietat cicla), de grans fulles glabres, lluentes i ondulades, fent roseta basal.</td></tr>
						<tr><td>carabasseta</td><td>calabacín</td><td>Varietat de carabassera de la família de les cucurbitàcies (Cucurbitat pepo varietat oblonga), que forma una mata erecta, amb fruits allargats (les carabassetes)</td></tr>
						<tr><td>carxofa</td><td>alcachofa</td><td>Capítol immatur de la carxofera, carnós, cobert de bràctees imbricades i carnoses en la base, comestibles.</td></tr>
						<tr><td>ceba</td><td>cebolla</td><td>Planta herbàcia bulbosa de la família de les liliàcies (Allium cepa), de fulles cilíndriques fistuloses i de tija florífera fistulosa, fusiforme, que du en l'àpex una umbel·la globulosa de flors blanques llargament pedicel·lades.</td></tr>
						<tr><td>col</td><td>col</td><td>Planta herbàcia de la família de les crucíferes (Brassica oleracea), de tija grossa (el caluix o tronxo), de fulles grans, a vegades apinyades (el cabdell o capça), i de flors grogues o blanques disposades en raïms llargs.</td></tr>
						<tr><td>col de Brussel·les</td><td>col de bruselas</td><td>Col caracteritzada pels xicotets brots en forma de diminutes cols que ixen de les axil·les de les fulles (Brassica oleracea gemmifera).</td></tr>
						<tr><td>creïlla</td><td>patata</td><td>Tubèrcul comestible de la creïllera, nutritiu i molt feculent, ric en midó i en vitamina C, molt utilitzat en alimentació, en l'obtenció de fècules i d'alcohols i com a farratge, segons la varietat.</td></tr>
						<tr><td>fava</td><td>haba</td><td>Llavor i fruit de la favera.</td></tr>
						<tr><td>floricol</td><td>floricol</td><td>Varietat botrytis, subvarietat cauliflora, de cultiu de la col (Brassica oleracea, família de les crucíferes).</td></tr>
						<tr><td>fulla de roure</td><td>hoja de roble</td><td></td></tr>
						<tr><td>nyora</td><td>ñora</td><td>Varietat de pimentonera molt semblant al vitet.</td></tr>
						<tr><td>pebrera</td><td>pimiento</td><td>Fruit de la pimentonera.</td></tr>
						<tr><td>penca</td><td>penca</td><td>Terme que s'aplica a les fulles, tiges, branques i pecíols grossos i carnosos de certes plantes.</td></tr>
						<tr><td>safanòria</td><td>zanahoria</td><td>Planta herbàcia biennal de la família de les umbel·líferes (Daucus carota), de fulles bipinnatisectes, flors blanques o roses, fruits en diaqueni i d'arrel grossa i ataronjada, mengívola i molt nutritiva.</td></tr>
						<tr><td>tomaca</td><td>tomate</td><td> Fruit en baia de la tomaquera.Sucosa, de figura globosa, ovoide, deprimida o piriforme, i comestibles apreciats,</td></tr>
						<tr><td>xirivia</td><td>chirivía</td><td>Planta herbàcia biennal, de la família de les umbel·líferes (Pastinaca sativa), pubescent, de fulles pinnaticompostes i flors grogues disposades en umbel·les, d'arrel comestible. La xirivia silvestre és de tija cilíndrica i de folíols obtusos i creix en herbassars nitròfils.</td></tr>
						<tr><td>api</td><td>àpio</td><td>Planta herbàcia biennal de la família de les umbel·líferes (Apium graveolens), molt olorosa, de tija fistulosa, flors blanquinoses i arrel grossa.</td></tr>
						<tr><td>arbergínia</td><td>berenjena</td><td>Fruit comestible de l'alberginera, morat i carnós.</td></tr>
						<tr><td>endívia</td><td>endívia</td><td>Varietat de xicòria, de la família de les compostes (Cichorium intybus, varietat folicaum), de fulles en disposició fusiforme, de color blanquinós, cultivada per al consum.</td></tr>
						<tr><td>escarola</td><td>escarola</td><td>Planta herbàcia anual o biennal de la família de les compostes (Cichorium endivia), de fulles basals arrissades i retallades que es mengen en ensalada.</td></tr>
						<tr><td>esclata-sangs</td><td>níscalo</td><td>Rovelló. Bolet de la família de les russulàcies (Lactarius sanguifluus), de capell convex i després deprimit, lleugerament viscós, de color roig vinós amb taques verdoses, molt apreciat i consumit.</td></tr>
						<tr><td>espàrrec</td><td>espárrago</td><td>Turió comestible de l'esparreguera.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo4') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo4') }}">
						<thead>
							<tr>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
								<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
							<tr><td>blat</td><td>trigo</td><td>Gra del blat. Gènere de plantes herbàcies anuals de la família de les gramínies (Triticum sp), de fulles linears, de tija erecta, fistulosa o plena, i de flors agrupades en espigues terminals, representades especialment pel blat comú (o candial, o blancal, o xeixa) (Triticum aestivum o Triticum vulgare), cultivades pel seu gra, que constituïx la base de la fabricació del pa.</td></tr>
							<tr><td>cigró</td><td>garbanzo</td><td>Llavor comestible de la cigronera.</td></tr>
							<tr><td>fesol</td><td>alubia</td><td>Fruit de la fesolera. Aptes per a l'alimentació humana.</td></tr>
							<tr><td>pèsol</td><td>guisante</td><td>Llavor de la pesolera.</td></tr>
							<tr><td>dacsa</td><td>maíz</td><td>Gra de la dacsa. Gran planta herbàcia anual de la família de les gramínies (Zea mays), de tija o canya dreta i nuosa acabada en un plomall i de fulles alternes lanceolades d'un verd intens.</td></tr>
							<tr><td>fava</td><td>haba</td><td>Llavor i fruit de la favera.</td></tr>
							<tr><td>llentilla</td><td>lenteja</td><td>Llavor de la llentilla, saborosa, alimentosa i rica en ferro.</td></tr>
							<tr><td>arròs</td><td>arroz</td><td>Gra d'arròs. Planta herbàcia anual de la família de les gramínies (Oryza sativa), que es cultiva extensament en climes càlids i terrenys molt humits, el fruit de la qual és un gra ric en midó i altament nutritiu.</td></tr>
							<tr><td>bajoques</td><td>judías</td><td>Fesol tendre que es consumix amb tavella.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo5') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo5') }}">
						<thead>
							<tr>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
								<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
							<tr><td>bacó</td><td>bacon</td><td>Penca de porc salada, cansalada.</td></tr>
							<tr><td>conill</td><td>conejo</td><td>Mamífer lagomorf de la família dels lepòrids (Oryctolagus coniculus), més menut que la llebre i d'orelles i potes més curtes, el qual en estat silvestre és anomenat conill de bosc, boscà, fer o de camp, i d'este deriven les races domèstiques (conill de casa, casolà o de corral).</td></tr>
							<tr><td>corder</td><td>cordero</td><td> Fill de l'ovella fins a l'edat d'un any.</td></tr>
							<tr><td>llom</td><td>lomo</td><td>Llomello. Peça de carn, magra i gustosa, molt apreciada de l'esquena del porc, sobretot de les parts davantera i mitjana.</td></tr>
							<tr><td>pernil</td><td>jamón</td><td>Cuixa o espatla de porc o de senglar salada, i posteriorment dessecada perquè es conserve.</td></tr>
							<tr><td>pernil dolç</td><td>jamón york</td><td>Pernil de porc, desossat, assaonat, nitrificat i cuit, emmotlat amb cobertes o en llanda.</td></tr>
							<tr><td>pollastre</td><td>pollo</td><td>Gall domèstic, especialment quan és jove. Pollastre rostit (o a l'ast).</td></tr>
							<tr><td>porc</td><td>cerdo</td><td>Varietat domèstica del porc senglar (Sus scrofa), de cos rabassut i potes curtes, amb quatre dits, cap voluminós i morro llarg, pell grossa, apreciat des de l'antiguitat per la seua carn i el seu cuiro.</td></tr>
							<tr><td>titot</td><td>pavo</td><td>Au de l'orde dels fasianiformes, de la família dels meleagrídids (Meleagris gallopavo), amb el plomatge bru bronzejat amb taques blanques, i el cap i el coll coberts de carúncules roges.</td></tr>
							<tr><td>xoriço</td><td>chorizo</td><td>Llonganissa prima, feta especialment de llom de porc. De color roig característic, fet amb carn picada, generalment de porc, adobada amb sal i pebre roig dolç i picant en diverses proporcions.</td></tr>
							<tr><td>botifarra</td><td>morcilla</td><td>Embotit elaborat farcint un budell o un fragment de budell de porc o de boví amb una mescla de carn de porc convenientment picolada, espècies i sal. Botifarra negra. Botifarra blanca. Botifarra de sang.</td></tr>
							<tr><td>cansalada</td><td>tocino</td><td>Gras del porc, situat entre la pell i la carn. La cansalada del pernil. Cansalada premsada.</td></tr>
							<tr><td>guatla</td><td>codorniz</td><td>Au de l'orde dels gal·liformes i de la família dels fasiànids (Coturnix coturnix), de formes arredonides i de color terrós llistat d'ocre i de negre.</td></tr>
							<tr><td>llonganissa</td><td>longaniza</td><td>Embotit elaborat farcint un budell llarg i prim amb carn magra de porc picada i adobada amb pebre i altres espècies.</td></tr>
							<tr><td>mortadel·la</td><td>mortadela</td><td>Embotit gros fet amb carn de porc i de bou, picades i mesclades amb xicotets daus de sagí.</td></tr>
							<tr><td>perdiu</td><td>perdiz</td><td>Au de l'orde dels gal·liformes i de la família dels fasiànids (Alectoris rufa), de plomatge conspicu, de colors gris rogenc, blanc, negre i roig, gregària, sedentària i apreciadíssima com a peça culinària de caça.</td></tr>
							<tr><td>salsitxa</td><td>salchicha</td><td>Embotit tou, cru, roig o blanc (segons que continga pebre roig o blanc), fet amb carn de porc, a vegades mesclada amb carn de boví, picada i mesclada amb greix de porc, i d'un diàmetre entre 2 i 3 centímetres.</td></tr>
							<tr><td>sobrassada</td><td>sobrasada</td><td>Embotit cru, fet amb carn de porc, adobat amb sal, pebre roig i altres espècies, típic de les illes Balears i Pitiüses.</td></tr>
							<tr><td>vedella</td><td>ternera</td><td> Bou, vaca, que no té més d'un any d'edat.</td></tr>
							<tr><td>xulla</td><td>chuleta</td><td>Costella de cabrit, de bou, de corder o de porc, cuinada. Em vaig menjar mitja dotzena de xulles de corder amb allioli.</td></tr>
							<tr><td>ànec</td><td>pato</td><td> Terme que s'aplica a diverses aus de la família dels anàtids, excel·lents nadadores, de potes curtes i de bec aplanat.</td></tr>
							<tr><td>embotit</td><td>embutido</td><td>Budell, una altra part del cos (bufeta, etc.) o embolcall sintètic farcit de carn de porc picada, espècies i, a vegades, altres ingredients.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo6') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo6') }}">
						<thead>
							<tr>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
								<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
						<tr><td>bacallà</td><td>bacalao</td><td>Abadejo. Peix de la classe dels osteïctis, de l'orde dels gadiformes (Gadus callarias), de color variable i cos cilíndric, amb tres aletes dorsals i dos d'anals, que arriba a tindre més d'un metre de llarg i és molt apreciat com a aliment.</td></tr>
						<tr><td>calamar</td><td>calamar</td><td>Gènere de mol·luscs cefalòpodes dibranquis de l'orde dels decàpodes (Loligo sp), de cos afusat i de mida mitjana o gran, de carn saborosa i apreciada com a aliment.</td></tr>
						<tr><td>calamarsó</td><td>chipirón</td><td>Cefalòpode dibranqui de l'orde dels decàpodes (Alloteuthis subulata), semblant al calamar, però més menut, de color roig o rosat, transparent i fosforescent.</td></tr>
						<tr><td>cranc</td><td>cangrejo</td><td>Terme genèric que s'aplica als crustacis decàpodes pertanyents a la secció dels braquiürs i a algunes espècies pertanyents a la dels anomurs, amb el cefalotòrax molt més ample i aparent que l'abdomen i amb el primer parell de potes de grans dimensions i en forma de pinça.</td></tr>
						<tr><td>lluç</td><td>merluza</td><td>Peix de l'orde dels gadiformes i de la família dels gàdids (Merluccius merluccius), de forma esvelta, boca fesa i de color gris terrós al dors i platejat als flancs i al ventre.</td></tr>
						<tr><td>llucet</td><td>merluza</td><td>Cria de lluç que encara no s'ha desenrotllat totalment.</td></tr>
						<tr><td>marisc</td><td>marisco</td><td>Qualsevol animal marí invertebrat i proveït d'exosquelet, especialment els crustacis i els mol·luscs comestibles.</td></tr>
						<tr><td>mero</td><td>mero</td><td>Peix de la família dels serrànids (Epinephelus guaza), de cos voluminós i de colors foscs amb taques clares.</td></tr>
						<tr><td>moll</td><td>salmonete</td><td>Terme que s'aplica a les dos espècies d'este gènere de peixos de l'orde dels perciformes, de la família dels múl·lids (Mullus sp), que té dos aletes dorsals i la caudal molt escotada, de coloració variable amb una franja roja i de carn molt apreciada: el moll de fang (Mullus barbatus) i el moll de roca (Mullus surmuletus).</td></tr>
						<tr><td>polp</td><td>pulpo</td><td>Terme genèric que s'aplica als mol·luscs artròpodes de la família dels octopòdids, bentònics, lleugers, amb huit braços caçadors i ambulatoris, que canvien de color i expulsen núvols de tinta com a defensa, comestibles i molt apreciats per la seua carn; entre els quals destaca el polp comú o polp roquer (Octopus vulgaris), depredador ferotge que habita en fons de roca o d'arena.</td></tr>
						<tr><td>rap</td><td>rape</td><td>Gènere de peixos de l'orde dels lofiformes, família dels lòfids (Lophius sp), de cap voluminós i aplanat, ulls grans i pell nua, que s'enterra en els fons d'arena i fang, comestible molt apreciat i amb un agulló darrere de cada aleta pectoral.</td></tr>
						<tr><td>anxova</td><td>anchoa</td><td>Aladroc adobat amb sal.</td></tr>
						<tr><td>cavalla</td><td>caballa</td><td>Gènere de peixos teleostis de l'ordre dels perciformes, de la família dels escòmbrids (Scomber sp), amb l'aleta caudal molt escotada i dos aletes corporals dorsals, molt apreciats per la carn. </td></tr>
						<tr><td>cigala</td><td>cigala</td><td>Crustaci macrur de l'orde dels decàpodes (Scyllarides latus), comestible, de closca rugosa plena de xicotets tubèrculs i de color marró.</td></tr>
						<tr><td>cloïssa</td><td>almeja</td><td>Mol·lusc lamel·libranqui marí de la subclasse dels eulamel·libranquis (Tapes decussatus), de valves ovals amb unes fines estries radials que s'entrecreuen amb unes altres de concèntriques, molt apreciat com a aliment.</td></tr>
						<tr><td>clòtxina</td><td>mejillón</td><td>Mol·lusc lamel·libranqui de l'orde dels filibranquis de la família dels mitílids (Mytillus sp), de color negre, que forma colònies sobre les roques, s'alimenta de plàncton i és molt apreciat com a comestible.</td></tr>
						<tr><td>galera</td><td>galera</td><td></td></tr>
						<tr><td>gamba</td><td>gamba</td><td>Terme que s'aplica a diversos crustacis de la família dels peneids, de l'orde dels decàpodes macrurs, de colors rosats o rojos i carn molt saborosa.</td></tr>
						<tr><td>gambeta</td><td>quisquilla</td><td></td></tr>
						<tr><td>nècora</td><td>nécora</td><td>Carranc de l'orde dels decàpodes branquiürs, de la família dels portúnids (Macropipus arcuatus), de front llis, sense dents ni lòbuls i comestible.</td></tr>
						<tr><td>sardina</td><td>sardina</td><td>Peix de l'orde dels clupeïformes, de la família dels clupeids (Sardina pilchardus), de color blavós, amb els flancs i el ventre de color platejat brillant, que habita les zones costaneres i que es captura i es consumix en grans quantitats pel seu gran valor nutritiu.</td></tr>
						<tr><td>sèpia</td><td>sepia</td><td>Mol·lusc cefalòpode de l'orde dels decàpodes, de la família dels sèpids (Sepia officinalis), de color gris verdós i el dors negre, cos oval i dos expansions contràctils, i una conquilla interna calcària i ampla. Posseïx ventoses, una glàndula de tinta i es mimetitza molt amb el fons. És molt apreciada com a aliment.</td></tr>
						<tr><td>tellina</td><td>chirla</td><td>Mol·lusc de la subclasse dels eulamel·libranquis, de la família dels tel·línids (Tellina nitida), de valves oblongoallargades, blanques i rosades, apreciat per la seua carn.</td></tr>
						<tr><td>tonyina</td><td>atún</td><td>Teleosti de l'orde dels perciformes, de la família dels túnids (Thunnus thynnus), amb el dors blau fosc i el ventre platejat, de cos poderós, depredador actiu i amb la carn agradable i nutritiva que es consumix fresca o en conserva.</td></tr>
						<tr><td>aladroc</td><td>boquerón</td><td>Peix de l'orde dels clupeïformes, de la família dels engràulids (Engraulis encrasicholus), que té el dors blavós, els flancs platejats i el morro prominent, que es pesca en grans quantitats per a consumir-lo fresc o sovint salat.</td></tr>
						<tr><td>emperador</td><td>emperador</td><td>Peix espasa. Peix serra.</td></tr>
						<tr><td>escopinya</td><td>berberecho</td><td>Gènere de mol·luscs lamel·libranquis de l'orde dels eulamel·libranquis, de la família dels cardítids (Cardium sp), caracteritzat per dos valves iguals que formen una closca en forma de cor; entre els quals destaquen l'escopinya de gallet (Cardium edule), l'escopinya de costelles amples (Cardium panticoslatum), l'escopinya gran (Cardium echiratum), l'escopinya punxenca (Cardium aculeatum) i l'escopinya verrucosa (Cardium tuberculatum), totes elles comestibles.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo7') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo7') }}">
						<thead>
							<tr>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
								<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
						<tr><td>bescuit</td><td>bizcocho</td><td>Pa de motle fet amb farina, matèries grasses com els greixos vegetals, sucre, rent i sal i posteriorment assecat i torrat. També, pastís fet amb flor de farina, ous i sucre.</td></tr>
						<tr><td>bombó</td><td>bombón</td><td>Dolç xicotet, fi, confeccionat a base de xocolate, fondant, caramel.</td></tr>
						<tr><td>caramel</td><td>caramelo</td><td>Líquid pastós de color marró fosc i olor de sucre cremat obtingut per calfament de sacarosa o glucosa amb addició de xicotetes quantitats d'un àlcali. Coure, posar el sucre a punt de caramel.</td></tr>
						<tr><td>codonyat</td><td>membrillo</td><td>Confitura de codony.</td></tr>
						<tr><td>flam</td><td>flan</td><td>Dolç gelatinós fet amb llet, sucre, ous i a vegades també farina que es posa en un bany maria dins d'un motle en forma de tronc de con, perquè es prenga.</td></tr>
						<tr><td>gelat</td><td>helado</td><td>Producte obtingut en batre i congelar una mescla pasteuritzada i homogeneïtzada de llet o derivats lactis i altres aliments amb additius.</td></tr>
						<tr><td>pastís</td><td>pastel</td><td>Qualsevol producte fet a base de massa de farina, mantega i sucre, aromatitzat i cuit al forn. Menjar de confiteria, com ara els bescuits, les coques, les ensaïmades, els melindros, els púdings, les rosquilles, etc.</td></tr>
						<tr><td>torró</td><td>turrón</td><td>Massa feta d'ametles pelades i mel, eventualment amb clara d'ou, albúmina o gelatina. Les ametles poden ser substituïdes per unes altres fruites seques (pinyons, avellanes, cacauets, anous, etc.), rovell d'ou, coco i fruites confitades. Torró d'Alacant. Torró de Xixona. Torró de gema, de massapà. Torró d'Agramunt.</td></tr>
						<tr><td>xocolate</td><td>chocolate</td><td>Producte alimentari obtingut mesclant cacau refinat en pols i sucre finament polvoritzat, als quals se sol afegir canella o vainilla.</td></tr>
						<tr><td>xurro</td><td>churro</td><td>Peça de pasta de bunyol de forma allargada i estriada.</td></tr>
						<tr><td>rotllets</td><td>rollos</td><td>Dolç de forma redona i amb un forat enmig.</td></tr>
						<tr><td>crema</td><td>crema</td><td>Plat dolç de consistència semisòlida elaborat amb ous, llet, sucre, fècula o farina i canella, bullit fins a un cert punt.</td></tr>
						<tr><td>galeta</td><td>galleta</td><td>Cada un dels xicotets trossos de formes diverses en què es dividix la pasta elaborada amb farina de blat tendre, greix i sucre, productes aromàtics i altres ingredients.</td></tr>
						<tr><td>llepolia</td><td>golosinas</td><td>Menjar fi, delicat, fet més per plaure el paladar que per nodrir, especialment dolços, confitures, etc.</td></tr>
						<tr><td>magdalena</td><td>madalena</td><td>Pastís menut, generalment ovalat, de massa bastant esponjosa, fet amb farina, rent, llet, sucre, ou i oli cuit en motle.</td></tr>
						<tr><td>mel</td><td>miel</td><td>Producte natural molt dolç, fluid, pastós o cristal·litzat, elaborat per les abelles a partir del nèctar de les flors i d'altres exsudacions ensucrades de les plantes.</td></tr>
						<tr><td>melmelada</td><td>mermelada</td><td>Menjar fet amb fruita reduïda a polpa i sucre obtingut per mescla íntima i cocció.</td></tr>
						<tr><td>ensaïmada</td><td>ensaimada</td><td>Dolç en forma d'espiral, fet amb farina, rent, ou i sucre, cuit amb sagí o amb oli, i recobert de sucre en pols.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo8') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo8') }}">
						<thead>
							<tr>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
								<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
						<tr><td>caldo</td><td>caldo</td><td>Líquid resultant de l'ebullició prolongada en aigua de diferents productes alimentaris.</td></tr>
						<tr><td>formatge</td><td>queso</td><td>Producte elaborat a partir de la quallada de la llet pura o bé de la desnatada o de l'enriquida amb nata (greix de la llet).</td></tr>
						<tr><td>pa</td><td>pan</td><td>Producte resultant de la cocció d'una massa constituïda per una mescla de farina de blat, aigua, sal i rent, després de sotmetre-la a un procés de fermentació per a aconseguir una certa esponjositat. </td></tr>
						<tr><td>pinyol</td><td>hueso de una fruta o aceituna</td><td>Part interna llenyosa d'un fruit carnós. Un pinyol de bresquilla. Pinyol d'oliva.</td></tr>
						<tr><td>rovell</td><td>yema</td><td>Massa esferoïdal groga que hi ha en l'interior dels ous de les aus i dels rèptils; gema.</td></tr>
						<tr><td>sandvitx</td><td>sandwich</td><td>Conjunt de dos llesques o més de pa de motle entre les quals es col·loca pernil, embotit, formatge o altre aliment, i que es consumix cru o torrat a la planxa.</td></tr>
						<tr><td>fideus</td><td>fideos</td><td>Pasta alimentària de farina en forma de fils prims.</td></tr>
						<tr><td>clara</td><td>clara</td><td> Matèria albuminosa transparent que, en solució col·loïdal, volta el rovell de l'ou.</td></tr>
						<tr><td>llet</td><td>leche</td><td> Líquid secretat per les glàndules mamàries de les femelles mamíferes, després del part, per a alimentar el nounat.</td></tr>
						<tr><td>polpa</td><td>pulpa</td><td>Part carnosa dels fruits o altres òrgans vegetals.</td></tr>
						<tr><td>truita</td><td>tortilla</td><td>Ou o ous batuts i fregits en la paella, sols o amb altres menjars.</td></tr>
						<tr><td>xufa</td><td>chufa</td><td>Tubèrcul comestible de la xufera, ingredient bàsic en l'elaboració de l'orxata.</td></tr>
						<tr><td>amanida</td><td>ensalada</td><td>Plat compost principalment de verdura adobada amb sal, oli, vinagre, etc.</td></tr>
						<tr><td>entrepà</td><td>bocadillo</td><td>Tros de pa partit longitudinalment en dos mitats i farcit amb algun aliment.</td></tr>
						<tr><td>postres</td><td>postres</td><td>Fruita, dolços o altres menjars amb què s'acaba el dinar i el sopar.</td></tr>
						<tr><td>oliva</td><td>aceituna</td><td>Fruit en drupa de l'olivera.</td></tr>
						<tr><td>ou</td><td>huevo</td><td>Cèl·lula que resulta de la fecundació d'un gàmeta femení per un de masculí, totipotent per a desenrotllar un nou organisme que reproduïx els caràcters genètics dels seus progenitors.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo9') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo9') }}">
						<thead>
							<tr>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
								<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
						<tr><td>beure</td><td>beber</td><td>Engolir (un líquid).</td></tr>
						<tr><td>coure</td><td>cocer</td><td>Preparar (un aliment) usant un procés tèrmic.</td></tr>
						<tr><td>cuinar</td><td>cocinar</td><td>Coure i preparar (menjar).</td></tr>
						<tr><td>fregir</td><td>freir</td><td>Coure en oli, en sagí o en mantega bullent.</td></tr>
						<tr><td>guisar</td><td>guisar</td><td>Cuinar. Preparar un menjar coent-lo amb suc i diversos condiments.</td></tr>
						<tr><td>menjar</td><td>comer</td><td>Ingerir aliments sòlids o semisòlids. Allò que una persona menja per nodrir-se.</td></tr>
						<tr><td>prendre</td><td>tomar</td><td>Absorbir un aliment, un medicament. </td></tr>
						<tr><td>rostir</td><td>asar</td><td>Coure (un aliment, sobretot carn,) a foc viu en un ast o en aire calent en un forn, a vegades untant-lo amb greix o oli. </td></tr>
						<tr><td>torrar</td><td>tostar</td><td>Calfar al foc (una substància) fins a canviar-ne el color o la textura, fins a fer-ne separar els elements volàtils.  Cremar superficialment (una substància orgànica). Torrar castanyes.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo10') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo10') }}">
						<thead>
							<tr>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
								<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
						<tr><td>pebre</td><td>pimienta</td><td>Fruit del pebrer</td></tr>
						<tr><td>safrà</td><td>azafrán</td><td>Planta herbàcia vivaç de la família de les iridàcies (Crocus sativus), de flors grans amb sis tèpals i tres estigmes, els quals dessecats constituïxen una espècia molt estimada com a condiment.</td></tr>
						<tr><td>sagí</td><td>saín</td><td>Greix d'un animal.</td></tr>
						<tr><td>sucre</td><td>azúcar</td><td>Substància dolça, cristal·lina, soluble en aigua, blanca o incolora quan és pura, que és present en el suc de moltes plantes.</td></tr>
						<tr><td>canyella</td><td>canela</td><td>Corfa aromàtica del caneller, usada principalment en confiteria.</td></tr>
						<tr><td>farina</td><td>harina</td><td>Producte en forma de pols resultant de la mòlta del gra dels cereals, especialment del blat.</td></tr>
						<tr><td>mantega</td><td>manteca</td><td>Producte gras, sòlid i homogeni, obtingut mecànicament en batre i amassar la llet o la seua crema.</td></tr>
						<tr><td>margarina</td><td>margarina</td><td>Emulsió plàstica de greixos i olis que no procedixen de la llet o que només en procedixen en part, usada amb les mateixes finalitats que la mantega.</td></tr>
						<tr><td>mostassa</td><td>mostaza</td><td>Planta herbàcia anual de la família de les crucíferes (Sinapis alba), de fulles lirades o pinnatipartides, flors grogues arraïmades i fruits en síliqua curta; les llavors, grogues, tenen propietats revulsives.</td></tr>
						<tr><td>nou moscada</td><td>nuez moscada</td><td>Llavor de l'arbre més representatiu de la família les miristicàcies, d'origen hindú, usada sobretot com a condiment. </td></tr>
						<tr><td>sal</td><td>sal</td><td>Clorur de sodi, substància blanca, cristal·lina, que abunda en la naturalesa formant masses sòlides o en solució, principalment en l'aigua de mar, i s'utilitza com a condiment, per a conservar els aliments, en l'obtenció del sodi i composts de sodi, etc. Sal fina. Sal de cuina.</td></tr>
						<tr><td>espècia</td><td>especie</td><td>Substància aromàtica i, a vegades, de tast picant, utilitzada per a condimentar el menjar, com ara pebre, canella, claus i safrà.</td></tr>
						<tr><td>l'oli</td><td>aceite</td><td>Greix de procedència animal o vegetal, que es fa líquid a la temperatura de 20°C., etc. </td></tr>
						<tr><td>orenga</td><td>oregano</td><td>Planta herbàcia perenne de la família de les labiades (Origanum vulgare), de fulles ovades i flors de color violaci rosat en ramells i amb qualitats tòniques i digestives i utilitzada també com a condiment.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo11') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo11') }}">
						<thead>
							<tr>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
								<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
						<tr><td>cava</td><td>cava</td><td>Xampany.</td></tr>
						<tr><td>còctel</td><td>cóctel</td><td> Beguda obtinguda per la mescla de diferents begudes alcohòliques, preparada agitant tots els ingredients amb trossets de gel dins d'un receptacle adequat.</td></tr>
						<tr><td>conyac</td><td>coñac</td><td>Brandi elaborat amb vi procedent de la regió francesa de la Charente, centrada per la ciutat de Cognac.</td></tr>
						<tr><td>gel</td><td>hielo</td><td>Aigua en estat sòlid.</td></tr>
						<tr><td>rom</td><td>ron</td><td>Aiguardent d'origen antillà que s'obté fermentant i destil·lant els sucs i les melasses de canya de sucre (més o menys diluïts).</td></tr>
						<tr><td>suc</td><td>zumo</td><td>Líquid que es desprén d'un cos, comparable als sucs dels animals i de les plantes i de les fruites. </td></tr>
						<tr><td>vi</td><td>vino</td><td>Beguda alcohòlica obtinguda per fermentació del most de raïm. </td></tr>
						<tr><td>xarop</td><td>jarabe</td><td>Líquid espés i viscós, constituït per una solució de sucre en aigua, a la qual se sol afegir suc de fruites, decoccions vegetals, etc.</td></tr>
						<tr><td>cervesa</td><td>cerveza</td><td>Beguda fermentada preparada amb ordi germinat i aromatitzada amb llúpol.</td></tr>
						<tr><td>gasosa</td><td>gaseosa</td><td>Beguda refrescant preparada amb aigua, anhídrid carbònic, amb l'addició eventual d'àcid tartàric o làctic, aromes de fruita cítrica i edulcorants</td></tr>
						<tr><td>llimonada</td><td>limonada</td><td>Beguda refrescant, de gust àcid, feta amb suc de llima i, a vegades, amb sucre i aigua.</td></tr>
						<tr><td>aigua</td><td>agua</td><td>Líquid incolor, inodor i insípid, compost d'hidrogen i d'oxigen, i de fórmula H2O. </td></tr>
						<tr><td>anís</td><td>anís</td><td>Aiguardent aromatitzat amb essència d'anís. Planta herbàcia anual de la família de les umbel·líferes (Pimpinella anisum), de flors blanques petites i llavors molt aromàtiques.</td></tr>
						<tr><td>orxata</td><td>horchata</td><td>Beguda refrescant que és una emulsió feta amb xufes o ametles, etc., pelades i xafades, sucre i aigua.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo12') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo12') }}">
						<thead>
							<tr>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
								<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
						<tr><td>poliol</td><td>poleo</td><td>Planta herbàcia perenne de la família de les labiades (Mentha pulegium), molt aromàtica, de fulles ovals i de flors rosades o liles, que creix en vores de torrents i té nombroses virtuts remeieres.</td></tr>
						<tr><td>te</td><td>té</td><td>Arbust de la família de les teàcies (Thea sinensis), de fulles coriàcies i dentades, flors blanques o rosades i fruits en càpsula, utilitzat per a preparar el producte del mateix nom.</td></tr>
						<tr><td>timó</td><td>tomillo</td><td>Mata de la família de les labiades (Thymus vulgaris), molt aromàtica, de fulles linears xicotetes i flors blanquinoses en inflorescències capituliformes.</td></tr>
						<tr><td>camomil·la</td><td>manzanilla</td><td>Planta herbàcia anual de la família de les compostes (Matricaria chamomilla), de flors oloroses agrupades en capítols grocs de lígules blanques.</td></tr>
						<tr><td>menta</td><td>menta</td><td>Gènere de plantes herbàcies perennes de la família de les labiades (Mentha sp), rizomatoses i molt aromàtiques, de fulles ovalades i flors reunides en verticil·lastres; moltes espècies són remeieres i són la base dels licors de menta</td></tr>
						<tr><td>sàlvia</td><td>salvia</td><td>Mata de la família de les labiades (Salvia officinalis), de fulles oblongues o lanceolades i flors d'un color blau violaci, molt utilitzada com a planta medicinal.</td></tr>
						<tr><td>til·la</td><td>tila</td><td>Flor del til·ler. Preparat de fulles de til·ler, molt utilitzat en infusió.</td></tr>
						<tr><td>regalíssia</td><td>regaliz</td><td>Planta herbàcia perenne de la família de les fabàcies (Glycyrrhiza glabra), de soca llenyosa i dolcenca, fulles imparipinnades, flors blaves o violàcies, fruits en llegum i d'arrel masticatòria i amb propietats pectorals.</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-11">
			<div class="card">
				<div class="card-header  with-border">
					<h2 class="box-title">{{ trans('vocabulario.cuina_titulo13') }}</h2>
				</div>
				<div class="box-body">
					<table class="table table-bordered" summary="{{ trans('vocabulario.cuina_titulo13') }}">
						<thead>
							<tr>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
								<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
								<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
							</tr>
						</thead>
						<tr><td>tramús</td><td>altramuz</td><td>Llavor del tramús, lenticular, groguenca i comestible.</td></tr>
						<tr><td>paté</td><td>paté</td><td>Pasta, cuita, feta amb fetge d'aviram -d'oca i d'ànec sobretot-, o bé de porc o de conill, o de peix, carn, greix, ous, espècies i herbes aromàtiques.</td></tr>
						<tr><td>bonítol</td><td>bonito</td><td>Peix de l'orde dels perciformes, de la família dels escòmbrids (Sarda sarda), de cos fusiforme, amb el dors de color blau fosc i el ventre blanc, que forma grans bancs que s'acosten a la costa per fresar.</td></tr>
						<tr><td>braó de porc</td><td>lacón</td><td>Part de la cama que va des del turmell fins a un quart de la cuixa del porc.</td></tr>
						<tr><td>salmó</td><td>salmón</td><td>Peix de la família dels salmònids l'espècie més coneguda de la qual, el salmó europeu (Salmo salar), és molt apreciada com a comestible, amb una carn rogenca característica.</td></tr>
						<tr><td>hamburguesa</td><td>hamburguesa</td><td>Massa de carn de bou o de vedella picolada, de forma plana i ovalada, sovint assaonada amb mantega, all, jolivert, ceba i ous.</td></tr>
						<tr><td>fetge</td><td>hígado</td><td>Òrgan glandular que realitza importants funcions en l'organisme, com la secreció de la bilis o la síntesi dels enzims i de les proteïnes, i que en els ser humans ocupa la regió superior dreta de la cavitat abdominal.</td></tr>
						<tr><td>batre</td><td>batir</td><td>Operar mecànicament (sobre aliments líquids o pastosos) a fi de provocar la incorporació d'aire o d'un altre gas a la massa, la formació d'una emulsió, com maionesa, margarina, etc., o la cristal·lització fina d'una solució saturada.</td></tr>
						<tr><td>porro</td><td>puerro</td><td>Planta herbàcia perenne de la família de les liliàcies (Allium porrum), d'olor característica, amb el bulb simple i allargat, fulles estretes i planes i flors blanques o rosades, comestible i cultivat des de molt antigament.</td></tr>
						<tr><td>galló</td><td>gajo</td><td>Cada una de les parts separades per membranes de què consten certs fruits, com la taronja o l'anou.</td></tr>
						<tr><td>bocí</td><td>pedazo</td><td>Tros (de menjar), un poc (de menjar). Part d'una cosa separada de la resta, fragment. </td></tr>
						<tr><td>vinagre</td><td>vinagre</td><td>Líquid obtingut per fermentació acètica del vi i dels seus subproductes (brisa), bé que també pot procedir d'altres productes (com sidra i malt).</td></tr>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection
