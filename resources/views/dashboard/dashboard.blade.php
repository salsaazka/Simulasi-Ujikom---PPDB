<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

          <a class="navbar-brand" href="#">
              <h2 style="color: #B46060;">PPDB</h2>
          </a>

          <div class="navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <div class="menu">
                <a class="nav-link"href="/">Beranda</a>
                <a class="nav-link" href="/register">Daftar</a>
                <a class="nav-link active" href="/dashboard">Dashboard</a>
              </div>

              <div class="getStarted">
                  <div class="polygon">
                      <div class="clipath"></div>
                  </div>
                  <div class="buttonWrapper">
                    <a href="/register" class="nav-link">Daftar Sekarang !</a>
                  </div>
              </div>

            </div>
          </div>

        </div>
    </nav>
    <!--End Navbar-->
    <div class="container mt-5">
      <div class="row">
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                      Total Data Siswa
                  </div>
                  <div class="card-body">
                      <h5 class="card-title">8</h5>
                      <p class="card-text">Jumlah total siswa dalam database.</p>
                  </div>
              </div>
          </div>
          
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                      Jumlah Siswa Berdasarkan Kelamin
                  </div>
                  <div class="card-body">
                      <h5 class="card-title">Laki-laki: 1</h5>
                      <h5 class="card-title">Perempuan: 7</h5>
                      <p class="card-text">Jumlah siswa berdasarkan kelamin.</p>
                  </div>
              </div>
          </div>
  
          <div class="col-md-4">
              <div class="card">
                  <div class="card-header">
                      Jumlah Siswa Berdasarkan Jurusan
                  </div>
                  <div class="card-body">
                      {{-- @foreach($jumlahSiswaJurusan as $jurusan => $jumlah) --}}
                          <h5 class="card-title">PPLG : 7</h5>
                          <h5 class="card-title">TJKT : 1</h5>
                      {{-- @endforeach --}}
                      <p class="card-text">Jumlah siswa berdasarkan jurusan.</p>
                  </div>
              </div>
          </div>
      </div>

    <div class="container mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NISN</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Agama</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Minat Jurusan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($forms as $index)
                <tr>
                    <td>{{ $index->id }}</td>
                    <td>{{ $index->name }}</td>
                    <td>{{ $index->nisn }}</td>
                    <td>{{ $index->jk }}</td>
                    <td>{{ $index->address }}</td>
                    <td>{{ $index->religion }}</td>
                    <td>{{ $index->school }}</td>
                    <td>{{ $index->no_telp }}</td>
                    <td>{{ $index->interest }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{-- <div>
        <p class=""> Total User: {{ $total }}</p>
    </div> --}}

    <footer class="" style="background-color: #4D4D4D;  margin-top: 100px;">
        <div class="container py-4 text-center">
            <p class="text-white">Copyright @SalsabilaAzkaPutri</p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <!--Jquery-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
  </body>
</html>