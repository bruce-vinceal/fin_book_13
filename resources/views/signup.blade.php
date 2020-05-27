@extends('layouts.layout')

@section('content')
<section class="signup-sec">
    <div class="signup-container">
              <h1 class="mb-3">Create Account</h1>
    <form class="form-signup" action="/signup" method="POST">
    @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFname">First Name</label>
                <input type="firstName" name="fname" class="form-control" id="inputFname" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputLname">Last Name</label>
                <input type="lastName" class="form-control" name="lname" id="inputLname" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputBday">Birth Date</label>
            <input type="date" name="birthday" id="inputBday" class="form-control">
        </div>
        <div class="form-group">
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="sex" id="GenderMale" class="custom-control-input">
            <label class="custom-control-label" for="GenderMale">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="sex" id="GenderFemale" class="custom-control-input">
            <label class="custom-control-label" for="GenderFemale">Female</label>
        </div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPwd">Password</label>
            <input type="password" class="form-control" name="password" id="inputPwd" placeholder="Password">
        </div>
        <p>By signing up, you agree to the Terms of Service and Privacy Policy.</p>
        <button class="btn btn-lg btn-primary btn-block my-3" id="register-btn" type="submit">Sign up</button>
    </form>
</div>
</section>
@endsection