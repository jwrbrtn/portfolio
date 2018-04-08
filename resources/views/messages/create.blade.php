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
<div class="animated fadeInDown notification is-success message-created">
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
  <h1 class="title">Let's get in touch!</h1>
  <p>{!! $settings->contactText !!}</p></br>

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
    <button class="button is-primary">Submit</button>
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
