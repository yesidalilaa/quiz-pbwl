<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function(){
    return view('welcome');
});  

Route::resource('golongan', GolonganController::class);
Route::resource('user', UserController::class);
Route::resource('pelanggan', PelangganController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');

});
