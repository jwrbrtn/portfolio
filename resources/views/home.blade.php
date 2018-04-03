@extends('layouts.backend')

@section('content')
<section class="section">
  <div class="container">
    @if (session('status'))
  <div class="notification is-success">
    <button class="delete"></button>
            {{ session('status') }}
  </div>
    @endif
    <div class="tile is-ancestor">
<div class="tile is-vertical is-8">
  <div class="tile">
    <div class="tile is-parent is-vertical">
      <article class="tile is-child notification is-primary">
        <p class="title">{{$posts}}</p>
        <p class="subtitle">Posts</p>
      </article>
      <article class="tile is-child notification is-warning">
        <p class="title">{{$projects}}</p>
        <p class="subtitle">projects</p>
      </article>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification is-info">
        <p class="title">{{$messages}}</p>
        <p class="subtitle">Messages
      </article>
    </div>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-danger">
      <p class="title">Wide tile</p>
      <p class="subtitle">Aligned with the right tile</p>
      <div class="content">
        <!-- Content -->
      </div>
    </article>
  </div>
</div>
<div class="tile is-parent">
  <article class="tile is-child notification is-success">
    <div class="content">
      <p class="title">Tall tile</p>
      <p class="subtitle">With even more content</p>
      <div class="content">
        <!-- Content -->
      </div>
    </div>
  </article>
</div>
</div>
  </div>
</section>
@endsection
