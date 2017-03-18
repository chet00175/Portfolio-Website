@extends('main')

@section('title', '| Profile')

@section('content')

  <div class="container">

    <form class="form-signin">
      <h2 class="form-signin-heading">Please sign in</h2>
      <input type="text" class="form-control" placeholder="Username" required autofocus>
      <input type="password" class="form-control" placeholder="Password" required>
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

  </div>

  <div class="container">
    <form class="form-signup">
      <h4 class="form-signup-heading" style="padding-bottom: 20px;">Need to sign up? Provide details below.</h4>
      <label>Enter your full name:</label>
      <input type="text" class="form-control" placeholder="Name" required>
      <label>Select a username:</label>
      <input type="text" class="form-control" placeholder="Username" required>
      <label>Provide a password:</label>
      <input type="password" class="form-control" placeholder="Password" required>
      <label>Confirm password:</label>
      <input type="password" class="form-control" placeholder="Password" required>
      <div class="form-signup-space"></div>
      <div style="text-align:center;">
        <button class="btn btn-lg btn-primary" type="submit">Sign up</button>
      </div>
    </form>
  </div>

@endsection