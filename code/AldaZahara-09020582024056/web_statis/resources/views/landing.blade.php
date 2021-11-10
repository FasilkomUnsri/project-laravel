<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="custom/css/custom.css" rel="stylesheet">
</head>
<body class="bg-white">
    <header class="p-3 bg-dark text-white fixed-top">
        <div class="container">
            <div class="d-flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
                </ul>

                <div class="text-end">
                    <a href="#" class="btn btn-outline-light me-2">Login</a>
                </div>
            </div>

        </div>
    </header>

    <main>
        <section class="text-center container-full" id="slider">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slide/1.jpg">

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Hidup - @AldaZahara</h1>
                                <p></p>
                                <p><a class="btn btn-lg btn-primary" href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide/2.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Melangkah Memberi Ruang | @AldaZahara</h1>
                                <p></p>
                                <p><a class="btn btn-lg btn-primary" href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next></span>
                </button>
            </div>
    </section>

    <section id="about_us" class="py-5 px-5">
        <div class="row">
            <div class="col-md-10 order-md-2">
                <h2>Halo,Saya <span class="text-muted">Alda Zahara</span></h2>
                <p class="lead">Saya merupakan mahasiswi Jurusan Komputerisasi Akuntansi 2020 dari Fakultas Ilmu Komputer Universitas Sriwijaya</p>

                <h5>Biodata & Riwayat Akademis</h5>
                <ul>
                    <li>Alda Zahara | aldazahara12@gmail.com</li>
                    <li>SD Islam Darussalam Palembang</li>
                    <li>SMP Negeri 34 Palembang</li>
                    <li>SMA Pusri Palembang</li>
                </ul>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="images/slide/3.jpeg" class="img-fluid">
            </div>
        </div>
    </section>




            <section id="contact_us" class="py-5 px-5 bg-light">
                <div class="row">
                    <div class="col-md-6 py-5 mx-auto">
                        <h4 class="mb-3 text-center">Contact Us</h4>
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" value="" required="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Masukkan Email Anda" value="" required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="pesan" class="form-label">Pesan</label>
                                    <textarea class="form-control" placeholder="Masukkan Pesan Anda" required></textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </section>
</main>






        <footer class="bd-footer py-5 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a class="d-inline-flex align-items-center mb-2 link-warning text-decoration-none" href="/" aria-label="FASILKOM UNSRI">
                            <img src="">
                            <span class="fs-5">FASILKOM UNSRI</span>
                        </a>

                        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
                            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Contact</a></li>
                        </ul>
                        <p>
                            -Static Web Part II -
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
