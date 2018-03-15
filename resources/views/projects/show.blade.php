@extends('layouts.frontend')
@section('content')

<div class="container">
<figure>
  <img src="/images/{{$project->featureimage}}" alt="">
</figure>
<h3 class="is-title">{{$project->title}}</h3>
{!! $project->body !!}
</div>

@endsection
