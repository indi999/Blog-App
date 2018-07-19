<hr/>
@include('layouts.errors')

<!-- Comments Form -->
<form method="POST" action="/posts/{{ $post->id }}/comments">
    @csrf

    <div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
        <form>
        <div class="form-group">
            <textarea class="form-control" rows="3" name="body" placeholder="Your text here ..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</form>

<!-- All Comment -->  
    @foreach($post->comments as $comment)
    <!-- Single Comment -->
    <div class="media mb-4">
    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
    <div class="media-body">
        <h5 class="mt-0">Commenter Name</h5>
        <p>{{ $comment->created_at->diffForHumans() }} <span class="badge badge-secondary">New</span></p>
        {{ $comment->body }}
    </div>
    </div>
    @endforeach


      

        


