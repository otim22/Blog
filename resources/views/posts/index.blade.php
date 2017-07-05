@extends ('layouts.master')

@section ('content')

<div class="col-sm-8 blog-main">

  @foreach ($posts as $post)
    @include('posts.article')
  @endforeach  

  <nav>
    <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul>
  </nav>

</div>

@endsection 