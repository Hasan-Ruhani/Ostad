<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Customer;

class DashboardController extends Controller
{
    function DashboardPage():View{
        return view('pages.dashboard.dashboard-page');
    }

    function TotalCustomer(Request $request){
        $id = $request -> header('id');
        return Customer::where('user_id', $id) -> count();
    }
}
