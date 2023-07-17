<?php

namespace App\Http\Controllers;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
//..................................................User Registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json(['message' => 'User registered successfully']);
    }

//................................................User Login

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $token = auth()->attempt($credentials);

            return response()->json(['token' => $token]);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

//................................................Token Refresh and Logout

    public function refreshToken()
    {
        $token = JWTAuth::parseToken()->refresh();

        return response()->json(['token' => $token]);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
