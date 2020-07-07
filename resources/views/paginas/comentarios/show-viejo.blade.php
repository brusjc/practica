@extends('layouts.app')
@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>{{ $post->title }}</h1>
    	    <div>
    	         {{ $post->content }}
    	    </div>
 
            @include('comments.list', ['comments' => $post->comments])            
 
            @include('comments.form')
        </div>
    </div>
</div>
@endsection

