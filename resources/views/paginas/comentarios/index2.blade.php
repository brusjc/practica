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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Administrar publicaciones</h2>
                <a href="#" class="btn btn-success" style="float: right"> Crear mensaje </a> 
            </div>
            <div class="card-body">
                <table class="table table -bordered" > 
                    <thead>
                        <th width="5%" > Id </th> 
                        <th> Título </th>
                        <th width="15%" > Acción </th> 
                    </thead>
                    <tbody>
                        @foreach ($post as $post)
                        <tr>
                            <td> {{$post['id']}} </td>
                            <td> {{$post['title']}} </td>
                            <td>
                                <a href = "/post/{{$post['id']}}"class ="btn btn-primary"> Ver publicación </a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection