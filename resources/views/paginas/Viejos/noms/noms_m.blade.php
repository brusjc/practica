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
				<h2 class="box-title">{{trans('noms.noms_tituloM')}}</h2>
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
					<tr><td>Mabel</td><td>Mabel</td><td>Maria Isabel</td><td></td></tr>
					<tr><td>Macabeo</td><td>Macabeu</td><td></td><td></td></tr>
					<tr><td>Macarena</td><td>Macarena</td><td></td><td></td></tr>
					<tr><td>Macaria</td><td>Macària</td><td></td><td></td></tr>
					<tr><td>Macario</td><td>Macari</td><td></td><td></td></tr>
					<tr><td>Macián</td><td>Macià</td><td></td><td></td></tr>
					<tr><td>Mafalda</td><td>Mafalda</td><td></td><td></td></tr>
					<tr><td>Magdalena</td><td>Magdalena</td><td>Magda</td><td></td></tr>
					<tr><td>Magno</td><td>Magne</td><td></td><td></td></tr>
					<tr><td>Magnolia</td><td>Magnòlia</td><td></td><td></td></tr>
					<tr><td>Mahoma</td><td>Mahoma</td><td>Mahomet</td><td></td></tr>
					<tr><td>Maite</td><td>Maite</td><td>Maria Teresa</td><td></td></tr>
					<tr><td>Malaquias</td><td>Malaquies</td><td></td><td></td></tr>
					<tr><td>Malena</td><td>Malena</td><td></td><td></td></tr>
					<tr><td>Malva</td><td>Malva</td><td></td><td></td></tr>
					<tr><td>Manola</td><td>Nela</td><td>Manuela</td><td></td></tr>
					<tr><td>Manolo</td><td>Nel</td><td>Nelo</td><td></td></tr>
					<tr><td>Manrique</td><td>Manric</td><td>Amalric</td><td></td></tr>
					<tr><td>Manuel</td><td>Manuel</td><td>Manel</td><td></td></tr>
					<tr><td>Manuela</td><td>Manuela</td><td>Nela</td><td>Manela</td></tr>
					<tr><td>Maquiavelo</td><td>Maquiavel</td><td></td><td></td></tr>
					<tr><td>Mar</td><td>Mar</td><td></td><td></td></tr>
					<tr><td>Mara</td><td>Mara</td><td></td><td></td></tr>
					<tr><td>Maravillas</td><td>Meravella</td><td>Maravella</td><td></td></tr>
					<tr><td>Marcela</td><td>Marcel·la</td><td></td><td></td></tr>
					<tr><td>Marceliana</td><td>Marcel·liana</td><td></td><td></td></tr>
					<tr><td>Marcelina</td><td>Marcel·lina</td><td></td><td></td></tr>
					<tr><td>Marcelino</td><td>Marcel·lí</td><td></td><td></td></tr>
					<tr><td>Marcial</td><td>Marcial</td><td>Marçal</td><td></td></tr>
					<tr><td>Marco</td><td>Marc</td><td></td><td></td></tr>
					<tr><td>Marcos</td><td>Marc</td><td></td><td></td></tr>
					<tr><td>Margarita</td><td>Margarida</td><td>Margalida</td><td></td></tr>
					<tr><td>María</td><td>Maria</td><td></td><td></td></tr>
					<tr><td>Marián</td><td>Marian</td><td></td><td></td></tr>
					<tr><td>Mariano</td><td>Marià</td><td>Marian</td><td></td></tr>
					<tr><td>Maribel</td><td>Maribel</td><td>Maria Isabel</td><td></td></tr>
					<tr><td>Mariló</td><td>Mariló </td><td>Maria Dolores</td><td></td></tr>
					<tr><td>Marina</td><td>Marina</td><td></td><td></td></tr>
					<tr><td>Mario</td><td>Màrius</td><td></td><td></td></tr>
					<tr><td>Mariola</td><td>Mariola</td><td></td><td></td></tr>
					<tr><td>Marisa</td><td>Marisa</td><td>Maria Luisa</td><td></td></tr>
					<tr><td>Marisol</td><td>Marisol</td><td></td><td></td></tr>
					<tr><td>Marlén</td><td>Marlem</td><td></td><td></td></tr>
					<tr><td>Marta</td><td>Marta</td><td></td><td></td></tr>
					<tr><td>Martín</td><td>Martí</td><td></td><td></td></tr>
					<tr><td>Martina</td><td>Martina</td><td></td><td></td></tr>
					<tr><td>Maruja</td><td>Maria</td><td></td><td></td></tr>
					<tr><td>Mateo</td><td>Mateu</td><td></td><td></td></tr>
					<tr><td>Matías</td><td>Maties</td><td></td><td></td></tr>
					<tr><td>Matilda</td><td>Matilda</td><td></td><td></td></tr>
					<tr><td>Matilde</td><td>Matilde</td><td></td><td></td></tr>
					<tr><td>Matusalén</td><td>Matusalem</td><td></td><td></td></tr>
					<tr><td>Mauricia</td><td>Maurícia</td><td></td><td></td></tr>
					<tr><td>Mauricio</td><td>Maurici</td><td></td><td></td></tr>
					<tr><td>Mauro</td><td>Maur</td><td>Maure</td><td></td></tr>
					<tr><td>Mavi</td><td>Mavi</td><td></td><td></td></tr>
					<tr><td>Max</td><td>Màxim</td><td>Maximí</td><td>Maximilià</td></tr>
					<tr><td>Máxima</td><td>Màxima</td><td></td><td></td></tr>
					<tr><td>Maximiliana</td><td>Maximiliana</td><td></td><td></td></tr>
					<tr><td>Maximiliano</td><td>Maximilià</td><td></td><td></td></tr>
					<tr><td>Maximina</td><td>Maximina</td><td></td><td></td></tr>
					<tr><td>Maximino</td><td>Maximí</td><td></td><td></td></tr>
					<tr><td>Màximo</td><td>Màxim</td><td></td><td></td></tr>
					<tr><td>Maya</td><td>Maia</td><td></td><td></td></tr>
					<tr><td>Medea</td><td>Medea</td><td></td><td></td></tr>
					<tr><td>Melania</td><td>Melània</td><td></td><td></td></tr>
					<tr><td>Melchor</td><td>Melcior</td><td></td><td></td></tr>
					<tr><td>Melibea</td><td>Melibea</td><td></td><td></td></tr>
					<tr><td>Melibeo</td><td>Melibeu</td><td></td><td></td></tr>
					<tr><td>Melina</td><td>Mel·lina</td><td></td><td></td></tr>
					<tr><td>Melinda</td><td>Melinda</td><td></td><td></td></tr>
					<tr><td>Melisa</td><td>Melissa</td><td></td><td></td></tr>
					<tr><td>Melquíades</td><td>Melquíades</td><td></td><td></td></tr>
					<tr><td>Mendo</td><td>Mend</td><td></td><td></td></tr>
					<tr><td>Merichell</td><td>Meritxell</td><td></td><td></td></tr>
					<tr><td>Merlín</td><td>Merlí</td><td></td><td></td></tr>
					<tr><td>Mesalina</td><td>Messalina</td><td></td><td></td></tr>
					<tr><td>Mesalino</td><td>Messalí</td><td></td><td></td></tr>
					<tr><td>Micaela</td><td>micaela</td><td></td><td></td></tr>
					<tr><td>Mida</td><td>Mides</td><td></td><td></td></tr>
					<tr><td>Miguel</td><td>Miquel</td><td>Quel</td><td>Quelo</td></tr>
					<tr><td>Miguela</td><td>Miquela</td><td>Quela</td><td></td></tr>
					<tr><td>Mila</td><td>Miracle</td><td>Miraculosa</td><td></td></tr>
					<tr><td>Milagros</td><td>Miracle</td><td></td><td></td></tr>
					<tr><td>Milagrosa</td><td>Miraculosa</td><td></td><td></td></tr>
					<tr><td>Milano</td><td>Milà</td><td></td><td></td></tr>
					<tr><td>Mina</td><td>Mina</td><td>Guillermina</td><td></td></tr>
					<tr><td>Minerva</td><td>Minerva</td><td></td><td></td></tr>
					<tr><td>Miranda</td><td>Miranda</td><td></td><td></td></tr>
					<tr><td>Mireya</td><td>Mireia</td><td></td><td></td></tr>
					<tr><td>Miriam</td><td>Míriam</td><td></td><td></td></tr>
					<tr><td>Miró</td><td>Mir</td><td></td><td></td></tr>
					<tr><td>Misericordia</td><td>Misericòrdia</td><td></td><td></td></tr>
					<tr><td>Modesta</td><td>Modesta</td><td></td><td></td></tr>
					<tr><td>Modesto</td><td>Modest</td><td></td><td></td></tr>
					<tr><td>Mohamed</td><td>Mohamet</td><td></td><td></td></tr>
					<tr><td>Moisés</td><td>Moisés</td><td></td><td></td></tr>
					<tr><td>Moncha</td><td>Ramona</td><td></td><td></td></tr>
					<tr><td>Moncho</td><td>Ramon</td><td></td><td></td></tr>
					<tr><td>Mónica</td><td>Mònica</td><td></td><td></td></tr>
					<tr><td>Montiel</td><td>Montiel</td><td></td><td></td></tr>
					<tr><td>Montse</td><td>Montse</td><td></td><td></td></tr>
					<tr><td>Montserrat</td><td>Montserrada</td><td>Montserrat</td><td>Montse</td></tr>
					<tr><td>Morfeo</td><td>Morfeu</td><td></td><td></td></tr>
					<tr><td>Morgana</td><td>Morgana</td><td></td><td></td></tr>
					<tr><td>Mustafá</td><td>Mustafà</td><td></td><td></td></tr>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
