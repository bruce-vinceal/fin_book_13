@extends('layouts.layout')

@section('content')
<section class="signup-sec">
    <div class="signup-container">
              <h1 class="mb-3">Create Account</h1>
    <form class="form-signup">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFname">First Name</label>
                <input type="firstName" class="form-control" id="inputFname" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputlName">Last Name</label>
                <input type="lastName" class="form-control" id="inputlName" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputBday">Birth Date</label>
            <input type="date" class="form-control" id="inputBday">
        </div>
        <div class="form-group">
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Female</label>
        </div>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <p>By signing up, you agree to the Terms of Service and Privacy Policy.</p>
        <button class="btn btn-lg btn-primary btn-block my-3" type="submit">Sign up</button>
    </form>
</div>
</section>
@endsection