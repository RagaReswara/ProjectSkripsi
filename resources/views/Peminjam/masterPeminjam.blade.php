<!doctype html><html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('../resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
<body>

    @include('Peminjam.navbar')
    @yield('content')


</body>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

  

<!-- SCRIPT -->
    <script>
        //BUTTON 
        const cancelButton = document.getElementById("cancelButton");
        const submitButton = document.getElementById("submitButton");

        cancelButton.addEventListener("click", function() {
            window.location.href = "http://127.0.0.1:8000/peminjam"; 
        });
        submitButton.addEventListener("click", function() {
            window.location.href = "http://127.0.0.1:8000/rekap"; 
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

        // DATE PICKER flatpickr
        document.addEventListener('DOMContentLoaded', function(){

            let tanggal2 = flatpickr('input[name="tanggal2"]',{
                dateFormat: 'd-D-M-Y',
                enableTime: false,
            });

            // Ambil nilai tanggal1 dari URL
            const urlParams = new URLSearchParams(window.location.search);
            const tanggal1 = urlParams.get('tanggal1');
            const slot = urlParams.get('slot');

            const parts = tanggal1.split('-');
            const day = parts[1];
            const tanggal = parts[0]+' - '+parts[2]+" - "+parts[3];

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

            // Pisahkan jam mulai dan jam selesai
            const [start, end] = slot.split(' - ');

            // Hapus detik dari jam mulai dan jam selesai
            const startTime = start.slice(0, -3);
            const endTime = end.slice(0, -3);

            document.getElementById("textFieldHari").value = dayIndonesian;
            document.getElementById("textFieldTanggal").value = tanggal;
            document.getElementById("textFieldSlot").value = startTime + ' - ' + endTime;

            

            console.log(slot);


    
            // Jika tanggal1 ada dalam URL, set nilai tanggal1 ke dalam date picker tanggal2
            if (tanggal1) {
                tanggal2 = flatpickr('input[name="tanggal2"]', {
                    dateFormat: 'd-D-M-Y',
                    defaultDate: tanggal1, // Set tanggal1 sebagai default date pada tanggal2
                    enableTime: false,
                    minDate: tanggal1 // Tetapkan tanggal minimal untuk tanggal2 agar setidaknya satu hari setelah tanggal1
                });
            }
        

        });

    </script>

</html>