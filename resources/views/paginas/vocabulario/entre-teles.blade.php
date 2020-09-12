@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('vocabulario.teles_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('vocabulario.teles_h1') )}}
@endsection

@section('breadcrumb1')
	<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('vocabulario.teles_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('vocabulario.teles_keywords') )}}
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
		<p>{{ html_entity_decode(trans('vocabulario.teles_texto1') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.teles_texto2') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.teles_texto3') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.teles_texto4') )}}</p>
		<p>{{ html_entity_decode(trans('vocabulario.teles_texto5') )}}</p>
	</div>
</div>

<div class="row">
	<div class="col-11">
		<div class="card">
			<div class="card-header  with-border">
			</div>
			<div class="box-body">
				<table class="table table-bordered" >
					<thead>
						<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
						</tr>
					</thead>
					<tr><td>xandall</td><td>chandal</td><td>Conjunt de jersei i pantalons que se sol fer servir en pràctiques esportives.</td></tr>
					<tr><td>barnús</td><td>albornoz</td><td>Peça de vestir llarga, amb mànegues, feta amb tela de tovalla, cenyida la cintura amb un cordó, que s'utilitza per a eixugar-se després del bany.</td></tr>
					<tr><td>jersei</td><td>jersey</td><td>Peça de vestir exterior curta fins a la cintura, de gènere de punt i més lleugera que el suèter.</td></tr>
					<tr><td>jupetí o armilla</td><td>chaleco</td><td>Peça de vestir sense mànegues que cobrix el pit i l'esquena, i que es porta davall de l'americana, el jaqué, la levita, etc.</td></tr>
					<tr><td>vestit</td><td>vestido</td><td>Peça o conjunt de peces de roba o d'altra matèria amb què es cobrix el cos i els membres, llevat de la roba interior. </td></tr>
					<tr><td>pantalons</td><td>pantalones</td><td>Peça de vestir que cobrix el tronc de la cintura per avall i, separadament, cada cama fins als peus o fins a una alçària qualsevol.</td></tr>
					<tr><td>texans</td><td>los tejanos</td><td>Es diu dels pantalons, molt ajustats, de tela de cotó grossa (o també de fibra), generalment de color blau, i amb butxaques aplicades en la part posterior.</td></tr>
					<tr><td>americana</td><td>americana</td><td>Jaqueta de tela, generalment usada pels hòmens, amb solapes i botons, que cobrix el tronc fins a les anques.</td></tr>
					<tr><td>anorac</td><td>anorak</td><td> Peça de vestir d'abric semblant a una jaqueta, impermeable i amb caputxa, que s'usa per a resguardar-se del vent i del fred.</td></tr>
					<tr><td>bata</td><td>bata</td><td>Peça de vestir, originàriament llarga quasi fins als peus i amb mànegues, usada generalment per a estar per casa o per a treballar.</td></tr>
					<tr><td>brusa</td><td>blusa</td><td>Peça de vestir femenina, amb mànegues o sense, generalment cordada davant, que cobrix el tronc.</td></tr>
					<tr><td>camisa</td><td>camisa</td><td>Peça de vestir amb cos i mànegues, cordada per davant, que cobrix el tors i que es porta sobre la pell o sobre la camiseta o altra roba interior.</td></tr>
					<tr><td>camiseta</td><td>camiseta</td><td>Peça de gènere de punt usada com a abrigall immediat del cos.</td></tr>
					<tr><td>disfressa</td><td>disfraz</td><td>Conjunt de mitjans materials que s'empren per a modificar exteriorment la personalitat.</td></tr>
					<tr><td>falda</td><td>falda</td><td>Part del vestit exterior de la dona que va de la cintura en avall i cobrix les cames o una part d'elles.</td></tr>
					<tr><td>gavardina</td><td>gabardina</td><td> Teixit d'estam, de cotó o de seda, amb lligament de sarja. Abric confeccionat amb teixit de gavardina.</td></tr>
					<tr><td>granota</td><td>mono</td><td>Vestit de faena d'una sola peça amb cos, camals i, generalment, mànegues.</td></tr>
					<tr><td>jaqueta</td><td>chaqueta</td><td>Peça exterior de vestir, amb mànegues i oberta de davant, que cobrix el tronc fins més avall de la cintura.</td></tr>
					<tr><td>samarreta</td><td>camiseta</td><td>Camiseta que visten els jugadors que participen en determinades competicions esportives que permet identificar-los.</td></tr>
					<tr><td>abric</td><td>abrigo</td><td>Cosa que abriga, especialment peça de vestir llarga, amb mànegues i botonada davant, que es posa sobre les altres i que s'usa per a protegir-se del fred.</td></tr>
					<tr><td>uniforme</td><td>uniforme</td><td>Vestit específic i distintiu dels membres d'alguns cossos socials i, eventualment, de la funció que s'ocupa dins d'un cos.</td></tr>
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
				<h2 class="box-title">{{ trans('vocabulario.teles_titulo2') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{ trans('vocabulario.teles_titulo2') }}">
					<thead>
						<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
						</tr>
					</thead>
					<tr><td>banayador</td><td>bañador</td><td>Vestit de bany.</td></tr>
					<tr><td>camisa de dormir</td><td>camisón</td><td>Camisa, generalment llarga i folgada, que es posa per a dormir.</td></tr>
					<tr><td>pijama</td><td>pijama</td><td>Vestit de dormir consistent en una jaqueta i uns pantalons, generalment de tela fina.</td></tr>
					<tr><td>calcetins</td><td>calcetines</td><td>Calça que cobrix el peu i només puja fins a mitja cama.</td></tr>
					<tr><td>calçotets</td><td>calzoncillos</td><td> Peça interior masculina que es porta davall dels pantalons.</td></tr>
					<tr><td>peücs</td><td>peucos</td><td>Calcetí molt curt fet de punt o de teixit de llana filada grosserament i que s'utilitza per a defendre el peu contra el fred, per a dormir a l'hivern, etc.</td></tr>
					<tr><td>sostenidors</td><td>sujetador</td><td>Peça interior femenina utilitzada per a sostindre els pits.</td></tr>
					<tr><td>eslip</td><td>slip</td><td>Espècie de calçotets sense camals, usats com a roba interior o de bany.</td></tr>
					<tr><td>faixa</td><td>faja</td><td>Peça de roba constituïda per una tira de tela molt més llarga que ampla que servix per a cenyir el cos per la cintura donant-li diverses voltes.</td></tr>
					<tr><td>bragues</td><td>bragas</td><td>Peça de roba interior femenina que cobrix aproximadament de la cintura fins als engonals.</td></tr>
					<tr><td>calces</td><td>medias</td><td>Cada una de les dos peces de vestir de cotó, llana, seda o fibres artificials que s'adapta al peu i a la cama generalment fins més amunt del genoll.</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-11">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.teles_titulo3') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{ trans('vocabulario.teles_titulo3') }}">
					<thead>
						<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
						</tr>
					</thead>
					<tr><td>barret / capell</td><td>sombrero</td><td>Peça de vestir que servix per a cobrir el cap, consistent ordinàriament en un casquet més o menys alt, poc o molt fort, amb una vora o ala d'una amplada variable tot al voltant, barret.</td></tr>
					<tr><td>bastó</td><td>bastón</td><td>Vara de fusta, de bambú, etc., generalment amb puny i virolla, per a portar en la mà i repenjar-s'hi caminant.</td></tr>
					<tr><td>braçalet</td><td>brazalete</td><td>Objecte d'ornament en forma d'anell que es porta a l'avantbraç envoltant-lo.</td></tr>
					<tr><td>casc</td><td>casco</td><td>Peça que cobrix i defén el cap, comunament metàl·lica, o d'altres materials durs, utilitzada pels bombers, els soldats, els esportistes, etc.</td></tr>
					<tr><td>cinturó</td><td>cinturón</td><td>Banda de tela, de cuiro, etc., generalment amb sivella, destinada a estrényer la cintura.</td></tr>
					<tr><td>collar</td><td>collar</td><td>Ornament (cadena, enfilall de perles, de grans d'atzabeja, etc.) que es posa al voltant del coll.</td></tr>
					<tr><td>cordó</td><td>cordón</td><td> Cordeta, generalment d'estructura tubular, feta amb diferents caps retorts o trenats, de cotó, lli, llana, seda, etc., amb ànima o sense. </td></tr>
					<tr><td>llaç</td><td>lazo</td><td>Corda que en un cap té un ull per on passa l'altre cap, que, escorrent-se en estirar-lo, fa xicoteta la baga i servix per a agarrar, subjectar.</td></tr>
					<tr><td>mocador</td><td>pañuelo</td><td>Peça quadrada de tela, d'un o dos pams d'amplària, que servix per a mocar-se i eixugar-se la suor o les llàgrimes.</td></tr>
					<tr><td>mocador de coll</td><td>pañuelo de cuello</td><td>Peça quadrada de tela de lli, seda, llana o fibra, que s'usa en la indumentària per a cobrir tot el coll, el cap i l'esquena, siga per motius ornamentals, siga com a abric.</td></tr>
					<tr><td>palmito / ventall</td><td>abanico</td><td>Làmina rectangular de cartó, apegada per un dels costats a una vareta que li fa de mànec i que servix per a fer o fer-se aire.</td></tr>
					<tr><td>paraigua</td><td>paraguas</td><td>Utensili per a protegir de la pluja que consistix en un tros de tela cosida a unes barnilles d'acer articulades en l'extrem d'un bastó, que permeten estendre-la o plegar-la amb facilitat.</td></tr>
					<tr><td>rellotge</td><td>reloj</td><td>Instrument destinat a mesurar el pas del temps i a indicar el compte de les hores i d'altres unitats de temps.</td></tr>
					<tr><td>botons de puny</td><td>gemelos</td><td>Joc de botons dobles per a cordar els punys de les camises.</td></tr>
					<tr><td>guants</td><td>guantes</td><td>Peça de vestir que cobrix la mà o la mà i el puny i a vegades l'avantbraç i que s'adapta a la forma de la mà presentant una baina per a cada dit o almenys per al dit gros</td></tr>
					<tr><td>tirants</td><td>tirantes</td><td>Cada una de les dos tires que passen per damunt dels muscles i sostenen una combinació, uns sostenidors, etc.</td></tr>
					<tr><td>anell</td><td>anillo</td><td>Cércol d'or, plata, etc., llis o llavorat, adornat o no amb pedres precioses, esmalts, etc., que es porta en el dit com a ornament.</td></tr>
					<tr><td>boina</td><td>boina</td><td>Gorra redona d'una sola peça, de llana, molt sovint de color negre.</td></tr>
					<tr><td>bossa de mà</td><td>monedero</td><td>Saquet de cuiro, de tela, etc., amb cordons o amb tancador, per a portar diners.</td></tr>
					<tr><td>bufanda</td><td>bufanda</td><td> Peça de tela estreta i allargada que s'usa per a abrigar el coll i la boca.</td></tr>
					<tr><td>corbata</td><td>corbata</td><td>Tira de seda, de mussolina, de llana, etc., que es porta al voltant del coll, llaçada o nugada en la part de davant.</td></tr>
					<tr><td>corbata de llacet</td><td>pajarita</td><td>Tireta amb un llaç fet davant posada al voltant del coll i cordada amb un gafet en la part de darrere.</td></tr>
					<tr><td>corretja</td><td>correa</td><td>Banda o llenca de cuiro. </td></tr>
					<tr><td>gorra</td><td>gorra</td><td>Lligadura de tela, pell o punt, sense ales ni copa, generalment amb visera.</td></tr>
					<tr><td>lligacama</td><td>liga</td><td>Cinta, cordó, elàstic, etc., amb què se subjecten a la cama o a la cuixa els calcetins o les calces per evitar que lleneguen cames avall.</td></tr>
					<tr><td>polsera</td><td>pulsera</td><td>Objecte d'ornamentació que es porta entorn del puny, en forma d'argolla, de cércol, de cadeneta, etc., braçalet.</td></tr>
					<tr><td>arracades</td><td>pendientes</td><td>Ornament que es porta en les orelles. </td></tr>
					<tr><td>ulleres</td><td>gafas</td><td>Instrument òptic format per un parell de vidres (simples vidres o lents) muntats en una armadura que se sosté al nas i a les orelles, per a corregir els defectes de la visió o protegir els òrgans de la vista. </td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-11">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.teles_titulo4') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{ trans('vocabulario.teles_titulo4') }}">
					<thead>
						<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
						</tr>
					</thead>
					<tr><td>mocasins</td><td>mocasines</td><td>Tipus de calçat pla, generalment fet de dos peces i pell molt suau.</td></tr>
					<tr><td>socs</td><td>zuecos</td><td>Calçat de fusta, fet d'una sola peça, utilitzat per a caminar per llocs humits, treballar l'hort, etc. També, calçat de cuiro, sense talonera i amb sola grossa de fusta o de suro.</td></tr>
					<tr><td>botes</td><td>botas</td><td>Calçat que cobrix el peu i una part de la cama. </td></tr>
					<tr><td>espardenyes</td><td>alpargatas</td><td>Calçat de sola de cànem trenat (o espart o jute), puntera i taló de tela grossa, empenya feta amb vetes (o també amb tela grossa) i generalment amb dos vetes que es lliguen al turmell.</td></tr>
					<tr><td>sabates</td><td>zapatos</td><td>Calçat de cuiro, feltre o altra matèria que cobrix el peu i eventualment el turmell, amb sola de cuiro, de goma, etc. </td></tr>
					<tr><td>sabatilles</td><td>zapatillas</td><td>Sabata lleugera, feta de tela, feltre, pell fina, plàstic, etc., amb sola molt prima, generalment sense taló i sense cordons ni cap altra subjecció, que se sol portar per casa.</td></tr>
					<tr><td>sandalies</td><td>sandalias</td><td>Calçat que consistix en una simple sola que és subjectada al peu amb llenques de cuiro, amb cordons o amb betes.</td></tr>
					<tr><td>xancletes</td><td>chanclas</td><td>Sabata lleugera sense taló o que es porta a retaló.</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-11">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{ trans('vocabulario.teles_titulo5') }}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="{{ trans('vocabulario.teles_titulo5') }}">
					<thead>
						<tr>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun1') }}</th>
							<th scope="col-3">{{ trans('vocabulario.vocabulario_comun2') }}</th>
							<th scope="col-6">{{ trans('vocabulario.vocabulario_comun3') }}</th>
						</tr>
					</thead>
					<tr><td>botó</td><td>botón</td><td>Peça xicoteta generalment circular, plana o bombada, que es cus als vestits i que servix principalment, passant-la per un trau o una baga, per a subjectar l'una a l'altra dos peces del vestit o dos parts d'una mateixa peça. </td></tr>
					<tr><td>camal</td><td>pernera</td><td>Cada una de les dos parts d'uns pantalons o d'unes calces que cobrix una cama.</td></tr>
					<tr><td>coll</td><td>cuello</td><td>Part d'un vestit pròxima al coll o que el volta. </td></tr>
					<tr><td>davantal</td><td>delantal</td><td>Peça de vestir que cobrix la part de davant del cos per a resguardar el vestit.</td></tr>
					<tr><td>trau</td><td>ojal</td><td>Xicoteta obertura feta en una peça de roba, etc., per la qual, per a cordar-la, es fan passar els botons cosits a l'altra vora. </td></tr>
					<tr><td>bolquers</td><td>pañales</td><td>Peça rectangular feta de material absorbent que es col·loca entre les cames de les criatures. </td></tr>
					<tr><td>fil i agulla</td><td>hilo y aguja</td><td>Cos de forma capil·lar, molt prim, flexible, d'una llargària indefinida, format ajuntant fibres i filaments en l'operació de la filatura i que servix per a cosir, teixir, etc. L'agulla és la barreta de metall, d'os, de fusta, etc., amb un dels extrems acabat en punta i l'altre proveït d'un forat o ull per a passar-hi un fil,</td></tr>
					<tr><td>bragueta</td><td>bragueta</td><td>Obertura que porten els pantalons en la part de davant.</td></tr>
					<tr><td>butxaca</td><td>bolsillo</td><td>Cada una de les cavitats d'una peça de vestir, d'una cartera, etc., que servixen per a portar objectes d'ús ordinari i freqüent (mocador, rellotge, diners, etc.). </td></tr>
					<tr><td>cremallera</td><td>cremallera</td><td>Fermall d'una peça de vestir, una cartera, una maleta, etc., que consistix en dos llistes amb dents damunt les quals corre un passador que les unix o les separa.</td></tr>
					<tr><td>màniga</td><td>manga</td><td>Part d'una peça de vestir que cobrix totalment o parcialment el braç.</td></tr>
				</table>
			</div>
		</div>
	</div>
</div>




@endsection
