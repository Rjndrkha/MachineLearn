<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;

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
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::post('/storeImage', [PageController::class, 'storeImage'])->name('store_image');
Route::post('/result', [PageController::class, 'result'])->name('result');