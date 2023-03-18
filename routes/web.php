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
