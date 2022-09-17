<?php

use App\Http\Controllers\Dashboard\Blog\BlogController;
use App\Http\Controllers\Dashboard\General\ContactUsController;
use App\Http\Controllers\Dashboard\General\CouponController;
use App\Http\Controllers\Dashboard\Product\CategoryController;
use App\Http\Controllers\Dashboard\User\Permission\PermissionController;
use App\Http\Controllers\Dashboard\User\Role\RoleController;
use App\Http\Controllers\Dashboard\User\UserController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ],
    function () {
        Route::get('/', function () {
            return view('empty');
        });
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('contact-us', ContactUsController::class)->only('index');
        Route::resource('coupons', CouponController::class);
    }
);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
