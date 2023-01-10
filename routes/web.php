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

# Route untuk Login
Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login']);

# Route untuk Register
Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'registerMember']);

# Route untuk Sign Out
Route::get('/logout', [AuthController::class, 'logout']);

# Route untuk home
Route::get("/home", [ProductController::class, 'loadProductPage']);

#Route detail product
Route::get('/home/detail-product-{id}', [ProductController::class, "loadDetailProduct"]);

# Route Profile
Route::get('/profile', [UserController::class, "loadProfileUser"]);

# Route Edit Profile
Route::get('/update-profile', [UserController::class, "loadUpdatePage"]);
Route::patch('/update-profile', [UserController::class, "updateProfile"]);

# Route Edit Password
Route::get('/update-password', [UserController::class, "loadUpdatePasswordPage"]);
Route::patch('/update-password', [UserController::class, "updatePassword"]);

# Route Add Product
Route::get('/add-item', [ProductController::class, "addItemPage"]);
Route::post('/add-data', [ProductController::class, "insert"]);

# Route Delete Product
Route::delete('/deleteProduct/{id}', [ProductController::class, 'delete']);

#routes untuk transaction-history
Route::get("/history/{id}", [TransactionProductController::class, "loadTransactionHistory"]);

# Route Add Cart
Route::post('/add-cart/{id}', [CartController::class, 'addCart']);

#routes view-cart member
Route::get('/cart', function () {
    return view('member.view_cart');
});

# Route Edit Cart
Route::get('/edit-cart-member', function () {
    return view('member.edit_cart_member');
});

Route::get('/edit-cart-admin', function () {
    return view('admin.edit_cart_admin');
});



#Route SearchPage
Route::get('/search', [ProductController::class, 'viewPageSearch']);

