<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// API Routes
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);

// Dashboard Routes
Route::get('/total-customer', [DashboardController::class, 'TotalCustomer'])->middleware(TokenVerificationMiddleware::class);


// After Authentication
Route::get("/user-profile-details",[UserController::class,'UserProfile'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/user-update",[UserController::class,'UserUpdate'])->middleware([TokenVerificationMiddleware::class]);


// Logout
Route::get('/logout',[UserController::class,'UserLogout']);

Route::resource('events', EventController::class)->middleware([TokenVerificationMiddleware::class]);

// Page Routes
Route::get('/userLogin',[UserController::class,'LoginPage']);
Route::get('/userRegistration',[UserController::class,'RegistrationPage']);
Route::get('/sendOtp',[UserController::class,'SendOtpPage']);
Route::get('/verifyOtp',[UserController::class,'VerifyOTPPage']);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/userProfile',[UserController::class,'ProfilePage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/eventPage',[EventController::class,'CustomerPage'])->middleware([TokenVerificationMiddleware::class]);


// After Authentication
Route::get('/dashboard',[DashboardController::class,'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);


// Customer Route
Route::post("/create-event",[EventController::class,'EventCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get("/list-event",[EventController::class,'EventList'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/delete-event",[EventController::class,'EventDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/update-event",[EventController::class,'EventUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/event-by-id",[EventController::class,'EventByID'])->middleware([TokenVerificationMiddleware::class]);


// Customer Income
Route::post('/create-income', [IncomeController::class, 'create'])->middleware([TokenVerificationMiddleware::class]);
Route::get("/list-income",[EventController::class,'incomeList'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/delete-income",[EventController::class,'incomeDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/update-income",[EventController::class,'incomeUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/income-by-id",[EventController::class,'incomeByID'])->middleware([TokenVerificationMiddleware::class]);

// Customer Expense
Route::post('/create-expense', [IncomeController::class, 'create'])->middleware([TokenVerificationMiddleware::class]);
Route::get("/list-expense",[EventController::class,'expenseList'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/delete-expense",[EventController::class,'expenseDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/update-expense",[EventController::class,'expenseUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post("/expense-by-id",[EventController::class,'expenseByID'])->middleware([TokenVerificationMiddleware::class]);



