<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    function home(Request $request){
        return view('pages.index');
    }

    function blogDetails(Request $request){
        return DB::table('blogs')-> get();
    }
}
