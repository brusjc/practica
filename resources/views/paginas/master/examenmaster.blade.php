@extends('layouts.app')

@section('contentheader_title')
    Estructura del {{$examen['original']['data'][0]['prueba']['nombre']}}
@endsection

@section('breadcrumb_nombre_1')
    Examenes JQCV
@endsection
@section('breadcrumb_enlace_1')
   /examenes-jqcv
@endsection

@section('descripcion')
    "Realizando un examen"
@endsection

@section('keywords')
    "Realizando examen"
@endsection

@section('main_content')
@endsection

@if($examen['original']['status']['error']==1)
	@section('titulotablaexamen')
		Error al obtener los datos del examen
	@endsection
	@section('tablaexamen')
		Error al obtener el examen
	@endsection
@endif

@if($examen['original']['status']['error']==2)
	@section('titulotablaexamen')
		No hay datos del examen
	@endsection

	@section('tablaexamen')
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	@endsection
@endif

@if($examen['original']['status']['error']==0)
	@section('titulotablaexamen')
		
	@endsection

	@section('tablaexamen')
		Esto es el tablaexamen
		{{$examen['original']['data'][0]['prueba']['nombre']}}
	@endsection
@endif

