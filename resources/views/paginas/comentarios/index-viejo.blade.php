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
                <h3>Últimos post</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                @foreach($post as $key=>$post)
                    <h3>{{ $post['title'] }}</h3>
            	    <div>
            	         {{ $post['content'] }}
            	    </div>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#reply-null" aria-expanded="false" aria-controls="reply-null">
                        Reply
                    </button>

                    @foreach($post['postcomment'] as $comment)
                        <div class="p-4 border-left my-3">
                            <p class="font-weight-bold">User {{ $comment['user_id'] }}:</p>
                            <p>{{ $comment['content'] }}</p>
                            
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#reply-{{$comment['id']}}" aria-expanded="false" aria-controls="reply-{{$comment['id']}}">
                                Reply
                            </button>
                        </div>
                    @endforeach
                @endforeach
            </div>
       </div> 
    </div>
</div>
@endsection

