<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

<<<<<<< HEAD
// API Jabatan
// Route::post('jabatan', [AuthController::class, 'createJb']);
// Route::get('jabatan', [AuthController::class, 'readJb']);
// Route::get('/jabatan/{id}', [AuthController::class, 'readbyIdJb']);
// Route::put('/jabatanUpdate/{id}', [AuthController::class, 'updateJb']);
// Route::delete('/jabatanDelete/{id}', [AuthController::class, 'deletebyIdJb']);

// API Kelas
// Route::post('kelas', [AuthController::class, 'createKelas']);
// Route::get('kelas', [AuthController::class, 'readKelas']);
// Route::get('/kelas/{id}', [AuthController::class, 'readbyIdKelas']);
// Route::put('/kelasUpdate/{id}', [AuthController::class, 'updateKelas']);
// Route::delete('/kelasDelete/{id}', [AuthController::class, 'deletebyIdKelas']);

// API Siswa
// Route::post('siswa', [AuthController::class, 'createSiswa']);
// Route::get('siswa', [AuthController::class, 'readSiswa']);
// Route::get('/siswa/{id}', [AuthController::class, 'readbyIdSiswa']);
// Route::put('/siswaUpdate/{id}', [AuthController::class, 'updateSiswa']);
// Route::delete('/siswaDelete/{id}', [AuthController::class, 'deletebyIdSiswa']);

// API Buku
// Route::post('buku', [AuthController::class, 'createBuku']);
// Route::get('buku', [AuthController::class, 'readBuku']);
// Route::get('/buku/{id}', [AuthController::class, 'readbyIdBuku']);
// Route::put('/bukuUpdate/{id}', [AuthController::class, 'updateBuku']);
// Route::delete('/bukuDelete/{id}', [AuthController::class, 'deletebyIdBuku']);

// API Film
Route::post('film', [AuthController::class, 'createFilm']);
Route::get('film', [AuthController::class, 'readFilm']);
Route::get('/film/{id}', [AuthController::class, 'readbyIdFilm']);
Route::put('/filmUpdate/{id}', [AuthController::class, 'updateFilm']);
Route::delete('/filmDelete/{id}', [AuthController::class, 'deletebyIdFilm']);

// API Bahan Bakar
// Route::post('bahanbakar', [AuthController::class, 'createBahanBakar']);
// Route::get('bahanbakar', [AuthController::class, 'readBahanbakar']);
// Route::get('/bahanbakar/{id}', [AuthController::class, 'readbyIdBahanBakar']);
// Route::put('/bahanbakarUpdate/{id}', [AuthController::class, 'updateBahanBakar']);
// Route::delete('/bahanbakarDelete/{id}', [AuthController::class, 'deletebyIdBahanBakar']);
=======
// API Guru
Route::post('guru', [AuthController::class, 'create']);
Route::get('guru', [AuthController::class, 'read']);
Route::get('/guru/{id}', [AuthController::class, 'readbyId']);
Route::put('/guruUpdate/{id}', [AuthController::class, 'update']);
Route::delete('/guruDelete/{id}', [AuthController::class, 'deletebyId']);

// API Jabatan
Route::post('jabatan', [AuthController::class, 'createJb']);
Route::get('jabatan', [AuthController::class, 'readJb']);
Route::get('/jabatan/{id}', [AuthController::class, 'readbyIdJb']);
Route::put('/jabatanUpdate/{id}', [AuthController::class, 'updateJb']);
Route::delete('/jabatanDelete/{id}', [AuthController::class, 'deletebyIdJb']);

// API Kelas
Route::post('kelas', [AuthController::class, 'createKelas']);
Route::get('kelas', [AuthController::class, 'readKelas']);
Route::get('/kelas/{id}', [AuthController::class, 'readbyIdKelas']);
Route::put('/kelasUpdate/{id}', [AuthController::class, 'updateKelas']);
Route::delete('/kelasDelete/{id}', [AuthController::class, 'deletebyIdKelas']);

// API Siswa
Route::post('siswa', [AuthController::class, 'createSiswa']);
Route::get('siswa', [AuthController::class, 'readSiswa']);
Route::get('/siswa/{id}', [AuthController::class, 'readbyIdSiswa']);
Route::put('/siswaUpdate/{id}', [AuthController::class, 'updateSiswa']);
Route::delete('/siswaDelete/{id}', [AuthController::class, 'deletebyIdSiswa']);

// API Presensi
Route::post('presensi', [AuthController::class, 'createPresensi']);
Route::get('presensi', [AuthController::class, 'readPresensi']);
Route::get('/presensi/{id}', [AuthController::class, 'readbyIdPresensi']);
Route::put('/presensiUpdate/{id}', [AuthController::class, 'updatePresensi']);
Route::delete('/presensiDelete/{id}', [AuthController::class, 'deletebyIdPresensi']);
>>>>>>> 773351a6dde0bd4fbbfd938d1af4aa21dc478e1e
