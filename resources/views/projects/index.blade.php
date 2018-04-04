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


  @foreach($projects as $project)


  @endforeach
</div>



@endsection
