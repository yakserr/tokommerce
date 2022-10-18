<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\AddressController;
use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\DashboardController;

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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Prefix User
    Route::prefix('user/settings')->name('setting.')->group(function () {

        Route::resource('/', UserController::class);
        Route::resource('/address', AddressController::class);
    });

    // prefix seller
    Route::group(['prefix' => 'seller'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('seller.dashboard');
        Route::resource('/products', ProductController::class);
    });
});
