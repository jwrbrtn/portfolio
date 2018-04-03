
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
  <nav class="navbar dark" role="navigation" aria-label="main navigation">


<a class="navbar-item">
  Home
</a>
<a class="navbar-item">
  Blog
</a>
<a class="navbar-item">
  Projects
</a>
<a class="navbar-item">
  Contact
</a>
  </nav>

  <div class="columns">
<div class="column is-one-fifth">
  <aside class="menu">



    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="/home"><i class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
      <li><a href="/post/new"><i class="fas fa-pencil-alt"></i>  Create Post</a></li>
      <li><a href="/project/new"><i class="fas fa-folder-open"></i> Create Project</a></li>
    </ul>
    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="/allposts"><i class="fas fa-th"></i>  View All Posts</a></li>
      <li><a href="/allprojects"><i class="far fa-list-alt"></i>  View All Projects</a></li>
    </ul>

    <p class="menu-label">
      Settings
    </p>
    <ul class="menu-list">
      <ul class="menu-list">
        <li><a href="/settings/1/edit"><i class="fas fa-cog"></i>  Edit Settings</a></li>

      </ul>
    </ul>
  </aside>
</div>
<div class="columns">
 @yield('content')
</div>


  </div>



  <footer class="footer">
    <div class="container">
      <div class="content has-text-centered">
        <p>
          <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
          <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
          is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
        </p>
      </div>
    </div>
  </footer>
  <script>
       $('#summernote').summernote({
         placeholder: 'Hello stand alone ui',
         tabsize: 2,
         height: 300
       });
     </script>
  </body>
</html>
