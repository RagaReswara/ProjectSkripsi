@extends('Biro3/masterBiro')
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
                            : Organisasi
                        </td>
                        <th scope="col" class="px-6 py-3">
                            No Telp
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : No Telp
                        </td>
                    </tr>
                        
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Kegiatan
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Kegiatan
                        </td>
                        <th scope="col" class="px-6 py-3">
                            Lapangan
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Lapangan
                        </td>
                    </tr>

                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Hari
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Hari
                        </td>
                        <th scope="col" class="px-6 py-3">
                            Jam
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Jam
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <td class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : Tanggal
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
                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-yellow-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-gray-600 dark:focus:text-white">
                                    Setujui Bersyarat
                                </button>
                                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-red-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-red-400 dark:focus:ring-gray-600 dark:focus:text-white">
                                    Tolak
                                </button>
                                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-green-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-green-400 dark:focus:ring-gray-600 dark:focus:text-white">
                                    Setujui
                                </button>
                            </div>
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
            </table>
            

            </div>
        </div>

</div>

@endsection