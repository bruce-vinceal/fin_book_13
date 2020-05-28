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

    public function store($id){
      return "YY";
      $user = UserProfile::find($id);
      $data = [
        request('category') => request('type')
      ];

      if($user->categories == 'none'){
        $user->update([
          'categories' => $data,
        ]);
      }
      else{
        $user->update([
          'categories' => $user->categories+$data,
        ]);
      }
      
      return redirect('/finote/category')->with(['id' => $id]);
    }

    public function destroy($id, $category){
      $user = UserProfile::find($id);

      $data = $user->categories;
      unset($data[$category]);
      
      $user->update([
        'categories' => $data,
      ]);
      
      return redirect('/finote/category')->with(['id' => $id]);
    }

    public function update($id, $category){
      $user = UserProfile::find($id);
      
      $temp = [
        request('editCategory') => request('editType')
      ];

      $temp2 = $user->categories;

      $data2 = array_slice($temp2, array_search($category, array_keys($temp2))+1, count($temp2), true);
      $data = array_slice($temp2, 0, array_search($category, array_keys($temp2)), true);

      $user->update([
        'categories' => $data + $temp + $data2,
      ]);

      return redirect('/finote/category')->with(['id' => $id]);

    }
}
