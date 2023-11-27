<?php


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\auth\AdminLoginController;
use App\Http\Controllers\admin\auth\AdminRegisterController;
use Illuminate\Support\Facades\Route;;

Route::get('admin/dashboard/home', [AdminHomeController::class, 'index'])->name('admin.dashboard.home');
Route::get('admin/dashboard/login', [AdminLoginController::class, 'login'])->name('admin.dashboard.login');
Route::post('admin/dashboard/login', [AdminLoginController::class, 'checkLogin'])->name('admin.dashboard.check');
Route::get('admin/dashboard/register', [AdminRegisterController::class, 'register'])->name('admin.dashboard.register');
Route::post('admin/dashboard/register', [AdminRegisterController::class, 'store'])->name('admin.dashboard.store');
