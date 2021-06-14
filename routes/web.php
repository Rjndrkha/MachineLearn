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
Auth::routes();
Route::get('/', function () {
    return view('index');
});

Route::get('main.pilihan/', function () {
    return view('main.pilihan');
});

//Convert Menu
Route::get('convert.imgtotxt/', function () {
    return view('convert.imgtotxt');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
