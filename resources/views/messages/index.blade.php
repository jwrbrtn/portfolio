@extends('layouts.backend')
@section('content')

<div class="container form-section">
<h1 class="title">All Messages</h1>

<table class="table is-fullwidth">
  <thead>
    <tr>
      <th><abbr title="Title">Name</abbr></th>
      <th>Email</th>
      <th>Body</th>
    </tr>
  </thead>

  <tbody>
      @foreach($messages as $message)
      <tr>
      <th><abbr title="Title">{{$message->name}}</abbr></th>
      <th><abbr title="Created At">{{$message->email}}</abbr></th>
      <th><abbr title="Last Updated">{{$message->body}}</abbr></th>
      <th><abbr title="Comments">Comments</abbr></th>
      </tr>
      @endforeach
  </tbody>
</table>

{{ $messages->links('messages.pagination') }}



</div>

@endsection
