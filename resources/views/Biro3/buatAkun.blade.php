@extends('Biro3/masterBiro')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">
    
            <div class="flex items-center h-10 rounded bg-gray-50 dark:bg-gray-800 mb-5">

                <!-- INDIKATOR -->
                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3 ml-5"><span class="flex w-2.5 h-2.5 bg-green-600 rounded-full me-1.5 flex-shrink-0"></span>Sedang Berlangsung</span>
                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-red-500 rounded-full me-1.5 flex-shrink-0"></span>Bermasalah</span>
                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-yellow-500 rounded-full me-1.5 flex-shrink-0"></span>Mendatang</span>
            
            </div>

            <div class="flex flex-1 ">
                <h2 class="font-bold text-3xl mb-3">DAFTAR AKUN</h2>

                
            </div>
            
            <!-- TABEL AKUN FAKULTAS -->
            <h2 class="mt-5 font-bold text-3xl mb-3 bg-gray-300 rounded-lg">Fakultas</h2>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Password
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fakultas
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                gor_fti@ukdw.ac.id
                            </th>
                            <td class="px-6 py-4">
                                fti123
                            </td>
                            <td class="px-6 py-4">
                                Badan Eksekutif Mahasiswa Fakultas Teknologi Informasi (BEMFTI)
                            </td>
                            <td class="px-6 py-4">
                                077362128364
                            </td>
                            <td class="px-6 py-2">
                                Teknologi Informasi
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- TABEL FAKULTAS -->

            <!-- TABEL PRODI -->
            <h2 class="mt-5 font-bold text-3xl mb-3 bg-gray-300 rounded-lg">PROGRAM STUDI</h2>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Password
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telepon
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Program Studi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                gor_si@ukdw.ac.id
                            </th>
                            <td class="px-6 py-4">
                                si1234
                            </td>
                            <td class="px-6 py-4">
                                Himpunan Mahasiswa Sistem Informasi (HMSI)
                            </td>
                            <td class="px-6 py-4">
                                073884612389
                            </td>
                            <td class="px-6 py-2">
                                Sistem Informasi
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- TABEL PRODI -->

            </div>
        </div>

</div>

@endsection