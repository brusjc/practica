@foreach ($post['postcomment'] as $comment)
<div class="row">
    <div class="col-md-1">
        <i class="fas fa-edit"></i>
    </div>
    <div class="col-md-11">
        <div class="display-comment" @if($comment['parent_id']!=null) style="margin-left: 40px;" @endif> 
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        {{$comment['content']}}
                    </div>
                    <div class="col-md-6">
                        {{$comment['created_at']}}
                    </div>
                </div>
                <div class="row">
                    <input type="text"  class="form-control" readonly name="post_id" value="{{$comment['content']}}" />
                </div>
            </div>
            <form method="post" action="/nuevocomentario/{{$comment['post_id']}}">  
                @csrf
                <div class="form-group" > 
                    <input class="form-control" id="content" name="content" placeholder="Añadir comentario"> </textarea>  
                    <input type="hidden" name="post_id" value="{{$post['id']}}" /> 
                    <input type="hidden" name="parent_id" value="{{$comment['id']}}" /> 
                </div>
                <div class="form-group" > 
                    <input type="submit" class="btn btn-success" value="Agregar comentario" />    
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach