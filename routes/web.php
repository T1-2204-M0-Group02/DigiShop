<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HompageController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\ProviderController;

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);

Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin.homepage.index', function () {
//     return view('admin.homepage.index');
// })->name('admin.homepage.index');
// Route::get('/admin.products.index', function () {
//     return view('admin.products.index');
// })->name('admin.products.index');
// Route::get('/admin.orders.index', function () {
//     return view('admin.orders.index');
// })->name('admin.orders.index');
// Route::get('/admin.users.index', function () {
//     return view('admin.users.index');
// })->name('admin.users.index');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/homepage', HompageController::class);
    Route::resource('/products', ProductsController::class);
    Route::resource('/orders', OrdersController::class);
    Route::resource('/users', UsersController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
