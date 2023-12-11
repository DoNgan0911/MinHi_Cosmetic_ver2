<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;



// đăng nhập thành công
Route::get('admin/dashboard', [AdminController::class,'dashboard'])->middleware(['auth', 'role:admin'])->name('admin.dashboard');
    
// admin logout
Route::post('logout', function(Request $request): RedirectResponse{
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/admin/login');
})->name('logout');


Route::get('admin/profile', [ProfileController::class, 'index'])->name('admin.profile');
Route::post('admin/profile/update', [ProfileController::class, 'updateProfile'])->name('admin.profile.update'); 

// Slider Route
Route::resource('admin/slider', SliderController::class);

// MANAGE PRODUCTS
Route::resource('admin/manage_product', ProductController::class);  


?>