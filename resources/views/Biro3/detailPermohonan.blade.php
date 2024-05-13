@extends('Biro3/masterBiro')
@section('content')

<!-- CONTENT -->
<div class="p-4 sm:ml-64">

        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
            <div class="flex-1 gap-4 mb-4">
            
            <div class="border-b-4 border-gray-900/40 pb-6 mt-2 mb-10">
                <h2 class="text-2xl font-semibold leading-7 text-gray-900">Detail Permohonan Harian</h2>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 gap-10 mt">
                <thead class="text-xs text-gray-900 uppercase dark:text-gray-300">
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Organisasi
                        </th>
                        <td id="organisasi" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 
                        </td>
                        <th scope="col" class="px-6 py-3">
                            Nama Kegiatan
                        </th>
                        <td id="namaKegiatan" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 
                        </td>
                    </tr>
                        
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Kegiatan
                        </th>
                        <td id="kategoriKegiatan" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 
                        </td>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <td id="tanggal" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Penanggung Jawab
                        </th>
                        <td id="nama_pj" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 
                        </td>
                        <th scope="col" class="px-6 py-3">
                            Hari
                        </th>
                        <td id="hari" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 
                        </td>
                    </tr>

                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            NO Telp/WA
                        </th>
                        <td id="noTelp" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 
                        </td>
                        <th scope="col" class="px-6 py-3">
                            Jam
                        </th>
                        <td id="jam" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 
                        </td>
                    </tr>
                    
                    <tr class="bg-white dark:bg-gray-700">
                        <th scope="col" class="px-6 py-3">
                            Lapangan
                        </th>
                        <td id="lapangan" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                            : 
                        </td>
                    </tr>
                </thead>
            </table>
            <table>

            <div class="flex flex-1 mt-5">
                <textarea id="description" rows="4" class="block p-2.5 w-96 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Berikan Catatan Untuk Peminjam"></textarea>
            </div>
                            
            <div class="flex flex-1 rounded-sm shadow-sm mt-5 justify-end items-end" role="group">                             
                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-red-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-red-400 dark:focus:ring-gray-600 dark:focus:text-white">              
                    Tolak                    
                </button>                                                          
                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-green-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-green-400 dark:focus:ring-gray-600 dark:focus:text-white">                                          
                    Setujui                                       
                </button>                                        
            </div>

            </div>
        </div>

        <script>

            document.addEventListener('DOMContentLoaded', function() {
                const urlParams = new URLSearchParams(window.location.search);
                const namaOrganisasi = urlParams.get('namaOrganisasi');
                const noTelp = urlParams.get('telp');
                const kategori = urlParams.get('kategori');
                const pj = urlParams.get('pj');
                const tanggal = urlParams.get('tanggal');
                const hari = urlParams.get('hari');
                const slot = urlParams.get('slot');
                const lapangan = urlParams.get('lapangan');
                const namaKegiatan = urlParams.get('namaKegiatan');

                document.getElementById('organisasi').innerText = `: ${namaOrganisasi}`;
                document.getElementById('kategoriKegiatan').innerText = `: ${kategori}`;
                document.getElementById('hari').innerText = `: ${hari}`;
                document.getElementById('tanggal').innerText = `: ${tanggal}`;
                document.getElementById('noTelp').innerText = `: ${noTelp}`;
                document.getElementById('lapangan').innerText = `: ${lapangan}`;
                document.getElementById('jam').innerText = `: ${slot}`;
                document.getElementById('nama_pj').innerText = `: ${pj}`;
                document.getElementById('namaKegiatan').innerText = `: ${namaKegiatan}`;

                console.log(document.getElementById('organisasi'));

            });

        </script>

</div>

@endsection