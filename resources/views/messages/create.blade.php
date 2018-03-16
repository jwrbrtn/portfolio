@extends('layouts.frontend')
@section('content')
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

@endsection