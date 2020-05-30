<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\Ledger;
use Session;

class LedgerController extends Controller
{
    public function show(){
      $user = UserProfile::findOrFail(session::get('id'));
      $ledger = Ledger::all()->where('userid', session::get('id'));

// // TEMPORARY      
//         $user = new UserProfile();

//         $user->id = 10;
//         $user->email = 'vincent@yahoo.com';
//         $user->password = '123';
//         $user->firstname = 'vincent';
//         $user->lastname = 'alturas';
//         $user->birthday = 'secret';
//         $user->sex = 'Male';
//         $user->categories = [
//           'Transportation' => 'Expense',
//           'Work' => 'Income'
//         ];
// //END OF TEMPORARY
      return view('ledger', [
        'user' => $user,
        'ledger' => $ledger
      ]);
    }

    public function store($id){
      $user = UserProfile::find($id);
      $ledger = new Ledger();

      $ledger->category = request('category');
      $ledger->description = request('description');
      $ledger->amount = request('amount');
      $ledger->userid = $user->id;

      $ledger->save();

      $notebook = Ledger::all()->where('userid', $id);

      return redirect('/finote/ledger')->with(['id' => $id]);
    }

    public function destroy($id, $noteId){
      Ledger::destroy($noteId);

      return redirect('/finote/ledger')->with(['id' => $id]);
    }
}
