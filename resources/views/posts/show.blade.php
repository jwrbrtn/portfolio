@extends('layouts.frontend')
@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <p><a href="/">Home</a> > <a href="/blog">Blog</a></p>
    </div>
  </div>
</section>
<div class="container content">
<div class="columns">
<div class="column is-three-fifths">
  <h1 class="title">
    {{$post->title}}
  </h1>
  <h3 class="is-size-6 byline">Published: {{ Carbon\Carbon::parse($post->created_at)->format('D d M Y') }} By Jessica Warburton </h3>

<p class="has-text-justified">{!! $post->body !!}</p>
</div>
<div class="column is-one-half">

</div>
</div>
</div>
@endsection
