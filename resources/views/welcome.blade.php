<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$settings->sitetitle}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="/css/frontend.css">

    </script>
  </head>
  <body>

    <nav class="navbar is-transparent">
      <div class="navbar-brand">
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="/">
            Home
          </a>
          <a class="navbar-item" href="/blog">
            Blog
          </a>
          <a class="navbar-item" href="/projects">
            Portfolio
          </a>
          <a class="navbar-item" href="/contact">
            Contact
          </a>
        </div>


    </nav>






    <section class="hero is-primary is-medium">
      <div class="hero-body">
        <div class="container">
          <h1 class="hero-title">
            {{$settings->name}}
          </h1>

          <h2 class="">
          {{$settings->subtitle}}</h2></br>
          <a href="{{$settings->github}}"><i class="icon is-medium fab fa-github"></i></a>
          <a href="{{$settings->twitter}}"><i class="icon is-medium fab fa-twitter"></i></a></br>
        </div>
      </div>
    </section>

  </section>

  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column">
          <h3 class="title">Recent Blog Posts</h3>
          @foreach($posts as $post)

          <h1 class="date-title">{{ Carbon\Carbon::parse($post->created_at)->format('D d M Y') }}</h1>
          <h1 class="post-title-homepage"><a href="blog/{{$post->slug}}">{{$post->title}}</a></h1></br>

          @endforeach
        <a href="/blog" class="colored-link">View All Blog Posts</a>
        </div>
        <div class="column">
        <h3 class="title">About me</h3>
        <p>{{$settings->bio}}</p>
        </div>

      </div>
    </div>

  </section>





  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          {{$settings->footer}}
        </p>
      </div>
    </div>
  </footer>

  <script>
  document.addEventListener('DOMContentLoaded', function () {

    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

      // Add a click event on each of them
      $navbarBurgers.forEach(function ($el) {
        $el.addEventListener('click', function () {

          // Get the target from the "data-target" attribute
          var target = $el.dataset.target;
          var $target = document.getElementById(target);

          // Toggle the class on both the "navbar-burger" and the "navbar-menu"
          $el.classList.toggle('is-active');
          $target.classList.toggle('is-active');

        });
      });
    }

  });
  </script>
  </body>
</html>
