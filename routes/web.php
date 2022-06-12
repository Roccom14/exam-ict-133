<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


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

Route::controller(AuthController::class)->group(function(){
    Route::get('login', 'index');
    Route::post('login', 'store');
    Route::get('logout', 'logout');
    Route::get('failure', 'failure');
    Route::get('failReCaptcha', 'failReCaptcha');
    Route::get('profile', 'profile');
    Route::post('profile', 'profile');
});

Route::get('secret', [AuthController::class, 'secret'])->middleware('isAuth');
Route::get('myPrints', [AuthController::class, 'myPrints'])->middleware('isAuth');



Route::get('/', function () {
    return view('welcome');
});
