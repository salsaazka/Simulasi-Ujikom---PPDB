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
                <a class="nav-link active"href="/">Beranda</a>
                <a class="nav-link " href="/register">Daftar</a>
                {{-- <a class="nav-link " href="/dashboard">Dashboard</a> --}}
                <a class="nav-link " href="/login">Login</a>
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

    <!--Banner-->
    <div class="header">
        <h1 class="page-heading">
          <span class="page-heading-primary text-center">There Is Not Learning <br> Community <br> Without Vission School Leadership</span>
        </h1>
      </div>
    <!--End Banner-->

    <div class="container mt-5">

        <h2 class="text-center">Tentang <span style="font-weight: 300">Wikrama</span></h2>

        <div class="d-flex my-5">
            <div class="frame w-45 mx-5">
                <iframe width="600" height="350" src="https://www.youtube.com/embed/mbM-OrP6BzY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="text w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui consequuntur veritatis et tempore fugiat? Sed eos nulla facilis quos officia dolor, alias illum esse nostrum commodi saepe aliquid beatae sit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam officia earum itaque. Nobis corporis, fuga, error delectus dolorum assumenda facere soluta rerum accusamus distinctio expedita quisquam fugit modi, praesentium quia. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias quasi itaque, nobis perspiciatis voluptas excepturi unde facere laborum reiciendis ut debitis corrupti explicabo officiis ratione tempore natus? Tempora, voluptates nesciunt!</div>
        </div>

        <h2 class="text-center" style="margin-top: 80px;">Jurusan <span style="font-weight: 300">Wikrama</span></h2>

        <center>
        <div class="row mt-5">
            <div class="col-3 mx-3">
                <div class="card" style="width: 18rem;">
                    {{-- <img src="{{ url('assets/img/') }}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                    <h5 class="card-title">PPLG</h5>
                    <p class="card-text"> Desktop Programming, Web Programming, Mobile Programming, Businnes Analyst, Database Administration.</p>
                    <a href="#" class="btn text-white" style="background-color: #B46060">Register Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-3">
                <div class="card" style="width: 18rem;">
                    {{-- <img src="{{ url('assets/img/') }}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                    <h5 class="card-title">DKV</h5>
                    <p class="card-text">Lulusan dapat memiliki kesempata kerja yang luas dibidang periklanan, production house, radio & televisi, studio foto.</p>
                    <a href="#" class="btn text-white" style="background-color: #B46060">Register Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-3">
                <div class="card" style="width: 18rem;">
                    {{-- <img src="{{ url('assets/img/') }}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                    <h5 class="card-title">TJKT</h5>
                    <p class="card-text"> Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki sertifikasi internasional seperti CNAP dan CNA.</p>
                    <a href="#" class="btn text-white" style="background-color: #B46060">Register Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-3">
                <div class="card" style="width: 18rem;">
                    {{-- <img src="{{ url('assets/img/') }}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                    <h5 class="card-title">PMN</h5>
                    <p class="card-text">Lulusan program ini diharuskan mampu membuat foto produk, desain, copy writing, dll. Kompetensi ini juga sering melakukan praktik.</p>
                    <a href="#" class="btn text-white" style="background-color: #B46060">Register Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-3">
                <div class="card" style="width: 18rem;">
                    {{-- <img src="{{ url('assets/img/') }}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                    <h5 class="card-title">HTL</h5>
                    <p class="card-text">Mampu bekerja di departemen yang ada di hotel dengan kompetensi yang telah dimiliki dan pelajari. Terlebih lagi Indonesia surganya pariwisata dan prospek kerja yang besar.</p>
                    <a href="#" class="btn text-white" style="background-color: #B46060">Register Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-3">
                <div class="card" style="width: 18rem;">
                    {{-- <img src="{{ url('assets/img/') }}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                    <h5 class="card-title">MPLB</h5>
                    <p class="card-text">Memiliki keunggulan seperti juara 2 lomba keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun 2016 dan olimpiade sekretaris tingkat nasional tahun 2017.</p>
                    <a href="#" class="btn text-white" style="background-color: #B46060">Register Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mx-3">
                <div class="card" style="width: 18rem;">
                    {{-- <img src="{{ url('assets/img/') }}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                    <h5 class="card-title">KLN</h5>
                    <p class="card-text">Mampu bekerja diberbagai bidang jasa boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.</p>
                    <a href="#" class="btn text-white" style="background-color: #B46060">Register Now!</a>
                    </div>
                </div>
            </div>
          </div>

          {{-- <button class="btn text-white mt-5" style="background-color: #B46060">Lihat Lebih Banyak</button> --}}
        </center>

    </div>

    <footer class="" style="background-color: #4D4D4D;  margin-top: 100px;">
        <div class="container py-4 text-center">
            <p class="text-white">Copyright @SalsabilaAzkaPutri</p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <!--Jquery-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>