@extends('layouts.app')

@section('contentheader_title')
	{{ html_entity_decode(trans('noms.noms_titulo1') )}}
@endsection

@section('contentheader_h1')
	{{ html_entity_decode(trans('noms.noms_titulo1') )}}
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('noms.noms_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('noms.noms_keywords') )}}
@endsection

@section('main_content')

<div class="comment-text">
	<p>{{ html_entity_decode(trans('noms.noms_texto1') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto2') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto3') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto4') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto5') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto6') )}}</p>
	<p>{{ html_entity_decode(trans('noms.noms_texto7') )}}</p>
</div>

<div class="row">
	<div class="col-10">
		<div class="card">
			<div class="card-header  with-border">
				<h2 class="box-title">{{trans('noms.noms_tituloA')}}</h2>
			</div>
			<div class="box-body">
				<table class="table table-bordered" summary="tabla de {{trans('ortografia.byv_titulo2')}}">
					<thead>
						<tr>
							<th>{{trans('noms.noms_titulo3')}}</th>
							<th>{{trans('noms.noms_titulo4')}}</th>
							<th>{{trans('noms.noms_titulo5')}}</th>
							<th>{{trans('noms.noms_titulo5')}}</th>
						</tr>
					</thead>
					<tr><td>Abigail</td><td>Abigaïl</td><td></td><td></td></tr>
					<tr><td>Abril</td><td>Abril</td><td></td><td></td></tr>
					<tr><td>Ada</td><td>Ada</td><td></td><td></td></tr>
					<tr><td>Adaya</td><td>Adaia</td><td></td><td></td></tr>
					<tr><td>Adela</td><td>Adela</td><td></td><td></td></tr>
					<tr><td>Adelaida</td><td>Adelaida</td><td></td><td></td></tr>
					<tr><td>Adelia</td><td>Adèlia</td><td></td><td></td></tr>
					<tr><td>Adelina</td><td>Adelina</td><td>Lina</td><td></td></tr>
					<tr><td>Adelinda</td><td>Adelinda</td><td></td><td></td></tr>
					<tr><td>Adiana</td><td>Adriana</td><td></td><td></td></tr>
					<tr><td>Adoración</td><td>Adoración</td><td></td><td></td></tr>
					<tr><td>Afra</td><td>Afra</td><td></td><td></td></tr>
					<tr><td>África</td><td>Àfrica</td><td></td><td></td></tr>
					<tr><td>Afrodita</td><td>Afrodita</td><td></td><td></td></tr>
					<tr><td>Ágata</td><td>Àgata</td><td></td><td></td></tr>
					<tr><td>Agripina</td><td>Agripina</td><td></td><td></td></tr>
					<tr><td>Águeda</td><td>Àgueda</td><td></td><td></td></tr>
					<tr><td>Agustina</td><td>Agustina</td><td></td><td></td></tr>
					<tr><td>Aída</td><td>Aïda</td><td>Aida</td><td></td></tr>
					<tr><td>Aimara</td><td>Aimara</td><td></td><td></td></tr>
					<tr><td>Ainoa</td><td>Ainoa</td><td></td><td></td></tr>
					<tr><td>Alamanda</td><td>Alamanda</td><td></td><td></td></tr>
					<tr><td>Alba</td><td>Alba</td><td></td><td></td></tr>
					<tr><td>Alberta</td><td>Alberta</td><td></td><td></td></tr>
					<tr><td>Albertina</td><td>Albertina</td><td></td><td></td></tr>
					<tr><td>Albina</td><td>Albina</td><td></td><td></td></tr>
					<tr><td>Alda</td><td>Alda</td><td></td><td></td></tr>
					<tr><td>Alegría</td><td>Alegria</td><td></td><td></td></tr>
					<tr><td>Alegrías</td><td>Alegries</td><td></td><td></td></tr>
					<tr><td>Alejandra</td><td>Alexandra</td><td>Sandra</td><td></td></tr>
					<tr><td>Alfonsa</td><td>Alfonsa</td><td></td><td></td></tr>
					<tr><td>Alfonsina</td><td>Alfonsina</td><td></td><td></td></tr>
					<tr><td>Alfreda</td><td>Alfreda</td><td></td><td></td></tr>
					<tr><td>Alicia</td><td>Alícia</td><td></td><td></td></tr>
					<tr><td>Alina</td><td>Alina</td><td></td><td></td></tr>
					<tr><td>Almudena</td><td>Almudena</td><td></td><td></td></tr>
					<tr><td>Alodia</td><td>Al·lodia</td><td></td><td></td></tr>
					<tr><td>Aloma</td><td>Aloma</td><td></td><td></td></tr>
					<tr><td>Altea</td><td>Altea</td><td></td><td></td></tr>
					<tr><td>Amada</td><td>Amada</td><td></td><td></td></tr>
					<tr><td>Amalia</td><td>Amàlia</td><td></td><td></td></tr>
					<tr><td>Amanda</td><td>Amanda</td><td></td><td></td></tr>
					<tr><td>Amapola</td><td>Rossella</td><td></td><td></td></tr>
					<tr><td>Amaya</td><td>Amaia</td><td></td><td></td></tr>
					<tr><td>Ambrosiana</td><td>Ambrosiana</td><td></td><td></td></tr>
					<tr><td>Amelia</td><td>Amèlia</td><td></td><td></td></tr>
					<tr><td>América</td><td>Amèrica</td><td></td><td></td></tr>
					<tr><td>Amílcar</td><td>Amílcar</td><td>Hamílcar</td><td></td></tr>
					<tr><td>Amor</td><td>Amor</td><td></td><td></td></tr>
					<tr><td>Amparo</td><td>Empar</td><td>Amparo</td><td></td></tr>
					<tr><td>Ana</td><td>Anna</td><td>Aina</td><td>Agna</td></tr>
					<tr><td>Anabel</td><td>Annabel</td><td></td><td></td></tr>
					<tr><td>Anacleta</td><td>Anacleta</td><td></td><td></td></tr>
					<tr><td>Anacleto</td><td>Anaclet</td><td></td><td></td></tr>
					<tr><td>Anaís</td><td>Anaïs</td><td></td><td></td></tr>
					<tr><td>Anastasia</td><td>Anastàsia</td><td></td><td></td></tr>
					<tr><td>Anatolia</td><td>Anatòlia</td><td></td><td></td></tr>
					<tr><td>Anaxàgoras</td><td>Anaxàgores</td><td></td><td></td></tr>
					<tr><td>Anaximandro</td><td>Anaximandre</td><td></td><td></td></tr>
					<tr><td>Anaxímenes</td><td>Anaxímenes</td><td></td><td></td></tr>
					<tr><td>Andrea</td><td>Andrea</td><td>Andreua</td><td></td></tr>
					<tr><td>Andrés</td><td>Andreu</td><td></td><td></td></tr>
					<tr><td>Andrómeda</td><td>Andròmeda</td><td></td><td></td></tr>
					<tr><td>Ángel</td><td>Àngel</td><td></td><td></td></tr>
					<tr><td>Ángela</td><td>Àngela</td><td></td><td></td></tr>
					<tr><td>Ángeles</td><td>Àngels</td><td></td><td></td></tr>
					<tr><td>Angélica</td><td>Angèlica</td><td></td><td></td></tr>
					<tr><td>Angelina</td><td>Angelina</td><td></td><td></td></tr>
					<tr><td>Angelines</td><td>Angelines</td><td></td><td></td></tr>
					<tr><td>Angustias</td><td>Angústies</td><td></td><td></td></tr>
					<tr><td>Aníbal</td><td>Anníbal</td><td>Hanníbal</td><td></td></tr>
					<tr><td>Aniceto</td><td>Anicet</td><td></td><td></td></tr>
					<tr><td>Anselma</td><td>Anselma</td><td></td><td></td></tr>
					<tr><td>Antígona</td><td>Antígona</td><td></td><td></td></tr>
					<tr><td>Antolín</td><td>Antolí</td><td></td><td></td></tr>
					<tr><td>Antonia</td><td>Antònia</td><td>Tona</td><td></td></tr>
					<tr><td>Antonino</td><td>Antoní</td><td></td><td></td></tr>
					<tr><td>Antonio</td><td>Antoni</td><td></td><td></td></tr>
					<tr><td>Anunciación</td><td>Anunciació</td><td></td><td></td></tr>
					<tr><td>Aparicio</td><td>Aparici</td><td></td><td></td></tr>
					<tr><td>Apeles</td><td>Apel·les</td><td></td><td></td></tr>
					<tr><td>Apia</td><td>Àpia</td><td></td><td></td></tr>
					<tr><td>Apolinar</td><td>Apol·linar</td><td></td><td></td></tr>
					<tr><td>Apolo</td><td>Apol·lo</td><td>Apol·ló</td><td></td></tr>
					<tr><td>Apolonia</td><td>Apol·lonia</td><td></td><td></td></tr>
					<tr><td>Apolunio</td><td>Apol·loni</td><td></td><td></td></tr>
					<tr><td>Apuleyo</td><td>Apuleu</td><td></td><td></td></tr>
					<tr><td>Aquiles</td><td>Aquil·les</td><td></td><td></td></tr>
					<tr><td>Aquilina</td><td>Aquilina</td><td></td><td></td></tr>
					<tr><td>Aquilino</td><td>Aquili</td><td></td><td></td></tr>
					<tr><td>Araceli</td><td>Araceli</td><td></td><td></td></tr>
					<tr><td>Arancha</td><td>Aranxa</td><td>Arantxa</td><td></td></tr>
					<tr><td>Aránzazu</td><td>Aràntzazu</td><td></td><td></td></tr>
					<tr><td>Arcadia</td><td>Arcadia</td><td></td><td></td></tr>
					<tr><td>Arcadio</td><td>Arcadi</td><td></td><td></td></tr>
					<tr><td>Ariadna</td><td>Ariadna</td><td></td><td></td></tr>
					<tr><td>Ariana</td><td>Ariana</td><td></td><td></td></tr>
					<tr><td>Ariano</td><td>Arià</td><td></td><td></td></tr>
					<tr><td>Ariel</td><td>Ariel</td><td></td><td></td></tr>
					<tr><td>Aristarco</td><td>Aristarc</td><td></td><td></td></tr>
					<tr><td>Arístides</td><td>Arístides</td><td></td><td></td></tr>
					<tr><td>Aristóteles</td><td>Aristòtil</td><td></td><td></td></tr>
					<tr><td>Armando</td><td>Armand</td><td></td><td></td></tr>
					<tr><td>Armengol</td><td>Ermengol</td><td></td><td></td></tr>
					<tr><td>Arnaldo</td><td>Arnald</td><td>Arnau</td><td></td></tr>
					<tr><td>Aroa</td><td>Aroa</td><td></td><td></td></tr>
					<tr><td>Arquímedes</td><td>Arquímedes</td><td>Arquimedes</td><td></td></tr>
					<tr><td>Arsenio</td><td>Arseni</td><td></td><td></td></tr>
					<tr><td>Artemisa</td><td>Àrtemis</td><td></td><td></td></tr>
					<tr><td>Artura</td><td>Artura</td><td>Artusa</td><td></td></tr>
					<tr><td>Arturo</td><td>Artur</td><td>Artús</td><td></td></tr>
					<tr><td>Ascensión</td><td>Ascensió</td><td></td><td></td></tr>
					<tr><td>Asdrúbal</td><td>Àsdrubal</td><td>Hàsdrubal</td><td></td></tr>
					<tr><td>Asencio</td><td>Assenç</td><td>Assenci</td><td></td></tr>
					<tr><td>Ástrid</td><td>Àstrid</td><td></td><td></td></tr>
					<tr><td>Asunción</td><td>Assumpció</td><td></td><td></td></tr>
					<tr><td>Atanasia</td><td>Atanàsia</td><td></td><td></td></tr>
					<tr><td>Atanasio</td><td>Atanasi</td><td></td><td></td></tr>
					<tr><td>Ataúlfo</td><td>Ataülf</td><td></td><td></td></tr>
					<tr><td>Atenea</td><td>Atenea</td><td>Atena</td><td></td></tr>
					<tr><td>Atila</td><td>Àtila</td><td></td><td></td></tr>
					<tr><td>Atocha</td><td>Atotxa</td><td></td><td></td></tr>
					<tr><td>Augusta</td><td>Augusta</td><td></td><td></td></tr>
					<tr><td>Aurelia</td><td>Aurèlia</td><td></td><td></td></tr>
					<tr><td>Aureliana</td><td>Aureliana</td><td></td><td></td></tr>
					<tr><td>Aureliano</td><td>Aurelià</td><td></td><td></td></tr>
					<tr><td>Aurelio</td><td>Aureli</td><td></td><td></td></tr>
					<tr><td>Aurora</td><td>Aurora</td><td></td><td></td></tr>
					<tr><td>Ausias</td><td>Ausiàs</td><td>Ausies</td><td></td></tr>
					<tr><td>Auxiliadora</td><td>Auxiliadora</td><td></td><td></td></tr>
					<tr><td>Avelina</td><td>Avel·lina</td><td></td><td></td></tr>
					<tr><td>Avelino</td><td>Avel·lí</td><td></td><td></td></tr>
					<tr><td>Averroes</td><td>Averrois</td><td></td><td></td></tr>
					<tr><td>Avicena</td><td>Avicenna</td><td></td><td></td></tr>
					<tr><td>Axel</td><td>Aixel</td><td></td><td></td></tr>
					<tr><td>Azucena</td><td>Assutzena</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection
