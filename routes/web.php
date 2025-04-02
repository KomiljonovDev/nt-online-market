<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DiscountProductController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductStatusesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/compare', [HomeController::class, 'compare'])->name('compare');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/offers', [HomeController::class, 'offers'])->name('offers');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');



Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/filter', [ProductsController::class, 'show'])->name('filter');
Route::post('/', [DiscountProductController::class, 'store'])->name('discount.store');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
  
require __DIR__.'/auth.php';
