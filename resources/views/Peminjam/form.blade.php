@extends('Peminjam/masterPeminjam')
@section('content')

        <div class="p-4 sm:ml-64">

            <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

                <form>
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Formulir Peminjaman Gor</h2>
                    <p class="mt-1 text-base leading-6 text-gray-600">Silahkan untuk mengisi form dibawah ini.</p>

                    <div class="border-b-8 border-gray-950/40 pb-12"></div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                        <!-- <label for="organisasi" class="block text-base font-medium leading-6 text-gray-900">Nama Organisasi</label> -->
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <!-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">workcation.com/</span> -->
                            <input type="text" name="organisasi" id="organisasi" autocomplete="organisasi" class="block flex-1 border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-base sm:leading-6" placeholder="Nama Organisasi">
                            </div>  
                        </div>

                        <div class="sm:col-span-1 mt-4">
                        <!-- <label for="email" class="block text-base font-medium leading-6 text-gray-900">Nomor Telepon / WA</label> -->
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full max-w-60 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nomor Telepon / WA">
                        </div>
                        </div>
                    </div>
                    </div>

                    

                    <!-- CHECKBOX KATEGORI KEGIATAN-->
                    <div class="mt-10 space-y-10">
                        <fieldset>
                        <legend class="text-base font-semibold leading-6 text-gray-900">Kategori Kegiatan</legend>
                        <div class="mt-6 space-y-6">
                            
                        <!-- BADMINTON -->
                            <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="badminton" name="kegiatan" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="badminton" class="font-medium text-gray-900">Badminton</label>
                                <!-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> -->
                            </div>
                        <!-- TAEKWONDO -->
                            <div class="flex h-6 items-center ml-9">
                                <input id="taekwondo" name="kegiatan" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="taekwondo" class="font-medium text-gray-900">Taekwondo</label>
                                <!-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> -->
                            </div>
                            </div>
                        
                        <!-- BASKET -->
                            <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="basket" name="kegiatan" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="basket" class="font-medium text-gray-900">Basket</label>
                                <!-- <p class="text-gray-500">Get notified when a candidate applies for a job.</p> -->
                            </div>
                        <!-- LAIN-LAIN -->
                            <div class="flex h-6 items-center ml-16">
                                <input id="lain" name="kegiatan" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="lain" class="font-medium text-gray-900">Lain-lain</label>
                                <!-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> -->
                            </div>
                            </div>
                            <!-- TENIS MEJA -->
                            <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="tenismeja" name="kegiatan" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="tenismeja" class="font-medium text-gray-900">Tenis Meja</label>
                                <!-- <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p> -->
                            </div>
                            </div>

                            <div class="border-b border-gray-900/10 pb-8"></div>
                                <!-- <h2 class="text-base font-semibold leading-7 text-gray-900">Perhatian</h2> -->
                                <p class="mt-1 leading-6 text-gray-600">Khusus untuk kegiatan event silahkan untuk mengisikan form
                                    <a href="http://127.0.0.1:8000/formEvent" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">disini</a>
                                </p>
                        </fieldset>
                    </div>
                    <!-- CHECKBOX KATEGORI KEGIATAN -->

                </div>
                    <!-- CHECKBOX LAPANGAN-->
                    <div class="mt-10 space-y-10">
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

                        <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Hari</label>
                        <div class="mt-2">
                            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="region" class="block text-base font-medium leading-6 text-gray-900">Tanggal</label>
                        <div class="mt-2">
                            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-base font-medium leading-6 text-gray-900">Slot / Jam</label>
                        <div class="mt-2">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        </div>

                    </div>
                    </div>

                    <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Perhatian</h2>
                    <p class="mt-1 text-base leading-6 text-gray-600">Setelah mengisi form silahkan untuk mendownloadnya lalu di print bersamaan invoice yang akan di kirimkan melalui email kemudian diberikan kepada biro 3 sebagai tiket dalam meminjam gor</p>
                    </div>

                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <div class="inline-flex mt-2 xs:mt-0">
                        <button id="backButton" type="button" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
                            Cancel
                        </button>
                        <button id="submitButton" class="flex items-center justify-center px-4 h-10 text-base font-medium text-white bg-blue-600 border-0 border-s border-blue-700 rounded-e-2xl hover:bg-blue-600 dark:bg-blue-700 dark:border-blue-700 dark:text-gray-300 dark:hover:bg-blue-700 dark:hover:text-white">
                            Submit
                        </button>
                </div>
                </form>


<!-- JAVA SCRIPT -->
            <script>

                //BUTTON 
                const backButton = document.getElementById("backButton");
                backButton.addEventListener("click", function() {
                    window.location.href = "http://127.0.0.1:8000/peminjam"; 
                });

                // CHECKBOX
                const lapanganCheckbox = document.getElementById('1lapangan');
                const tribunCheckbox = document.getElementById('tribun');
                const lineCheckboxes = document.querySelectorAll('input[name="line"]');

                    lapanganCheckbox.addEventListener('change', function() {
                            if (this.checked) {
                                lineCheckboxes.forEach(checkbox => {
                                    checkbox.checked = true;
                                    checkbox.disabled = false;
                                });
                                tribunCheckbox.checked = true;
                            } else {
                                lineCheckboxes.forEach(checkbox => {
                                    checkbox.checked = false; // Batalkan centang pada checkbox "line"
                                    checkbox.disabled = false; // Aktifkan kembali checkbox "line"
                                });
                                tribunCheckbox.checked = false; // Batalkan centang pada checkbox "Tribun"
                                lapanganCheckbox.checked = false;
                            }
                    });        

                    let checkedCount = 0;

                    lineCheckboxes.forEach((checkbox) => {
                        checkbox.addEventListener('change', function() {
                            if (this.checked) {
                                checkedCount++;
                                if (checkedCount === 4) {
                                    lapanganCheckbox.checked = true;
                                    tribunCheckbox.checked = true;
                                }
                            } else {
                                checkedCount--;
                                lapanganCheckbox.checked = false;
                                // tribunCheckbox.checked = false;
                            }
                        });
                    });

                    // NGECEK CHEKBOX BISA APA ENGGA
                    lineCheckboxes.forEach((checkbox) => {
                        checkbox.addEventListener('change', function() {
                            console.log(checkbox.checked);
                        });
                    });
                    lapanganCheckbox => {
                        checkbox.addEventListener('change', function() {
                            console.log(checkbox.checked);
                        });
                    };

                    // document.querySelectorAll('input[name="lapangan"]').forEach((checkbox) => {
                    //     checkbox.addEventListener('change', function() {
                    //         document.querySelectorAll('input[name="lapangan"]').forEach((checkbox) => {
                    //             checkbox.checked = false;
                    //         });
                    //         this.checked = true;
                    //     });
                    // });

                    document.querySelectorAll('input[name="kegiatan"]').forEach((checkbox) => {
                        checkbox.addEventListener('change', function() {
                            if (this.checked) {
                                document.querySelectorAll('input[name="kegiatan"]').forEach((checkbox) => {
                                    checkbox.checked = false;
                                });
                                this.checked = true;
                            }
                        });
                    });

            </script>

            </div>
        
        </div>

@endsection