@extends('Peminjam/masterPeminjam')
@section('content')

        <div class="p-4 sm:ml-64">

            <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">

                <form>
                <div class="space-y-12">
                    <div class="border-b border-gray-900/40 pb-12">
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
                            <input name="noTelp" type="text" autocomplete="noTelp" class="block w-full max-w-60 rounded-md border-0 py-1.5 sm:max-w-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6" placeholder="Nomor Telepon / WA">
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

                            <div class="border-b border-gray-900/40 pb-8"></div>
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
                        <label for="city" class="block text-md font-medium leading-6 text-gray-900">Hari</label>
                        <label for="city" class="hidden text-md font-medium leading-6 text-gray-900">Hari Pertama</label>
                        <div class="mt-2">
                            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="region" class="block text-base font-medium leading-6 text-gray-900">Tanggal</label>
                        <div class="mt-2">
                            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                        </div>
                        </div>

                        <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-base font-medium leading-6 text-gray-900">Slot / Jam</label>
                        <div class="mt-2">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                        </div>
                        </div>

                    </div>
                    </div>

                    <!-- HIDDEN RUTIN -->
                    <div class="hidden flex-col">
                            <div class="sm:col-span-2 sm:col-start-1">
                            <label for="city" class="block text-md font-medium leading-6 text-gray-900">Hari ke 2</label>
                            <div class="mt-2">
                                <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="region" class="block text-base font-medium leading-6 text-gray-900">Tanggal</label>
                            <div class="mt-2">
                                <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="postal-code" class="block text-base font-medium leading-6 text-gray-900">Slot / Jam</label>
                            <div class="mt-2">
                                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
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
                <div class="flex p-4 w-full max-w-7xl max-h-full mx-auto my-auto py-64">
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
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5">
                            <div class="flex gap-4 mb-4 flex-col">
                                <div class="col-span-2">
                                    <div class="relative max-w-sm mr-10">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                        <input datepicker datepicker-autohide type="text" datepicker-format="dd/mm/yyyy" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" id="datepicker">
                                    </div>
                                    
                                    <div class="flex text-center items-center justify-center">
                                    <label for="name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white mt-5">Silahkan pilih slot yang tersedia</label>
                                    </div>
                                </div> 
                                <div class="flex-1 gap-4 mb-4">
                                <!-- SLOT/JADWAL 1 -->
                                <div class="flex gap-2">

                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">08.00 - 10.00</label>
                                </div>
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">10.00 - 12.00</label>
                                </div>
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-3" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">12.00 - 14.00</label>
                                </div>
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-4" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">14.00 - 16.00</label>
                                </div>
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-5" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">16.00 - 18.00</label>
                                </div>
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-6" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">18.00 - 20.00</label>
                                </div>
                                <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                    <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-radio-7" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">20.00 - 22.00</label>
                                </div>

                                </div>

                                <div class="mt-6 flex justify-end gap-x-6">
                                <div class="inline-flex mt-2 xs:mt-0">
                                    <button id="buttonSubmitPopup" data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Submit
                                    </button>
                                </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div> 
            <!-- RUTIN -->

            <script>
                const buttonRutin = document.getElementById("buttonRutin");
                const popup = document.getElementById("popup");
                const closePopup = document.getElementById("closePopup");
                const buttonSubmitPopup = document.getElementById("buttonSubmitPopup");

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
        
        </div>

@endsection