@extends("themes.lte.plantillatemamaster2")

@section('titulo')Todos los exámenes@endsection

@section('descripcion')"Todos los examenes"@endsection

@section('keywords')"Examenes"@endsection

@section('content')
hola
@endsection


@if(!is_null($pruebas['data']))

	@section('titulotablapruebas')
		Todos los exámenes ordenados por grado
	@endsection

	@section('tablapruebas')
		@foreach($pruebas['data'] as $prueba)
			Hola
		@endforeach
	@endsection
@endif

