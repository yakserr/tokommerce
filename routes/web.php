<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\RegionController;
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

    // Prefix and as setting
    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::resource('settings', UserController::class)->only('index', 'update');

        Route::group(['prefix' => 'settings'], function () {
            Route::put('defaultAddress/{address}', [AddressController::class, 'isDefault'])->name('address.isDefault');
            Route::resource('address', AddressController::class);
        });
    });

    // prefix seller
    Route::group(['prefix' => 'seller'], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('seller.dashboard');
        Route::resource('products', ProductController::class);
    });

    // region
    Route::get('provinces', [RegionController::class, 'provinces'])->name('provinces');
    Route::get('cities', [RegionController::class, 'cities'])->name('cities');
    Route::get('districts', [RegionController::class, 'districts'])->name('districts');
    Route::get('villages', [RegionController::class, 'villages'])->name('villages');
});
