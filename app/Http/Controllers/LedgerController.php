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

      return view('ledger', [
        'user' => $user,
        'ledger' => $ledger
      ]);
    }

    public function store($id){
      $user = UserProfile::find($id);
      $ledger = new Ledger();

      $type = $user->categories;

      $ledger->category = request('category');
      $ledger->description = request('description');
      $ledger->amount = request('amount');
      $ledger->date = request('date');
      $ledger->type = $type[request('category')];
      $ledger->userid = $user->id;

      $ledger->save();

      return redirect('/finote/ledger')->with(['id' => $id]);
    }

    public function destroy($id, $noteId){
      Ledger::destroy($noteId);

      return redirect('/finote/ledger')->with(['id' => $id]);
    }
}
