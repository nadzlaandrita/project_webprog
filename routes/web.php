<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

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
Route::post('/login', [AuthController::class, 'loginMember']);

# Route untuk Register
Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'registerMember']);

# Route untuk Sign Out
Route::get('/logout', [AuthController::class, 'logout']);

# Route untuk home (member)
Route::get("/home-member", [ProductController::class, "loadProductMember"]);
Route::get("/home-admin", [ProductController::class, "loadProductAdmin"]);


#Route detail product (member)
Route::get('/home-member/detail-product-{id}', [ProductController::class, "loadDetailProductMember"]);
Route::get('/home-admin/detail-product-{id}', [ProductController::class, "loadDetailProductAdmin"]);

# Route Profile Member
Route::get('/profile-member', function () {
    return view('member.profile_member');
});

# Route Profile Admin
Route::get('/profile-admin', function () {
    return view('admin.profile_admin');
});

# Route Edit Profile Member
Route::get('/update-profile', function () {
    return view('member.update_profile');
});

# Route Edit Password Member
Route::get('/update-password-member', function () {
    return view('member.update_password_member');
});

# Route Edit Password Admin
Route::get('/update-password-admin', function () {
    return view('admin.update_password_admin');
});

# Route Edit Password Admin
Route::get('/add-item', [ProductController::class, "addItemPage"]);
Route::post('/add-item', [ProductController::class, "storeImage"])->name('image.store');

#routes view-cart member
Route::get('/view-cart', function () {
    return view('member.view_cart');
});

#routes untuk transaction-history
Route::get("/transactions-history", [TransactionController::class, "loadTransactions"]);

#route
Route::get('/edit-cart-member', function () {
    return view('member.edit_cart_member');
});

Route::get('/edit-cart-admin', function () {
    return view('admin.edit_cart_admin');
});
