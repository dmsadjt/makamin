<?php

use App\Http\Controllers\AdminController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'user-access:makam'])->group(function () {
    Route::get('/makam/home', [App\Http\Controllers\HomeController::class, 'makamHome'])->name('makam.home');
});


Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //Makams
    Route::get('/makam', [MakamController::class, 'index'])->name('makam.index');
    Route::get('/makam/{id}', [MakamController::class, 'view'])->name('makam.view');
    Route::get('/makam/order/{userId}/{makamId}', [MakamController::class, 'order'])->name('makam.order');
    Route::get('/makam/success/{requestId}', [MakamController::class, 'success'])->name('makam.success');
    //Transaksi
    Route::post('/transaksi/post', [TransaksiController::class, 'post'])->name('transaksi.post');
});


Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');

    //makam
    Route::get('/admin/makam', [AdminController::class, 'makamIndex'])->name('admin.makam.index');
    Route::get('/admin/makam/{id}', [AdminController::class, 'makamView'])->name('admin.makam.view');
    //users
    Route::get('/admin/users', [AdminController::class, 'usersIndex'])->name('admin.users.index');
    Route::get('/admin/users/{id}');
    //transaksi
    Route::get('/admin/transaksi', [AdminController::class, 'transaksiIndex'])->name('admin.transaksi.index');
    Route::get('/admin/transaksi/{id}', [AdminController::class, 'transaksiView'])->name('admin.transaksi.view');
    Route::post('/admin/transaksi/setujui', [AdminController::class, 'setujuiTransaksi']);
    Route::post('/admin/transaksi/tolak', [AdminController::class, 'tolakTransaksi']);
});



require __DIR__ . '/auth.php';

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
