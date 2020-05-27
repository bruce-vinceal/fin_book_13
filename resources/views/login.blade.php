@extends('layouts.layout')

@section('content')
<section class="login-sec text-center">
  <div class="login-container">
    <img class="mb-4" src="/img/logo.png" alt="" width="30%">
    <h1 class="mb-3">Login to Finote</h1>
    <form class="form-login" action="">
          <label for="loginEmail" class="sr-only">Email address</label>
          <input type="email" name="loginEmail" id="loginEmail" class="form-control" placeholder="Email address" required="" autofocus="">
          <label for="loginPwd" class="sr-only">Password</label>
          <input type="password" name="loginPwd" id="loginPwd" class="form-control" placeholder="Password" required="">
          <button class="btn btn-lg btn-primary btn-block my-3" id="login-btn" type="submit">Log in</button>
          <p class="my-3">Not a Member? <a href="signup">Sign up for Finote.</a></p>
      </form>
    </div>
</section>
@endsection