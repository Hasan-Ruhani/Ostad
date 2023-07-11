<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    function contact(Request $request){
        return view('pages.contact');
    }
}
