<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\AdminAuth;

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

// Users Interface Interaction
Route::get('/', function () {
    return view('routes.index');
});

Route::get('/about', function () {
    return view('routes.about');
});
Route::get('/skills', function () {
    return view('routes.skills');
});
Route::get('/academy', function () {
    return view('routes.academy');
});
Route::get('/auth/login', function () {
    return view('auth.login');
});


Route::get('/auth/signup/', function () {
    return view('auth.ind_signup');
});

// Add New User Route
Route::post('user/signup', [UserAuth::class, 'addUser']);
Route::post('user/signin', [UserAuth::class, 'loginUser']);
Route::get('user/logout', [UserAuth::class, 'logoutUser']);
