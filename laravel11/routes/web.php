<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\http\Controllers\ProdiController;

Route::get('/', function () {
    return view('dashboard', ['nama' => 'isan', 'foto' => 'baru.jpg'] );
});

Route::get('mahasiswa', function () {
    return view('mahasiswa', ['nama' => 'isan', 'foto' => 'baru.jpg'] );
});

Route::get('prodi', function () {
    return view('prodi', ['nama' => 'isan', 'foto' => 'baru.jpg'] );
});




Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
Route::get('/prodi', 'App\Http\Controllers\ProdiController@index');

Route::get('/data', [MahasiswaController::class, 'index']);
Route::get('/data', [MahasiswaController::class, 'show']);

Route::get('/data', [MahasiswaController::class, 'index']);
Route::get('/data/{id}', [MahasiswaController::class, 'show']);

Route::get('/data', [MahasiswaController::class, 'index']);
Route::get('/data/{id}', [prodiController::class, 'show']);






