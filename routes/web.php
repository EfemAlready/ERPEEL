<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AspelController;
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
    return view('dashboard');
});
route::get('/redirects', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::post('/addaspel', [App\Http\Controllers\AdminController::class, 'addaspel']);
route::post('/addpelatih', [App\Http\Controllers\AdminController::class, 'addpelatih']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/tables', [App\Http\Controllers\AdminController::class, 'alltables']);

Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile']);

Route::get('/listaspel', [App\Http\Controllers\AdminController::class, 'listaspel']);
Route::get('/listpel', [App\Http\Controllers\AdminController::class, 'listpel']);
