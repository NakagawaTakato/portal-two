<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'index']);
Route::get('/inquiry', [TestController::class, 'inquiry']);
Route::post('/inquiry/confirm', [TestController::class, 'confirm']);
Route::post('/send', [TestController::class, 'send']);
