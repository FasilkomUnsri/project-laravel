<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- My CSS -->
    <style>
      section {
        min-height: 420px;
      }
    </style>

    <title>My Portfolio</title>
  </head>
  <body class="mt-5">
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
              <a class="navbar-brand" href="#">Rio Alfido</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span><!-- icon pada menu split -->
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                  <a class="nav-link" href="#about">About</a>
                  <a class="nav-link" href="#portfolio">Portfolio</a>
                  <a class="nav-link" href="#contact" tabindex="-1">Kontak</a>
                 <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-outline-light me-2">Login</a>
                </div>
              </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="https://w7.pngwing.com/pngs/843/156/png-transparent-smiley-smiley-miscellaneous-face-smiley.png" width="25%" class="rounded-circle img-thumbnail">
            <h1 class="display-4">Rio Alfido</h1>
            <p class="lead">Selamat Datang di Portfolio Saya</p>
        </div>
    </div>

  <section id="about" class="about">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2>About</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5 text-center">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed vero ab officiis, provident natus, perspiciatis aperiam in eaque, eligendi earum hic. Magnam ratione eveniet labore, quae veniam odio commodi. Vel?
            </div>
            <div class="col-md-5 text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non dolorem eligendi corporis, ipsum nesciunt ab dolores impedit, distinctio quae doloribus necessitatibus dolorum nisi accusantium ea cupiditate in repellendus odio magni.
            </div>
        </div>
    </div>
  </section>  

  <section id="portfolio" class="portfolio bg-light pb-4">
    <div class="container" id="halman1">
        <div class="row mb-4 pt-4">
            <div class="col text-center">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md"> <!-- md membuat gambar responsive md=medium small=sm extra small=xs-->
                <div class="card">
                  <img src="https://dessign.net/wp-content/uploads/personalportfolio-free-template.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                  <img src="https://jogjait.com/wp-content/uploads/2016/04/Wynn-portfolio-grid-1000x675.jpg" class="card-img-top" alt="Card image cap" height="234">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                  <img src="https://dessign.net/wp-content/uploads/personalportfolio-free-template.jpg" class="card-img-top" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md">
                <div class="card">
                  <img src="https://dessign.net/wp-content/uploads/personalportfolio-free-template.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                  <img src="https://jogjait.com/wp-content/uploads/2016/04/Wynn-portfolio-grid-1000x675.jpg" class="card-img-top" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                  <img src="https://dessign.net/wp-content/uploads/personalportfolio-free-template.jpg" class="card-img-top" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
            </div>
        </div>
      
    </div>
    <nav aria-label="Page navigation example" style="margin-left: 40%;">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
  </section> 

  <section id="contact" class="contact mb-5">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Contact Us</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card text-white bg-primary mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Contact Us</h5>
              <p class="card-text">Tlp +628-9234-9076-02</p>
              <p class="card-text">email alfidorio220322@gmail.com</p>
            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item"><h1>Location</h1></li>
            <li class="list-group-item">My Office</li>
            <li class="list-group-item">Jl. Kebun Bunga, Palembang</li>
            <li class="list-group-item">South Sumatra, Indonesia</li>
          </ul>
        </div>

        <div class="col-lg-6">
          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="telp">No Telp</label>
              <input type="text" class="form-control" id="telp">
            </div>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea name="pesan" id="pesan" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary">Kirim Pesan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-white">
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p>Rio Alfido | | Copyright 2021</p>
        </div>
      </div>
    </div>
  </footer>

    <!--jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
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