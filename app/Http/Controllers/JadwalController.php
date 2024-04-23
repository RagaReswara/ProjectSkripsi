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

    
}
