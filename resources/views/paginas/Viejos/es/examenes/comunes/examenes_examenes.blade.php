<div class="row mt-5">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>{{ trans('esexamenes.A2_titulo300') }}</h2>
                <div class="text-left">
                    @if(Auth::guest())
                        {{ trans('message.solo usuarios registrados') }}
                    @endif
                </div>
                <div class="text-right">
                    @if(Auth::guest())
                        <a class="mb-2 btn btn-info" href="/login">{{ trans('message.login') }}</a>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>{{ trans('esexamenes.Examen') }}</th>
                        <th>{{ trans('esexamenes.Fecha') }}</th>
                        <th>{{ trans('esexamenes.Progreso') }}</th>
                        <th style="width: 5%">%</th>
                    </tr>
                    @if(!Auth::guest())
                        @if($pruebas)
                            @if($pruebas['original']['status']['error']==0)
                                @foreach($pruebas['original']['data'] as $prueba)
                                    <tr>
                                        <td>{{$prueba['nombre']}}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @foreach($prueba['examen'] as $examen)
                                        <tr>
                                            <td></td>
                                            <td><a href="exameninicio/{{$examen['id']}}">{{date('d-m-Y', strtotime($examen['created_at']))}}</a></td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger">
                                                        {{$examen['porcentaje']}}%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-red">{{$examen['porcentaje']}}%</span></td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endif
                        @endif
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
