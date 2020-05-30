<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\Ledger;
use Session;

class ReportController extends Controller
{
    public function show(){
      $user = UserProfile::findOrFail(session::get('id'));

// // TEMPORARY      
//       $user = new UserProfile();

//       $user->id = 10;
//       $user->email = 'vincent@yahoo.com';
//       $user->password = '123';
//       $user->firstname = 'vincent';
//       $user->lastname = 'alturas';
//       $user->birthday = 'secret';
//       $user->sex = 'Male';
//       $user->categories = [
//         'Transportation' => 'Expense',
//         'Work' => 'Income'
//       ];
// //END OF TEMPORARY

      return view('monthly-report', [
        'user' => $user,
      ]);
    }

}
