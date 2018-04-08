@extends('layouts.frontend')
@section('content')

<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
 Blog Posts
      </h1>

    </div>
  </div>
</section>

</section></br></br>
<div class="container">
<div class="columns">
<div class="column is-three-fifths is-offset-one-fifth">


  @foreach($projects as $project)
  <h1 class="subtitle date">{{ Carbon\Carbon::parse($project->created_at)->format('D d M Y') }}</h1>
  <h1 class="title"><a href="blog/{{$project->slug}}">{{$project->title}}</a></h1>
  <a class="readmore colored-link" href="projects/{{$project->slug}}">Read More</a></br>
  <hr>
  @endforeach

</div>
</div></br>

{{ $projects->links('posts.pagination') }}
</div>
@endsection
