<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () { return view('login'); });
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });

// PEMINJAM
Route::get('/peminjam', function () { return view('peminjam/halamanUtama');}) -> name('peminjam');

Route::get('/kosong', function () { return view('peminjam/kosong'); });
Route::get('/master', function () { return view('master'); });
Route::get('/persetujuan', function () { return view('peminjam/persetujuan'); });
Route::get('/form', function () { return view('peminjam/form'); });
Route::get('/formEvent', function () { return view('peminjam/formEvent'); });
Route::get('/rekap', function () { return view('peminjam/rekapPeminjaman'); });
Route::get('/rekapEvent', function () { return view('peminjam/rekapEvent'); });
Route::get('/detailPersetujuan/{id_form}', function () { return view('peminjam/detailPersetujuan'); });

// BIRO 3
Route::get('/jadwalBiro3', function () { return view('Biro3/jadwal'); }) -> name('jadwalBiro3');
Route::get('/listPermohonan', function () { return view('Biro3/listPermohonan'); });
Route::get('/listPeminjaman', function () { return view('Biro3/listPeminjaman'); });
Route::get('/historyPeminjaman', function () { return view('Biro3/historyPeminjaman'); });
Route::get('/listAkun', function () { return view('Biro3/buatAkun'); });


Route::get('/detailPermohonan', function () { return view('Biro3/detailPermohonan'); });
Route::get('/detailPermohonanEvent', function () { return view('Biro3/detailPermohonanEvent'); });
Route::get('/detailPermohonanRutin', function () { return view('Biro3/detailPermohonanRutin'); });

Route::get('/isiJadwal', function () { return view('Biro3/formIsiJadwal'); });
Route::get('/isiEvent', function () { return view('Biro3/formIsiEvent'); });
Route::get('/rekapIsiJadwal', function () { return view('Biro3/rekapIsiJadwal'); });

