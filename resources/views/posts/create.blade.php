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

  <h1 class="title">Create new post</h1>
<form class="" action="/post/new" method="POST">
<div class="field">
  <label class="label">Name</label>
  <div class="control">
    <input name="title" class="input" type="text" placeholder="Text input">
    {{csrf_field()}}
  </div>
</div>



<div class="field">
  <label class="label">Message</label>
  <div class="control">
  <textarea id="summernote" name="editordata"></textarea>
  </div>
</div>



<div class="field is-grouped">
  <div class="control">
    <input type="submit" class="button" name="" value="Submit">
  </div>
  <div class="control">
    <button class="button is-text">Cancel</button>
  </div>
</div>

</form>
</div>


@endsection
