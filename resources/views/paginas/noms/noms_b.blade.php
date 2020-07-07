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
				<h2 class="box-title">{{trans('noms.noms_tituloB')}}</h2>
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
					<tr><td>Babilonia</td><td>Babilònia</td><td></td><td></td></tr>
					<tr><td>Baco</td><td>Bacus</td><td></td><td></td></tr>
					<tr><td>Balbina</td><td>Balbina</td><td></td><td></td></tr>
					<tr><td>Balbino</td><td>Balbí</td><td></td><td></td></tr>
					<tr><td>Baldomera</td><td>Baldomera</td><td></td><td></td></tr>
					<tr><td>Baldomero</td><td>Baldomer</td><td></td><td></td></tr>
					<tr><td>Balduino</td><td>Baldoví</td><td>Balduí</td><td></td></tr>
					<tr><td>Baltasar</td><td>Baltasar</td><td></td><td></td></tr>
					<tr><td>Baltasara</td><td>Baltasara</td><td></td><td></td></tr>
					<tr><td>Bárbara</td><td>Bàrbara</td><td>Bàrbera</td><td></td></tr>
					<tr><td>Barrabás</td><td>Barrabàs</td><td></td><td></td></tr>
					<tr><td>Bartimeo</td><td>Bartimeu</td><td></td><td></td></tr>
					<tr><td>Bartola</td><td>Bartomeu</td><td>Bertomeu</td><td></td></tr>
					<tr><td>Bartola</td><td>Bartomeua</td><td>Bertomeua</td><td></td></tr>
					<tr><td>Bartolomé</td><td>Bartomeu</td><td>Bertomeu</td><td></td></tr>
					<tr><td>Bartolomea</td><td>Bartomeua</td><td>Bertomeua</td><td>Tomeua</td></tr>
					<tr><td>Basileo</td><td>Basileu</td><td></td><td></td></tr>
					<tr><td>Basilia</td><td>Basília</td><td></td><td></td></tr>
					<tr><td>Basilio</td><td>Basili</td><td></td><td></td></tr>
					<tr><td>Basilisa</td><td>Basilissa</td><td></td><td></td></tr>
					<tr><td>Basiliso</td><td>Basilís</td><td></td><td></td></tr>
					<tr><td>Bautista</td><td>Baptista</td><td>Batiste</td><td></td></tr>
					<tr><td>Beata</td><td>Beata</td><td></td><td></td></tr>
					<tr><td>Beatriz</td><td>Beatriu</td><td>Bea</td><td></td></tr>
					<tr><td>Begonia</td><td>Begònia</td><td></td><td></td></tr>
					<tr><td>Begoña</td><td>Begonya</td><td></td><td></td></tr>
					<tr><td>Belén</td><td>Betlem</td><td></td><td></td></tr>
					<tr><td>Belina</td><td>Belina</td><td></td><td></td></tr>
					<tr><td>Bella</td><td>Bella</td><td></td><td></td></tr>
					<tr><td>Beltrán</td><td>Beltran</td><td>Bertran</td><td></td></tr>
					<tr><td>Benedicta</td><td>Benedicta</td><td></td><td></td></tr>
					<tr><td>Benedicto</td><td>Benedicto</td><td></td><td></td></tr>
					<tr><td>Benigna</td><td>Benigna</td><td></td><td></td></tr>
					<tr><td>Benigno</td><td>Benigne</td><td></td><td></td></tr>
					<tr><td>Benilde</td><td>Benilde</td><td></td><td></td></tr>
					<tr><td>Benita</td><td>Beneta</td><td></td><td></td></tr>
					<tr><td>Benito</td><td>Benet</td><td></td><td></td></tr>
					<tr><td>Benjamín</td><td>Benjamí</td><td></td><td></td></tr>
					<tr><td>Berengario</td><td>Berenguer</td><td></td><td></td></tr>
					<tr><td>Berenice</td><td>Bereniç</td><td></td><td></td></tr>
					<tr><td>Berlandina</td><td>Berlandina</td><td></td><td></td></tr>
					<tr><td>Bernabé</td><td>Bernabé</td><td>Bernabeu</td><td></td></tr>
					<tr><td>Bernal</td><td>Bernald</td><td>Bernau</td><td></td></tr>
					<tr><td>Bernandino</td><td>Bernardí</td><td></td><td></td></tr>
					<tr><td>Bernandino</td><td>Berlandí</td><td></td><td></td></tr>
					<tr><td>Bernarda</td><td>Bernarda</td><td></td><td></td></tr>
					<tr><td>Bernardeta</td><td>Bernardeta</td><td></td><td></td></tr>
					<tr><td>Bernardina</td><td>Bernardina</td><td></td><td></td></tr>
					<tr><td>Bernardo</td><td>Bernat</td><td></td><td></td></tr>
					<tr><td>Berta</td><td>Berta</td><td></td><td></td></tr>
					<tr><td>Bertín</td><td>Bertí</td><td></td><td></td></tr>
					<tr><td>Berto</td><td>Bert</td><td></td><td></td></tr>
					<tr><td>Bertolín</td><td>Bartolí</td><td></td><td></td></tr>
					<tr><td>Betsabé</td><td>Betsabé</td><td></td><td></td></tr>
					<tr><td>Bibiana</td><td>Bibiana</td><td></td><td></td></tr>
					<tr><td>Bienvenida</td><td>Benvinguda</td><td></td><td></td></tr>
					<tr><td>Bienvenido</td><td>Benvingut</td><td></td><td></td></tr>
					<tr><td>Blanca</td><td>Blanca</td><td></td><td></td></tr>
					<tr><td>Blancanieves</td><td>Blancaneu</td><td></td><td></td></tr>
					<tr><td>Blanco</td><td>Blanc</td><td></td><td></td></tr>
					<tr><td>Blandina</td><td>Blandina</td><td></td><td></td></tr>
					<tr><td>Blanquerna</td><td>Blanquerna</td><td></td><td></td></tr>
					<tr><td>Blas</td><td>Blai</td><td>Blasi</td><td></td></tr>
					<tr><td>Blasa</td><td>Blaia</td><td>Blàsia</td><td></td></tr>
					<tr><td>Blasco</td><td>Balasc</td><td>Blasc</td><td></td></tr>
					<tr><td>Bonafilia</td><td>Bonafilla</td><td></td><td></td></tr>
					<tr><td>Bonet</td><td>Bonet</td><td></td><td></td></tr>
					<tr><td>Bonifacio</td><td>Bonifaci</td><td></td><td></td></tr>
					<tr><td>Bono</td><td>Bo</td><td></td><td></td></tr>
					<tr><td>Borbón</td><td>Borbó</td><td></td><td></td></tr>
					<tr><td>Boris</td><td>Boris</td><td></td><td></td></tr>
					<tr><td>Borja</td><td>Borja</td><td></td><td></td></tr>
					<tr><td>Braulia</td><td>Bràulia</td><td></td><td></td></tr>
					<tr><td>Braulio</td><td>Brauli</td><td></td><td></td></tr>
					<tr><td>Brenda</td><td>Brenda</td><td></td><td></td></tr>
					<tr><td>Brianda</td><td>Brianda</td><td></td><td></td></tr>
					<tr><td>Brígida</td><td>Brígida</td><td></td><td></td></tr>
					<tr><td>Briseida</td><td>Briseida</td><td></td><td></td></tr>
					<tr><td>Brunete</td><td>Brunet</td><td></td><td></td></tr>
					<tr><td>Brunilda</td><td>Brunilda</td><td>Nilda</td><td></td></tr>
					<tr><td>Bruno</td><td>Bru</td><td></td><td></td></tr>
					<tr><td>Bruto</td><td>Brut</td><td></td><td></td></tr>
					<tr><td>Bucéfalo</td><td>Bucèfal</td><td></td><td></td></tr>
					<tr><td>Buenanueva</td><td>Bonanova</td><td></td><td></td></tr>
					<tr><td>Burguete</td><td>Burget</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
