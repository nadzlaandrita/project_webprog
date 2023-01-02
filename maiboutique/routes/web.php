<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

# Route untuk Welcome
Route::get('/', function () {
    return view('welcomepage');
});

# Route untuk Login
Route::get('/login', [AuthController::class, 'index']);
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');

# Route untuk Register
Route::get('/register', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');

# Route untuk home (member)
Route::get("/home-member", [ProductController::class, "loadProductMember"]);
// Route::get("/home-admin", [ProductController::class, "loadProductAdmin"]);


#Route detail product (member)
Route::get('/home-member/detail-product-{id}', [ProductController::class, "loadDetailProductMember"]);
