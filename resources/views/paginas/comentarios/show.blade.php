@extends('layouts.app')

@section('contentheader_title')
    {{ html_entity_decode(trans('noms.noms_title') )}}
@endsection

@section('contentheader_h1')
    {{ html_entity_decode(trans('noms.noms_titulo1') )}}
@endsection

@section('descripcion')
    {{ html_entity_decode(trans('noms.noms_descripcion') )}}
@endsection

@section('keywords')
    {{ html_entity_decode(trans('noms.noms_keywords') )}}
@endsection

@section('main_content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h2 class="text-center">{{ $post['title'] }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        {{$post['user_id']}}
                                    </div>
                                    <div class="col-md-6">
                                        {{$post['created_at']}}
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="text"  class="form-control" readonly name="post_id" value="{{$post['content']}}"/>
                                </div>
                            </div>

                        </div>
                        <form method="post" action="/nuevocomentario/{{$post['id']}}">  
                            @csrf
                            <div class="form-group" > 
                                <input class="form-control" id="content" name="content" placeholder="Añadir comentario"> </textarea>  
                                <input type="hidden" name="post_id" value="{{$post['id']}}" /> 
                            </div>
                            <div class="form-group" > 
                                <input type="submit" class="btn btn-success" value="Agregar comentario" />    
                            </div>
                        </form>
                        <h3 class="text-center"> Mostrar comentarios al post</h3>
                        @include('paginas.comentarios.commentdisplay', ['comment'=>$post['postcomment'], 'post_id'=>$post['id']])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

