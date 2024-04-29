@extends('Peminjam/masterPeminjam')
@section('content')

        <div class="p-4 sm:ml-64">

            <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

                <form>
                <div class="space-y-12">
                    <div class="border-b border-gray-900/40 pb-6">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Formulir Peminjaman Gor</h2>
                    <p class="mt-1 text-base leading-6 text-gray-600">Silahkan untuk mengisi form dibawah ini.</p>

                    <div class="border-b-8 border-gray-950/40 pb-2"></div>

                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2">
                        <!-- <label for="organisasi" class="block text-base font-medium leading-6 text-gray-900">Nama Organisasi</label> -->

                            <!-- DROPDOWN SELECT -->
                            <form class="max-w-60 mx-auto mt">
                                    <select id="countries" class="bg-gray-500 border border-gray-50 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 sm:max-w-md shadow-sm sm:leading-6 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-10">
                                        <option selected>Silahkan Pilih Organisasi</option>
                                        <option value="hmsi">Himpunan Mahasiswa Sistem Informasi (HMSI)</option>
                                        <option value="fti">Badan Eksekutif Mahasiswa Fakultas Teknologi Informasi (BMFTI)</option>
                                        <option value="ti">Himpunan Mahasiswa Teknologi Informasi (HMTI)</option>
                                        <option value="kedokteran">Kedokteran</option>
                                    </select>
                            </form>   
                    
                            <!-- <label for="email" class="block text-base font-medium leading-6 text-gray-900">Nomor Telepon / WA</label> -->
                            <div class="sm:col-span-2 mt-4">
                                <input name="noTelp" type="text" autocomplete="noTelp" class="block w-full max-w-60 rounded-md border-0 py-1.5 sm:max-w-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nomor Telepon/WA Penanggung Jawab">
                            </div>
                            
                        
                        </div>
                    </div>

                    <!-- CHECKBOX KATEGORI KEGIATAN-->
                    <div class="space-y-10">
                        <fieldset>
                        <!-- <legend class="text-base font-semibold leading-6 text-gray-900">Kategori Kegiatan</legend> -->
                        <div class="space-y-2">
                            <form class="max-w-80">
                                    <select id="kategoriKegiatan" class="bg-gray-500 border border-gray-50 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 sm:max-w-md shadow-sm sm:leading-6 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-10">
                                        <option disabled selected hidden>Silahkan Pilih Kategori Kegiatan</option>
                                        <option value="basket">Basket</option>
                                        <option value="bulutangkis">Bulu Tangkis</option>
                                        <option value="taekwondo">Taekwondo</option>
                                        <option value="tenismeja">Tenis Meja</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                            </form>

                            <!-- <h2 class="text-base font-semibold leading-7 text-gray-900">Perhatian</h2> -->
                            <p class="text-gray-600">Khusus untuk kegiatan event silahkan untuk mengisikan form
                                <a href="http://127.0.0.1:8000/formEvent" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">disini</a>
                            </p>
                        </fieldset>
                    </div>
                    <!-- CHECKBOX KATEGORI KEGIATAN -->

                </div>
                    <!-- CHECKBOX LAPANGAN-->
                    <div class="space-y-10">
                        <fieldset>
                        <legend class="text-base font-semibold leading-6 text-gray-900">Silahkan Pilih Lapangan</legend>
                        <div class="mt-4 space-y-6">
                            
                        <!-- LINE -->
                            <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="lineA" name="line" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"> 
                            </div>
                            <div class="text-sm leading-6">
                                <label for="lineA" class="font-medium text-gray-900">Line A</label>
                                <!-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> -->
                            </div>
                            <div class="flex h-6 items-center ml-9">
                                <input id="lineB" name="line" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="lineB" class="font-medium text-gray-900">Line B</label>
                                <!-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> -->
                            </div>
                            <div class="flex h-6 items-center ml-9">
                                <input id="lineC" name="line" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="lineC" class="font-medium text-gray-900">Line C</label>
                                <!-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> -->
                            </div>
                            <div class="flex h-6 items-center ml-9">
                                <input id="lineD" name="line" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="lineD" class="font-medium text-gray-900">Line D</label>
                                <!-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> -->
                            </div>
                            
                            </div>
                        
                        <!-- FULL LAPANGAN -->
                            <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="1lapangan" name="lapangan" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="1lapangan" class="font-medium text-gray-900">Full Lapangan</label>
                                <!-- <p class="text-gray-500">Get notified when a candidate applies for a job.</p> -->
                            </div>
                        <!-- TRIBUN -->
                            <div class="flex h-6 items-center ml-6">
                                <input id="tribun" name="lapangan" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="tribun" class="font-medium text-gray-900">Tribun</label>
                                <!-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> -->
                            </div>
                            </div>

                            <div class="border-b border-gray-900/10 pb-6"></div>
                            
                        </div>
                        
                        </fieldset>
                    </div>
                    <!-- CHECKBOX LAPANGAN -->

                </div>

                    <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                        <!-- <label for="first-name" class="block text-base font-medium leading-6 text-gray-900">Nama Kegiatan</label> -->
                        <div class="mt-2">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Kegiatan">
                        </div>
                        </div>

                        <div class="sm:col-span-3">
                        <!-- <label for="last-name" class="block text-base font-medium leading-6 text-gray-900">Nama Penanggung Jawab</label> -->
                        <div class="mt-2">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nama Penanggung Jawab">
                        </div>
                        </div>

                        <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" id="labelHari" class="block text-md font-medium leading-6 text-gray-900">Hari</label>
                        
                        <label for="city" id="labelHariPertama" class="hidden text-md font-medium leading-6 text-gray-900">Hari Pertama</label>
                        <div class="mt-2">
                            <input type="text" name="hari" id="textFieldHari" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="region" class="block text-base font-medium leading-6 text-gray-900">Tanggal</label>
                        <div class="mt-2">
                            <input type="text" name="tanggal" id="textFieldTanggal" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-base font-medium leading-6 text-gray-900">Slot / Jam</label>
                        <div class="mt-2">
                            <input type="text" name="slot" id="textFieldSlot" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                        </div>
                        </div>

                    </div>
                    </div>

                    <!-- HIDDEN RUTIN -->
                    <div class="hidden flex-col" id="hiddenRutin">
                            <div class="sm:col-span-2 sm:col-start-1">
                            <label for="city" class="block text-md font-medium leading-6 text-gray-900">Hari ke 2</label>
                            <div class="mt-2">
                                <input type="text" name="hariRutin" id="popupHariRutin" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="region" class="block text-base font-medium leading-6 text-gray-900">Tanggal</label>
                            <div class="mt-2">
                                <input type="text" name="tanggalRutin" id="popupTanggalRutin" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="postal-code" class="block text-base font-medium leading-6 text-gray-900">Slot / Jam</label>
                            <div class="mt-2">
                                <input type="text" name="slotRutin" id="popupSlotRutin" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                            </div>
                            </div>
                    </div>

                    <div class="border-b border-gray-900/10 pb-12 mt-5">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Perhatian</h2>
                    <p class="mt-1 text-base leading-6 text-gray-600">Setelah mengisi form silahkan untuk mendownloadnya lalu di print bersamaan invoice yang akan di kirimkan melalui email kemudian diberikan kepada biro 3 sebagai tiket dalam meminjam gor</p>
                    </div>

                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button id="buttonRutin" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-10" type="button">
                            Ajukan Peminjaman Rutin
                        </button>
                        <button id="cancelButton" type="button" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            Cancel
                        </button>
                        <button id="submitButton" type="button" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-600 border-0 border-s border-blue-700 rounded-e-2xl hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:text-gray-300 dark:hover:bg-blue-700 dark:hover:text-white">
                            Submit
                        </button>
                </div>
                </form>

            </div>

            <!-- RUTIN -->
            <!-- Modal toggle -->
            

            <!-- Main modal -->
            <div id="popup" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-screen md:inset-0 h-[calc(100%-1rem)] max-h-screen bg-black bg-opacity-70">
                <div class="flex flex-1 p-4 w-full max-w-7xl max-h-full my-auto py-52 mx-96">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Silahkan pilih tanggal dan slot hari ke 2
                            </h3>
                            <button id="closePopup" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5">
                            <div class="flex gap-4 mb-4 flex-col">
                                <div class="col-span-2">
                            <!-- DATEPICKER -->
                                    <div class="relative max-w-sm mr-10">
                                    <input name="tanggal2" id="popupPilihTanggal" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">

                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                   </div>
                                    
                                    <div class="flex text-center items-center justify-center">
                                    <label for="name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white mt-5">Silahkan pilih slot yang tersedia</label>
                                    </div>
                                </div> 
                                <div class="flex-1 gap-4 mb-4">
                            <!-- SLOT/JADWAL 1 -->
                                    <div class="flex gap-2" id="radioSlot">

                                    </div>

                                <div class="mt-6 flex justify-end gap-x-6">
                                    <div class="inline-flex mt-2 xs:mt-0">
                                        <button id="buttonSubmitRutin" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                        </form>
                        </div>
                </div>
            </div>
            </div> 
            <!-- RUTIN -->

            <script>
                // POP UP
                const buttonRutin = document.getElementById("buttonRutin");
                const popup = document.getElementById("popup");
                const closePopup = document.getElementById("closePopup");
                const buttonSubmitPopup = document.getElementById("buttonSubmitPopup");
                const buttonSubmitRutin = document.getElementById("buttonSubmitRutin");

                let popupPilihTanggal = document.getElementById("popupPilihTanggal")
                let popupTanggalRutin = document.getElementById("popupTanggalRutin")
                let PopupHariRutin = document.getElementById("popupHariRutin")
                let popupSlotRutin = document.getElementById("popupSlotRutin")

                let counter = 1;
                
                const slotRutin = document.getElementById('radioSlot');
                function slot() {
                fetch('http://127.0.0.1:8000/api/jadwal')
                .then(response=>response.json())
                .then(data=>{
                    console.log(data)
                    data.data.forEach((item)=>{
                        let jamMulai = item.jam_mulai.slice(0, -3);
                        let jamSelesai = item.jam_selesai.slice(0, -3);
                    slotRutin.innerHTML +=
                    `
                    <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                        <input id="slotRutin${counter}" type="radio" value="${jamMulai} - ${jamSelesai}" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="slotRutin${counter}" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"> ${jamMulai} - ${jamSelesai} </label>
                    </div>

                    `
                    counter++
                    })
                    
                })
                }
                slot();

                buttonSubmitRutin.addEventListener('click', function(){
                    popup.classList.add("hidden");
                    document.getElementById("labelHari").classList.add("hidden");
                    document.getElementById("labelHariPertama").classList.remove("hidden");
                    document.getElementById("hiddenRutin").classList.remove("hidden");

                    let selectedValue;
                    
                    const radioButtonRutin = document.querySelectorAll('input[name="bordered-radio"]');
                    radioButtonRutin.forEach(radioButton => {
                        // Periksa apakah radio button ini yang dipilih
                        if (radioButton.checked) {
                            // Jika dipilih, ambil nilai dari radio button yang dipilih
                            selectedValue = radioButton.value;
                            console.log("Nilai yang dipilih:", selectedValue);
                            // Lakukan apa pun yang ingin Anda lakukan dengan nilai yang dipilih di sini
                            // Contoh: Simpan nilai ini ke variabel atau kirim ke server
                        }
                    });
                    const parts = popupPilihTanggal.value.split('-');
                    const day = parts[1];
                    const tanggalRutin = parts[0]+' - '+parts[2]+" - "+parts[3];
                    const [start, end] = selectedValue.split(' - ');
                    const hari = {
                        'Sun': 'Minggu',
                        'Mon': 'Senin',
                        'Tue': 'Selasa',
                        'Wed': 'Rabu',
                        'Thu': 'Kamis',
                        'Fri': 'Jumat',
                        'Sat': 'Sabtu'
                    };
                    const dayIndonesian = hari[day];
                    popupTanggalRutin.value = tanggalRutin;
                    PopupHariRutin.value = dayIndonesian;
                    popupSlotRutin.value = start + ' - ' + end;
                    console.log(dayIndonesian);
                });

                buttonRutin.addEventListener("click", function() {
                    popup.classList.remove("hidden"); 
                });
                closePopup.addEventListener("click", function() {
                    popup.classList.add("hidden"); 
                });
                buttonSubmitPopup.addEventListener("click", function() {
                    popup.classList.add("hidden"); 
                });

            </script>
        
        

@endsection