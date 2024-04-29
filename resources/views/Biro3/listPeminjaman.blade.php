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

            <h2 class="font-bold text-3xl mb-3">List Peminjaman Yang Sedang Berlangsung</h2>
            
            <!-- TABEL HARIAN -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Instansi/Organisasi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jam
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Kegiatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telepon/WA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Lapangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Koreksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Himpunan Mahasiswa Sistem Informasi
                            </th>
                            <td class="px-6 py-4">
                                17 April 2024
                            </td>
                            <td class="px-6 py-4">
                                16.00 - 20.00
                            </td>
                            <td class="px-6 py-4">
                                Basket
                            </td>
                            <td class="px-6 py-2">
                                Vito Hermawan
                            </td>
                            <td class="px-6 py-4">
                                086632711234
                            </td>
                            <td class="px-6 py-4">
                                Full Lapangan
                            </td>
                            <td class="px-6 py-4">
                                berlangsung
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" class="text-white bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                                        Selesai
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- TABEL HARIAN -->

            </div>
        </div>

</div>

@endsection