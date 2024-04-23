@extends('Peminjam/masterPeminjam')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">
            
            <div class="border-b-4 border-gray-900/40 pb-6 mt-2 mb-10">
                <h2 class="text-2xl font-semibold leading-7 text-gray-900">Detail Permohonan</h2>
                <p class="mt-1 text-base leading-6 text-gray-600">Berhasil melakukan Booking silahkan tunggu untuk disetujui</p>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 gap-10 mt">
                <thead class="text-xs text-gray-900 uppercase dark:text-gray-300">
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Organisasi
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Himpunan Mahasiswa Sistem Informasi
                        </td>
                        <th scope="col" class="px-6 py-3">
                            No Telp
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 08267171263
                        </td>
                    </tr>
                        
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Kegiatan
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Basket
                        </td>
                        <th scope="col" class="px-6 py-3">
                            Lapangan
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Full Lapangan
                        </td>
                    </tr>

                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Hari
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Senin
                        </td>
                        <th scope="col" class="px-6 py-3">
                            Jam
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 18.00 - 20.00
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 23 Maret 2024
                        </td>
                        <th scope="col" class="px-6 py-3 dark:bg-white">
                            
                        </th>
                        <td class="dark:bg-white px-6 py-4 text-gray-700 flex justify-end">
                            <button type="button" class="text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                                    Cetak Nota dan form
                            </button>
                        </td>
                    </tr>
                </thead>
            </table>
            <table>
                    <tr class="bg-white dark:bg-white text-black">
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <td class="dark:bg-white px-6 py-4 font-bold text-gray-700">
                            : Disetujui / tidak
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-white text-black">
                        <th scope="col" class="px-6 py-3">
                            Catatan
                        </th>
                        <td class="dark:bg-white px-6 py-4 font-bold text-gray-700">
                            : Silahkan datang ke biro 3 dengan memberikan form dan nota secara fisik
                        </td>
                    </tr>

                    <tr class="bg-white dark:bg-white text-black">
                        <td class="dark:bg-white px-6 py-4 font-bold text-gray-700">
                        </td>
                    </tr>
            </table>

            <div class="flex flex-1 justify-end">
                <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                    Mulai Peminjaman
                </button>
            </div>

                

            </div>
        </div>

</div>

@endsection