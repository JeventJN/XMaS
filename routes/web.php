<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\logInController;
use App\Http\Controllers\signUpController;
use App\Http\Controllers\xtraController;
use App\Http\Controllers\cameraController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\editXtraController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\reportController;
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

// Route::get('/home', [Controller::class, 'index']);
// Route::get('/home', [homeController::class, 'showXtraSchedule'], [Controller::class, 'index']);
Route::get('/home', [homeController::class, 'showXtraSchedule']);
// Route::resource('/home', adminController::class);
Route::redirect('/', '/home');


Route::get('/signup', [signUpController::class, 'index'])->middleware('guest');
Route::post('/signup', [signUpController::class, 'store']);


Route::get('/login', [logInController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [logInController::class, 'masuk']);
// Route::get('/logout', [logInController::class, 'keluar'])->middleware('auth');
Route::post('/logout', [logInController::class, 'keluar'])->middleware('auth');
Route::post('/delete', [logInController::class, 'delete'])->middleware('auth');


Route::get(('/footer'), function(){
    return view('footer');
});


Route::get(('/xtrareg'), [xtraregController::class, 'xtra'])->middleware('auth');
Route::post(('/xtrareg'), [xtraregController::class, 'newMember'])->middleware('auth');


Route::get(('/xtralist'), [xtraController::class, 'index']);
Route::get(('/search'), [xtraController::class, 'searchLive']);
Route::get(('/presence'), [xtraController::class, 'presenceChange']);
Route::post(('/leave'), [xtraController::class, 'leaveXtra'])->name('xtra.leave');


// halaman xtra satuan
Route::post(('/xtrapage'), [xtraController::class, 'show']);
// Route::post(('/xtrapage/{kdXtra}'), [xtraController::class, 'show'])->name('xtrapagepost');
Route::get(('/xtrapage/{kdXtra}'), [xtraController::class, 'show'])->name('xtrapage');

Route::post('/addSchedule', [editXtraController::class, 'schedule'])->name('editXtra');

Route::post('/editXtra', [editXtraController::class, 'route'])->name('editXtra');
Route::post('/editHeader', [editXtraController::class, 'header']);
Route::post('/changeLogo', [editXtraController::class, 'logo']);
Route::post('/addPhoto', [editXtraController::class, 'photo'])->name('editXtra.photo');
Route::post('/editActivity', [editXtraController::class, 'activity'])->name('editXtra.activity');


// Route::match(['get', 'post'], '/editXtra', [editXtraController::class, 'route']);
// Route::post('/addPhoto', [editXtraController::class, 'photo']);
// Route::post('/editActivity', [editXtraController::class, 'activity']);

// Route::match(['GET', 'POST'], '/editXtra', [editXtraController::class, 'route'])->name('editXtra');



Route::post('/reportform', [reportController::class, 'reportKetua']);
Route::post('/addReport', [reportController::class, 'new']);

Route::post('/reportformA', [adminController::class, 'report']);
Route::post('/subReport', [adminController::class, 'accDenyReport']);


Route::get(('/absensiketua'), function (){
    return view('Ketua/absensiketua');
});


Route::get(('/contoh'), function (){
    return view(('/contoh'));
});

Route::get(('/myclub'), [xtraController::class, 'myclub']);

Route::get(('/reportlist'), [reportController::class, 'index'])->name('reportList');

Route::get('/run-script', [cameraController::class, 'runScript'])->name('run-script');

Route::get('profile', function (){
    return view('user/profile');
})->name('profile');

Route::post('/changeImage', [profileController::class, 'updateImage']);
Route::post('/changePhone', [profileController::class, 'updatePhone']);
Route::post('/showXtratoLead', [profileController::class, 'xtras']);
Route::post('/reqLead', [profileController::class, 'requestLead']);

Route::get('/approval', [adminController::class, 'approval'])->name('approval');
Route::post('/acceptReq', [adminController::class, 'accReq']);
Route::post('/denyReq', [adminController::class, 'denyReq']);

Route::get('xtralistA', function (){
    return view('Admin.xtralistA');
});

Route::get('chat', function (){
    return view('chat');
});

