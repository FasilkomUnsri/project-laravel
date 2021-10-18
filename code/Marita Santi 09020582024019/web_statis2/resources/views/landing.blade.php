<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    </title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="custom/css/custom.css" rel="stylesheet">
  </head>
  <body class="bg-white">
    <header class="p-3 bg-dark text-white fixed-top">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li>
              <a href="#slider" class="nav-link px-2 text-secondary">Home
              </a>
            </li>
            <li>
              <a href="#about_us" class="nav-link px-2 text-white">About
              </a>
            </li>
            <li>
              <a href="#portfolio" class="nav-link px-2 text-white">Portfolio
              </a>
            </li>
            <li>
              <a href="#contact_us" class="nav-link px-2 text-white">Contact
              </a>
            </li>
          </ul>
          <div class="text-end">
            <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-outline-light me-2">Login
            </a>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section class="text-center container-full" id="slider">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
            </button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2">
            </button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/slide/gambar1.jpg">
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Malam Kenangan - @Maritasnt
                  </h1>
                  <p>Kenangan tidak bisa dilupakan, cukup sadar jika tidak untuk diulang. "Begitu juga angan yang direncanakan tetapi tidak digapai, "Sama halnya dengan keheningan malam yang membuat kita menjadi bisu. Akankah keadaan atau waktu yang menentukan"....
                  </p>
                  <p>
                    <a class="btn btn-lg btn-primary" href="#">Read More
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/slide/gambar2.jpg">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Aku dan Kamu | @Maritasnt
                  </h1>
                  <p>Ini tentang 2 hati yang saling menyatukan, namun bagaimana jika hati yang sama tidak beriringan dengan pikiran yang sejalan, Bukankah pasangan harus memiliki jalan dengan pandangan yang sama tanpa pertentangan ???
                  </p>
                  <p>
                    <a class="btn btn-lg btn-primary" href="#">Read More
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
            </span>
            <span class="visually-hidden">Previous
            </span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
            </span>
            <span class="visually-hidden">Next
            </span>
          </button>
        </div>
      </section>
    </main>         
    <section id="about_us" class="py-5 px-5">
      <div class="row ">
        <div class="col-md-10 order-md-2">
          <h2>Halo, Saya 
            <span class="text-muted">Marita Santi
            </span>
          </h2>
          <p class="lead">Saya merupakan mahasiswa Jurusan Komputerisasi Akuntansi 2020 dari Fakultas Ilmu Komputer Universitas Sriwijaya. Saat ini saya mahasiswa semester 3, dan sekarang kegiatan saya
            <b>di Organisasi WIFI Fasilkom
            </b> sebagai 
            <i>Sekretaris Departemen Nisaiyah
            </i>. Periode 2021-2022 
            <i>Pernah menjadi Ketua Pelaksana Kajian Muslimah 2021
            </i>.
          </p>
          <h5>Biodata & Riwayat Akademis
          </h5>
          <ul>
            <li>Marita Santi | maritaati8@gmail.com
            </li>
            <li>SD Negeri 26 Palembang
            </li>
            <li>SMP Negeri 33 Palembang
            </li>
            <li>SMA Negeri 11 Palembang
            </li>
            <li>Universitas Sriwijaya Palembang
            </li>
          </ul>
        </div>
        <div class="col-md-2 order-md-1">
          <img src="images/slide/gambar3.jpg" class="img-fluid">
        </div>
      </div>
    </section>

    <section id="portfolio" class="portfolio class bg-secondary pb-4">
      <div class="container">
        <div class="row mb-4 pt-4">
          <div class="col text-center">
            <h2>Portfolio
            </h2>
          </div>
        </div>
        <div class="row mb-3">    
          <div class="col-md">
            <div class="card">
              <img class = "card-img-top" src="images/slide/sertifkemistri.jpg" alt="card image top">
              <div class="card-body">
                <p class="card-text">Merupakan Kelas Latihan Administrasi Terkait Cara Mengajukan Proposal, LPJ, SPJ, Dan Cara Merevisi Administrasi Tersebut.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img class = "card-img-top" src="images/slide/sertifsekolahpergerakan.png" alt="card image top">
              <div class="card-body">
                <p class="card-text">Merupakan Sharing Menjadi Mahasiswa Yang Bergerak Dan Kritis Dalam Membela Dan Mempertahankan Integritas Bangsa.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img class = "card-img-top" src="images/slide/sertifteman.png" alt="card image top">
              <div class="card-body">
                <p class="card-text">Merupakan Kegiatan Mempelajari Technology Manuscript Menyiapkan Milenial Generasi Emas 2045.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3">    
          <div class="col-md">
            <div class="card">
              <img class = "card-img-top" src="images/slide/sertifwebalquran.png" alt="card image top">
              <div class="card-body">
                <p class="card-text">Merupakan Latihan Menerapkan Generasi Muda Nasional Cinta Al-Qur'an, Agar Bisa Antisipasi Arus Perkembangan Zaman.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img class = "card-img-top" src="images/slide/sertifwebpengusaha.png" alt="card image top">
              <div class="card-body">
                <p class="card-text">Merupakan Kelas Pengetahuan Menyiapkan Mahasiswa Menjadi Entrepreneur Muda, Melatih Membangun Bisnis Bagi Pemula.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card">
              <img class = "card-img-top" src="images/slide/sertifwebsrifoton.jpg" alt="card image top">
              <div class="card-body">
                <p class="card-text">Kegiaan Technopreneurship Among The Youth To Face Industrial Revolution 4.0.
                </p>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </section>
    
    <section id="contact_us" class="py-5 px-5 bg-light">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact Us
            </h2>
          </div>  
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card text-white bg-success mb-3 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Us
                </h5>
                <p class="card-text">Berikut Kontak Saya Yang Bisa Dihubungi!
                </p>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item">
                <h5>Jl. Inspektur Marzuki Lr. Kewarga
                </h5>
              </li>
              <li class="list-group-item">
                <h5>Kode Pos : 30153
                </h5>
              </li>
              <li class="list-group-item">
                <h5>Sumatera Selatan, Indonesia
                </h5>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="nama">NAMA
                </label>
                <input type="text" class="form-control" id="nama"> 
              </div>
              <div class="form-group">
                <label for="email">EMAIL
                </label>
                <input type="text" class="form-control" id="email"> 
              </div>
              <div class="form-group">
                <label for="pesan">PESAN
                </label>
                <textarea name="pesan" id="pesan" class="form-control">
                </textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Kirim Pesan!
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>       
    </section>

    <footer class="bd-footer py-5 bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <a class="d-inline-flex align-items-center mb-2 link-warning text-decoration-none" href="/" aria-label="FASILKOM UNSRI">
              <img src="images/slide/gambar4.png" height="50">
              <span class="fs-5">FASILKOM UNSRI
              </span>
            </a>
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item">
                <a href="#" class="nav-link px-2 text-white">Home
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link px-2 text-white">About
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link px-2 text-white">Contact
                </a>
              </li>
            </ul>
            <p>
              - Static Web Part II - 
            </p>
            <p>
              BUILD WEB APPLICATION FROM SCRATCH
              <br> &copy; 2021
            </p>
          </div>
        </div>
      </div>
    </footer>              
  </body>
  <script src="bootstrap/js/bootstrap.min.js">
  </script>
</html>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="login-username" class="form-label">Username
              </label>
              <input type="text" id="login-username" name="username" placeholder="Masukan Username" class="form-control" required>
            </div>
            <div class="col-md-12 mb-3">
              <label for="login-password" class="form-label">password
              </label>
              <input type="password" id="login-password" name="password" placeholder="Masukan Password" class="form-control" required>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
        </button>
        <button type="button" class="btn btn-primary">Login
        </button>
      </div>
    </div>
  </div>
</div>