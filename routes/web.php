<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () { return view('login'); });

// PEMINJAM
Route::get('/peminjam', function () { return view('peminjam/halamanUtama'); });
Route::get('/kosong', function () { return view('peminjam/kosong'); });
Route::get('/master', function () { return view('master'); });
Route::get('/persetujuan', function () { return view('peminjam/persetujuan'); });
Route::get('/form', function () { return view('peminjam/form'); });
Route::get('/formEvent', function () { return view('peminjam/formEvent'); });