<form action="{{route('nuevocomentario', $comment['post_id'])}}" method="POST">
	{{ csrf_field() }}
	
	@if (isset($comment->id))
		<input type="hidden" name="parent_id" value="{{$comment['id']}}">
	@endif
	
	<input type="hidden" name="user_id" value="{{\auth()->id()}}">
	<input type="hidden" name="post_id" value="{{$comment['post_id']}}">
 	
 	<div class="form-group">
		<label for="content">Content:</label>
		<textarea class="form-control" name="content" id="content"></textarea>
	</div>
  	<button type="submit" class="btn btn-primary">Send</button>
</form>