@extends('layouts.app')
@section('content')

<div class="container">
<h1>Create Project</h1>
<form class="" action="/project/new" method="post">
  {{csrf_field()}}
  <input type="text" class="form-control" name="title" value=""></br>
  <textarea class="form-control" name="body" rows="8" cols="80"></textarea></br>
  <input class="btn btn-success" type="submit" name="" value="Create">
</form>


</div>
@endsection
