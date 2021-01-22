@extends('layouts.app')

@section('contentheader_title'){{ trans('practicas.practicas_breadcrumb') }}@endsection

@section('contentheader_h1'){{ trans('practicas.practicas_h1') }}@endsection

@section('descripcion'){{ trans('practicas.practicas_descripcion') }}@endsection

@section('keywords'){{ trans('practicas.practicas_keywords') }}@endsection

@section('breadcrumb1')<a href="/vocabulario">{{ trans('vocabulario.vocabulario_breadcrumb') }}</a> @endsection

@section('main_content')

@if($datos['verdiv']==true)
	
	<div class="modal fade" id="modalInformacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title text-danger" id="exampleModalLabel"><i class="fa fa-info-circle"></i> Aviso</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	        	<div class="col-lg-12">
	        		<p class="m-5">Es necesario registrarse para poder guardar la información de tus sucesivos ejercicios. No debemos esperar más para registrarnos en la web</p>
	        	</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <a href="/login" class="btn btn-primary">Login</a>
	      </div>
	    </div>
	  </div>
	</div>
@endif

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

			@if(!$datos['practica']['r2'])
				<form action="{{ action('PracticaController@practica1') }}" method="POST" class="form-horizontal">
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
					<br/>
					<div class="form-group">
						<div class="col-sm-8">
		                  <textarea class="form-control" id="mirespuesta" name="mirespuesta" placeholder="Escribe aqui tu respuesta"></textarea>
						</div>
					</div>
					<input type="hidden" name="tipo" value="1">
					<input type="hidden" name="ejercicio_id" value="{{$datos['ejercicio']['id']}}">
					<input type="hidden" name="practica_id" value="{{$datos['practica_id']}}">
					<input type="hidden" name="id" value={{$datos['id']}}>
					<input type="hidden" name="verdiv" value={{$datos['verdiv']}}>
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
			@else
				<form action="{{ action('PracticaController@practica2') }}" method="POST" class="form-horizontal">
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
					<input type="hidden" name="verdiv" value={{$datos['verdiv']}}>
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
			@endif
		</div>
	</div>
</div>
@endsection

@if($datos['verdiv']==true)
	
	@section('script-modal')
		<script type="text/javascript">
				
			$(document).ready(function(){
				$('#modalInformacion').modal('toggle')
			});	

		</script>
	@endsection	

@endif