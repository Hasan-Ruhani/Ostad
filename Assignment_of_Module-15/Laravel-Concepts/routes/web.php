<?php

use App\Http\Controllers\ContractController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\userController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', [userController::class, 'register']);
Route::get('/home', [userController::class, 'home']);
Route::get('/dashboard', [userController::class, 'dashboard']);

Route::middleware(['AuthMiddleware']) -> group(function(){
    Route::get('/profile/{auth?}', [userController::class, 'profile']);
    Route::get('/settings', [userController::class, 'settings']);
});

Route::controller(ProductController::class) -> group(function(){
    Route::get('/index', 'index');
    Route::get('/create', 'create');
    Route::get('/store', 'store');
    Route::get('/edit', 'edit');
    Route::get('/update', 'update');
    Route::get('/destroy', 'destroy');
});

Route::post('/contact', [ContractController::class, 'invoke']);
