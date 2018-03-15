@extends('layouts.frontend')
@section('content')

<div class="container">
<figure class="image">
  <img src="/images/{{$post->featureimage}}" alt="">
</figure>
<h3 class="title">{{$post->title}}</h3>
<p>{{$post->created_at}}</p>

<p>{!! $post->body !!}</p>
</div>
@endsection
