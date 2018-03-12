@extends('layouts.frontend')
@section('content')

<div class="container">
<h3 class="title">{{$post->title}}</h3>
<p>{!! $post->body !!}</p>
</div>

@endsection
