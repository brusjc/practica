@if($pruebas)
    <h2>{{ trans('examenes.A2_titulo200') }}</h2>
    <div class="row content mt-5">
        @if($pruebas['original']['status']['error']==0)
            @foreach($pruebas['original']['data'] as $key=>$nivel)
                <div class="col-lg-4 col-md-4">
                    <a class="mb-2 btn btn-block btn-info pt-3 pb-3 mb-4" href="{{$miurl}}/{{$nivel['codigo']}}">{{$nivel['nombre']}}</a>
                </div>
            @endforeach
        @endif
    </div>
@endif
