@extends('Biro3/masterBiro')
@section('content')


<!-- CONTENT -->
    <div class="p-4 sm:ml-64">

        <h2 class="font-bold text-3xl">Pengaturan Jadwal GOR Samapta</h2>
        Jl. Dr. Wahidin Sudirohusodo No.5-25, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, 
        Daerah Istimewa Yogyakarta 55224, 0274563929


        <div class="p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-gray-700">
        
            <div class="flex-1 gap-4 mb-4">
                <p class="text-xl text-gray-400 dark:text-black mr-4 mb-5">Silahkan pilih tanggal dan slot untuk diatur</p>

                <div class="flex items-center h-18 rounded bg-gray-50 dark:bg-gray-800 ">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                    
                <!-- DATE PICKER -->
                <div class="relative max-w-sm mr-10">
                      <input id="tanggal" name="tanggal1" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                          </svg>
                      </div>
                </div>
                    

                <!-- DATE PICKER -->

                    </p>

                <!-- INDIKATOR -->
                <!-- <p class="font-bold text-sm text-white mr-5"> ( Indikator )</p> -->
                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-green-600 rounded-full me-1.5 flex-shrink-0"></span>Kosong</span>
                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-yellow-300 rounded-full me-1.5 flex-shrink-0"></span>Masih Ada</span>
                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-red-500 rounded-full me-1.5 flex-shrink-0"></span>Penuh</span>
                
                
                </div>
            </div>

        <!-- JADWAL -->
            <div class="flex-1 gap-4 mb-4">
                <!-- SLOT/JADWAL 1 -->
                <div id="slot" class="flex gap-2">
          
                </div>

                </div>
            </div>

        </div>
        <!-- JADWAL -->

        <script>

        document.addEventListener('DOMContentLoaded', function(){
            let dateStr = '';
            const tanggal = flatpickr('input[id="tanggal"]',{
                dateFormat: 'd-D-m-Y',
                enableTime: false,
                onChange: function(selectedDates, newDateStr, instance){
                  dateStr = newDateStr;
                  const links = document.querySelectorAll('#pesanLink');
                  // if (link) {
                  //     const url = new URL(link.href);
                  //     url.searchParams.set('tanggal', dateStr);
                  //     link.href = url.toString();s
                  // }
                  links.forEach(link => {
                    const url = new URL(link.href);
                    url.searchParams.set('tanggal', dateStr);  
                    link.href = url.toString();
                  })
                  console.log(dateStr)
                  console.log(links)
              }
            });
        });
        
        const jam = document.getElementById('slot');
            function slot() {
              fetch('http://127.0.0.1:8000/api/jadwal')
              .then(response=>response.json())
              .then(data=>{
                console.log(data)
                data.data.forEach((item)=>{
                  jam.innerHTML +=
                `
                <div class="w-1/7">
                  <div class="flex items-center h-24 rounded bg-gray-50 dark:bg-gray-800 pl-4">
                    <p class="text-2xl text-gray-400 dark:text-gray-500 mr-4 "> 
                        <a href="http://127.0.0.1:8000/isiJadwal?tanggal&slot=${item.jam_mulai} - ${item.jam_selesai}" id="pesanLink" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ${item.status == 1 ?  'dark:bg-red-800 dark:hover:bg-red-700 pointer-event-none href="#" onclick="return false;' : 'dark:hover:bg-gray-700'}">
                          <span class="flex whitespace-nowrap"> ${item.jam_mulai} - ${item.jam_selesai} </span>
                        <a>
                    </p>
                  </div>
                </div>

                `
                })
                
              })
            }
            slot();

      </script>


    </div>

@endsection