@extends('layouts.backend')
@section('content')

<div class="container form-section">

<h1 class="is-title">From: {{$message->name}}</h1>
<h1 class="is-title">Email: {{$message->email}}</h1>
<p>{{$message->body}}</p>
</div>

@endsection
