<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Statis 2</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style/custom.css" />
  </head>
  <body>
    <!-- navigasi -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">Andi Suryawan</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- banner -->
    <div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="display-6">Welcome To My Website</h4>
        <a href="#layanan">
        </a>
      </div>
    </div>
    <!-- portofolio -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="portofolio">Portofolio</h2>
        <p>
          My Favorite Game
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="style/apex.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title"> Apex Legends</h5>
                <p class="card-text">
                Apex Legends adalah permainan battle royale free-to-play yang dikembangkan oleh Respawn Entertainment dan diterbitkan oleh Electronic Arts. Permainan ini berada di alam semesta yang sama dengan Titanfall. Permainan ini dirilis untuk Microsoft Windows, PlayStation 4, dan Xbox One pada 4 Februari 2019.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="style/valorant.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Valorant</h5>
                <p class="card-text">
                Valorant adalah penembak pahlawan orang pertama taktis multipemain gratis untuk dimainkan yang dikembangkan dan diterbitkan oleh Riot Games, untuk Microsoft Windows.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="style/player.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Playeruknown's Battlegrounds</h5>
                <p class="card-text">
                PlayerUnknown's Battlegrounds (sering disingkat PUBG) adalah sebuah permainan video dengan genre battle royale, di mana 100 orang sekaligus dapat bermain secara daring. Pemenang dari permainan ini adalah individu atau tim yang dapat bertahan hingga akhir. Pemain bisa bermain sendirian (solo), tim dengan dua orang (duo), dan tim dengan empat orang (squad). Pemain bisa mengundang teman di daftar teman (friend list) untuk bergabung ke dalam permainan sebagai sebuah tim.
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid pt-5 pb-5">
      <div class="container">
        <h2 class="display-3 text-center" id="about">About Me</h2>
        <div class="clearfix pt-5">
          <img
            src="style/instagram.jpg"
            class="rounded-circle  crop-img mx-auto d-block"
          />
          <h2>Biodata</h2>
          <dl class="row">
            <dt class="col-sm-2">Nama</dt>
            <dd class="col-sm-4">:  Andi Suryawan</dd>
            <dt class="col-sm-3">Sekolah Dasar</dt>
            <dd class="col-sm-2">: SDN 156 Palembang</dd>
          </dl>
          <dl class="row">
            <dt class="col-sm-2">Tempat, Tanggal Lahir</dt>
            <dd class="col-sm-4">:  Palembang, 11 Oktober 2002</dd>
            <dt class="col-sm-3">Sekolah Menengah Pertama</dt>
            <dd class="col-sm-2">: SMP N 11 Palembang</dd>
          </dl>
          <dl class="row">
            <dt class="col-sm-2">Umur</dt>
            <dd class="col-sm-4">:  19 Tahun</dd>
            <dt class="col-sm-3">Sekolah Menengah Atas</dt>
            <dd class="col-sm-2">: SMA N 21 Palembang</dd>
          </dl>
          <dl class="row">
            <dt class="col-sm-2">Alamat</dt>
            <dd class="col-sm-4">:  Jalan Jaya No.54 Alang-alang Lebar</dd>
            <dt class="col-sm-3">Perguruan Tinggi</dt>
            <dd class="col-sm-2">: Universitas Sriwijaya</dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="#contact">Contact Me</h2>
        <div class="row pb-3">
          <div class="col-md-6">
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Name"
            />
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Email"
            />
            <input
              class="form-control form-control-lg"
              type="text"
              placeholder="Phone Number"
            />
          </div>
          <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5" placeholder="Enter Your Message..."></textarea>
          </div>
        </div>
        <div class="col-md-3 mx-auto text-center">
          <button type="button" class="btn btn-danger btn-lg">
            Send
          </button>
        </div>
      </div>
    </div>
    <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://web.facebook.com/profile.php?id=100008705566736"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/andisuryawan10/"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/Suram001"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/andi-suryawan-4b2847180/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Thank You For Visiting Our Site
                        </p>
                    </div>
                </div>
            </div>
    </footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous">
    </script>
  </body>
</html>