<div class="blog-masthead">

    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-item active" href="#">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>
            
            @if (Auth::check())
                <a class="blog-nav-item ml-auto" href="#">{{ Auth::user()->name }}</a>
            @endif

        </nav>
    </div>

</div>