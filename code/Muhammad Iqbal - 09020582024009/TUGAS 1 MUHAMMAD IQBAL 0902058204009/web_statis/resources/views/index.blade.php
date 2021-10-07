<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeri Iqbal</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-container w3-xlarge w3-padding-24">
  <a href="#" class="w3-left w3-button w3-white">GALERI SAYA</a>
  <a href="#about" class="w3-right w3-button w3-white">About</a>
</header>

<!-- Photo Grid -->
<div class="w3-row">
  <div class="w3-half">
    <img src="img/thumbs/2.jpg" style="width:100%">
    <img src="img/thumbs/3.jpg" style="width:100%">
    <img src="img/thumbs/1.jpg" style="width:100%">
  </div>

  <div class="w3-half">
    <img src="img/thumbs/4.jpg" style="width:100%">
    <img src="img/thumbs/6.jpg" style="width:100%">
    <img src="img/thumbs/55.jpg" style="width:100%">
  </div>
</div>

<!-- End Page Content -->
</div>

<!-- Footer / About Section -->
<footer class="w3-light-grey w3-padding-64 w3-center" id="about">
<h2>About</h2>
<img src="img/iqbal.jpg" class="w3-image w3-padding-32" width="300" height="300">
<form style="margin:auto;width:60%" action="/action_page.php" target="_blank">
  <p>Nama Saya Muhammad Iqbal Mahasiswa Universitas</p>
  <p class="w3-large w3-text-yellow">Contact Me!</p>
  <div class="w3-section">
    <label><b>Name</b></label>
    <input class="w3-input w3-border" type="text" required name="Name">
  </div>
  <div class="w3-section">
    <label><b>Email</b></label>
    <input class="w3-input w3-border" type="text" required name="Email">
  </div>
  <div class="w3-section">
    <label><b>Message</b></label>
    <input class="w3-input w3-border" required name="Message">
  </div>
  <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
</form>
<br>
<p>Powered by <a href="https://www.instagram.com/iqbaall.3" target="_blank" class="w3-hover-text-green">Xo Xo</a></p>
</footer>
</body>
</html>