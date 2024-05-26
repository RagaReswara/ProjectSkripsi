@extends('Peminjam/masterPeminjam')
@section('content')

<!-- CONTENT -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

        <div class="border-b-4 border-gray-900/40 pb-6">
            <h2 class="text-2xl font-bold leading-7 text-gray-900">Detail Pemohonan Kegiatan Event</h2>
        </div>

        <!-- TABEL -->
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 gap-10">
                <thead class="text-base text-gray-900 uppercase font-semibold dark:text-white">
                    <tr class="bg-gray-600">
                        <th scope="col" class="px-6 py-3">
                            Nama Organisasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Penanggungjawab
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Telfon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kegiatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hari
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jam / Slot
                        </th> 
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white dark:bg-gray-200 text-gray-800">
                        <td id="organisasi" class="px-6 py-4">
                            
                        </td>
                        <td id="nama_pj" class="px-6 py-4">
                            
                        </td>
                        <td id="noTelp" class="px-6 py-4">
                            
                        </td>
                        <td id="namaKegiatan" class="px-6 py-4">
                            
                        </td>
                        <td id="hari" class="px-6 py-4">
                            
                        </td>
                        <td id="tanggal" class="px-6 py-4">
                            
                        </td>
                        <td id="jam" class="px-6 py-4">
                            
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="border-b-4 border-gray-900/40 pb-6 mt-3"></div>

            <div class="border-b-4 border-gray-900/40 pb-6 mt-2">
                <h2 class="text-2xl font-semibold leading-7 text-gray-900">Surat dan Tor yang diajukan</h2>

                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <!-- DOWNLOAD FILE SURAT PEMINJAMAN -->
                    <div class="flex items-start max-w-[200px] bg-gray-50 dark:bg-gray-600 rounded-xl p-2 mt-5 mr-5">
                                <div class="me-2">
                                    <span class="flex items-center gap-2 text-sm font-medium text-gray-900 dark:text-white pb-2">
                                        <svg fill="none" aria-hidden="true" class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 21">
                                            <g clip-path="url(#clip0_3173_1381)">
                                                <path fill="#E2E5E7" d="M5.024.5c-.688 0-1.25.563-1.25 1.25v17.5c0 .688.562 1.25 1.25 1.25h12.5c.687 0 1.25-.563 1.25-1.25V5.5l-5-5h-8.75z"/>
                                                <path fill="#B0B7BD" d="M15.024 5.5h3.75l-5-5v3.75c0 .688.562 1.25 1.25 1.25z"/>
                                                <path fill="#CAD1D8" d="M18.774 9.25l-3.75-3.75h3.75v3.75z"/>
                                                <path fill="#F15642" d="M16.274 16.75a.627.627 0 01-.625.625H1.899a.627.627 0 01-.625-.625V10.5c0-.344.281-.625.625-.625h13.75c.344 0 .625.281.625.625v6.25z"/>
                                                <path fill="#fff" d="M3.998 12.342c0-.165.13-.345.34-.345h1.154c.65 0 1.235.435 1.235 1.269 0 .79-.585 1.23-1.235 1.23h-.834v.66c0 .22-.14.344-.32.344a.337.337 0 01-.34-.344v-2.814zm.66.284v1.245h.834c.335 0 .6-.295.6-.605 0-.35-.265-.64-.6-.64h-.834zM7.706 15.5c-.165 0-.345-.09-.345-.31v-2.838c0-.18.18-.31.345-.31H8.85c2.284 0 2.234 3.458.045 3.458h-1.19zm.315-2.848v2.239h.83c1.349 0 1.409-2.24 0-2.24h-.83zM11.894 13.486h1.274c.18 0 .36.18.36.355 0 .165-.18.3-.36.3h-1.274v1.049c0 .175-.124.31-.3.31-.22 0-.354-.135-.354-.31v-2.839c0-.18.135-.31.355-.31h1.754c.22 0 .35.13.35.31 0 .16-.13.34-.35.34h-1.455v.795z"/>
                                                <path fill="#CAD1D8" d="M15.649 17.375H3.774V18h11.875a.627.627 0 00.625-.625v-.625a.627.627 0 01-.625.625z"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3173_1381">
                                                <path fill="#fff" d="M0 0h20v20H0z" transform="translate(0 .5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Surat Peminjaman
                                    </span>
                                    <span class="flex text-xs font-normal text-gray-500 dark:text-gray-400 gap-2">
                                        2 Pages 
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
                                            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"/>
                                        </svg>
                                        500 kb 
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
                                            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"/>
                                        </svg>
                                        PDF
                                    </span>
                                    </div>
                                    <div class="inline-flex self-center items-center">
                                    <button id="buttonDownload" class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-600 dark:hover:bg-gray-500 dark:focus:ring-gray-600" type="button">
                                        <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                                            <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                        </svg>
                                    </button>
                                </div>
                    </div>
                    <!-- DOWNLOAD FILE SURAT PEMINJAMAN -->

                    <!-- DOWNLOAD FILE TOR -->
                    <div class="flex items-start max-w-[200px] bg-gray-50 dark:bg-gray-600 rounded-xl p-2 mt-5">
                                <div class="me-2">
                                    <span class="flex items-center gap-2 text-sm font-medium text-gray-900 dark:text-white pb-2">
                                        <svg fill="none" aria-hidden="true" class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 21">
                                            <g clip-path="url(#clip0_3173_1381)">
                                                <path fill="#E2E5E7" d="M5.024.5c-.688 0-1.25.563-1.25 1.25v17.5c0 .688.562 1.25 1.25 1.25h12.5c.687 0 1.25-.563 1.25-1.25V5.5l-5-5h-8.75z"/>
                                                <path fill="#B0B7BD" d="M15.024 5.5h3.75l-5-5v3.75c0 .688.562 1.25 1.25 1.25z"/>
                                                <path fill="#CAD1D8" d="M18.774 9.25l-3.75-3.75h3.75v3.75z"/>
                                                <path fill="#F15642" d="M16.274 16.75a.627.627 0 01-.625.625H1.899a.627.627 0 01-.625-.625V10.5c0-.344.281-.625.625-.625h13.75c.344 0 .625.281.625.625v6.25z"/>
                                                <path fill="#fff" d="M3.998 12.342c0-.165.13-.345.34-.345h1.154c.65 0 1.235.435 1.235 1.269 0 .79-.585 1.23-1.235 1.23h-.834v.66c0 .22-.14.344-.32.344a.337.337 0 01-.34-.344v-2.814zm.66.284v1.245h.834c.335 0 .6-.295.6-.605 0-.35-.265-.64-.6-.64h-.834zM7.706 15.5c-.165 0-.345-.09-.345-.31v-2.838c0-.18.18-.31.345-.31H8.85c2.284 0 2.234 3.458.045 3.458h-1.19zm.315-2.848v2.239h.83c1.349 0 1.409-2.24 0-2.24h-.83zM11.894 13.486h1.274c.18 0 .36.18.36.355 0 .165-.18.3-.36.3h-1.274v1.049c0 .175-.124.31-.3.31-.22 0-.354-.135-.354-.31v-2.839c0-.18.135-.31.355-.31h1.754c.22 0 .35.13.35.31 0 .16-.13.34-.35.34h-1.455v.795z"/>
                                                <path fill="#CAD1D8" d="M15.649 17.375H3.774V18h11.875a.627.627 0 00.625-.625v-.625a.627.627 0 01-.625.625z"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3173_1381">
                                                <path fill="#fff" d="M0 0h20v20H0z" transform="translate(0 .5)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        TOR
                                    </span>
                                    <span class="flex text-xs font-normal text-gray-500 dark:text-gray-400 gap-2">
                                        2 Pages 
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
                                            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"/>
                                        </svg>
                                        500 kb 
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="self-center" width="3" height="4" viewBox="0 0 3 4" fill="none">
                                            <circle cx="1.5" cy="2" r="1.5" fill="#6B7280"/>
                                        </svg>
                                        PDF
                                    </span>
                                    </div>
                                    <div class="inline-flex self-center items-center">
                                    <button id="buttonDownload" class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-600 dark:hover:bg-gray-500 dark:focus:ring-gray-600" type="button">
                                        <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                                            <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                                        </svg>
                                    </button>
                                </div>
                    </div>
                    <!-- DOWNLOAD FILE TOR -->
                </div>

            </div>
            
            <table>
                <tr class="bg-white dark:bg-white text-black">
                    <th scope="col" class="px-2 text-start py-3">
                        Status
                    </th>
                    <td id="status" class="dark:bg-white px-6 py-4 font-bold text-gray-700">
                        : 
                    </td>
                </tr>
                <tr class="bg-white dark:bg-white text-black">
                    <th scope="col" class="px-2 text-start py-3">
                        Catatan
                    </th>
                    <td id="catatan" class="dark:bg-white px-6 py-4 font-bold text-gray-700">
                        : 
                    </td>
                </tr>
                <tr class="bg-white dark:bg-white text-black">
                    <td class="dark:bg-white px-6 py-4 font-bold text-gray-700">
                    </td>
                </tr>
            </table>

            <div class="mt-6 flex content-between gap-x-6">
                
            <div class="flex flex-1 place-content-between">
                <button type="button" onclick="cetak()" class="text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                    Cetak Form
                </button>
                <button id="btnMulaiPinjam" type="button" onclick="mulaiPinjam()" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                    Mulai Peminjaman
                </button>
                <button id="btnSelesaiPinjam" type="button" onclick="selesaiPinjam()" class="hidden text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                    Selesai Peminjaman
                </button>
            </div>

        </div>


        </div>
    </div>

    <script> 

        const idForm = window.location.pathname.split('/').pop() 
        function getByid(){
            fetch('http://127.0.0.1:8000/api/getByid', {
                method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm})
            })
            .then(response=>response.json())
            .then(data=>{
                if(data.is_success){
                    document.getElementById('organisasi').textContent = `${data.data.nama_organisasi}`;
                    document.getElementById('noTelp').innerText = `0${data.data.no_telp}`;
                    document.getElementById('nama_pj').innerText = `${data.data.nama_pj}`;
                    document.getElementById('namaKegiatan').innerText = `${data.data.nama_kegiatan}`;
                    document.getElementById('tanggal').innerText = `${data.data.tanggal}`;
                    document.getElementById('hari').innerText = `${data.data.hari}`;
                    document.getElementById('jam').innerText = `${data.data.slot}`;
                    console.log(data)

                    const catatan = document.getElementById('catatan');
                        if(data.data.catatan === null){
                            catatan.innerText = `: Belum Ada`;
                        }
                        else{
                            
                            catatan.innerText = `: ${data.data.catatan}`;
                        }
                    const status = document.getElementById('status');
                        if(data.data.status === 0){
                            status.innerText = `: Ditolak`;
                        }
                        else if(data.data.status === 1 || data.data.status === 4){
                            status.innerText = `: Menunggu Disetujui`;
                        }
                        else{
                            status.innerText = `: Diterima`;
                        }
                    
                        const btnMulaiPinjam = document.getElementById('btnMulaiPinjam');
                        const btnSelesaiPinjam = document.getElementById('btnSelesaiPinjam');
                        const statusBtn = data.data.status; 
                        const specialStatus = data.data.special_status; 

                        if (statusBtn === 0 || statusBtn === 1) {
                            btnMulaiPinjam.classList.add('hidden');
                        } else if (statusBtn === 2) {
                            btnMulaiPinjam.classList.remove('hidden');
                        }
                        if (specialStatus === 1) {
                            btnSelesaiPinjam.classList.remove('hidden');
                            btnMulaiPinjam.classList.add('hidden');
                        } else if (specialStatus === 2) {
                            btnMulaiPinjam.classList.add('hidden');
                        }
                }
            })
        }
        getByid()
        console.log(idForm)

        function mulaiPinjam(){
            fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm, special_status:1})
            })
            .then(response => response.json())
            .then(data => {
                window.location.href = "/persetujuan";
            })
            console.log('clicked')
        }

        function selesaiPinjam(){
            fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm, special_status:2})
            })
            .then(response => response.json())
            .then(data => {
                window.location.href = "/persetujuan";
            })
            console.log('clicked')
        }

        function cetak() {
                fetch('http://127.0.0.1:8000/api/cetak', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id_form: idForm })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.blob(); 
                })
                .then(blob => {
                    const url = window.URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = 'Nota_dan_Formulir_Peminjaman.pdf';
                    document.body.appendChild(a);
                    a.click();
                    a.remove();
                    window.URL.revokeObjectURL(url);
                })
                .catch(error => {
                    console.error('There was an error with the fetch operation:', error);
                });

                console.log('clicked');
            }
        

    </script>

@endsection