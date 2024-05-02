<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class UserController extends Controller
{
    public function registerAkun(Request $request) 
    {
        $user = User::create([
            'email' => $request -> email,
            'password' => bcrypt($request -> password),
            'namaOrganisasi' => $request -> namaOrganisasi,
            'no_telp' => $request -> no_telp,
            'fakultas' => $request -> fakultas,
            'prodi' => $request -> prodi,
            'role' => $request -> role
        ]);
        return response()->json(['is_success'=> true,'data' => $user]);
        
    }

    public function login(Request $request)
    {
        $credential = $request -> only('email' , 'password');

        if(Auth::attempt($credential))
        {
            $user = Auth::user();
            // dd($user);

            //return redirect() -> route('jadwalBiro3');
            
            if($user -> role === 'Admin')
            {
                return redirect() -> route('jadwalBiro3');
            }
            else{
                return redirect() ->route('peminjam');
            }
        }
    }
}
