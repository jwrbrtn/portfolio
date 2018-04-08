@extends('layouts.newapp')
@section('content')

<div class="container">
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
<form class="" action="setup" method="post" enctype="multipart/form-data">
  <div class="field">
  <label class="label">Display Name</label>
  <div class="control">
    <input class="input" name="name" type="text" placeholder="Full Name">
  </div>
</div>

<div class="field">
<label class="label">Subtitle</label>
<div class="control">
  <input class="input" name="subtitle" type="text" placeholder="Full Name">
</div>
</div>

<div class="field">
  <label class="label">About Me</label>
  <div class="control">
    <textarea class="textarea" id="about" name="bio" placeholder="Write a short bio"></textarea>
  </div>
</div>

<div class="field">
  <label class="label">Footer</label>
  <div class="control">
    <textarea class="textarea" id="footer" name="footer" placeholder="Text that will appear in your footer"></textarea>
  </div>
</div>

<div class="field">
  <label class="label">Contact Page Text</label>
  <div class="control">
    <textarea class="textarea" id="contact" name="contactText" placeholder="Text that will appear on contact page"></textarea>
  </div>
</div>

  <div class="field">
  <label class="label">Twitter</label>
  <div class="control">
    <input class="input" name="twitter" type="text" placeholder="Your twitter profile">
  </div>
</div>
{{csrf_field()}}

  <div class="field">
  <label class="label">Github</label>
  <div class="control">
    <input class="input" name="github" type="text" placeholder="Your Github Profile">
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <input class="button" type="submit" name="" value="Submit">
  </div>

</div>
</form>
</div>

@endsection
