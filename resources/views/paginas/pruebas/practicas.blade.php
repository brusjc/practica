<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>Prácticas del usuario de cos-huma</h2>
                <div class="text-left">
                    @if(Auth::guest())
                        {{ trans('message.solo usuarios registrados') }}
                    @endif
                </div>
                <div class="text-right">
                    @if(!Auth::guest())
                        <a href="/examennuevo/1">
                          <button type="button" class="btn btn-primary">{{ trans('message.examen_nuevo') }}</button>
                       </a>
                    @else
                        <a class="mb-2 btn btn-info" href="/login">{{ trans('message.login') }}</a>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Fecha</th>
                        <th>{{ trans('examenes.Progreso') }}</th>
                        <th>Nota</th>
                    </tr>
                    @if(!Auth::guest())
                        @if($datos['original']['status']['error']==0)
                            @foreach($datos['original']['data'] as $practica)
                                <tr>
                                    <td>{{date('d-m-Y', strtotime($practica['created_at']))}}</td>
                                    <td>{{$practica['contestadas']}}/10</td>
                                    @if($practica['nota']>=5)
                                        <td class="text-success">{{$practica['nota']}}</td>
                                    @else
                                        <td class="text-danger">{{$practica['nota']}}</td>
                                    @endif
                                </tr>
                            @endforeach
                        @endif
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
