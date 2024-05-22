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

                <!-- TABEL UNTUK PEMINJAMAN HARIAN -->
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 gap-10 mt">
                    <thead class="text-xs text-gray-900 dark:text-gray-300">
                        <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                Organisasi
                            </th>
                            <td id="organisasi" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
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
                                Nama Penanggung Jawab
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
                                Kategori Kegiatan
                            </th>
                            <td id="kategoriKegiatan" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
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
                                namaKegiatan
                            </th>
                            <td id="namaKegiatan" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                            <th scope="col" class="px-6 py-3">
                                lapangan
                            </th>
                            <td id="lapangan" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-700">
                            <th scope="col" class="px-6 py-3">
                                No Telp/WA
                            </th>
                            <td id="noTelp" class="dark:bg-gray-200 px-6 py-4 font-bold text-gray-700">
                                : 
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
                    <button type="button" onclick="mulaiPinjam()" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-1.5 text-center">
                        Mulai Peminjaman
                    </button>
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
                                document.getElementById('organisasi').textContent = `: ${data.data.nama_organisasi}`;
                                document.getElementById('noTelp').innerText = `: ${data.data.no_telp}`;
                                document.getElementById('kategoriKegiatan').innerText = `: ${data.data.kat_kegiatan}`;
                                document.getElementById('nama_pj').innerText = `: ${data.data.nama_pj}`;
                                document.getElementById('lapangan').innerText = `: ${data.data.lapangan}`;
                                document.getElementById('namaKegiatan').innerText = `: ${data.data.nama_kegiatan}`;
                                document.getElementById('tanggal').innerText = `: ${data.data.tanggal}`;
                                document.getElementById('hari').innerText = `: ${data.data.hari}`;
                                document.getElementById('jam').innerText = `: ${data.data.slot}`;
                                console.log(data)
                                const cekTanggalRutin = document.getElementById('tanggal');
                                    if (data.data.tanggalRutin !== null) {
                                        cekTanggalRutin.innerText = `: ${data.data.tanggal} dan ${data.data.tanggalRutin}`;
                                    } else {
                                        cekTanggalRutin.innerText = `: ${data.data.tanggal}`;
                                    }
                                
                                const cekHariRutin = document.getElementById('hari');
                                    if (data.data.hariRutin !== null) {
                                        cekHariRutin.innerText = `: ${data.data.hari} dan ${data.data.hariRutin}`;
                                    } else {
                                        cekHariRutin.innerText = `: ${data.data.hari}`;
                                    }

                                const cekSlotRutin = document.getElementById('jam');
                                    if (data.data.slotRutin !== null) {
                                        cekSlotRutin.innerText = `: ${data.data.slot} dan ${data.data.slotRutin}`;
                                    } else {
                                        cekSlotRutin.innerText = `: ${data.data.slot}`;
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

            

        </script>

</div>

@endsection