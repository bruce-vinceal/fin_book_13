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
                <input type="firstName" name="firstname" class="form-control" id="inputFname" placeholder="First Name" value="{{old('firstname') }}" autocomplete="off">
                @error('firstname')
                  <span style="color:red"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputLname">Last Name</label>
                <input type="lastName" class="form-control" name="lastname" id="inputLname" placeholder="Last Name" value="{{old('lastname')}}" autocomplete="off">
                @error('lastname')
                  <span style="color:red"> {{ $message }} </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="inputBday">Birth Date</label>
            <input type="date" name="birthday" id="inputBday" class="form-control" value="{{old('birthday')}}">
            @error('birthday')
              <span style="color:red"> {{ $message }} </span>
            @enderror
            
        </div>
        <div class="form-group">
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="sex" value="male" id="GenderMale" class="custom-control-input" @if(old('sex') ==  'male') checked="checked" @endif>
            <label class="custom-control-label" for="GenderMale">Male</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="sex" value="female" id="GenderFemale" class="custom-control-input" @if(old('sex') ==  'female') checked="checked" @endif>
            <label class="custom-control-label" for="GenderFemale">Female</label>
        </div>
        @error('sex')
          <br>
          <span style="color:red"> {{ $message }} </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{old('email')}}" autocomplete="off">
            @error('email')
              <span style="color:red"> {{ $message }} </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="inputPwd">Password</label>
            <input type="password" class="form-control" name="password" id="inputPwd" placeholder="Password">
            @error('password')
              <span style="color:red"> {{ $message }} </span>
            @enderror
        </div>
        <p>By signing up, you agree to the Terms of Service and Privacy Policy.</p>
        <button class="btn btn-lg btn-primary btn-block my-3" id="register-btn" type="submit">Sign up</button>
    </form>
</div>
</section>
@endsection