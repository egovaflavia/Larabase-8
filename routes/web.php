<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return redirect()->route('home');
});


Route::group(['middleware' => 'auth'], function(){
    Route::get('home', [HomeController::class, 'home'])->name('home');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

/**
 * Auth Route
 */
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'loginProses'])->name('login');
