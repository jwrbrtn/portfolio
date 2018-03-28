@extends('layouts.frontend')
@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        {{$post->title}}
      </h1>
      <h1 class="subtitle has-text-weight-normal">Published: {{ Carbon\Carbon::parse($post->created_at)->format('D d M Y') }} By Jessica Warburton </h1>

    </div>
  </div>
</section>
<div class="container content">
<div class="columns">
<div class="column is-three-fifths">
<p class="has-text-justified">{!! $post->body !!}</p>
</div>
<div class="column is-one-half">

</div>
</div>
</div>
@endsection
