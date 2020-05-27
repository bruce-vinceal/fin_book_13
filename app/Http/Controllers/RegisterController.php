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
    $users = UserProfile::all();
    $max = count($users);
    $val = false;

    for ($i=0; $i < $max && $val == false; $i++) { 
      if($users[$i]->email == request('email')){
        $val = true;
      }
    }

    if($val == false){
      $acc = new UserProfile();

      $acc->email = request('email');
      $acc->password = request('password');
      $acc->firstname = request('fname');
      $acc->lastname = request('lname');
      $acc->birthday = request('birthday');
      $acc->sex = request('sex');
      $acc->categories = 'none';

      $acc->save();

      return redirect('/login');
    }
    else{
      return redirect('/finote');
    }
  }
}
