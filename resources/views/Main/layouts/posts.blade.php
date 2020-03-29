<div class="card-columns">
    @foreach($posts as $post)
    	<div class="card">
    	    <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$post->image) }}" class="card-img-top"/>
    	    <div class="card-body">
    	        <h5 class="card-title">{{ $post->title }}</h5>
    	        <p class="card-text">
    	            <?php
    	                echo $post->body;
    	            ?>
    	        </p>
    	    </div>
    	    <div class="card-footer">
    	        <small class="text-muted">{{ $postsDate[$post->id] }}</small>
    	    </div>
    	</div>
    @endforeach
</div>
@if($posts->lastPage() !== 1)
	<input type="submit" name="addPost" value="Load more posts!" id="addPost" class="btn btn-light btn-lg btn-block"/>
@else
	<br/>
	<div class="alert alert-primary alert-dismissible fade show" role="alert">
	  	<strong>Sorry!</strong> But we have notjing to show you for now...
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif