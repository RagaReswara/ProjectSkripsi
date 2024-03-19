@extends('Peminjam/masterPeminjam')
@section("content")

<section class="vh-100">
<!-- BODY -->
  <body>

<!-- Sidebar -->
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
          </ul>
        </nav>
      </div>

<!-- Main Content -->
      <div class="main-content costom-lg">
        
      <h2>JADWAL GOR SAMAPTA UNIVERSITAS KRISTEN DUTA WACANA</h2>
      Jl. Dr. Wahidin Sudirohusodo No.5-25, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, 
      Daerah Istimewa Yogyakarta 55224, 0274563929
      <hr class="my-4 border-dark">

<!-- DATE PICKER -->
      <div class="form-group mb-4">
          <label for="datepicker" width="276">Silahkan Pilih Tanggal</label>
          <div class="input-group-sm">
              <div class="input-group-append">
                  <input type="text" class="form-control datepicker" id="datepicker" 
                  name="tanggal" placeholder="Pilih Tanggal">
                  <button class="btn btn-outline-secondary today-btn" type="button">Hari Ini</button>
              </div>
          </div>
      </div>

      <div class="flex flex-col gap-y-4">
        <div class="w-full flex flex-col items-center justify-center bg-slate-300">
          <div class="text-xl font-bold">Minggu</div>
          <div class="text-elf-green">17-Mar-2024</div>
        </div>

      <script>
          // $(document).ready(function(){
          //   var today = new Date();
          //   var todayFormatted = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
              
          //   $('.datepicker').datepicker({
          //         // uilibrary: 'bootstrap4',
          //         format: 'dd-mm-yyyy',
          //         autoclose:true,
          //         todayBtn: true, // Tampilkan tombol Hari Ini
          //         todayHighlight: true, // Sorot tanggal Hari Ini
          //         clearBtn: true, // Tampilkan tombol Hapus
          //         // endDate: '0d', // Tidak memperbolehkan memilih tanggal di masa depan
          //         //orientation: 'bottom',
          //         //multidate: true, // Izinkan memilih rentang tanggal
          //         // multidateSeparator: ' | ', // Separator untuk tanggal rentang
          //         showButtonPanel: true // Tampilkan panel tombol (hari ini, tutup, dll.)
                  
          //     })
              $(document).ready(function() {
                  
                $('.datepicker').datepicker({
                    format: 'dd-mm-yyyy',
                    autoclose: true,
                    todayBtn: true,
                    todayHighlight: true,
                    clearBtn: true
                  
                })
                .on('changeDate', function(e) {
                  var dates = $(this).datepicker('getDates'); // Mendapatkan tanggal yang dipilih
                  var selectedDates = {}; // Objek untuk menyimpan tanggal yang dipilih dalam bentuk hashmap

                  dates.forEach(function(date) {
                      var isoDate = date.toISOString().slice(0,10);
                      selectedDates[isoDate] = true;
                  });

                  $('.datepicker .day').each(function() {
                      var isoDate = $(this).attr('data-date');
                      if (selectedDates[isoDate]) {
                          $(this).addClass('selected');
                      } else {
                          $(this).removeClass('selected');
                      }
                  });

                  if (e.dates.length > 0) {
                      var selectedDate = new Date(e.dates[0]);
                      var firstDayOfWeek = new Date(selectedDate);
                      var lastDayOfWeek = new Date(selectedDate);
                      var daysToSunday = (6 - firstDayOfWeek.getDay()) % 7;

                      firstDayOfWeek.setDate(firstDayOfWeek.getDate() - selectedDate.getDay());
                      lastDayOfWeek.setDate(lastDayOfWeek.getDate() + daysToSunday);

                      $(this).datepicker('setDates', [firstDayOfWeek, lastDayOfWeek]);
                    }
                  
                  var kotakContent = '<h3>Selected Week Dates</h3>';

                  for (var d = new Date(firstDayOfWeek); d <= lastDayOfWeek; d.setDate(d.getDate() + 1)) {
                      kotakContent += '<li>' + d.toLocaleDateString() + '</li>';
                    }
                  
                  kotakContent += '</ul>';
                  $('#border').html(kotakContent);

                  });

              // Tindakan saat tombol Hari Ini diklik
              $('.today-btn').click(function(){
                  $('.datepicker').datepicker('setDate', new Date());
              });
          });
      </script>

      </div>
      
  </body>
<!-- BODY -->


<!-- STYLE -->
  <style>

/* NAVBAR */
    .navbar {
        position: fixed;
        top: 0;
        right: 0;
        width: calc(100% - 0px); /* Atur lebar navbar agar sesuai dengan lebar layar dikurangi lebar sidebar */
        z-index: 100; /* pastikan z-index lebih tinggi dari elemen lain yang mungkin berada di bawahnya */
    }
    .costom-bg{
      background-color: #F8FAE5;
    }
    .costom-lg{
      background-color: #3333;
      margin-top: 100px;
    }
  

/* SIDEBAR */
    .sidebar {
          position: fixed;
          top: 0;
          left: 0;
          height: 100%;
          width: 250px;
          background-color: #B19470;
          padding-top: 100px;
          border: 5px solid #76453B; /* Atur border navbar */
          border-radius: 0px; /* Atur radius border navbar */
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Atur shadow navbar */
        }
        
    .sidebar-nav {
          padding-left: 20px;
        }
    .sidebar-nav .nav-link {
          color: #fff;
        }
    .main-content {
          margin-left: 270px; /* Lebar sidebar + margin untuk menghindari tabrakan */
          padding: 20px;
          width: calc(84% - 0px)
        }
        /* Mengatasi tabrakan dengan navbar */
    @media (max-width: 992px) {
          .main-content {
            margin-left: 0; /* Reset margin saat tampilan mobile */
          }
        }

/* KOTAK BORDER */
    .border {
        border-top: 2px solid #000; /* Atur border atas */
        border-bottom: 2px solid #000; /* Atur border bawah */
        border-left: 2px solid #000; /* Atur border kiri */
        border-right: 2px solid #000; /* Atur border kanan */
        display: inline-block; /* Memastikan elemen span memiliki lebar dan tinggi */
        width: 100px; /* Atur lebar elemen */
        height: 50px; /* Atur tinggi elemen */
    }

/* DATE PICKER */
    .datepicker {
        width: 300px; /* Atur lebar datepicker */
        /* height: 30px; Atur tinggi datepicker */
        background-color: #f8f9fa; /* Warna latar belakang */
        color: #495057; /* Warna teks */
        border: 1px solid white;
        padding-top: 10px;
        padding-left: 25px;
        padding-bottom: 10px;
    }
    .datepicker .selected {
        background-color: #425511; /* Warna latar belakang untuk tanggal yang dipilih */
        color: #000000; /* Warna teks untuk tanggal yang dipilih */
        border-radius: 50%; /* Membuat bulatan pada tanggal yang dipilih */
    }
    .datepicker-dropdown {
        border: none; /* Hapus border */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        animation: fadeIn 1s forwards; /* Terapkan animasi fade-in saat popup muncul */

    }
    .datepicker-dropdown[data-visible="false"] {
        animation: fadeOut 3s forwards; /* Terapkan animasi fade-out saat popup menghilang */
    }
    .datepicker th,
    .datepicker td {
        padding: 8px; /* Atur padding */
    }

    .datepicker th {
        background-color: #343a40; /* Warna latar belakang header */
        color: #ffffff; /* Warna teks header */
    }
    .datepicker td {
        background-color: #ffffff; /* Warna latar belakang sel */
    }
    .datepicker td.active,
    .datepicker td.active:hover {
        background-color: #61E5FF; /* Warna latar belakang untuk tanggal yang dipilih */
        color: #ffffff; /* Warna teks untuk tanggal yang dipilih */
    }
    .datepicker td.today {
        background-color: #f0ad4e; /* Warna latar belakang untuk tanggal hari ini */
    }

    .datepicker td.today:hover {
        background-color: #121212; /* Warna latar belakang saat mengarahkan kursor pada tanggal hari ini */
    }
    /* Animasi fade-in */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Animasi fade-out */
    @keyframes fadeOut {
        from { opacity: 3; }
        to { opacity: 0; }
    }



  </style>


</html>
</section>

@endsection