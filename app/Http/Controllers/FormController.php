<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class FormController extends Controller
{
    public function inputForm(Request $request) 
    {
        $form = Form::create([
            'nama_organisasi' => $request -> nama_organisasi,
            'no_telp' => $request -> no_telp,
            'kat_kegiatan' => $request -> kat_kegiatan,
            'lapangan' => $request -> lapangan,
            'nama_kegiatan' => $request -> nama_kegiatan,
            'nama_pj' => $request -> nama_pj,
            'surat_peminjaman' => $request -> surat_peminjaman,
            'tor' => $request -> tor,
            'tanggal' => $request -> tanggal,
            'hari' => $request -> hari,
            'slot' => $request -> slot,
            'hariRutin' => $request -> hariRutin,
            'tanggalRutin' => $request -> tanggalRutin,
            'slotRutin' => $request -> slotRutin
        ]);

        return response()->json(['is_success'=> true,'data' => $form]);
    }
    
    public function getForm(){
        $form = Form::all();
        return response()->json(['is_success'=> true,'data' => $form]);
    }

}
