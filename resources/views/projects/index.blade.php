@extends('layouts.app')
@section('content')

<div class="container">


@foreach($projects as $project)


<h3>{{$project->title}}</h3>

@endforeach

</div>

@endsection
