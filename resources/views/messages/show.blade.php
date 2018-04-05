@extends('layouts.backend')
@section('content')

<div class="container form-section">



<div class="card">
  <header class="card-header">
    <p class="card-header-title">
      From: {{$message->name}}

    </p>

  </header>
  <div class="card-content">
    <div class="content">
      <time datetime="2016-1-1"><i>Recieved: {{ Carbon\Carbon::parse($message->created_at)->format('D d M Y') }}</i></time></br></br>
      <p>{{$message->body}}</p>
    </br></br>
      <a href="#">{{$message->email}}</a>
    </div>
  </div>
</div>


</div>

@endsection
