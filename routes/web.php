<?php

use App\Http\Controllers\MakamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/makam', [MakamController::class, 'index'])->middleware('auth')->name('makam.index');
Route::get('/makam/{id}', [MakamController::class, 'view'])->middleware('auth')->name('makam.view');
Route::get('/makam/order/{userId}/{makamId}', [MakamController::class, 'order'])->middleware('auth')->name('makam.order');
Route::get('/makam/success/{requestId}', [MakamController::class, 'success'])->middleware('auth')->name('makam.success');

Route::post('/transaksi/post', [TransaksiController::class, 'post'])->middleware('auth')->name('transaksi.post');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
