<?php

use App\Http\Controllers\FormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/jadwal',[JadwalController::class,'slot']);
Route::post('/inputJadwal',[JadwalController::class,'inputJadwal']);
Route::post('/slotPertanggal',[JadwalController::class,'slotPertanggal']);
Route::post('/updateSlot',[JadwalController::class,'updateSlot']);

Route::post('/registerAkun',[UserController::class,'registerAkun']);
Route::get('/user',[UserController::class,'getUser']);

Route::get('/form',[FormController::class,'getForm']);
Route::post('/getIsiTabel',[FormController::class,'getIsiTabel']);
Route::post('/formInput',[FormController::class,'inputForm']);
Route::post('/getByid',[FormController::class,'getByid']);
Route::post('/cekSlot',[FormController::class,'cekSlot']);
Route::post('/mulaiPinjam',[FormController::class,'mulaiPinjam']);

Route::post('/cetak',[FormController::class,'cetak']);
Route::get('/kirimEmail',[FormController::class,'kirimEmail']);



