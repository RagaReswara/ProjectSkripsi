<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Include Flatpickr CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }
        .container {
        padding: 16px;
        margin-left: 32px;
        }
        .card {
        padding: 16px;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        margin-bottom: 16px;
        }
        .card-header {
        border-bottom: 4px solid rgba(0, 0, 0, 0.4);
        padding-bottom: 16px;
        margin-bottom: 40px;
        }
        .card-header h2 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1a202c;
        }
        .card-header p {
        margin-top: 4px;
        font-size: 1rem;
        color: #4a5568;
        }
        table {
        width: 100%;
        margin-bottom: 16px;
        border-collapse: collapse;
        }
        th, td {
        padding: 8px 16px;
        border: 1px solid #e2e8f0;
        font-weight: bold;
        color: #4a5568;
        }
        th {
        text-align: left;
        color: #2d3748;
        }
        td {
        background-color: #edf2f7;
        }
        .input-group {
        margin-bottom: 16px;
        }
        .input-group input {
        width: 100%;
        max-width: 240px;
        padding: 8px;
        border: 1px solid #e2e8f0;
        border-radius: 4px;
        font-size: 1rem;
        color: #2d3748;
        }
        .hidden {
        display: none;
        }
        .form-header {
        border-bottom: 8px solid rgba(0, 0, 0, 0.4);
        padding-bottom: 8px;
        margin-bottom: 16px;
        }
        .form-section {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        padding-bottom: 24px;
        margin-bottom: 24px;
        }
        .attention {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        padding-bottom: 24px;
        margin-top: 24px;
        }
    </style>
    </head>
    <body>

    <div class="container">
        <div class="card">
        <div class="card-header">
            <h2>Detail Permohonan</h2>
            <p>Berhasil melakukan Booking silahkan tunggu untuk disetujui</p>
        </div>

        @isset($dataFormCetak)
        <table>
            <thead>
            <tr>
                <th>Organisasi</th>
                <td id="organisasi">: {{ $dataFormCetak -> nama_organisasi }}</td>
                <th>Tanggal</th>
                <td id="tanggal">: {{ $dataFormCetak -> tanggal }}</td>
            </tr>
            <tr>
                <th>Nama Penanggung Jawab</th>
                <td id="nama_pj">: {{ $dataFormCetak -> nama_pj }}</td>
                <th>Hari</th>
                <td id="hari">: {{ $dataFormCetak -> hari }}</td>
            </tr>
            <tr>
                <th>Kategori Kegiatan</th>
                <td id="kategoriKegiatan">: {{ $dataFormCetak -> kat_kegiatan }}</td>
                <th>Jam</th>
                <td id="jam">: {{ $dataFormCetak -> slot }}</td>
            </tr>
            <tr>
                <th>Nama Kegiatan</th>
                <td id="namaKegiatan">: {{ $dataFormCetak -> nama_kegiatan }}</td>
                <th>Lapangan</th>
                <td id="lapangan">: {{ $dataFormCetak -> lapangan }}</td>
            </tr>
            <tr>
                <th>No Telp/WA</th>
                <td id="noTelp">: {{ $dataFormCetak -> no_telp }}</td>
                <th></th>
            </tr>
            </thead>
        </table>
        <table>
            <tr>
            <th>Status</th>
            @if( $dataFormCetak -> status == 1)
            <td>: Menunggu</td>
            @elseif($dataFormCetak -> status == 2)
            <td>: Disetujui</td>
            @else
            <td>: Ditolak</td>
            @endif
            </tr>
            <tr>
            <th>Catatan</th>
            <td>: Silahkan datang ke biro 3 dengan memberikan form dan nota secara fisik</td>
            </tr>
        </table>
        @endisset
        </div>

        <div class="card">
        <form>
            <div class="form-header">
            <h2>Formulir Peminjaman Gor</h2>
            <p>Silahkan untuk mengisi form dibawah ini.</p>
            </div>

            <div class="form-section">
            <div class="input-group">
                <input name="organisasi" type="text" placeholder="Nama Organisasi">
            </div>
            <div class="input-group">
                <input name="no_telp" type="text" placeholder="Nomor Telepon/WA Penanggung Jawab">
            </div>
            </div>

            <div class="form-section">
            <div class="input-group">
                <input name="kategori_kegiatan" type="text" placeholder="Kategori Kegiatan">
            </div>
            </div>

            <div class="form-section">
            <div class="input-group">
                <input name="lapangan" type="text" placeholder="Lapangan">
            </div>
            </div>

            <div class="form-section">
            <div class="input-group">
                <input type="text" name="nama_kegiatan" id="nama_kegiatan" placeholder="Nama Kegiatan">
            </div>
            <div class="input-group">
                <input type="text" name="nama_pj" id="nama_pj" placeholder="Nama Penanggung Jawab">
            </div>
            <div class="input-group">
                <label for="hari" id="labelHari">Hari</label>
                <input type="text" name="hari" id="textFieldHari" readonly>
            </div>
            <div class="input-group">
                <label for="tanggal">Tanggal</label>
                <input type="text" name="tanggal" id="textFieldTanggal" readonly>
            </div>
            <div class="input-group">
                <label for="slot">Slot / Jam</label>
                <input type="text" name="slot" id="textFieldSlot" readonly>
            </div>
            </div>

            <div class="hidden" id="hiddenRutin">
            <div class="form-section">
                <div class="input-group">
                <label for="hariRutin">Hari ke 2</label>
                <input type="text" name="hariRutin" id="textfieldHariRutin" readonly>
                </div>
                <div class="input-group">
                <label for="tanggalRutin">Tanggal</label>
                <input type="text" name="tanggalRutin" id="textfieldTanggalRutin" readonly>
                </div>
                <div class="input-group">
                <label for="slotRutin">Slot / Jam</label>
                <input type="text" name="slotRutin" id="textfieldSlotRutin" readonly>
                </div>
            </div>
            </div>

            <div class="attention">
            <h2>Perhatian</h2>
            <p>Setelah mengisi form silahkan untuk mendownloadnya lalu di print bersamaan invoice yang akan di kirimkan melalui email kemudian diberikan kepada biro 3 sebagai tiket dalam meminjam gor</p>
            </div>
        </form>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

    </body>
</html>