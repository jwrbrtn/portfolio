@extends('layouts.backend')
@section('content')

<div class="container form-section">
<h1 class="title">Messages</h1>

<table class="table is-fullwidth">
  <thead>
    <tr>
      <th><abbr title="Comments">Sender</abbr></th>
      <th><abbr title="Status">Email</abbr></th>
      <th><abbr title="Status">Created</abbr></th>
      <th><abbr title="Status">Read</abbr></th>
      <th><abbr title="Status">Delete</abbr></th>
    </tr>
  </thead>

  <tbody>
    <tr>
      @foreach($messages as $message)
      <th>{{$message->name}}</th>
      <th>{{$message->email}}</th>
      <th>{{$message->created_at}}</th>
      <th><a href="/messages/{{$message->id}}/show" class="button is-primary">Read</a></th>
      <form class="" action="/messages/{{$message->id}}/delete" method="post">
        {{csrf_field()}}
        <th><input class="button is-danger" type="submit" name="" value="Delete"></th>
      </form>

      @endforeach
    </tr>
  </tbody>
</table>



</div>

@endsection
