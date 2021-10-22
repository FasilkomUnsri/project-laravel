<!DOCTYPE html>
<html lang="en">
<title>Aleksey Rose Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px">
  <img class="w3-image" src="/img/SDFL_KodakPortra400_7_.jpg" alt="Me" width="1500" height="600">
  <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">ALEKSEY ROSE</h1>
    <h5 class="w3-hide-large" style="white-space:nowrap">ALEKSEY ROSE</h5>
    <h3 class="w3-hide-medium w3-hide-small">FILM PHOTOGRAPHER</h3>
  </div>
  
  <!-- Navbar (placed at the bottom of the header image) -->
  <ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
</header>

<!-- Navbar on small screens -->
<div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
<div class="w3-bar w3-light-grey">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#portfolio" class="w3-bar-item w3-button">Portfolio</a>
  <a href="#contact" class="w3-bar-item w3-button">Contact</a>
</div>
</div>
<!-- Page content -->
<div class="w3-content w3-padding-large w3-margin-top" id="portfolio">

  <!-- Images (Portfolio) -->
  <div></div>
  <img src="/img/SDFL_KodakPortra400_3_.jpg" alt="Me" class="w3-image" width="1000" height="500">
  <img src="/img/SDFL_KodakPortra400_9_.jpg" alt="Fallss" class="w3-image w3-margin-top" width="1000" height="500">
  <img src="/img/SDFL_KodakGoldRose_17_.jpg" alt="Me II" class="w3-image w3-margin-top" width="1000" height="500">
  <img src="/img/SDFL_Prototype1_2_.jpg" alt="Falls" class="w3-image w3-margin-top" width="1000" height="500">
  <img src="/img/SDFL_Prototype1_34_.jpg" alt="Skies" class="w3-image w3-margin-top" width="1000" height="500">
  <img src="/img/SDFL_Prototype1_6_.jpg" alt="Mountains" class="w3-image w3-margin-top" width="1000" height="500">

  <!-- Contact -->
  <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
    <h3 class="w3-center">Contact</h3>
    <hr>
    <p>Jl. Perikanan VA No.265 Kelurahan Talang Aman Kecamatan Kemuning Kota Palembang Sumatera Selatan 30127</p>

    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" required name="Name">
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" required name="Email">
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" required name="Message">
      </div>
      <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
    </form><br>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>

  </div>

<!-- End page content -->
</div>

</body>
</html>
