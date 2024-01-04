<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\VendorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/vendors/{id}', [VendorController::class, 'show']);

Route::get('/requests/create', [RequestController::class, 'create']);

Route::post('/requests/confirm', [RequestController::class, 'confirm'])->name('requests.confirm');
