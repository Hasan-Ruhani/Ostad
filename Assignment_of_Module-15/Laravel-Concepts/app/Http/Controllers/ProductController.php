<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view('index');
    }

    function create(){
        return view('create');
    }
    function store(){
        return view('store');
    }

    function edit(){
        return view('edit');
    }

    function update(){
        return view('update');
    }

    function destroy(){
        return view('destroy');
    }
    
}
