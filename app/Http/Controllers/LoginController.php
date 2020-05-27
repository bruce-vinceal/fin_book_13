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
    $users = UserProfile::all();
    $max = count($users);
    $val = false;

    // Can be shortened, ill do it later
    for ($i=0; $i < $max && $val == false; $i++) { 
      if($users[$i]->email == request('email') && $users[$i]->password == request('password')){
        $user = $users[$i];
        $val = true;
      }
    }

    if($val == true){
      //Temporary** by Euniel
      return redirect('/finote/monthly-report');
      
      // return view('dashboard', [
      //   'user' => $user,
      // ]);
    }
    else{
      return redirect('/login');
    }
  }
}