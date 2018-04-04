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
          <h1 class="title">
            {{$settings->name}}
          </h1>
          <h2 class="subtitle">
          {{$settings->subtitle}}</br>    <i class="icon is-medium fab fa-github"></i>
               <i class="icon is-medium fab fa-twitter"></i>
          </h2>
          <p>
{{$settings->bio}}
          </p>
        </div>
      </div>
    </section>

  </section>

  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column">
          <h3 class="title">Recent Blog Posts</h3>
          <a href="/blog">View All Blog Posts</a>
          <hr>
          @foreach($posts as $post)

          <p><a href="/blog/{{$post->id}}">{{$post->title}}</a></p></br>

          @endforeach
        </div>
        <div class="column">
          <h3 class="title">Recent Projects
          </h3>
          <a href="/projects">View All Projects</a>
          <hr>
          @foreach($projects as $project)

          <p><a href="/projects/{{$project->id}}">{{$project->title}}</a></p></br>

          @endforeach
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


  </body>
</html>
