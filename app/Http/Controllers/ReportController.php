<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\Ledger;
use Carbon\Carbon;
use Session;

class ReportController extends Controller
{
    public function show(){
      $user = UserProfile::findOrFail(session::get('id'));
      $show = '0';

      if( session::get('month') != '' ){
        $show = '1';
      }

      $dailyExpense = [
        '01' => 0, '02' => 0, '03' => 0, '04' => 0, '05' => 0,
        '06' => 0, '07' => 0, '08' => 0, '09' => 0, '10' => 0,
        '11' => 0, '12' => 0, '13' => 0, '14' => 0, '15' => 0,
        '16' => 0, '17' => 0, '18' => 0, '19' => 0, '20' => 0,
        '21' => 0, '22' => 0, '23' => 0, '24' => 0, '25' => 0,
        '26' => 0, '27' => 0, '28' => 0, '29' => 0, '30' => 0,
      ];

      $monthly = [
        '1' => 0, '2' => 0, '3' => 0, '4' => 0, '5' => 0, '6' => 0,
        '7' => 0, '8' => 0, '9' => 0, '10' => 0, '11' => 0, '12' => 0,
      ];
      
      //Daily Expense
      $ledger = Ledger::where('userid', session::get('id'))->whereMonth('date', session::get('month'))->get();
      foreach($ledger as $note){
        $date = Carbon::parse($note->date);
        $dailyExpense[$date->format('d')] = $ledger->where('date', $note->date)->where('type', 'Expense')->sum('amount');
      }
      $days = array_keys($dailyExpense);
      $dailyExpense = array_values($dailyExpense);
      
      //Monthly Income && Expense
      $monthlyIncome = $monthly;
      $monthlyExpense = $monthly;
      for($ctr=1; $ctr != 13; $ctr++){
        $ledger = Ledger::where('userid', session::get('id'))->whereMonth('date', $ctr)->get();
        $monthlyIncome[$ctr] = $ledger->where('type', 'Income')->sum('amount');
        $monthlyExpense[$ctr] = $ledger->where('type', 'Expense')->sum('amount');
      }
      $monthlyIncome = array_values($monthlyIncome);
      $monthlyExpense = array_values($monthlyExpense);

      //Expense Category
      $expenseCategory = $user->category;
      foreach($user->categories as $category => $type){
        $ledger = Ledger::where('userid', session::get('id'))->where('category', $category);
        $expenseCategory[$category] = $ledger->where('type', 'Expense')->count();
      }
      $category = array_keys($expenseCategory);
      $expenseCategory = array_values($expenseCategory);


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

// //for Temp Acc
//                 $dailyExpense = [3,325,0,0,0,450,600,90,6,7,11,0,13,14,0,16,17,0,19,20,0,0,23,24,76,26,27,92,5,30];
//                 $days = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
//                 $monthlyIncome = [250,300,10000,800,0,0,500,800,0,750,1000,1350];
//                 $monthlyExpense = [100,200,400,160,0,0,500,800,0,750,0,120];
//                 $category = ['Transportation', 'Work', 'Food'];
//                 $expenseCategory = [4,15,18];
// //End for Temp Acc

// //END OF TEMPORARY

   
      return view('monthly-report', [
        'user' => $user,
        'show' => $show,
        'dailyExpense' => $dailyExpense,
        'days' => $days,
        'monthlyIncome' => $monthlyIncome,
        'monthlyExpense' => $monthlyExpense,
        'category' => $category,
        'expenseCategory' => $expenseCategory,
      ]);
    }

    public function generate($id){
      return redirect('/finote/monthly-report')->with(['id' => $id, 'month' => request('month')]);
    }
}
