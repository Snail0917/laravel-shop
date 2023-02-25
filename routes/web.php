<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [ProductsController::class, 'index']);

Auth::routes();

Route::post('/cart', [CartsController::class, 'store'])->name('cart');

Route::get('/checkout', [CartsController::class, 'index'])->name('checkout');

Route::get('/checkout/get/items', [CartsController::class, 'getCartItemsForCheckout']);

Route::post('/process/user/payment', [CartsController::class, 'processPayment']);

Route::post('/contact/send-mail', [ContactController::class, 'sendMail']);
