<?php

use App\Http\Controllers\Api\Product\CategoryController;
use App\Http\Controllers\Api\User\ContactUsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('contact-us/create', [ContactUsController::class, 'create'])->name('user.contact-us');
Route::post('contact-us', [ContactUsController::class, 'store'])->name('user.contact-us.create');
Route::get('categories', [CategoryController::class, 'index'])->name('product.categories.index');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('product.categories.show');
