@extends('layouts.backend')
@section('content')

<div class="container form-section">
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

<h1 class="title">Edit Settings</h1>
<form class="" action="/settings/{{$settings->id}}/edit" method="POST" enctype="multipart/form-data">
  <div class="field">
  <label class="label">Display Name</label>
  <div class="control">
    <input class="input" name="name" type="text" value="{{$settings->name}}" placeholder="Full Name">
  </div>
</div>

<div class="field">
<label class="label">Subtitle</label>
<div class="control">
  <input class="input" name="subtitle" type="text" value="{{$settings->name}}" placeholder="Full Name">
</div>
</div>

<div class="field">
  <label class="label">About Me</label>
  <div class="control">
    <textarea class="textarea" name="bio" rows="10" placeholder="Write a short bio">{{$settings->bio}}</textarea>
  </div>
</div>

<div class="field">
  <label class="label">Contact me text</label>
  <div class="control">
    <textarea class="textarea" name="contactText" rows="10" placeholder="Write a short bio">{{$settings->contactText}}</textarea>
  </div>
</div>

<div class="field">
  <label class="label">Footer Text</label>
  <div class="control">
    <textarea class="textarea" name="footer" rows="5" placeholder="Text to include in footer">{{$settings->footer}}</textarea>
  </div>
</div>

  <div class="field">
  <label class="label">Twitter</label>
  <div class="control">
    <input class="input" name="twitter" value="{{$settings->twitter}}" type="text" placeholder="Your twitter profile">
  </div>
</div>
{{csrf_field()}}
<input type="hidden" name="_method" value="PATCH">

  <div class="field">
  <label class="label">Github</label>
  <div class="control">
    <input class="input" name="github" value="{{$settings->github}}" type="text" placeholder="Your Github Profile">
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
