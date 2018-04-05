@extends('layouts.frontend')
@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <p><a href="/">Home</a> > <a href="/projects">Projects</a></p>
    </div>
  </div>
</section>


<div class="container">
<div class="content ">
  <h1 class="title ">
    {{$project->title}}
  </h1>
  <h3 class="is-size-6 byline">Published: {{ Carbon\Carbon::parse($project->created_at)->format('D d M Y') }} By Jessica Warburton </h3>

<p class="">{!! $project->body !!}</p>
</div>
</div>

@endsection
