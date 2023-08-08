<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    function incomeCreate(Request $request){
        $user_id = $request -> header('id');

        return Income::create([
            'rent_income' => $request -> input('rent_income'),
            'res_income' => $request -> input('res_income'),
            'total_income' => $request -> input('total_income'),
            'user_id' => $user_id
        ]);
    }

    function incomeList(Request $request){
        $user_id = $request->header('id');
        return Income::where('user_id', $user_id)->get();
    }

    function CustomerDelete(Request $request){
        $customer_id = $request->input('id');
        $user_id = $request->header('id');
        return Income::where('id', $customer_id) -> where('user_id', $user_id)->delete();
    }

    function incomeUpdate(Request $request){
        $customer_id = $request->input('id');
        $user_id = $request->header('id');
        return Income::where('id', $customer_id) -> where('user_id', $user_id)->update([
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'address' => $request -> input('address'),
            'mobile' => $request -> input('mobile')
        ]);    
    }
}
