<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AspelController;
use App\Http\Controllers\PemainController;

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
Route::resource('companies', App\Http\Controllers\AdminController::class);
route::post('/addaspel', [App\Http\Controllers\AdminController::class, 'addaspel']);
route::post('/addpelatih', [App\Http\Controllers\AdminController::class, 'addpelatih']);
route::post('/addpemain', [App\Http\Controllers\AdminController::class, 'addpemain']);
route::post('/addteam', [App\Http\Controllers\AdminController::class, 'addteam']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/tables', [App\Http\Controllers\AdminController::class, 'alltables']);

Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile']);
Route::get('/lineup', [App\Http\Controllers\AdminController::class, 'lineup']);

Route::get('/listaspel', [App\Http\Controllers\AdminController::class, 'listaspel']);
Route::get('/listpel', [App\Http\Controllers\AdminController::class, 'listpel']);
// Route::get('/event', [App\Http\Controllers\FullCalendarController::class, 'index'])->name('calendar.event');;
Route::get('/grade', [App\Http\Controllers\AdminController::class, 'grade']);

Route::post('/event/action', [App\Http\Controllers\AdminController::class, 'action']);

//CRUD
Route::resource('/pemaincrud', App\Http\Controllers\PemainController::class);
Route::resource('/aspelcrud', App\Http\Controllers\AspelController::class);
Route::resource('/pelatihcrud', App\Http\Controllers\PelatihController::class);


//CALENDAR
// Route::get('calendar',[App\Http\Controllers\FullCalendarController::class, 'index'])->name('calendar.index');
Route::get('event/index', [App\Http\Controllers\FullCalendarController::class, 'index'])->name('calendar.index');
Route::post('event', [App\Http\Controllers\FullCalendarController::class, 'action'])->name('calendar.action');
Route::patch('event/update/{id}', [App\Http\Controllers\FullCalendarController::class, 'update'])->name('calendar.update');
Route::delete('event/destroy/{id}', [App\Http\Controllers\FullCalendarController::class, 'destroy'])->name('calendar.destroy');


Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::post('books', [BookController::class, 'store'])->name('books.store');

Route::get('/export-db', function () {
    return "Exporting";
});