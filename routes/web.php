<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;

use App\Http\Middleware\ChekRole;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin', [HomeController::class, 'admin'])->middleware('ChekRole:admin')->name('admin.index');
Route::get('kasir', [HomeController::class, 'kasir'])->middleware('ChekRole:kasir')->name('kasir.index'); 


Route::get('admin/user', [UserController::class, 'index'])->name('admin.user'); 
// Route::get('member', [MemberController::class, 'index'])->name('member'); 

Route::resource('member', MemberController::class);
Route::resource('outlet', OutletController::class);
Route::resource('user', UserController::class);
Route::resource('paket', PaketController::class);





