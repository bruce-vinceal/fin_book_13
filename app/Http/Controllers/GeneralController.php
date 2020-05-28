<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
  public function index(){
    return view('index');
  }

  public function monthlyReport($id){
    return redirect('/finote/monthly-report')->with(['id' => $id]);
  }

  public function categoryManagement($id){
    return redirect('/finote/category')->with(['id' => $id]);
  }

  public function ledger($id){
    return redirect('/finote/ledger')->with(['id' => $id]);
  }
}
