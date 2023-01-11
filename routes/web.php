<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionProductController;
use App\Http\Controllers\UserController;

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





























# Route untuk Welcome
Route::get('/', function (){
    return view('welcomepage');
});

Route::middleware(['auth'])->group(function () {
    #yang bisa dua duanya baik admin sama member

    # Route untuk Sign Out
    Route::get('/logout', [AuthController::class, 'logout']);

    # Route untuk home
    Route::get("/home", [ProductController::class, 'loadProductPage']);

    #Route detail product
    Route::get('/home/detail-product-{id}', [ProductController::class, "loadDetailProduct"]);

    # Route Profile
    Route::get('/profile', [UserController::class, "loadProfileUser"]);

    # Route Edit Password
    Route::get('/update-password', [UserController::class, "loadUpdatePasswordPage"]);
    Route::patch('/update-password', [UserController::class, "updatePassword"]);

    #Route SearchPage
    Route::get('/search', [ProductController::class, 'viewPageSearch']);


        Route::middleware(['MemberOnly'])->group(function () {
            # Route Edit Profile
            Route::get('/update-profile', [UserController::class, "loadUpdatePage"]);
            Route::patch('/update-profile', [UserController::class, "updateProfile"]);

            #routes untuk transaction-history
            Route::get("/history", [TransactionController::class, "loadTransactions"]);

            # Routes View Cart
            Route::get('/cart', [CartController::class, 'loadCart']);

            # Route Add Cart
            Route::post('/add-cart/{id}', [CartController::class, 'addCart']);

            # Route Delete Cart
            Route::delete('/remove-cart/{product_id}', [CartController::class, 'removeCart']);

            # Route Edit Cart
            Route::get('/edit-cart/{product_id}', [CartController::class, "loadEditCartPage"]);
            Route::patch('/edit-cart/{product_id}', [CartController::class, "editCart"]);
        });

        Route::middleware(['AdminOnly'])->group(function () {
            # Route Add Product
            Route::get('/add-item', [ProductController::class, "addItemPage"]);
            Route::post('/add-data', [ProductController::class, "insert"]);

            # Route Delete Product
            Route::delete('/deleteProduct/{id}', [ProductController::class, 'delete']);
        });
});


Route::middleware(['GuestOnly'])->group(function () {
    # Route untuk Login
    Route::get('/login', [AuthController::class, 'loginPage']);
    Route::post('/login', [AuthController::class, 'login']);

    # Route untuk Register
    Route::get('/register', [AuthController::class, 'registerPage']);
    Route::post('/register', [AuthController::class, 'register']);
});


