@extends('layouts.app')

@section('contentheader_title')
    Realizando un examen
@endsection

@section('contentheader_h1')
    Realizando un examen
@endsection

@section('breadcrumb1')
	<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>
@endsection

@section('breadcrumb2')
	<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>
@endsection

@section('breadcrumb3')
	<a href="{{session('BC3')}}">{{ session('BC3texto') }}</a>
@endsection

@section('breadcrumb4')
	<a href="{{session('BC4')}}">{{ session('BC4texto') }}</a>
@endsection

@section('descripcion')
    "Realizando un examen"
@endsection

@section('keywords')
    "Realizando examen"
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
				<form action="/examenz2/{{$subarea}}" method="POST" class="form-horizontal">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="PUT">

					<div class="form-group">
						<div class="col-sm-12">
							{!!$preguntas[0]['enunciado']['enunciado']!!}
						</div>
					</div>

					<div class="form-group">
						<div class=" col-md-12 col-sm-12">
							@foreach($preguntas as $key1=>$preg)
								<div class="row">
									<div class=" col-md-1 col-sm-1">
										<select class="form-control" name="mirespuesta[{{ $key1 + 1 }}]" >
										  <option></option>
										  @foreach($preguntas as $key2=>$linea)
										  <option>{{$key2 + 1}}</option>
										  @endforeach
										</select>
									</div>
									<div class="col-md-11 col-sm-11">
										<label class="form-control">{{$preg['pregunta']}}</label>
									</div>	
								</div>
							@endforeach
						</div>
					</div>
					<input id="subarea_id" type="hidden" name="subarea_id" value="{{$subarea}}">
					<input id="pregunta_id" type="hidden" name="pregunta_id" value="{{$preguntas[0]['id']}}">
					<div class="box-footer row invoice-info">
						<div class="col-sm-6 invoice-col">
							<button type="submit" class="btn btn-info pull-right">Enviar</button>
						</div>
						<div class="col-sm-6 invoice-col">
							<a href="{{session('urlback')}}">Go Back</button></a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
@endsection

