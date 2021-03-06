<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\GuruController;
// wajib gunakan

Route::get('/', [HomeController::class, 'index'])->name('home');
// jika user ada di url awal maka arahkan ke HomeController lalu method index

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Menu Pelanggan
// menampilkan semua data
Route::get('/pelanggan', [PelangganController::class, 'semuaPelanggan'])->name('pelanggan');
// insert data
Route::post('/pelanggan/pelangganBaru', [PelangganController::class, 'tambahPelanggan'])->name('pelangganBaru');
// delete data
Route::get('/pelanggan/hapusPelanggan/{id}', [PelangganController::class, 'hapusPelanggan'])->name('hapusPelanggan');
// update data
Route::get('/halamanUbah/{id}', [PelangganController::class, 'halamanUbah'])->name('halamanUbah');
Route::post('/ubahPelanggan/{id}', [PelangganController::class, 'ubahPelanggan'])->name('ubahPelanggan');

// Menu admin
// Menampilkan Semua Data
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
// Tambah Data
Route::get('/admin/halamanTambah', [AdminController::class, 'halamanTambah'])->name('halamanTambah');
Route::post('/admin/tambahAdmin', [AdminController::class, 'tambahAdmin'])->name('tambahAdmin');
// hapus
Route::get('/admin/hapusAdmin/{id}', [AdminController::class, 'hapusAdmin'])->name('hapusAdmin');
// ubah
Route::get('/admin/halamanUbahAdmin/{id}', [AdminController::class, 'halamanUbahAdmin'])->name('halamanUbahAdmin');
// detail
Route::get('/admin/halamanDetail/{id}', [AdminController::class, 'halamanDetail'])->name('halamanDetail');

// Menu Siswa
// menampilkan Data
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
// detail data
Route::get('/siswa/detail/{id}', [SiswaController::class, 'detail'])->name('siswaDetail');

// Menu Pengguna
// Menampilkan data menggunakan left Join
Route::get('/pengguna', [PenggunaController::class, 'index'])->name('pengguna');

// Menu guru
// menampilkan data dari 2 tabel menggunakan left join
Route::get('/guru', [GuruController::class, 'index'])->name('guru');