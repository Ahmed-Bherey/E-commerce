<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Auth\GoogleSocialiteController;

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

Route::get('/' , [ProductController::class , 'showproducts']);
// Route::get('/', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list')->middleware(['auth' , 'isAdmin']);
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store')->middleware(['auth' , 'isAdmin']);
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/search' , [ProductController::class , 'search']);

Route::resource('show' , DetailsController::class);
Route::resource('profile' , UserProfileController::class);
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('login/google', [LoginController::class, 'redirectToGoogle']);
// Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
// Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

// Route::get('login/github', [LoginController::class, 'redirectToGithub'])->name('login.github');
// Route::get('login/github/callback', [LoginController::class, 'handleGithubCallback']);

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);




