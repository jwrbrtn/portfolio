@extends('layouts.frontend')
@section('content')

<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
 Blog Posts
      </h1>

    </div>
  </div>
</section>

</section></br></br>
<div class="container">
<div class="columns">
<div class="column is-three-fifths is-offset-one-fifth">


  @foreach($posts as $post)
  <h1 class="subtitle date">{{ Carbon\Carbon::parse($post->created_at)->format('D d M Y') }}</h1>
  <h1 class="title"><a href="blog/{{$post->slug}}">{{$post->title}}</a></h1>
  <p class="excerpt">{{$post->excerpt}}</p></br>
  <a class="readmore colored-link" href="blog/{{$post->slug}}">Read More</a></br>
  <hr>
  @endforeach

</div>
</div></br>

{{ $posts->links('posts.pagination') }}
</div>
@endsection
