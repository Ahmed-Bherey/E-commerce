<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\ReviewController;

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



// End User Route
Route::get('/', function () {
    return view('welcome');
});

// Cart Route
Route::get('/' , [ProductController::class , 'showproducts']);
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list')->middleware('auth');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store')->middleware('auth');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

// Search Route
Route::get('/search' , [ProductController::class , 'search']);

// Product Details Page
Route::resource('show' , DetailsController::class);

// User Profile
Route::resource('profile' , UserProfileController::class);

// Email Verify & Password Reset
Auth::routes(['verify' => true]);

// Login with Google
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


