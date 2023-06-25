<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    function getCategory(){
        $category = DB::table('categories') -> where('category_id') -> count();

        return $category;
    }

    function seePost(){
        return view('post');
    }



}
