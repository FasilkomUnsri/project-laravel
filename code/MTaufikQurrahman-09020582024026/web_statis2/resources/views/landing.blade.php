<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="custom/css/custom.css">
</head>
<body class="bg-white">
    <header class="p-3 bg-dark text-white fixed-top">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#hero" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#about_us" class="nav-link px-2 text-white">About</a></li>
                    <li><a href="#contact_us" class="nav-link px-2 text-white">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
            <div class="hero-container" data-aos="fade-in">
              <h1>Welcome</h1>
              <p>To <span>MY Portofolio</span></p>
            </div>
          </section>
        
          <section id="about_us" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Hallo :)</h2>
          <h2>Saya, M Taufik Qurrahman</h2>
        </div>
        <div class="tes">
            <div class="col-md-2 order-md-1 mx-auto">
                <img src="images/about/foto1.jpg" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="resume-item">
              <p><em>Saya Merupakan Mahasiswa Jurusan Komputer Akuntansi 2020 Dari Fakultas Ilmu Komputer Universitas Sriwijaya.</em></p>
              <h4>Biodata & Riwayat Akademis</h4>
              <ul>
                <li>M Taufik Qurrahman | mtaufikqurrahman13@gmail.com</li>
                <li>SD Negeri 48 Palembang</li>
                <li>SMP Negeri 21 Palembang</li>
                <li>SMA Negeri 7 Palembang</li>
                <li>Universitas Sriwijaya Palembang</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

        <section id="contact_us" class="py-5 px-5 bg-light">
            <div class="contactus">
                <div class="col-md-6 py-5 mx-auto">
                    <h4 class="mb-3 text-center">Contact Us</h4>
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Anda" value="" required="">
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukan Email Anda" value="" required="">
                            </div>
                            <div class="col-md-12">
                                <label for="pesan" class="form-label">Pesan</label>
                                 <textarea class="form-control" placeholder="Masukan Pesan Anda" required></textarea>
                                </div>
                                <div class="col-md-12 pt-5">
                                    <button type="submit" class="btn btn-primary col-md-12">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bd-footer py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="d-inline-flex align-items-center mb-2 link-warning text-decoration-none" href="/" aria-label="FASILKOM UNSRI">
                        <img src="images/logo/logo.png" height="50">
                        <span class="fs-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FASILKOM UNSRI</span>
                    </a>                   
                    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Contact</a></li>
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
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="login-username" class="form-label">Username</label>
                            <input type="text" id="login-username" name="username" placeholder="Masukan Username" class="form-control" required>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="login-password" class="form-label">password</label>
                            <input type="password" id="login-password" name="password" placeholder="Masukan Password" class="form-control" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>