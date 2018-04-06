@extends('layouts.app')
@section('content')
<div class="container">
<h1>Edit Project</h1>
<form class="" action="/projects/{{$project->slug}}/edit" method="post">
  {{csrf_field()}}
  <input type="text" class="form-control" name="title" value="{{$project->title}}"></br>
  <textarea class="form-control" name="body" rows="8" cols="80">{{$project->body}}</textarea></br>
        <input type="hidden" name="_method" value="PATCH">
    <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
</form>

<form class="" action="/projects/{{$project->slug}}/delete" method="post">
  {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
    <input class="btn btn-danger" type="submit" name="Submit" value="Delete">
</form>

</div>


@endsection
