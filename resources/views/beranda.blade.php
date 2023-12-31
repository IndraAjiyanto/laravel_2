<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">

    <title>InCom</title>
  </head>
  <body>
    <div class="container">
    <h1 class="text-center mb-4">Futsal Ins</h1>
        <div class="row justify-content-center">
        <a href="tambahbooking" type="button" class="btn btn-success">Tambah Booking</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Waktu</th>
      <th scope="col">Lapangan</th>
      <th scope="col">Total Bayar</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    @php
    $no=1;
    @endphp

@foreach($data as $row)
    <tr>
    <th scope="row">{{$no ++}}</th>
      <td>{{$row->nama}}</td>
      <td>{{$row->tanggal}}</td>
      <td>{{$row->waktu}}</td>
      <td>{{$row->lapangan}}</td>
      <td>{{$row->totalbayar}}</td>
      <td>{{$row->status}}</td>
      <td>
      <button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-info">PDF</button>
      <button type="button" class="btn btn-danger">Hapus</button>
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

</div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    -->
  </body>
</html>