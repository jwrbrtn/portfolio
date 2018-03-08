@extends('layouts.app')
@section('content')
<div class="container">
  <h1>Blog Posts</h1>

  @foreach($posts as $post)
  <h3><a href="/blog/{{$post->id}}">{{$post->title}}</a></h3>
  <p>{{$post->created_at}}</p>

  @endforeach

  {{ $posts->links() }}
</div>

@endsection
