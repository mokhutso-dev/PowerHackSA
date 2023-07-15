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


// Admin Interaction

// Admin Dash board
Route::get('/store/admin/dashboard', function () {
    return redirect('/store/admin/dashboard/admins');
});
// Admins dashboard tab
Route::get('/store/admin/dashboard/admins', function () {
     $adminslist = DB::table('admins')->get();
    return view('admin.admins',['admins' => $adminslist]);
});
// Users dashboard tab
Route::get('/store/admin/dashboard/users', function () {
     $adminslist = DB::table('customers')->get();
    return view('admin.users',['admins' => $adminslist]);
});
// Products dash board tab
Route::get('/store/admin/dashboard/products', function () {
     $adminslist = DB::table('customers')->get();
    return view('admin.products',['admins' => $adminslist]);
});



// Admin Auth
// Admin sign  up
Route::get('/store/admin/dashboard/admins/addadmin', function () {
    return view('auth.admin_signup');
});
// Admin sign in
Route::get('/store/admin/login', function () {
    return view('auth.admin_signin');
});

// web.php
// Get User to edit
Route::get('/store/admin/dashboard/users/{id}', function ($userId) {
    // ...
    $user = DB::table('customers')->where('id',$userId)->get();
    // echo $user;
    return view('admin.useredit',['userById' => $user]);

});
// Get Admin to edit
Route::get('/store/admin/dashboard/admins/{id}', function ($userId) {
    // ...
    $user = DB::table('admins')->where('id',$userId)->get();
    // echo $user;
    return view('admin.adminedit',['adminById' => $user]);

});
// or
// Route::get('/users/{user}', 'UserController@show');
// UserController.php
// public function show(User $user)
// {
//     // ...
// }

// Add New User Route
Route::post('customer/signup/individual', [UserAuth::class, 'addCustomer']);
Route::post('customer/signin/individual', [UserAuth::class, 'loginCustomer']);
Route::get('customer/logout', [UserAuth::class, 'logoutCustomer']);
// Admin Auth
Route::post('/store/admin/dashboard/admins/addadmin/signup', [AdminAuth::class, 'addAdmin']);
Route::post('/store/admin/dashboard/admins/addadmin/signin', [AdminAuth::class, 'loginAdmin']);
Route::get('store/admin/logout', [AdminAuth::class, 'logoutAdmin']);


// Customer Admin Update
Route::post('/store/admin/users/update', [UserAuth::class, 'customerUpdate']);
Route::post('/store/admin/admins/update', [AdminAuth::class, 'adminUpdate']);

