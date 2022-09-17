<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/index', [AppController::class, 'index']);
Route::get('/create1', [AppController::class, 'create1'])->name('create1');
Route::post('/create1', [AppController::class, 'store1'])->name('create1');

// Route::get('/user_record', [AppController::class, 'index']);

