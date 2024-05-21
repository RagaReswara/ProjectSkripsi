<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Response;
use illuminate\Support\Facades\Mail;    


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
        $slot = $request -> jam_mulai . '-' . $request -> jam_selesai;
        $getSlot = Form::where('hari', $request -> hari) 
        -> where('slot', $slot) -> first();
        return response()->json(['is_success'=> true,'data' => $getSlot]);
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

    public function kirimEmail(){
        $toEmail = 'johanes.raga@si.ukdw.ac.id';
        $subject = 'Test Email Subject';
        $message = 'This is a test email message.';
        Mail::raw($message, function ($message) use ($toEmail, $subject) {
            $message->to($toEmail)
                    ->subject($subject)
                    ->from(config('mail.from.address'), config('mail.from.name'));
        });

        return 'Email sent successfully';
    }

    // public function kirimEmail2(){
    //     $data = ['otp' => 'TESTING'];
    //     Mail::send('Peminjam.kirimEmail', $data, function($message) use ($email) {
    //         $message->to($email)->subject('Verify OTP');
    //     });
    // }

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
            'special_status'
        ];
        
        foreach($updatePeminjaman as $update){
            if($request -> has($update)){
                $getForm -> $update = $request -> input($update);
            }
        }
        $getForm -> save();
        return response()->json(['is_success'=> true,'data' => $getForm]);
    }

    



}
