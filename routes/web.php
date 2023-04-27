<?php

use App\Http\Controllers\logInController;
use App\Http\Controllers\signUpController;
use App\Http\Controllers\xtralistController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('Register/signup');
});

Route::post('/signup', [signUpController::class, 'store']);

Route::get(('/login'), function(){
    return view('Register/login');
});

Route::post('/login', [logInController::class, 'masuk']);

Route::get(('/footer'), function(){
    return view('footer');
});

Route::get(('/xtralistNU'), [xtralistController::class, 'index']);

// halaman xtra satuan
Route::get(('/xtralist/{xtra:kdExtracurricular}'), [xtralistController::class, 'show']);
