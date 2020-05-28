<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use Session;

class ReportController extends Controller
{
    public function show(){
      $user = UserProfile::findOrFail(session::get('id'));

      return view('monthly-report', [
        'user' => $user,
      ]);
    }
}
