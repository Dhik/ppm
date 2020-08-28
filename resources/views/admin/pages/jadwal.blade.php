@extends('admin.main')
@section('title','Dashboard')
@section('content')

<h1 class="text-center">Jadwal Pengajian Harian PPM</h1>
<hr>
<table class="table table-bordered table-dark">
  <thead>
    <tr class="bg-primary">
        <td style="font-size:25px; text-align:center;">Nama Kegiatan</td> 
        <td style="font-size:25px; text-align:center;">Waktu</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Pengajian</td>
      <td>Setiap Hari (Ba'da Shubuh - 06.00 | Ba'da Maghrib - 20.00)</td>
    </tr>
    <tr>
      <td>Libur</td>
      <td>Sabtu Ba'da Maghrib | Minggu Ba'da Shubuh</td>
    </tr>
    <tr>
      <td>Apel Malam</td>
      <td>Senin, Rabu, Jum'at (3.00 AM)</td>
    </tr>
    <tr>
      <td>AMUSE</td>
      <td>Asrama Hadist Muslim Liburan Semester</td>
    </tr>
  </tbody>
</table>
<hr>
<table class="table table-bordered table-dark">
  <thead>
    <tr class="bg-primary">
        <td style="font-size:25px; text-align:center;">Nama Kegiatan</td> 
        <td style="font-size:25px; text-align:center;">Waktu</td>
        <td style="font-size:25px; text-align:center;">Hari</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Kelompokan</td>
      <td>16.00 - 17.30</td>
      <td>Senin - Jumat</td>
    </tr>
    <tr>
        <td>Muda/i Kelompok</td>
        <td>Ba'da Maghrib - 20.00</td>
        <td>Selasa</td>
    </tr>
    <tr>
        <td>Halaqoh</td>
        <td>16.00 - 17.00</td>
        <td>Rabu</td>
    </tr>
    <tr>
        <td>Asad Day</td>
        <td>Ba'da Shubuh - Selesai</td>
        <td>Sabtu</td>
    </tr>
    <tr>
        <td>Malabar</td>
        <td>20.00 - Ba'da Shubuh</td>
        <td>Sabtu / Minggu (Minggu ke 4)</td>
    </tr>
    <tr>
        <td>Muda/i Daerah</td>
        <td>08.30 - 12.00</td>
        <td>Minggu (Minggu ke 1)</td>
    </tr>
  </tbody>
</table>
<hr>
<p>Anda adalah warga PPM Nurul Hakim</p>
@endsection
