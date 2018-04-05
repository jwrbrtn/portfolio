@extends('layouts.frontend')
@section('content')

<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
Projects
      </h1>

    </div>
  </div>
</section>

</section></br></br>
<div class="container">
<div class="columns">
<div class="column is-three-fifths is-offset-one-fifth">


  @foreach($projects as $project)

  <h1 class="title">{{$project->title}}</h1>
  <h1 class="subtitle">Published {{$project->created_at}}</h1>

  <a class="button" href="projects/{{$project->id}}">Read More</a></br></br>
  <hr>
  @endforeach

</div>
</div></br>

{{ $projects->links('projects.pagination') }}
</div>
@endsection
