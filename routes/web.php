<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Middleware\Authenticate;
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

Route::get('/', function () {
    return view('Home');
});

// Route::get('/layout', function () {
//     return view('Layout/layout');
// });
Route::get('/sign-in', function () {
    return view('SignIn');
})->name('sign-in');

Route::get('/sign-up', function () {
    return view('SignUp');
})->name('sign-up');

Route::get('ProductDetail', function () {
    return view('ProductDetail');
})->name('ProductDetail');

Route::get('favourite', function () {
    return view('Favourite');
})->name('Favourite');

Route::get('checkout', function () {
    return view('CheckOut');
})->name('CheckOut');

Route::get('profile', function () {
    return view('Profile');
})->name('Profile');

Route::get('forgot-password', function () {
    return view('ResetPassword');
})->name('ResetPassword');

Route::get('resetpassworded', function () {
    return view('ResetPasswordEmailed');
})->name('ResetPasswordEmailed');

Route::get('shipping', function () {
    return view('Shipping');
})->name('Shipping');

Route::get('payment', function () {
    return view('Payment');
})->name('Payment');

Route::get('AddNewCard', function () {
    return view('AddNewCard');
})->name('AddNewCard');

