@extends('layouts.frontend')
@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <p><a href="/">Home</a> > <a href="/blog">Blog</a></p>
    </div>
  </div>
</section>


<div class="container">
</br>
<div class="columns is-mobile">
  <div class="column is-three-fifths is-offset-one-fifth">
    <h1 class="subtitle date">{{ Carbon\Carbon::parse($post->created_at)->format('D d M Y') }}</h1>
    <h1 class="title">
      <a>{{$post->title}}</a>
    </h1>
  <div class="content">
  <p class="">{!! $post->body !!}</p>
  </div>
  </div>
</div>

</div>

@endsection
