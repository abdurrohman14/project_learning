<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\GuruController;
use App\Http\Controllers\Backend\JabatanController;

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
    return view('_layouts.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// route crud tabel guru
Route::prefix('gurus')->group(function(){
    Route::get('/view', [GuruController::class, 'GuruView'])->name('guru.view');
    Route::get('/add', [GuruController::class, 'GuruAdd'])->name('guru.add');
    Route::post('/store', [GuruController::class, 'GuruStore'])->name('guru.store');
    Route::get('/edit/{id}', [GuruController::class, 'GuruEdit'])->name('guru.edit');
    Route::post('/update/{id}', [GuruController::class, 'GuruUpdate'])->name('guru.update');
    Route::get('/delete/{id}', [GuruController::class, 'GuruDelete'])->name('guru.delete');
});

// route crud tabel jabatan
Route::prefix('jabatans')->group(function(){
    Route::get('/view', [JabatanController::class, 'JabatanView'])->name('jabatan.view');
    Route::get('/add', [JabatanController::class, 'JabatanAdd'])->name('jabatan.add');
    Route::post('/store', [JabatanController::class, 'JabatanStore'])->name('jabatan.store');
    Route::get('/edit/{id}', [JabatanController::class, 'JabatanEdit'])->name('jabatan.edit');
    Route::post('/update/{id}', [JabatanController::class, 'JabatanUpdate'])->name('jabatan.update');
    Route::get('/delete/{id}', [JabatanController::class, 'JabatanDelete'])->name('jabatan.delete');
});
