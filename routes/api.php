<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/users',\App\Http\Controllers\UsersController::class);
Route::apiResource('/products',\App\Http\Controllers\ProductsController::class);
Route::apiResource('/carts',\App\Http\Controllers\CartsController::class);
Route::post('/rate/product/{product}',[\App\Http\Controllers\ProductsController::class,'rate']);
Route::get('/categories',[\App\Http\Controllers\ProductsController::class,'categories']);
Route::post('/auth/login',[\App\Http\Controllers\UsersController::class,'login']);
