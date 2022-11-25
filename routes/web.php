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


Route::get('/', [App\Http\Controllers\ImportController::class, 'index'])->name('home');
Route::post('excel/upload', [App\Http\Controllers\ImportController::class, 'upload'])->name('excel.upload');
Route::post('excel/verify', [App\Http\Controllers\ImportController::class, 'verify'])->name('excel.verify');
Route::post('excel/store', [App\Http\Controllers\ImportController::class, 'store'])->name('excel.store');
Route::get('router-details', [App\Http\Controllers\RouterDetailController::class, 'index'])->name('router.details.index');

 	