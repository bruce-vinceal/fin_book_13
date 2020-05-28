<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use Session;

class LedgerController extends Controller
{
    public function show(){
      $user = UserProfile::findOrFail(session::get('id'));
      return view('ledger', [
        'user' => $user,
      ]);
    }
}
