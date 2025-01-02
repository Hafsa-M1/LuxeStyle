<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\OrderManager;
use App\Http\Controllers\ProductsManager;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', [ProductsManager::class, 'index'])->name('home');

// Authentication Routes
Route::get("login", [AuthManager::class, "login"])->name("login");
Route::post("login", [AuthManager::class, "loginPost"])->name("login.post");
Route::get("register", [AuthManager::class, "register"])->name("register");
Route::post("register", [AuthManager::class, "registerPost"])->name("register.post");

// Logout Route (POST request for security)
Route::post("logout", [AuthManager::class, "logout"])->name("logout");

// Product Routes
Route::get('/product/{slug}', [ProductsManager::class, 'details'])->name('products.details');

// Cart and Checkout Routes (Protected Group for Extensibility)
Route::middleware(['web'])->group(function () {
    // Cart Routes
    Route::post('/cart/add/{id}', [ProductsManager::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [ProductsManager::class, 'showCart'])->name('cart.show');
    Route::delete('/cart/{product_id}', [ProductsManager::class, 'removeFromCart'])->name('cart.remove');
    Route::put('/cart/{product_id}/update', [ProductsManager::class, 'updateCart'])->name('cart.update');

    // Checkout Routes
    Route::get('/checkout', [OrderManager::class, 'showCheckout'])->name('checkout.show');
    Route::post('/checkout', [OrderManager::class, 'checkoutPost'])->name('checkout.post');
});

// Newsletter Subscription Route
Route::post('newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// CSRF Token Route
Route::get('/csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});
