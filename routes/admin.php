<?php
use App\Http\Controllers\Backend\AdminReviewController;
use App\Http\Controllers\Backend\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PaypalSettingController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;



// đăng nhập thành công
Route::get('admin/dashboard', [AdminController::class,'dashboard'])->middleware(['auth', 'role:admin'])->name('admin.dashboard');
    
Route::get('admin/profile', [ProfileController::class, 'index'])->middleware(['auth', 'role:admin'])->name('admin.profile');
Route::post('admin/profile/update', [ProfileController::class, 'updateProfile'])->middleware(['auth', 'role:admin'])->name('admin.profile.update'); 

// Quản lý sản phẩm
Route::resource('admin/manage_product', ProductController::class)->middleware(['auth', 'role:admin']);

// Quản lý đơn hàng
Route::resource('admin/manage_order', OrderController::class)->middleware(['auth', 'role:admin']);
Route::get('admin/order-status', [OrderController::class, 'changeOrderStatus'])->middleware(['auth', 'role:admin'])->name('admin.order.status');

// Quản lý khách hàng
Route::resource('admin/manage_customer',  CustomerController::class)->middleware(['auth', 'role:admin']);
//quản lý feedback
Route::get('admin/reviews', [AdminReviewController::class, 'index'])->middleware(['auth', 'role:admin'])->name('admin.review.index');
Route::put('admin/reviews/change-status', [AdminReviewController::class, 'changeStatus'])->middleware(['auth', 'role:admin'])->name('admin.review.change-status');



// admin logout
// Route::post('logout', function(Request $request): RedirectResponse{
//     Auth::guard('web')->logout();
//     $request->session()->invalidate();
//     $request->session()->regenerateToken();
//     return redirect('/admin/login');
// })->name('logout');

?>

