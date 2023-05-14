<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\logInController;
use App\Http\Controllers\signUpController;
use App\Http\Controllers\xtralistController;
use App\Http\Controllers\cameraController;
use App\Http\Controllers\xtraregController;
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

Route::get('/home', [homeController::class, 'showXtraSchedule'], [adminController::class, 'index']);
// Route::resource('/home', adminController::class);
Route::redirect('/', '/home');


Route::get('/signup', [signUpController::class, 'index'])->middleware('guest');
Route::post('/signup', [signUpController::class, 'store']);


Route::get('/login', [logInController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [logInController::class, 'masuk']);
Route::get('/logout', [logInController::class, 'keluar'])->middleware('auth');


Route::get(('/footer'), function(){
    return view('footer');
});


Route::get(('/xtrareg'), [xtraregController::class, 'xtra'])->middleware('auth');
Route::post(('/xtrareg'), [xtraregController::class, 'newMember'])->middleware('auth');


Route::get(('/xtralistNU'), [xtralistController::class, 'index']);


// halaman xtra satuan
Route::get(('/xtralist/{xtra:kdExtracurricular}'), [xtralistController::class, 'show']);


Route::get('/reportform', function () {
    return view('Ketua/reportform');
});


Route::get(('/xtrapageketua'), function (){
    return view('Ketua/xtrapageketua');
});


Route::get(('/absensiketua'), function (){
    return view('Ketua/absensiketua');
});


Route::get(('/contoh'), function (){
    return view(('/contoh'));
});

Route::get(('/myclub'), [xtralistController::class, 'myclub']);

Route::get(('/reportlist'), function (){
    return view(('/Admin.reportlist'));
});

Route::get('/run-script', [cameraController::class, 'runScript'])->name('run-script');

Route::get('profile', function (){
    return view('user/profile');
});

Route::get('approval', function (){
    return view('Admin.approval');
});

Route::get('xtralistA', function (){
    return view('Admin.xtralistA');
});

