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

            <div  class="flex flex-1 mt-5 mb-3">
                <textarea id="catatan" name="catatan" rows="4" class="block p-2.5 w-96 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Berikan Catatan Untuk Peminjam"></textarea>
                <!-- <button id="kirimPesanBtn" type="button" onclick="kirimGmail()" class="ml-2 max-h-[45px] mt-[62px] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Kirim Pesan
                </button>         -->
            </div> 
            <div class="w-3/12 dark:bg-gray-600 dark:border-gray-500 rounded-xl" id="alertContainer">
                <div id="progressContainer" class="w-full bg-gray-200 rounded-full dark:bg-gray-700" style="display: none;">
                    <div id="progressBar" class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 0%; height: 100%">0%</div>
                    <div id="progressText" class="ml-3 text-sm font-medium text-gray-700 dark:text-gray-300" style="display: none; margin-top: 2px;">Mengirim Email.....</div>
                </div>
            </div>  
                            
            <div class="flex flex-1 rounded-sm shadow-sm mt-5 justify-end items-end" role="group">                           
                <button type="button" onclick="tolak()" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-red-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-red-400 dark:focus:ring-gray-600 dark:focus:text-white">              
                    Tolak                    
                </button>                                                          
                <button type="button" onclick="setujui()" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-green-500 dark:border-gray-800 dark:text-white dark:hover:text-white dark:hover:bg-green-400 dark:focus:ring-gray-600 dark:focus:text-white">                                          
                    Setujui                                       
                </button>                                        
            </div>

            </div>
        </div>  

        <script>

            const idForm = window.location.pathname.split('/').pop() 
            let ambilNoHp = '';

            function getByid(){
                fetch('http://127.0.0.1:8000/api/getByid', {
                    method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm})
                })
                .then(response=>response.json())
                .then(data=>{
                    if(data.is_success){
                        document.getElementById('organisasi').textContent = `: ${data.data.nama_organisasi}`;
                        document.getElementById('noTelp').innerText = `: 0${data.data.no_telp}`;
                        document.getElementById('kategoriKegiatan').innerText = `: ${data.data.kat_kegiatan}`;
                        document.getElementById('nama_pj').innerText = `: ${data.data.nama_pj}`;
                        document.getElementById('lapangan').innerText = `: ${data.data.lapangan}`;
                        document.getElementById('namaKegiatan').innerText = `: ${data.data.nama_kegiatan}`;
                        document.getElementById('tanggal').innerText = `: ${data.data.tanggal}`;
                        document.getElementById('hari').innerText = `: ${data.data.hari}`;
                        document.getElementById('jam').innerText = `: ${data.data.slot}`;
                        ambilNoHp = data.data.no_telp;
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
                    console.log(data.data.email)
                })
            }
            getByid()
            console.log(idForm)

            function kirimPesanWa(){
                const nomorTelp = document.getElementById('noTelp').textContent
                const catatan = document.getElementById('catatan').value
                const urlToWa = `https://wa.me/62${ambilNoHp}?text=${catatan}`;
                window.open(urlToWa, "_blank");
                
                console.log(urlToWa)
            }

            function setujui(){
                let simpanCatatan = document.getElementById('catatan').value;
                fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                    method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm, status:2})
                })
                .then(response => response.json())
                .then(data => {
                    fetch('http://127.0.0.1:8000/api/kirimEmail', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id_form: idForm, catatan: simpanCatatan })
                    })
                    .then(response => response.json())
                    .then(data => {
                        fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({ id: idForm, catatan: simpanCatatan })
                        })
                        .then(response => response.json())
                        .then(data => {
                                window.location.href = "/listPermohonan";
                            })
                        }) 
                })
                console.log('clicked')
            }

            function tolak(){
                let simpanCatatan = document.getElementById('catatan').value;
                fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                    method:'POST', headers:{'Content-Type':'application/json'}, body:JSON.stringify({id:idForm, status:0})
                })
                .then(response => response.json())
                .then(data => {
                    return fetch('http://127.0.0.1:8000/api/hapusForm', {
                        method: 'POST',
                        headers: {'Content-Type': 'application/json'},
                        body: JSON.stringify({id_form: idForm})
                    });
                    })
                    .then(response => response.json())
                    .then(data => {
                        fetch('http://127.0.0.1:8000/api/kirimEmail', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({ id_form: idForm, catatan: simpanCatatan })
                            })
                            .then(response => response.json())
                            .then(data => {
                                fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                                    method: 'POST',
                                    headers: { 'Content-Type': 'application/json' },
                                    body: JSON.stringify({ id: idForm, catatan: simpanCatatan })
                                })
                                .then(response => response.json())
                                .then(data => {
                                        window.location.href = "/listPermohonan";
                                    })
                                })
                    })
                console.log('clicked')
            }

            function kirimEmailHtml(){
                const mail = `mailto: dvinjo55@gmail.com?subject=TES PEMINJAMAN&body=testing`;
                window.location.href = mail;
                console.log('clicked')
            }

            function kirimGmail() {
                let simpanCatatan = document.getElementById('catatan').value;
                let progressBar = document.getElementById('progressBar');
                let progressContainer = document.getElementById('progressContainer');
                let progressText = document.getElementById('progressText');
                let kirimPesanBtn = document.getElementById('kirimPesanBtn');

                progressContainer.style.display = 'block';
                progressText.style.display = 'block';
                progressBar.style.width = '0%';
                progressBar.textContent = '0%';

                kirimPesanBtn.disabled = true;
                kirimPesanBtn.innerHTML = `
                    <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>
                    </svg>
                    Loading...
                `;

                let progress = 0;
                let interval = setInterval(() => {
                    if (progress < 90) {
                        progress += 10;
                        progressBar.style.width = progress + '%';
                        progressBar.textContent = progress + '%';
                    }
                }, 500);

                fetch('http://127.0.0.1:8000/api/kirimEmail', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id_form: idForm, catatan: simpanCatatan })
                })
                .then(response => response.json())
                .then(data => {
                    fetch('http://127.0.0.1:8000/api/mulaiPinjam', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ id: idForm, catatan: simpanCatatan })
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Complete progress bar
                        clearInterval(interval);
                        progressBar.style.width = '100%';
                        progressBar.textContent = '100%';

                        // Show success alert
                        document.getElementById('alertContainer').innerHTML = `
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                <span class="font-medium">Success alert!</span> Berhasil Kirim Catatan ke peminjam.
                            </div>
                        `;
                        setTimeout(() => {
                            document.getElementById('alertContainer').innerHTML = '';
                            progressContainer.style.display = 'none';
                            progressText.style.display = 'none';
                            progressBar.style.width = '0%';
                            progressBar.textContent = '0%';
                        }, 3000);

                        // Re-enable the button
                        kirimPesanBtn.disabled = false;
                        kirimPesanBtn.innerHTML = 'Kirim Pesan';
                    });
                })
                .catch(error => {
                    clearInterval(interval);
                    alert("Error: " + error);
                    progressContainer.style.display = 'none';
                    progressText.style.display = 'none';
                    progressBar.style.width = '0%';
                    progressBar.textContent = '0%';

                    // Re-enable the button
                    kirimPesanBtn.disabled = false;
                    kirimPesanBtn.innerHTML = 'Kirim Pesan';
                });

                console.log(idForm);
                console.log(document.getElementById('catatan').value);
            }

        </script>

</div>

@endsection