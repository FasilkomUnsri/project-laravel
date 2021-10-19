<!DOCTYPE html>
<html>
<title>saya, meiza!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="/img/fotomeiza.jpeg" style="width:100%">
  <a href="#beranda" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>BERANDA</p>
  </a>
  <a href="#tentang" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>TENTANG</p>
  </a>
  <a href="#foto" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>FOTO</p>
  </a>
  <a href="#kontak" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>KONTAK</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">BERANDA</a>
    <a href="#tentang" class="w3-bar-item w3-button" style="width:25% !important">TENTANG</a>
    <a href="#foto" class="w3-bar-item w3-button" style="width:25% !important">foto</a>
    <a href="#kontak" class="w3-bar-item w3-button" style="width:25% !important">KONTAK</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="beranda">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Saya</span> Meiza Alquratu Aini.</h1>
    <p>Olahragawan dan Seniman.</p>
    <img src="/img/fotomeiza.jpeg" alt="MEIZA" class="w3-image" width="600" height="800">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="tentang">
    <h2 class="w3-text-light-grey">MEIZA ALQURATU AINI</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Nama saya MEIZA ALQURATU AINI, saya tinggal di Palembang tepatnya di komplek pertamina plaju. Saya lahir di Palembang pada tanggal 01 MEI 2001. Hobi saya olahrga dan olahraga yang sering saya mainkan adalah bola tangan dan makanan kesukaan saya adalah bakso, mi ayam dan bubur ayam. Saya sekarang kuliah di UNIVERSITAS SRIWIJAYA fakultas ilmu komputer, jurusan komputerisasi akuntansi.</p>
    <h3 class="w3-padding-16 w3-text-light-grey">KEAHLIAN SAYA</h3>
    <p class="w3-wide">Olahraga</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">Menyanyi</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">Melukis</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div><br>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="foto">
    <h2 class="w3-text-light-grey">Foto Saya</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="/img/meiza1.jpeg" style="width:100%">
        <img src="/img/meiza8.jpeg" style="width:100%">
        <img src="/img/meiza2.jpeg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="/img/meiza4.jpeg" style="width:100%">
        <img src="/img/meiza7.jpeg" style="width:100%">
        <img src="/img/meiza3.jpeg" style="width:100%">
        <img src="/img/meiza5.jpeg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="kontak">
    <h2 class="w3-text-light-grey">Hubungi saya</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Palembang, Komplek Pertamina Plaju</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> No.HP   : 0856778352928</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Emai     : meizaalquratuaini01@gmail.com</p>
    </div><br>
    <p>Mari kita berkenalan. kirimlah saya pesan!!!</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Nama" required name="Nama"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subjek" required name="Subjek"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Pesan" required name="Pesan"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> KIRIM PESAN
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>