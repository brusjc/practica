@extends('layouts.app')

@section('contentheader_title')
{{trans('message.informacion_examen_master')}}
@endsection

@section('contentheader_h1')
{{trans('message.informacion_examen_master')}}
@endsection

@section('breadcrumb1')
	<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>
@endsection

@section('breadcrumb2')
	<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>
@endsection

@section('descripcion')
"Todos los examenes"
@endsection

@section('keywords')
"Examenes"
@endsection

@section('main_content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				@if(count($errors) > 0)
					<div class="callout callout-info">
						<div class="errors">
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif
			</div>
			<form action="/masterVerificador2/{{$subtema['original']['data'][0]['id']}}" method="POST" class="form-horizontal">
				{{csrf_field()}}
				<input type="hidden" name="_method" value="PUT">
				<div class="box box-success">
					<div class="box-header">
						<h4>{{$subtema['original']['data'][0]['prueba']['nombre']}} - {{$subtema['original']['data'][0]['subtemanombre']['nombre']}}</h4>
					</div>
					<div class="box-body">
						<div class="form-group col-sm-4">
							<label>
								
							</label>
						</div>
						<div class="form-group col-sm-4 external-event bg-gray pull-right">
							<label>
								No revisado:
								<input type="radio" name="verificado" value="0" class="minimal" checked>
							</label>
							<label>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bien:
								<input type="radio" name="verificado" value="1" class="minimal">
							</label>
							<label>
								 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mal: 
								<input type="radio" name="verificado" value="9" class="minimal">
							</label>
						</div>
						<div class="form-group col-sm-4">
							<label>
								
							</label>
						</div>
					</div>
				</div>
				<div class="box-footer row invoice-info">
					<div class="col-sm-6 invoice-col">
						<button type="submit" class="btn btn-info pull-right">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>




<div class="row">
	<div class="col-md-12">
		@foreach($subtema['original']['data'][0]['preguntas'] as $key=>$pregunta)
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


