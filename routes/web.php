<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderSPController;
use App\Http\Controllers\OrderInsertController;

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

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/summary', [OrderController::class, 'summary'])->name('orders.summary');



Route::get('/order-summary-sp', [OrderSPController::class, 'index']);
Route::post('/order-summary-sp', [OrderSPController::class, 'result'])->name('order.sp.result');


Route::get('/order/create', [OrderInsertController::class, 'create']);
Route::post('/order/create', [OrderInsertController::class, 'store'])->name('orders.store');
