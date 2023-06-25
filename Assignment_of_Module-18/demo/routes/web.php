<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\postController;
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
Route::get('/post/{id}/delete', [postController::class, 'getPost']);
Route::get('/softDelete', [postController::class, 'getSoftDeleted']);
Route::get('/latest', [postController::class, 'latestPost']);

Route::get('/category', [categoryController::class, 'getCategory']);
Route::get('/categories/{id}/posts', [categoryController::class, 'seePost']);

