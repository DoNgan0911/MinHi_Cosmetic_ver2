<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserDashboardController;

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
// AUTHENTICATION 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('admin/dashboard', [AdminController::class,'dashboard'])->middleware(['auth', 'role:admin'])->name('admin.dashboard');


// Trang home cua khach hang
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('customer/dashboard', [CustomerController::class,'dashboard'])->name('customer.dashboard');

// Sau khi khách hàng đăng nhập
Route::group(['middleware' => ['auth', 'verified']], function(){ 
    Route::get('customer/dashboard', [UserDashboardController::class, 'index'])->name('customer.dashboard');
});

// admin đăng nhập tại route
Route::get('admin/login', [AdminController::class , 'login'])->name('admin.login');
