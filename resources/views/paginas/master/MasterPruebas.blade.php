@extends('layouts.app')

@section('contentheader_title')
	Todos los exámenes
@endsection

@section('descripcion')
    "Todos los examenes"
@endsection

@section('keywords')
    "Examenes"
@endsection

@section('main_content')

<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-header  with-border">
                    <h3 class="box-title">Todos los exámenes ordenados por nivel</h3>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>Examen</th>
                            <th>Fecha</th>
                            <th>Código</th>
                            <th>Convocatoria</th>
                            <th>Verificado</th>
                        </tr>
                    	@if(!is_null($pruebas['original']['data']))
							@foreach($pruebas['original']['data'] as $key1=>$prueba)
								<tr>
									<td><a href="/temasmaster/{{$prueba['id']}}">{{$pruebas['original']['data'][$key1]['nombre']}}</a></td>
									<td><a href="/temasmaster/{{$prueba['id']}}">{{$pruebas['original']['data'][$key1]['fecha']}}</a></td>
									<td><a href="/temasmaster/{{$prueba['id']}}">{{$pruebas['original']['data'][$key1]['codigo']}}</a></td>
                                    <td class="text-center">
                                        @if($prueba['convocatoria_id']==1)
                                            Mañana 9h
                                        @elseif($prueba['convocatoria_id']==2)
                                            Mañana 12h
                                        @else
                                            Tarde
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($prueba['verificado']==null)
                                            <i class="fa fa-exclamation-circle"></i>
                                        @elseif($prueba['verificado']==1)
                                            <i class="fa fa-check text-lime"></i>
                                        @else
                                            <i class="fa fa-times text-red"></i>
                                        @endif
                                    </td>
								</tr>
							@endforeach
						@endif
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
