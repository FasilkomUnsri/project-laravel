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
                    <li><a href="#slider" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#about_us" class="nav-link px-2 text-white">About</a></li>
                    <li><a href="#contact_us" class="nav-link px-2 text-white">Contact</a></li>
                </ul>
                <div class="text-end">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-outline-light me-2">Login</a>
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
                        <img src="https://wallpaperaccess.com/full/134196.jpg">
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Kesendirian - @AdityaDees</h1>
                                <p>Ada yang bilang, bagian paling sakit dari sendirian adalah kesepian. "Mungkin kamu bebas ketika sendirian. tapi kamu pasti kesepian. Mungkin bisa ngaku happy karena punya banyak teman, tapi ketika pulang dan sendirian, kamu tetap kesepian". Tetapi bagiku, sendiri itu bukan berarti sepi karena ....</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://hdwallsource.com/img/2014/10/cool-relaxing-wallpaper-25145-25828-hd-wallpapers.jpg">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Keras Bagaikan Batu Karang | @AdityaDees</h1>
                                <p>Batu karang memang keras, tetapi bukan berarti tidak bisa terkikis, Hati boleh keras, tetapi bukan berarti tidak bisa menangis.</p>
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
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section id="about_us" class="py-5 px-5">
            <div class="row ">
                <div class="col-md-10 order-md-2">
                    <h2>Halo, Saya <span class="text-muted">Aditya Dharmawan Saputra</span></h2>
                    <p class="lead">Saya merupakan mahasiswa Jurusan Sistem Informasi Bilingual 2013 dari Fakultas Ilmu Komputer Universitas Sriwijaya. Saat ini saya sudah lulus, dan sekarang bekerja di <b>PT. APLIKASI KONSTRUKSI GLOBAL</b> sebagai <i>Software Engineer</i>. Saya telah bekerja sejak tahun 2019 dengan spesialis sebagai <i>Fullstack Web Developer & Mobile</i>.</p>
                    <h5>Biodata & Riwayat Akademis</h5>
                    <ul>
                        <li>Aditya Dharmawan Saputra | adityadees@gmail.com</li>
                        <li>SD Negeri 124 Palembang</li>
                        <li>SMP Negeri 14 Palembang</li>
                        <li>SMA Methodist 1 Palembang</li>
                        <li>Universitas Sriwijaya Palembang</li>
                    </ul>
                </div>
                <div class="col-md-2 order-md-1">
                    <img src="images/about/1.jpg" class="img-fluid">
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
        </section>
    </main>
    <footer class="bd-footer py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="d-inline-flex align-items-center mb-2 link-warning text-decoration-none" href="/" aria-label="FASILKOM UNSRI">
                        <img src="https://i.pinimg.com/originals/4c/8f/7e/4c8f7e51b10777c8928bf693a2b55dd1.png" height="50">
                        <span class="fs-5">FASILKOM UNSRI</span>
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