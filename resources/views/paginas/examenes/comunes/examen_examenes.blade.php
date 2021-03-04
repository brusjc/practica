<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('examenes.exaB1_titulo200') }} {{$datos['mes']}} {{ trans('examenes.exaB1_titulo101') }} {{$datos['ano']}}</h2>
                <div class="text-left">
                    @if(Auth::guest())
                        {{ trans('message.solo usuarios registrados') }}
                    @endif
                </div>
                <div class="text-right">
                    @if(!Auth::guest())
                        <a href="/examennuevo/{{$codigo}}">
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
                        <th>{{ trans('examenes.Examen') }}</th>
                        <th>{{ trans('examenes.Fecha') }}</th>
                        <th>{{ trans('examenes.Progreso') }}</th>
                        <th style="width: 5%">%</th>
                    </tr>
                    @if(!Auth::guest())
                        @if($examenes['original']['status']['error']==0)
                            @foreach($examenes['original']['data'] as $examen)
                                <tr>
                                    <td><a href="/exameninicio/{{$examen['id']}}">{{$examen['prueba']['nombre']}}</a></td>
                                    <td><a href="/exameninicio/{{$examen['id']}}">{{date('d-m-Y', strtotime($examen['created_at']))}}</a></td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-primary" style="width: {{$examen['porcentaje']}}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">{{$examen['porcentaje']}}%</span></td>
                                </tr>
                            @endforeach
                        @endif
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
