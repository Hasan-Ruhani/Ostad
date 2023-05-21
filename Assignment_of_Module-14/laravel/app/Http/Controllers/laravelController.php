<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laravelController extends Controller
{
    function getName(Request $request){             //Question 01
        $name = $request -> input('name');
        return "$name";
    }

    function userAgent(Request $request){           //Question 02
        $userAgent = $request -> header('userAgent');
        return "$userAgent";
    }

    function getQuery($page = null){                //Question 03
        if(!$page){
            return "Page Parameter is null";
        }
        return $page;
    }

    function jsonData(Request $request){            //Question 04
        $response = [ 
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25
            ]
        ];
        
        return response() -> json($response);
    }

    function getFile(Request $request){             //Question 05
        $file = $request -> file('photo');
        $file -> move(public_path('avatar'), $file -> getClientOriginalName());
        $originalName = $file -> getClientOriginalName();
        if($file){
            return "Your uploaded file/photo original names {$originalName}";
        }
        else{
            return "Yoy are not uploaded any file/photo here!!";
        }
    }

    function getCookie(Request $request){           //Question 06
        $rememberToken = $request -> cookie('remember_token');
        if($rememberToken){
            return $rememberToken;
        }
        else{
            return "rememeberToken = null";
        }
    }
}
