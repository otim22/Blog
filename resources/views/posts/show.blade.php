@extends ('layouts.master')

@section ('content')

<div class="col-sm-8 blog-main">

  <h1>{{ $post->title }} </h1>

  @if (count($post->tags))
    <ul>
     @foreach ($post->tags as $tag)
        <li>
          <a href="/posts/tags/{{ $tag->name }}">
            {{ $tag->name }}
          </a>
        </li>
     @endforeach 
    </ul>
  @endif

      {{ $post->body }}

  <hr>

  <div class="comments">
  	<ul class="list-group">

  		@foreach ($post->reactions as $reaction)
			<li class="list-group-item">
      
				<strong>
					{{ $reaction->created_at->diffForHumans() }} &nbsp;
				</strong>

				{{ $reaction->body }}

			</li>
  		@endforeach

  	</ul>
    </div>

  	<div class="card">
  		<div class="card-block">
  			<form method="POST" action="/posts/{{ $post->id }}/reactions">

  				{{ csrf_field() }}

  				<div class="form-group">
  					<textarea class="form-control" 
  						      name="body" placeholder="Your comment here" required>
  					</textarea>
  				</div>

  				<div class="form-group">
					 <button type="submit" class="btn btn-primary">Add comment</button>
				  </div>

				@include('layouts.errors')

  			</form>
  	</div>
  </div>

</div>
@endsection