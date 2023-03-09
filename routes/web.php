<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\FE\HomeController;
use App\Http\Controllers\Auth\ProviderController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Cart\CartController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/shop', function () {
    return view('fe.shop.index');
})->name('shop');

Route::get('/detail', function () {
  return view('fe.shop.detail');
})->name('detail')->name('shop');

Route::get('/cart', function () {
    return view('fe.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('fe.checkout');
})->name('checkout');

Route::get('/orders', function () {
    return view('fe.order.list');
})->name('orders');

Route::get('/ordersuccess', function () {
    return view('fe.order.success');
})->name('ordersuccess');

Route::get('/profileDashboard', function () {
    return view('fe.profile');
})->name('profile');

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect'])->name('socialLogin');
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::post('/add-cart', [CartController::class, 'addCart'])->name('addCart');

Route::get('/view-cart', [CartController::class, 'viewCart'])->name('viewCart');
Route::get('/clear-cart', [CartController::class, 'clearCart'])->name('clearCart');

Route::post('/change-cart-item', [CartController::class, 'changeCartItem'])->name('changeCart');
Route::post('/remove-cart-item', [CartController::class, 'removeCartItem'])->name('removeCart');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function() {

    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/products', ProductsController::class);
    Route::resource('/orders', OrdersController::class);
    Route::resource('/users', UsersController::class);
});

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
