@extends('layouts.app')

@section('contentheader_title')Realizando un examen@endsection

@section('contentheader_h1')Realizando un examen@endsection

@section('breadcrumb1')<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a>@endsection

@section('descripcion')Realizando un examen práctico@endsection

@section('keywords')Realizando examen, realizando una práctica@endsection

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
				<form action="/practica2/{{$datos['id']}}" method="POST" class="form-horizontal">
					{{csrf_field()}}

					<input type="hidden" name="_method" value="PUT">

					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<div class="box box-solid">
									<div class="box-body">
										{{$datos['practica']['pregunta']}}
									</div>
								</div>
							</div>						
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<ul>
								<p></p>
								@if($datos['practica']['r1']!="")
								<p><input type="radio" name="mirespuesta" value="{{1}}">{{$datos['practica']['r1']}}</p>
								<br/>
								@endif
								@if($datos['practica']['r2']!="")
								<p><input type="radio" name="mirespuesta" value="{{2}}">{{$datos['practica']['r2']}}</p>
								<br/>
								@endif
								@if($datos['practica']['r3']!="")
								<p><input type="radio" name="mirespuesta" value="{{3}}">{{$datos['practica']['r3']}}</p>
								<br/>
								@endif
							</ul>	
						</div>
					</div>
					<input type="hidden" name="ejercicio_id" value="{{$datos['ejercicio']['id']}}">
					<input type="hidden" name="practica_id" value="{{$datos['practica_id']}}">
					<input type="hidden" name="id" value={{$datos['id']}}>
					<input type="hidden" name="orden" value={{$datos['orden']}}>
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

