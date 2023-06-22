<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\DeactivateController;
// use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\CreateAdminController;
// use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::post('/account', [UsersController::class, 'account'])->name('account');

Route::get('/admin/create', [CreateAdminController::class, 'createadmin'])->name('createadmin');


Route::put('/admin/{id}/deactivate', [DeactivateController::class, 'deactivate'])->name('deactivate');


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');

Route::get('auth/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('auth/signup', [AuthController::class, 'signup'])->name('signup')->middleware('guest');

Route::post('createuser', [AuthController::class, 'createuser'])->name('createuser');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');


Route::get('user/{id}/dashboard', [UsersController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('user/withdraw', [UsersController::class, 'withdraw'])->name('withdraw')->middleware('auth');
Route::get('user/plan', [UsersController::class, 'plan'])->name('plan');
Route::get('user/confirm-deposits', [UsersController::class, 'confirmdeposits'])->name('confirmdeposits')->middleware('auth');


Route::put('complete/payment/{amount}/user_id/{user_id}/{transcation_id}', [PaymentController::class, 'completepay'])->name('completepay');
Route::post('upload/file', [FileController::class, 'upload'])->name('upload');


Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('withdraw', [WithdrawController::class, 'withdraw'])->name('place_withdraw');

