<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AntrianController;
// use App\Http\Controllers\Admin\AntrianController as AdminAntrianController;
use App\Http\Controllers\Admin\UserController;
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
Route::get('/cetak-antrian', [AntrianController::class,'cetak_pdf'])->name('antrian.pdf');

Route::group([ "prefix" => 'user',"middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::get('/', [ UserController::class, "index" ])->name('user');
    Route::view('/new', "user.user-new")->name('user.new');
    Route::view('/edit/{userId}', "user.user-edit")->name('user.edit');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::get('/', [ AntrianController::class, "index" ])->name('antrian');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
