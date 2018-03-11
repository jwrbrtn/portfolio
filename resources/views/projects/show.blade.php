@extends('layouts.app')
@section('content')

<div class="container">
<h3>{{$project->title}}</h3>
<p>{{$project->body}}</p>
</div>

@endsection
