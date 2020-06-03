<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;

class RegisterController extends Controller
{
  public function show() {
    return view('signup');
  }

  public function store() {

    request()->validate([
      'firstname' => 'required|min:2',
      'lastname' => 'required|min:2',
      'birthday' => 'required',
      'sex' => 'required',
      'email' => 'required|unique:App\UserProfile,email',
      'password' => 'required',
    ]);

    $acc = new UserProfile();

    $acc->email = request('email');
    $acc->password = request('password');
    $acc->firstname = request('firstname');
    $acc->lastname = request('lastname');
    $acc->birthday = request('birthday');
    $acc->sex = request('sex');
    $acc->categories = 'none';

    $acc->save();

    return redirect('/login');
  }
}
