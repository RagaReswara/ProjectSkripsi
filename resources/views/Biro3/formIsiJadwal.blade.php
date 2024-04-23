@extends('Biro3/masterBiro')
@section('content')

        <div class="p-4 sm:ml-64">

            <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

                <form>
                <div class="space-y-12">
                    <div class="border-b border-gray-900/40 pb-12">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Form Isi Jadwal</h2>
                    <!-- <p class="mt-1 text-base leading-6 text-gray-600">Silahkan untuk mengisi form dibawah ini.</p> -->

                    <div class="border-b-8 border-gray-950/40 pb-3"></div>

                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <!-- <label for="organisasi" class="block text-base font-medium leading-6 text-gray-900">Nama Organisasi</label> -->
                            
                            <form class="max-w-60 mx-auto">
                                    <select id="countries" class="bg-gray-500 border border-gray-50 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 sm:max-w-md shadow-sm sm:leading-6 dark:bg-white dark:border-gray-300 dark:placeholder-gray-400 dark:text-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-10">
                                        <option selected>Silahkan Pilih Organisasi</option>
                                        <option value="hmsi">Himpunan Mahasiswa Sistem Informasi (HMSI)</option>
                                        <option value="fti">Badan Eksekutif Mahasiswa Fakultas Teknologi Informasi (BMFTI)</option>
                                        <option value="ti">Himpunan Mahasiswa Teknologi Informasi (HMTI)</option>
                                        <option value="bni">Bank Nasional Indonesia (BNI)</option>
                                        <option value="karyawan">Karyawan</option>
                                        <option value="kedokteran">Kedokteran</option>
                                    </select>
                            </form> 

                            <div class="sm:col-span-1 mt-4">
                                <!-- <label for="email" class="block text-base font-medium leading-6 text-gray-900">Nomor Telepon / WA</label> -->
                                <div class="mt-2">
                                    <input name="noTelp" type="text" autocomplete="noTelp" class="block w-full max-w-60 rounded-md border-0 py-1.5 sm:max-w-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nomor Telepon / WA">
                                </div>
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
                                        <option value="lainnya">Event</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                            </form>
                        </fieldset>
                    </div>
                    <!-- CHECKBOX KATEGORI KEGIATAN -->

                </div>
                    <!-- CHECKBOX LAPANGAN-->
                    <div class="mt-5 space-y-10">
                        <fieldset>
                        <legend class="text-base font-semibold leading-6 text-gray-900">Silahkan Memilih Lapangan</legend>
                        <div class="mt-6 space-y-6">
                            
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

                            <div class="border-b border-gray-900/10 pb-12"></div>
                            
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

                        <h2 id="headerTanggalDipilih" class="text-base leading-6 text-gray-600 mt-4 hidden">Tanggal yang dipilih</h2>

                        <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Hari</label>
                        <div class="mt-2">
                            <input disabled type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="region" class="block text-base font-medium leading-6 text-gray-900">Tanggal</label>
                        <div class="mt-2">
                            <input disabled type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-base font-medium leading-6 text-gray-900">Slot / Jam</label>
                        <div class="mt-2">
                            <input disabled type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        </div>

                    </div>
                    </div>

                    <div class="flex items-center mt-5 mb-5">
                        <input id="toggleDatepicker" name="lapangan" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="toggleDatepicker" class="ml-2 text-gray-700">Centang untuk Kegiatan Rutin</label>
                    </div>
                    
                <!-- DATEPICKER AKHIR RUTIN -->
                    <div id="datePickerAkhirRutin" class="mt-4 hidden">
                        <p class="mt-1 text-base leading-6 text-gray-600">Tetapkan tanggal akhir peminjaman</p>

                        <div class="relative">
                            <svg class="absolute inset-y-3 left-2 w-4 h-4 text-gray-500 dark:text-gray-400 pointer-events-none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>

                            <!-- Input datepicker -->
                            <input 
                                id="datepicker"
                                datepicker datepicker-autohide type="text" 
                                datepicker-format="dd/mm/yyyy" 
                                class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                placeholder="Select date" 
                            >
                        </div>
                        <div class="flex gap-2 mt-5">

                            <div class="flex items-center ps-4 pe-4 border border-gray-200 rounded dark:border-gray-700">
                                <input id="slotRutin1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="slotRutin1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">08.00 - 10.00</label>
                            </div>
                            <div class="flex items-center ps-4 pe-4 border border-gray-200 rounded dark:border-gray-700">
                                <input checked id="slotRutin2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="slotRutin2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">10.00 - 12.00</label>
                            </div>
                            <div class="flex items-center ps-4 pe-4 border border-gray-200 rounded dark:border-gray-700">
                                <input checked id="slotRutin3" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="slotRutin3" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">12.00 - 14.00</label>
                            </div>
                            <div class="flex items-center ps-4 pe-4 border border-gray-200 rounded dark:border-gray-700">
                                <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-4" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">14.00 - 16.00</label>
                            </div>
                            <div class="flex items-center ps-4 pe-4 border border-gray-200 rounded dark:border-gray-700">
                                <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-5" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">16.00 - 18.00</label>
                            </div>
                            <div class="flex items-center ps-4 pe-4 border border-gray-200 rounded dark:border-gray-700">
                                <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-6" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">18.00 - 20.00</label>
                            </div>
                            <div class="flex items-center ps-4 pe-4 border border-gray-200 rounded dark:border-gray-700">
                                <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="bordered-radio-7" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-900">20.00 - 22.00</label>
                            </div>

                        </div>
                        
                    </div>
                <!-- DATEPICKER AKHIR RUTIN -->

                    <div class="border-b border-gray-900/10 pb-12"></div>

                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button id="cancelButton" type="button" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            Cancel
                        </button>
                        <button id="submitButton" type="button" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-600 border-0 border-s border-blue-700 rounded-e-2xl hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:text-gray-300 dark:hover:bg-blue-700 dark:hover:text-white">
                            Submit
                        </button>
                </div>
                </form>

            </div>
        
        </div>

        <script>

            const submitButton = document.getElementById("submitButton");
            // const submitButton = document.getElementById("submitButton");

            submitButton.addEventListener("click", function() {
                window.location.href = "http://127.0.0.1:8000/rekapIsiJadwal"; 
            });

        </script>
        

@endsection