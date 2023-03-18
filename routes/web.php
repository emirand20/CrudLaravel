<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PolController;
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

Route::get('/',[PolController::class, 'index'])->name('pol.index');
Route::get('/create', [PolController::class, 'create'])->name('pol.create');
Route::post('/store', [PolController::class, 'store'])->name('pol.store');


Route::get('/edit/{id}', [PolController::class, 'edit'])->name('pol.edit');
Route::put('/update/{id}', [PolController::class, 'update'])->name('pol.update');


Route::get('/show/{id}', [PolController::class, 'show'])->name('pol.show');
Route::delete('/delete/{id}', [PolController::class, 'destroy'])->name('pol.destroy');