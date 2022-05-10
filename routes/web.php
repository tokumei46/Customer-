<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TopPageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [TopPageController::class, 'top_page']);
Route::get('users', UserController::class)->name('社員一覧')->middleware('auth');
Route::get('roles', RoleController::class)->name('役職一覧')->middleware('auth');
Route::resource('customer', CustomerController::class)->middleware('auth');
