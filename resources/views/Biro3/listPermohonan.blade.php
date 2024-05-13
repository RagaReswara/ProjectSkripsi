@extends('Biro3/masterBiro')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">

            <div class="flex items-center h-10 rounded bg-gray-50 dark:bg-gray-800 mb-5">

                <!-- INDIKATOR -->
                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3 ml-5"><span class="flex w-2.5 h-2.5 bg-green-600 rounded-full me-1.5 flex-shrink-0"></span>Disetujui</span>
                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-yellow-300 rounded-full me-1.5 flex-shrink-0"></span>Bersyarat</span>
                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-red-500 rounded-full me-1.5 flex-shrink-0"></span>Ditolak</span>
            
            </div>

            <h2 class="font-bold text-3xl">Permintaan Harian</h2>
            
            <!-- TABEL HARIAN -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                No Telp/WA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hari
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Slot
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="permohonanRutin">

                    </tbody>
                </table>
            </div>
            <!-- TABEL HARIAN -->

            <h2 class="font-bold text-3xl mt-10">Permintaan Rutin</h2>
            
            <!-- TABEL RUTIN -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Mulai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Selesai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kegiatan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telepon/WA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                17 April 2024
                            </th>
                            <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                17 Oktober 2024
                            </td>
                            <td class="px-6 py-4">
                                Basket
                            </td>
                            <td class="px-6 py-4">
                                Latihan Basket Hmsi
                            </td>
                            <td class="px-6 py-4">
                                Full Lapangan
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="http://127.0.0.1:8000/detailPermohonanRutin" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- TABEL RUTIN -->

            <h2 class="font-bold text-3xl mt-10">Permintaan Event</h2>

            <!-- TABEL EVENT -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Kegiatan Event
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Penanggung Jawab
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nomor Telpon/WA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                18 Mei 2024
                            </th>
                            <td class="px-6 py-4">
                                IT Fest Evvent
                            </td>
                            <td class="px-6 py-4">
                                Vito gumani
                            </td>
                            <td class="px-6 py-4">
                                08767273617
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="http://127.0.0.1:8000/detailPermohonanEvent" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- TABEL EVENT -->

            </div>
        </div>

        <script>
            
            document.addEventListener('DOMContentLoaded', function() {
                fetch('http://127.0.0.1:8000/api/form')
                    .then(response => response.json())
                    .then(data => {
                        const tbody = document.getElementById('permohonanRutin');
                        data.data.forEach((item) => {
                            console.log(data)
                            if(item.hariRutin === null){
                            const row = 
                            `
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ${item.nama_organisasi}
                                    </th>
                                    <td class="px-6 py-4">
                                        ${item.no_telp}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.kat_kegiatan}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.nama_pj}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.tanggal}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.hari}
                                    </td>
                                    <td class="px-6 py-4">
                                        ${item.slot}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="http://127.0.0.1:8000/detailPermohonan?namaOrganisasi=${item.nama_organisasi}&telp=${item.no_telp}&kategori=${item.kat_kegiatan}&pj=${item.nama_pj}&tanggal=${item.tanggal}&hari=${item.hari}&slot=${item.slot}&lapangan=${item.lapangan}&namaKegiatan=${item.nama_kegiatan}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat Detail</a>
                                    </td>
                                </tr>
                            `;
                            tbody.innerHTML += row;
                            console.log(item.nama_organisasi);
                            }
                        });
                    })
                    .catch(error => console.error('Error fetching data:', error));
            });

        </script>

</div>

@endsection