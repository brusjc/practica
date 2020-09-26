@extends('layouts.app')

@section('contentheader_title'){{trans('message.informacion_examen_master')}}@endsection

@section('contentheader_h1'){{trans('message.informacion_examen_master')}}@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('descripcion')"Todos los examenes"@endsection

@section('keywords')"Examenes"@endsection

@section('main_content')
<div class="row">
	<div class="col-md-12">
		<a href="/masterVerificador/{{$subtema['id']}}"><button type="button" class="col-md-2 btn btn-block btn-primary pull-right">Verificar</button></a>
		@foreach($subtema['preguntas'] as $key=>$pregunta)
			<div class="box box-default collapsed-box">
				<!-- Título -->
				<div class="box-header with-border">
					<p> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>
					<p> </p>
					<p class="box-title font-weight-bold">{{$pregunta['orden']}}.-{{$pregunta['pregunta']}}</p>
					<p> </p>
				</div>
				<!-- Cuerpo -->
				<div class="box-body">
					<p  class="small"><i>{{$pregunta['enunciado']['enunciado']}}</i></p>
					@foreach($pregunta['respuesta'] as $key=>$respuesta)
						<p> - {{$respuesta['respuesta']}}</p>
					@endforeach
				</div>
			</div>
		@endforeach
		<!-- /.box -->
	</div>
</div>



@endsection


