@extends('frontend.layouts.esfrontend')

@section('contentheader_title'){{trans('examenes.examen_title')}}@endsection

@section('contentheader_h1'){{trans('examenes.examen_h1')}}@endsection

@section('breadcrumb1')<a href="{{session('BC1')}}">{{ session('BC1texto') }}</a>@endsection

@section('breadcrumb2')<a href="{{session('BC2')}}">{{ session('BC2texto') }}</a>@endsection

@section('breadcrumb3')<a href="{{session('BC3')}}">{{ session('BC3texto') }}</a>@endsection

@section('breadcrumb4')<a href="{{session('BC4')}}">{{ session('BC4texto') }}</a>@endsection

@section('descripcion'){{trans('examenes.examen_descripcion')}}@endsection

@section('keywords'){{trans('examenes.examen_keywords')}}"@endsection

@section('main_content')

<section>
	<div class="row mt-3">
		<div class="col-md-10">
			<div class="box box-info mb-0 pt-3">
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
				<form action="/examen2/{{$pregunta['id']}}" method="POST" class="form-horizontal border border-primary rounded bg-light px-3">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="PUT">
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<div class="box box-solid">
									<div class="box-body">
										{!!$pregunta['enunciado'][0]['enunciado']!!}
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<div class="box box-solid">
									<div class="box-body text-center mt-4 mb-4">
										@if($pregunta['pregunta']['imagen']!="")
											<audio id="sonido" src="/{{$pregunta['pregunta']['imagen']}}" controls></audio>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<p>{{$pregunta['pregunta']['pregunta']}}</p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<ul>
								@foreach($pregunta['respuesta'] as $key=>$resp)
									<p><input type="radio" name="mirespuesta" value="{{$resp['id']}}">							{{$resp['respuesta']}}</p>
									<br/>
								@endforeach
							</ul>
						</div>
					</div>
					<input id="subarea_id" type="hidden" name="subarea_id" value="{{$pregunta['subarea_id']}}">
					<input id="pregunta_id" type="hidden" name="pregunta_id" value="{{$pregunta['pregunta_id']}}">
					<div class="box-footer row invoice-info">
						<div class="col-sm-6 invoice-col">
							<button type="submit" class="btn btn-info pull-right">Enviar</button>
						</div>
						<div class="col-sm-6 invoice-col">
							<a href="{{session('BC4')}}">Go Back</button></a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-2">
	    	 @include('paginas.publi.adaptable_vertical')
		</div>
	</div>
</section>

<section>
	<div class="row mt-0">
	     @include('paginas.publi.examenes_bajo_introduccion_728x90')
	</div>
</section>

@endsection

