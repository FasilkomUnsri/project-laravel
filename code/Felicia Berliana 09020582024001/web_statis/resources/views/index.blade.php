<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>FELICIA FASHION LIFESTYLE</b></h1>
    <h6>Welcome to the blog of <span class="w3-tag">Felicia's world</span></h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="img/1.jpeg" alt="Fashion Blog" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">Felicia's</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>FASHION BLOG</b></h1>
      <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">SUBSCRIBE</button></h6>
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>CASUAL STREET WEAR</h3>
          <h5>Palembang, <span class="w3-opacity">10 Oktober, 2021</span></h5>
        </div>

        <div class="w3-justify">
          <img src="img/2.jpeg" alt="Girl Hat" style="width:100%" class="w3-padding-16">
          <p><strong>Hi Fashioners!</strong> Perkembangan fashion hijab di Tanah Air mulai diakui dunia. Melambungnya busana santun itu tentu tak lepas dari peranan para blogger hijab terkenal.

Mereka menghadirkan tulisan yang menginspirasi untuk tampil percaya diri dengan hijab. Informasi yang diberikan terkait style busana Muslim pun bervariasi, mulai dari mode terbaru sampai tips and trick.</p>
          <p>Dengan berhijab, bukan berarti kamu harus tampil selalu kaku dan ketinggalan zaman. Ada banyak cara agar tampak modern dan santai meski menggunakan hijab.

Beberapa inspirasi fashion hijab casual 2021 berikut ini sangat cocok untuk dicontoh!</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo1')" id="myBtn"><b>Replies  </b> <span class="w3-tag w3-white">1</span></button></p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
              <div class="w3-col l2 m3">
                <img src="img/3.jpeg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Allenia <span class="w3-opacity w3-medium">20 Oktober, 2021, 16:32 WIB</span></h4>
                <p>Sangat bermanfaat, terimakasih!</p>
              </div>
          </div>
        </div>
      </div>
      <hr>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>FASHION STREET STYLE</h3>
          <h5>Palembang, <span class="w3-opacity">10 Oktober, 2021</span></h5>
        </div>

        <div class="w3-justify">
          <img src="/img/4.jpeg" alt="Men in Hats" style="width:100%" class="w3-padding-16">
          <p><strong>Hi Fashioners!</strong> Kamu bisa memadukan jeans denim dengan graphic tee dan manset hitam. Lengkapi look ini hijab casual ini dengan pilihan warna dan sneakers favoritmu!</p>
          <p>Look yang satu ini cocok untuk kamu yang punya tubuh tidak terlalu tinggi, namun juga bisa tampil modis dengan balutan hitam dengan outer kaos oversize dan menggunakan bawahan jeans atau pants yang longgar.

Aksesoris dan pashmina atau segiempat akan menyempurnakan tampilan ini.</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo2')"><b>Replies  </b> <span class="w3-tag w3-white">2</span></button></p>
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo2" style="display:none">
            <div class="w3-row">
              <hr>
              <div class="w3-col l2 m3">
                <img src="/img/1.jpeg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Anya <span class="w3-opacity w3-medium">25 Oktober, 2021, 10:52 WIB</span></h4>
                <p>Love your blog page!</p><br>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="img/6.jpeg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Angie <span class="w3-opacity w3-medium">28 Oktober, 2021, 09:12 WIB</span></h4>
                <p>Love fashion!!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>GIRLY FASHION WEAR</h3>
          <h5>Palembang, <span class="w3-opacity">20 Oktober, 2021</span></h5>
        </div>

        <div class="w3-justify">
          <img src="img/5.jpeg" alt="Runway" style="width:100%" class="w3-padding-16">
          <p><strong>Dont miss!</strong> Untuk yang ingin menonjolkan kesan lebih grily, gaya ini bisa jadi pilihan. Padukan dengan warna terang seperti ungu muda, putih atau cream dan pakai jeans atau rok midi, dengan hijab berwarna terang juga.</p>
          <p>Nah, itu semua inspirasi untuk kamu, para hijabers. Tapi lagi-lagi kamu akan merasa nyaman dengan baju yang kamu pake kalau kamu percaya pada diri sendiri. Jadi, look mana yang paling cocok untukmu?</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-right"><button class="w3-button w3-black" onclick="myFunction('demo3')"><b>Replies  </b> <span class="w3-tag w3-white">1</span></button></p>
          <p class="w3-clear"></p>
          
          <!-- Example of comment field -->
          <div id="demo3" style="display:none">
            <hr>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="img/7.jpeg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>JENI <span class="w3-opacity w3-medium">28 Oktober, 2021, 17:22 WIB</span></h4>
                <p>Keren!</p>
              </div>
            </div>
      
    <!-- END BLOG ENTRIES -->
    </div>

    <!-- About/Information menu -->
    <div class="w3-col l4">
      <!-- About Card -->
      <div class="w3-white w3-margin">
        <img src="img/9.jpeg" alt="Felicia" style="width:100%" class="w3-grayscale">
        <div class="w3-container w3-black">
          <h4>Felicia</h4>
          <p>Just me, myself and I, exploring the universe of uknownment. I want to share my world with you.</p>
        </div>
      </div>
      <hr>

      <!-- Inspiration -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Inspiration</h4>
        </div>
        <div class="w3-row-padding w3-white">
          <div class="w3-col s6">
            <p><img src="img/2.jpeg" alt="Jeans" style="width:100%"></p>
            <p><img src="img/4.jpeg" alt="Jeans" style="width:100%"></p>
          </div>
          <div class="w3-col s6">
            <p><img src="img/5.jpeg" alt="Jeans" style="width:100%" class="w3-grayscale"></p>
            <p><img src="img/8.jpeg" alt="Jeans" style="width:100%"></p>
         </div>
        </div>
      </div>
      <hr>

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Me</h4>
        </div>
        <div class="w3-container w3-xlarge w3-padding">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram http://instagram.com/feliciaberliana.e"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
      </div>
      <hr>
      
      <!-- Subscribe -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribee</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
          <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block w3-red">Subscribe</button></p>
        </div>
      </div>

    <!-- END About/Intro Menu -->
    </div>

  <!-- END GRID -->
  </div>

<!-- END w3-content -->
</div>

<!-- Subscribe Modal -->
<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}
</script>

</body>
</html>
