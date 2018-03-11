@extends('layouts.app')
@section('content')
<div class="container">
<h1>Create Post</h1>
<form class="" action="/post/create" method="post">
  {{csrf_field()}}
  <input type="text" class="form-control" name="title" value=""></br>
  <textarea class="form-control" name="body" rows="8" cols="80"></textarea></br>
    <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
</form>

</div>


@endsection
