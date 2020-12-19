@extends('layouts.app')

@section('contentheader_title'){{ html_entity_decode(trans('noms.noms_title') )}}@endsection

@section('contentheader_h1'){{ html_entity_decode(trans('noms.noms_titulo1') )}}@endsection

@section('descripcion'){{ html_entity_decode(trans('noms.noms_descripcion') )}}@endsection

@section('keywords'){{ html_entity_decode(trans('noms.noms_keywords') )}}@endsection

@section('main_content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Nueva publicación</h2>
            </div>
            <div class="card-body">
                <form action="{{route('comentario1')}}" method="POST">
                    {{ csrf_field() }}
                    
                    @if (isset($comentario->id))
                        <input type="hidden" name="parent_id" value="">
                    @endif
                    
                    <input type="hidden" name="user_id" value="{{\auth()->id()}}">
                    <input type="hidden" name="post_id" value="">
                    
                    <div class="form-group">
                        <label for="content">Comentario:</label>
                        <textarea class="form-control" name="content" id="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection