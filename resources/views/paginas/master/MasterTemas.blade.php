@extends('layouts.frontAdmin.general')

@section('contentheader_title'){{trans('message.informacion_examen_master')}}@endsection

@section('contentheader_h1'){{trans('message.informacion_examen_master')}}@endsection

@section('breadcrumb1')<a href="/es/master">{{ session('BC1texto') }}</a>@endsection

@section('descripcion')"Todos los examenes"@endsection

@section('keywords')"Examenes"@endsection

@section('main_content')
	<h3>{{$miprueba['original']['data'][0]['prueba']['nombre']}} - {{$miprueba['original']['data'][0]['prueba']['codigo']}}</h3>
	<div class="row">
		<div class="col-8">
			<div class="card">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
	                    <tr>
	                        <th style="width: 8%">Área</th>
	                        <th style="width: 62%">Subarea</th>
	                        <th style="width: 5%">Verificado</th>
	                        <th><a href="/es/master">Go Back</button></a></th>
	                    </tr>
						@if(!is_null($miprueba['original']['data']))
							@foreach($miprueba['original']['data'] as $key1=>$area)
						        <tr>
						            <td colspan="2"><h4>{{$area['temanombre']['nombre']}}</h4></td>
						            <td>
						            	@if($area['verificado']==null)
						            		<i class="fa fa-exclamation-circle"></i>
						            	@elseif($area['verificado']==1)
											<i class="fa fa-check text-lime"></i>
										@else
						            		<i class="fa fa-times text-red"></i>
						            	@endif
						            </td>
						            <td></td>
						        </tr>
								@foreach($area['subtema'] as $key2=>$subarea)
							        <tr>
							            <td></td>
							            <td><a href="/masterVerificador/{{$subarea['id']}}">{{$area['subtemanombre'][$key2]['nombre']}}</a></td>
						            <td>
						            	@if($subarea['verificado']==null)
						            		<i class="fa fa-exclamation-circle"></i>
						            	@elseif($subarea['verificado']==1)
											<i class="fa fa-check text-lime"></i>
										@else
						            		<i class="fa fa-times text-red"></i>
						            	@endif
						            </td>
							            <td></td>
							        </tr>
								@endforeach        
							@endforeach        
						@endif
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection





