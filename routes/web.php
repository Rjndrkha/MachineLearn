<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadsController;
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
Auth::routes();
Route::get('/', function () {
    return view('index');
});

Route::post('/result', function (Request $request) {
    $request->image->store('images/store','public');
    return 'SUCCESS';
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/uploads', 'UploadsController@index')->name('uploads');
Route::post('/save','UploadsController@store')->name('uploads.store');