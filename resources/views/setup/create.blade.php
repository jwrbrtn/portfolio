@extends('layouts.newapp')
@section('content')

<div class="container">
<form class="" action="setup" method="post" enctype="multipart/form-data">
  <div class="field">
  <label class="label">Site Title</label>
  <div class="control">
    <input class="input" name="sitetitle" type="text" placeholder="Your site's title">
  </div>
</div>


  <div class="field">
  <label class="label">Display Name</label>
  <div class="control">
    <input class="input" name="name" type="text" placeholder="Full Name">
  </div>
</div>




<div class="file">
  <label class="file-label">
    <input class="file-input" type="file" name="avatar">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Upload Avatar
      </span>
    </span>
  </label>
</div>

<div class="field">
  <label class="label">About Me</label>
  <div class="control">
    <textarea class="textarea" name="bio" placeholder="Write a short bio"></textarea>
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
