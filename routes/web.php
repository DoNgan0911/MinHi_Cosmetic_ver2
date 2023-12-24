<?php

use App\Http\Controllers\Frontend\ProductTrackController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FrontendProductController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserOrderController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Models\User;

use Gloudemans\Shoppingcart\Facades\Cart;

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
    Route::get('customer/profile', [UserProfileController::class, 'index'])->name('customer.profile');
    Route::put('customer/profile', [UserProfileController::class, 'updateProfile' ])->name('customer.profile.update');
    Route::post('customer/profile', [UserProfileController::class, 'updatePassword' ])->name('customer.profile.update.password');
   
    // Route cho đơn hàng
    Route::get('customer/orders', [UserOrderController::class, 'index'])->name('customer.orders.index');
    Route::get('customer/orders/{id}', [UserOrderController::class, 'show'])->name('customer.orders.show');
    Route::post('customer/cancel-order', [UserOrderController::class, 'cancel'])->name('customer.cancel-order.cancel');



// bấm vào thanh toán: 
    Route::get('customer/checkout', [CheckOutController::class, 'index'])->name('customer.checkout');
    Route::post('customer/checkout/form-submit', [CheckOutController::class, 'checkOutFormSubmit'])->name('customer.checkout.form-submit');
    
    Route::get('customer/success', [PaymentController::class, 'Success'])->name('customer.cod.success');

    
// route cho feedback khách hàng
Route::post('customer/review', [ReviewController::class, 'create'])->name('customer.review.create'); 
Route::get('customer/reviews', [ReviewController::class, 'index'])->name('customer.review.index'); 



});

// admin đăng nhập tại route
// Route::get('admin/login', [AdminController::class , 'login'])->name('admin.login');

// Product detail route
Route::get('product-detail/{name}', [FrontendProductController::class, 'showProduct'])->name('product-detail');

// Route thêm sp vào giỏ hàng
    Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
    Route::get('cart-details', [CartController::class, 'cartDetails'])->name('cart-details');
    Route::post('cart/update-quantity', [CartController::class, 'updateProductQty'])->name('cart.update-quantity');
    Route::get('clear-cart', [CartController::class, 'clearCart'])->name('clear.cart');
    Route::get('cart/remove-product/{rowId}', [CartController::class, 'removeProduct'])->name('cart.remove-product');
    Route::get('cart-count', [CartController::class, 'getCartCount'])->name('cart-count');

    // Route::get('cart/total', [CartController::class, 'cartTotal'])->name('cart.total');
    

    // Route::get('customer/payment', [PaymentController::class, 'index'])->name('customer.payment');


    // Route::get('customer/paypal/payment', [PaymentController::class, 'payWithPaypal'])->name('customer.paypal.payment');
    // Route::get('customer/paypal/cancel', [PaymentController::class, 'paypalCancel'])->name('customer.paypal.cancel');

    // theo dõi đơn hàng
    Route::get('product-tracking', [ProductTrackController::class, 'index'])->name('product-tracking.index');
