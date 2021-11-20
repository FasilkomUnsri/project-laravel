<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Fortfolio | Ratih</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/custom.css">
</head>
<body id="home">

<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-sm fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Ratih</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pictures">Pictures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!-- akhirnavbar -->
{{-- jumbotron --}}
<section class="jumbotron text-center">
  <img src="img/profil.jpg" alt="Ratih" width="200" class="rounded-circle img-thumbnails"/>
  <h1 class="display-4">Ratih</h1>
  <p class="lead">Mahasiswa</p>
  <p class="lead">Komputerisasi Akuntansi | Fakultas Ilmu Komputer | Universitas Sriwijaya</p>
  <hr class="my-4">
{{-- akhirjumbotron --}}
<div class="space"></div>
{{-- about --}}
<section id="about">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>About Me</h2>
      </div>
    </div>
    <div class="row justify-content-center fs-5">
      <div class="col-md-8">
        <p>Hay, saya Ratih dan saya membuat Website Portfolio dengan menampilkan gambar yang telah saya potret sendiri ataupun dari sumber lainnya yang telah saya editing. Website ini saya buat atas tugas matakuliah yang telah diberikan. slain itu, tujuan lain pembuatan website ini juga sebagai representasi dari hasil editing saya, melalui proses belajar yang berprogres.</p>
        <p>Nama : Ratih</p>
        <p>Email :<a href="ratih121102@gmail.com"></a>ratih121102@gmail.com</p>
        <p>Instagram :<a href="https://www.instagram.com/ratttihh"></a>@ratttihh</p>
        <p>Sumber gambar :<a href="https://instagram.com/alakadarnya_sj?utm_medium=copy_link"></a>@alakadarny_sj</p>
      </div>
    </div>
  </div>
</section>
{{-- akhirabout --}}
<div class="space2"></div>
{{-- pictures --}}
<section id="pictures">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>My Pictures</h2>
      </div>
    </div>
    <div class="row justify-content-center mb-3">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/gmbr1.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/gmbr2.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/gmbr3.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/gmbr4.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/gmbr3.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/gmbr5.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/gmbr6.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/gmbr7.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/gmbr8.jpg" class="card-img-top" alt="...">
        </div>
      </div>

    </div>

  </div>

</section>
{{-- akhirpictures --}}
<div class="space3"></div>
{{-- contact --}}
<section id="contact">
  <div class="container">
    <div class="row mb-3">
      <div class="col">
        <h2>Contact Me</h2>
      </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-md-6">
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" id="name" aria-describedby="name">

          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="email">
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="3"></textarea>
          </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>
  </div>
  </div>
</section>
{{-- akhircontact --}}
<div class="space4"></div>
{{-- footer --}}
<footer class="bg-warning">
  <p>Created by <a href="https://www.instagram.com/ratttihh"></a>Ratih</p>
</footer>
{{-- akhirfooter --}}
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>