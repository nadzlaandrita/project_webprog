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
Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'loginMember']);

# Route untuk Register
Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'registerMember']);

# Route untuk Sign Out
Route::get('/logout', [AuthController::class, 'logout']);

# Route untuk home (member)
Route::get("/home-member", [ProductController::class, "loadProductMember"]);
// Route::get("/home-admin", [ProductController::class, "loadProductAdmin"]);


#Route detail product (member)
Route::get('/home-member/detail-product-{id}', [ProductController::class, "loadDetailProductMember"]);

# Route Profile Member
Route::get('/profile-member', function () {
    return view('profile_member');
});

# Route Edit Profile Member
Route::get('/update-profile', function () {
    return view('update_profile');
});

