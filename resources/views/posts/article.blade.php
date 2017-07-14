    <div class="blog-post">

      <h2 class="blog-post-title">
        <a href="#">
            {{ $post['title'] }}
        </a>
      </h2>

      <p class="blog-post-meta">
      {{ $post['name'] }} on
          {{ $post->created_at->toFormattedDateString() }}
      </p>

      {{ $post->body }}

  </div>