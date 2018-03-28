@extends('layouts.frontend')
@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Contact
      </h1>

    </div>
  </div>
</section>
<div class="container">

  @if (session('status'))
<div class="notification is-success">
  <button class="delete"></button>
          {{ session('status') }}
</div>
  @endif

  @if ($errors->any())
  <div class="notification is-danger">
    <button class="delete"></button>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
  @endif
<div class="columns contact">
<div class="column is-one-half">
  <h1 class="title">Contacting me</h1>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></br>

  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>
<div class="column is-one-half">
<form class="" action="/contact" method="post">
  <div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input class="input" type="text" name="name" placeholder="Text input">
  </div>
</div>
{{csrf_field()}}

<div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input class="input" type="email" name="email" placeholder="Text input">
  </div>
</div>


<div class="field">
  <label class="label">Message</label>
  <div class="control">
    <textarea class="textarea" name="body" placeholder="Textarea"></textarea>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-text">Cancel</button>
  </div>
</div>
</form>
</div>
</div>
</div>
@endsection
