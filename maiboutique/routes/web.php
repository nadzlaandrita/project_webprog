<?php

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
Route::get('/login', function () {
    return view('login');
});

# Route untuk Register
Route::get('/register', function () {
    return view('register');
});

# Route untuk home (member)
Route::get("/home-member", [ProductController::class, "loadProductMember"]);
Route::get("/home-admin", [ProductController::class, "loadProductAdmin"]);

Route::get("/home-member", [ProductController::class, "loadDetailProductMember"]);
Route::get("/home-member", [ProductController::class, "loadDetailProductAdmin"]);