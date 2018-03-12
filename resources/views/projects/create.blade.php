@extends('layouts.backend')
@section('content')
<div class="container form-section">
  <h1 class="title">Create new project</h1>
<form class="" action="/project/new" method="POST">
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
