<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;

class JadwalController extends Controller
{
    public function slot(){
        $jadwal = jadwal::all();
        return response()->json(['is_success'=> true,'data' => $jadwal]);
    }

    public function inputJadwal(Request $request) 
    {
        $jadwal = jadwal::create([
            'hari' => $request -> hari,
            'status' => $request -> status,
            'jam_mulai' => $request -> jam_mulai,
            'jam_selesai' => $request -> jam_selesai
        ]);

        return response()->json(['is_success'=> true,'data' => $jadwal]);
    }

    public function slotPertanggal(Request $request){
        $jadwal = jadwal::where('hari', $request -> hari) -> get();
        return response()->json(['is_success'=> true,'data' => $jadwal]);
    }
    
}
