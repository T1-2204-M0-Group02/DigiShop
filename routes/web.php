<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\FE\HomeController;
use App\Http\Controllers\Auth\ProviderController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\FE\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', [ShopController::class, 'index'])->name('products');
Route::get('/product/{slug}', [ShopController::class, 'product'])->name('product.details');
Route::get('/search/', [ShopController::class, 'search'])->name('search');

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect'])->name('socialLogin');
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::get('/cart', [CartController::class, 'viewCart'])->name('viewCart');
Route::post('/add-cart', [CartController::class, 'addCart'])->name('addCart');
Route::get('/clear-cart', [CartController::class, 'clearCart'])->name('clearCart');
Route::post('/change-cart-item', [CartController::class, 'changeCartItem'])->name('changeCart');
Route::post('/remove-cart-item', [CartController::class, 'removeCartItem'])->name('removeCart');

Route::middleware(['auth', 'admin', 'verified'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/products', ProductsController::class);
    Route::resource('/orders', OrdersController::class);
    Route::resource('/users', UsersController::class);
});

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/checkout', function () {
        return view('fe.checkout');
    })->name('checkout');

    Route::post('/process-checkout', [CartController::class, 'processCheckout'])->name('processCheckout');

    Route::get('/orders', function () {
        return view('fe.order.list');
    })->name('orders');

    Route::get('/ordersuccess', function () {
        return view('fe.order.success');
    })->name('ordersuccess');

    Route::post('/review', [ShopController::class, 'review'])->name('review');
});

require __DIR__.'/auth.php';
