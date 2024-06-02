<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;


class FormController extends Controller
{
    public function inputForm(Request $request) 
    {
        $form = Form::create([
            'id_user' => $request -> id_user,
            'email' => $request -> email,
            'nama_organisasi' => $request -> nama_organisasi,
            'no_telp' => $request -> no_telp,
            'kat_kegiatan' => $request -> kat_kegiatan,
            'lapangan' => $request -> lapangan,
            'nama_kegiatan' => $request -> nama_kegiatan,
            'nama_pj' => $request -> nama_pj,
            'surat_peminjaman' =>  $this -> handleUpload($request, 'surat_peminjaman'),
            'tor' => $this -> handleUpload($request, 'tor'),
            'tanggal' => $request -> tanggal,
            'hari' => $request -> hari,
            'slot' => $request -> slot,
            'hariRutin' => $request -> hariRutin,
            'tanggalRutin' => $request -> tanggalRutin,
            'slotRutin' => $request -> slotRutin,
            'status' => $request -> status,
            'special_status' => $request -> special_status
        ]);

        return response()->json(['is_success'=> true,'data' => $form]);
    }

    public function handleUpload(Request $request, $attribute){
        if($request -> hasFile($attribute)){
            $file = $request -> file($attribute);
            $modifierFile = time().'_'.str_replace('','_',$file -> getClientOriginalName());
            $path = $file -> storeAs('uploads',$modifierFile, 'public');
            return $modifierFile;
        }
        return $request -> $attribute;
    }
    
    public function getForm(){
        $form = Form::all();
        return response()->json(['is_success'=> true,'data' => $form]);
    }

    public function getIsiTabel(Request $request){
        $form = Form::where('id_user', $request -> id_user) -> get();
        return response()->json(['is_success'=> true,'data' => $form]);
    }

    public function getByid(Request $request){
        $getForm = Form::find($request -> id);
        return response()->json(['is_success'=> true,'data' => $getForm]);
    }

    public function cekSlot(Request $request){
        $slot = $request->jam_mulai . '-' . $request->jam_selesai;
        $getSlot = Form::where('hari', $request->hari)
                        ->where('slot', $request->jam_mulai . '-' .$request -> jam_selesai)
                        ->pluck('lapangan')
                        ->toArray();
    
        $allLapangan = implode(', ', $getSlot);
        $lapanganArray = explode(', ', $allLapangan); // Convert the string back to an array
        $slotCount = count($lapanganArray);
    
        return response()->json(['is_success' => true, 'data' => $allLapangan, 'count' => $slotCount]);
    }

    public function cekSlotRutin(Request $request){
        $slot = $request->jam_mulai . '-' . $request->jam_selesai;
        $getSlot = Form::where('hariRutin', $request->hariRutin)
                        ->where('slotRutin', $request->jam_mulai . '-' .$request -> jam_selesai)
                        ->pluck('lapangan')
                        ->toArray();
    
        $allLapangan = implode(', ', $getSlot);
        $lapanganArray = explode(', ', $allLapangan); // Convert the string back to an array
        $slotCount = count($lapanganArray);
    
        return response()->json(['is_success' => true, 'data' => $allLapangan, 'count' => $slotCount]);
    }

    public function cetak(Request $request){
        define('DOMPDF_DEBUG', true);
        set_time_limit(120);
        $viewName = 'Peminjam.cetak';
        $fileName = 'Nota dan Formulir Peminjaman';
        $formCetak = Form::find($request -> id_form);
        $pdf = PDF::loadView($viewName,['dataFormCetak' => $formCetak]);
        $pdfContent = $pdf -> output();
        return Response::make($pdfContent,200, ['Content-Type' => 'application/pdf', 'Content-Disposition' => 'attachment; fileName'.$fileName.'pdf']);
    }

    public function kirimEmail(Request $request){
        $kirimEmail = Form::find($request -> id_form);
        $toEmail = $kirimEmail -> email;
        $subject = 'Pemberitahuan Peminjaman GOR kepada '.$kirimEmail -> nama_organisasi.' dengan Penanggungjawab '.$kirimEmail -> nama_pj;
        if($request -> catatan){
            $message = $request -> catatan;
        }
        else{
            $message = 'Maaf Booking Anda Saya batalkan karena ada acara mendadak';
        }
        Mail::raw($message, function ($message) use ($toEmail, $subject) {
            $message->to($toEmail)
                    ->subject($subject)
                    ->from(config('mail.from.address'), config('mail.from.name'));
        });
        return response()->json(['is_success'=> true,'data' => $kirimEmail]);
    }

    public function mulaiPinjam(Request $request){
        $getForm = Form::find($request -> id);
        $updatePeminjaman = [
            'id_user',
            'email',
            'nama_organisasi',
            'no_telp',
            'kat_kegiatan',
            'lapangan',
            'nama_kegiatan',
            'nama_pj',
            'surat_peminjaman',
            'tor',
            'tanggal',
            'hari',
            'slot',
            'hariRutin',
            'tanggalRutin',
            'slotRutin',
            'status',
            'special_status',
            'catatan'
        ];
        
        foreach($updatePeminjaman as $update){
            if($request -> has($update)){
                $getForm -> $update = $request -> input($update);
            }
        }
        $getForm -> save();
        return response()->json(['is_success'=> true,'data' => $getForm]);
    }

    public function hapusForm(Request $request){
        $getForm = Form::find($request -> id_form);
        $getHari = $getForm -> hari;
        $getForm -> delete();
        return response()->json(['is_success'=> true,'data' => $getForm]);
    }

    public function cekLapangan(Request $request){
        $getline = Form::where('hari', $request->hari)
                        ->where('slot', $request->slot)
                        ->pluck('lapangan')
                        ->toArray();
        $allLapangan = implode(', ', $getline);
        return response()->json(['is_success' => true, 'lapangan' => $allLapangan]);

        $getSlot = $request -> slot;
        list($startSlot, $endSlot) = explode(' - ', $request -> slot);
        $startSlot = trim($startSlot);
        $endSlot = trim($endSlot);
    }

    // public function counter(){
    //     $form = Form::selectRaw('nama_organisasi, COUNT(*) as count') -> groupByRaw()
    //     return response()->json(['is_success' => true, 'data' => $form]);
    // }

    public function rekap(Request $request){
        $tanggalAwal = $request->input('tanggalAwal');
        $tanggalAkhir = $request->input('tanggalAkhir');
        $forms = Form::whereBetween('tanggal', [$tanggalAwal, $tanggalAkhir])-> where('status', '=', '3') -> where('special_status', '=', '2') -> get();
        return response()->json(['is_success' => true, 'data' => $forms]);
    }

<<<<<<< HEAD
=======
    public function downloadSurat(Request $request){
        $file = Form::findOrFail($request -> id_form);
        $filePath = 'uploads/' . $file -> surat_peminjaman;
        if ($file) {
            $fileUrl = Storage::url($filePath);
            return response()->json(['is_success' => true, 'url' => $fileUrl]);
        } 
        else {
            return response()->json(['is_success' => false, 'data' => $file]);
        }
    }

    public function downloadTor(Request $request){
        $file = Form::findOrFail($request -> id_form);
        $filePath = 'uploads/' . $file -> tor;
        if ($file) {
            $fileUrl = Storage::url($filePath);
            return response()->json(['is_success' => true, 'url' => $fileUrl]);
        } else {
            return response()->json(['is_success' => false, 'data' => $file]);
        }
    }

>>>>>>> fd7ce30b2b8a3a6ca6706b94da4aea9877e9ffda
}
