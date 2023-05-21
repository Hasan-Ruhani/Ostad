<?php

use App\Http\Controllers\laravelController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(laravelController::class) -> group(function(){
    Route::post('/name', 'getName');                                 //Question 01
    Route::post('/userAgent', 'userAgent');                          //Question 02 
    Route::get('/json', 'jsonData');                                 //Question 04
    Route::post('/file','getFile');                                  //Question 05
    Route::get('/cookie', 'getCookie');                              //Question 06
});

Route::post('/submit', function (Request $request) {                 //Question 07
    $email = $request->input('email');

    $responseData = [
        'success' => true,
        'message' => 'Form submitted successfully.',
        'email'   => $email
    ];

    return response()->json($responseData);
});

