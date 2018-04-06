@extends('layouts.login')

@section('content')

<section class="hero is-success is-fullheight">
<div class="hero-body">
<div class="container">


<div class="card">
  <header class="card-header">
    <p class="card-header-title">
      Login
    </p>
    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-user-circle" aria-hidden="true"></i>
      </span>
    </a>
  </header>
<div class="card-content">
<form role="form" method="POST" action="{{ url('/login') }}">
  {{csrf_field()}}
<div class="field">
  <div class="control">
    <input class="input" name="email" type="email" placeholder="Email">
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif

  </div>
</div>
<div class="field">
  <div class="control">
    <input class="input" name="password" type="password" placeholder="Password">
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  </div>
</div>
<div class="field">
  <div class="control">
    <input class="button" type="submit" value="Login" placeholder="Password">
  </div>
</div>
</div>
</div>
</form>
</div>
</div>

</section>

@endsection
