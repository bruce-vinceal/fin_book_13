<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use Session;

class CategoryController extends Controller
{
    public function show(){
      $user = UserProfile::findOrFail(session::get('id'));
      
      return view('category-management', [
        'user' => $user,
      ]);
    }
}
