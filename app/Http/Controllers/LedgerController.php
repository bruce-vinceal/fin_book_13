<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LedgerController extends Controller
{
    public function show(){
      return view('ledger');
    }
}
