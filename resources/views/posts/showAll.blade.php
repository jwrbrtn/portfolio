@extends('layouts.backend')
@section('content')

<div class="container form-section">
<h1 class="title">All Posts</h1>

<table class="table is-fullwidth">
  <thead>
    <tr>
      <th><abbr title="Title">Title</abbr></th>
      <th>Team</th>
      <th>Created At</th>
      <th>Last Updated</th>
      <th><abbr title="Comments">Comments</abbr></th>
      <th><abbr title="Status">Status</abbr></th>
      <th><abbr title="Status">Edit</abbr></th>
      <th><abbr title="Status">Delete</abbr></th>
    </tr>
  </thead>

  <tbody>
      @foreach($posts as $post)
      <tr>
      <th><abbr title="Title">{{$post->title}}</abbr></th>
      <th>Team</th>
      <th><abbr title="Created At">{{$post->created_at}}</abbr></th>
      <th><abbr title="Last Updated">{{$post->updated_at}}</abbr></th>
      <th><abbr title="Comments">Comments</abbr></th>
      <th><abbr title="Status">Status</abbr></th>
      <th><abbr title="Status"><a href="/blog/{{$post->slug}}/edit" class="button is-primary">Edit</a></abbr></th>
      <th><abbr title="Status"><a class="button is-danger">Delete</a></abbr></th>
      </tr>
      @endforeach
  </tbody>
</table>
{{ $posts->links('posts.pagination') }}



</div>

@endsection
