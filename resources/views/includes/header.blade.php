<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Yourname Blog</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('blog.index') }}">Blog <span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('about') }}">About Me</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>