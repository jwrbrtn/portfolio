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
  <div class="column is-one-quarter">
    <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=468a8c18f5d811cf03c654b653b5089e&w=1000&q=80" alt="">
  </div>
  <div class="column">
    <h3 class="title is-3"><a href="/blog/{{$post->id}}">{{$post->title}}</a></h3>
    <h3 class="subtitle is-6">Published {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }} by Jessica Warburton</h3>
    <p>{{$post->body}}</p></br>
  </div>


  </div>
  @endforeach

  {{ $posts->links() }}</br>
</div>

@endsection
