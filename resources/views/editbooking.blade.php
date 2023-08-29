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
    <h1 class="text-center mb-4">Futsal Booking</h1>
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
        <form action="/updatebooking/{{$data->id}}" method="post">
          @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{$data->id}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Waktu</label>
    <input type="time" class="form-control" id="exampleInputPassword1" name="waktu">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Lapangan</label>
    <select class="form-select" aria-label="Default select example" name="lapangan">
  <option selected>Pilih Lapangan</option>
  <option value="1">Rumput Hijau</option>
  <option value="2">Plester</option>
  <option value="3">Umum</option>
</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
    </div>
      
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