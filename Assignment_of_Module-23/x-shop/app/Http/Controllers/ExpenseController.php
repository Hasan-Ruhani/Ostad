<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    function expenseCreate(Request $request){
        $user_id = $request -> header('id');

        return Expense::create([
            'rent_income' => $request -> input('rent_income'),
            'res_income' => $request -> input('res_income'),
            'total_income' => $request -> input('total_income'),
            'user_id' => $user_id
        ]);
    }

    function expenseList(Request $request){
        $user_id = $request->header('id');
        return Expense::where('user_id', $user_id)->get();
    }

    function expenseDelete(Request $request){
        $customer_id = $request->input('id');
        $user_id = $request->header('id');
        return Expense::where('id', $customer_id) -> where('user_id', $user_id)->delete();
    }

    function expenseUpdate(Request $request){
        $customer_id = $request->input('id');
        $user_id = $request->header('id');
        return Expense::where('id', $customer_id) -> where('user_id', $user_id)->update([
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'address' => $request -> input('address'),
            'mobile' => $request -> input('mobile')
        ]);    
    }
}
