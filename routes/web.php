<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
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

Route::get('/',[ AntrianController::class, "index" ])->name('front.index');
Route::post('/tambah-antrian',[AntrianController::class,'store'])->name('antrian.store');
Route::get('/nomor-antrian/{id}',[AntrianController::class, 'show'])->name('antrian.show');
