<?php

use App\Http\Controllers\CounselingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return Inertia::render('home', ["user" => Auth::user()]);
})->name('home');

Route::controller(CounselingController::class)->group(function () {
    Route::get('/counseling', 'index')->name('counseling.index');
    Route::get('/counseling-user/{id}', 'userCounseling')->name('counseling.user');
    Route::get('/counseling/detail/{id}/{id_user}', 'detail')->name('counseling.detail');
    Route::get('/counseling/create', 'createPage')->name('counseling.createPage');
    Route::post('/counseling/create', 'create')->name('counseling.create');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index')->name('user.index');
    Route::get('/register', 'registerPage');
    Route::post('/register', 'register');
    Route::get('/login', 'loginPage');
    Route::post('/login', 'login');
    Route::get('/logout', 'logout');
});
