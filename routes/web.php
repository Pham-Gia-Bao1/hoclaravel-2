<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers;
use App\Http\Controllers\DetailCoffeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
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

Route::get('/',[HomeController::class,'index']);



// Route::get('/layout', function () {
//     return view('Layout/layout');
// });
Route::get('/sign-in', function () {
    return view('SignIn');
})->name('sign-in');

Route::get('/sign-up', function () {
    return view('SignUp');
})->name('sign-up');

//Route::get('ProductDetail', function () {
//    return view('ProductDetail');
//})->name('ProductDetail');
Route::get('ProductDetail',[DetailCoffeController::class,'show'])->name('ProductDetail');

Route::get('favourite', function () {
    return view('Favourite');
})->name('Favourite');

Route::get('checkout', function () {
    return view('CheckOut');
})->name('CheckOut');

Route::get('profile', function () {
    return view('profile.Wallet');
})->name('Profile');

Route::post('profile',[ProfileController::class, 'edit_profile'])->name('Profile');

Route::get('create_card', function (){
    return view('profile.Add-new-card');
});
Route::post('create_card',[ProfileController::class, 'create_card']);


Route::get('profile_edit', function () {
    return view('profile.Edit_info_profile');
})->name('profile.edit'); // Đặt tên đặc biệt cho route

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

//Route::get('/set_cookie',function(){
//        $reponse = (new Response())->cookie('unicode', 'day laf cookie ', '30');
//        return $reponse;
//})->name('cookie');
//Route::get('/get_cookie',function(Request $request){
//     return $request->cookie('unicode');
//
//});
// Route::get('test',[TestController::class, 'index'])->name('test');

Route::get('test',[TestController::class, 'downloadDoc'])->name('test');

