<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPDB</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <h2 style="color: #B46060">PPDB</h2>
        </a>

        <div class="navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <div class="menu">
              <a class="nav-link" href="/">Beranda</a>
              <a class="nav-link active" href="/register">Daftar</a>
              <a class="nav-link" href="/login">Login</a>
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
      <form action="{{ route('registration') }}" method="post" class="mb-3 mt-4">
        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Nama Lengkap</label
          >
          <input
            type="text"
            class="form-control"
            name="name"
            aria-describedby="nama"
            placeholder="Masukan Nama"
          />
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >NISN</label
          >
          <input
            type="number"
            class="form-control"
            name="nisn"
            aria-describedby="nisn"
            placeholder="Masukan NISN"
          />
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Jenis Kelamin</label
          >
          <select class="form-select" aria-label="jk" name="jk">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Alamat</label>
          <div class="form-floating">
            <textarea
              name="address"
              class="form-control"
              placeholder="address"
              id="address"
            ></textarea>
            <label for="address">Masukan Alamat Anda</label>
          </div>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Asal Sekolah</label
          >
          <input
            type="text"
            class="form-control"
            name="school"
            aria-describedby="school"
            placeholder="Masukan Asal Sekolah"
          />
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Agama</label>
          <select class="form-select" aria-label="religion" name="religion">
            <option selected>Pilih Agama</option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
            <option value="khonghucu">Khonghucu</option>
            <option value="khatolik">Khatolik</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >No Telepon</label
          >
          <input
            type="number"
            class="form-control"
            name="no_telp"
            aria-describedby="no_telp"
            placeholder="Masukan Nomor Telepon"
          />
        </div>

        <div class="mb-5">
          <label for="exampleInputEmail1" class="form-label">Jurusan</label>
          <select class="form-select" aria-label="interest" name="interest">
            <option selected>Pilih Jurusan</option>
            <option value="PPLG">PPLG</option>
            <option value="DKV">DKV</option>
            <option value="TJKT">TJKT</option>
            <option value="MPLB">MPLB</option>
            <option value="PMN">PMN</option>
            <option value="KLN">KLN</option>
            <option value="HTL">HTL</option>
          </select>
        </div>

        <button
          type="submit"
          class="btn text-white mb-5"
          style="background-color: #B46060"
        >
          Submit
        </button>
      </form>
    </div>

    <footer class="" style="background-color: #4D4D4D; margin-top: 100px">
      <div class="container py-4 text-center">
        <p class="text-white">Copyright @SalsabilaAzkaPutri</p>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <!--Jquery-->
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
