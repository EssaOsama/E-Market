<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/ecommerce', [HomeController::class, 'ecommerce'])->name('ecommerce');
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/details', [HomeController::class, 'details'])->name('details');
    Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);

    Route::post('/wishlist/add/{product}', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
    Route::delete('/wishlist/destroy/{id}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');

});
