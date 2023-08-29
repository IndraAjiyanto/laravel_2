<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FutsalController;

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

Route::get('/beranda',[FutsalController::class,'index'])->name('beranda');
Route::get('/tambahbooking',[FutsalController::class,'tambahbooking'])->name('tambahbooking');
Route::post('/insert',[FutsalController::class,'insert'])->name('insert');
Route::get('/editbooking/{id}',[FutsalController::class,'editbooking'])->name('editbooking');