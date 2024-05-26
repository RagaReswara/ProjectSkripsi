@extends('master')
@section("content")


<section class="vh-100">
    <!-- component -->
    <div class="h-screen flex">
        <div class="flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">GOR SAMAPTA</h1>
                <h2 class="text-white font-bold text-4xl font-sans">UNIVERSITAS KRISTEN DUTA WACANA</h2>
                <p class="text-sm font-normal text-gray-200">
                    Jl. Dr. Wahidin Sudirohusodo No.5-25, Kotabaru, Kec. Gondokusuman
                </p>
                <p class="text-sm font-normal text-gray-200 mb-7">
                    Kota Yogyakarta,Daerah Istimewa Yogyakarta 55224, 0274563929
                </p>
            </div>
        </div>
        <div class="flex w-1/2 justify-center items-center bg-white">

            <form class="bg-white" action="/login" method="post"> 
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Silahkan Login</h1>
                <p class="text-sm font-normal text-gray-600 mb-7"></p>
                
                @csrf
                <!-- EMAIL -->
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="email" name="email" id="" placeholder="Email" />
                </div>
                <!-- PASSWORD -->
                <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none" type="password" name="password" id="" placeholder="Password" />
                </div>
                <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
            </form>
        </div>
        </div>

</section>
@endsection 