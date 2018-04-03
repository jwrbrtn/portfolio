@extends('layouts.backend')
@section('content')

<div class="container form-section">
<h1 class="title">All Projects</h1>

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
    <tr>
      @foreach($projects as $project)
      <th><abbr title="Title">{{$project->title}}</abbr></th>
      <th>Team</th>
      <th><abbr title="Created At">{{$project->created_at}}</abbr></th>
      <th><abbr title="Last Updated">{{$project->updated_at}}</abbr></th>
      <th><abbr title="Comments">Comments</abbr></th>
      <th><abbr title="Status">Status</abbr></th>
      <th><abbr title="Status"><a href="/projects/{{$project->id}}/edit" class="button is-primary">Edit</a></abbr></th>
      <th><abbr title="Status"><a class="button is-danger">Delete</a></abbr></th>
      @endforeach
    </tr>
  </tbody>
</table>



</div>

@endsection
