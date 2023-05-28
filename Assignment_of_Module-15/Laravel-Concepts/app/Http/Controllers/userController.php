<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function register(Request $request): array
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return [
                'errors' => $validator->errors(),
                'input' => $request->all()
            ];
        }

        $name = $request->get('name');
        $email = $request->get('email');
        $pass = $request->get('password');

        return [
            'Name' => $name,
            'Email' => $email,
            'Password' => $pass
        ];

    }

    function home(){
        return redirect('/dashboard');
    }

    function dashboard(){
        return view('welcome');
    }

    function profile(){
        return "This is Profiel Page";
    }

    function settings(){
        return "This is Settings Page";
    }
}
