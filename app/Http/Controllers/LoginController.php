<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;

class LoginController extends Controller
{
  public function show() {
    return view('login');
  }

  public function authenticate() {
    $user = UserProfile::where([
      ['email', '=', request('email')],
      ['password', '=', request('password')],
    ])->first();
    
    if($user !== NULL){
      return redirect('/finote/monthly-report')->with(['id' => $user->id]);
    }
    else{
      return redirect('/login')->with('response', 'Incorrect Email or Password');
    }
  }
}