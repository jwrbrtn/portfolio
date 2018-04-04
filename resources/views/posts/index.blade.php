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


  @foreach($posts as $post)
  <div class="columns">

  <div class="column">
    <h3 class="title is-3"><a href="/blog/{{$post->id}}">{{$post->title}}</a></h3>
    <h3 class="subtitle is-6">Published {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }} by <a>Jessica Warburton</a></h3>
      <p class="blurb">{!! $post->body !!}</p></br>
    <a class="button is-primary" href="/blog/{{$post->id}}" type="button" name="button">Read More</a>
  </div>


  </div>
  @endforeach

  {{ $posts->links() }}</br>
</div>

@endsection
