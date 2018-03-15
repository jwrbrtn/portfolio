@extends('layouts.frontend')
@section('content')

<div class="container">
<figure>
  <img src="/images/{{$post->featureimage}}" alt="">
</figure>
<h3 class="title">{{$post->title}}</h3>
<p>{!! $post->body !!}</p>
</div>

@endsection
