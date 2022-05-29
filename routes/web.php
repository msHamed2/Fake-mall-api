<?php

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
    $url=config('app.url');
    $count=\App\Models\ApiCount::query()->first();
    return view('index',compact('count','url'));
});
Route::get('/docs', function () {
    $url=config('app.url');
    return view('Docs',compact('url'));
});
