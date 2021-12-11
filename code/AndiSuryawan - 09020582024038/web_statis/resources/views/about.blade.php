<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>
	<link href="style/about.css" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
     crossorigin="anonymous"/>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" 
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>
	<header>
		<div class="container"> 
            <h1>Andi Suryawan</h1>
            <ul>
                <li><a href="/index">Home</a></li>
                <li><a href="/about">About</a</li>
                <li><a href="/">Logout</a> </li>   
            </ul>
        </div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<h1>About Me</h1>
		</div>
	</section>
	<section class="service">
		<div class="container">
			<h3 class="info">MY INFO</h3>
			<div class="box">
				<div class="col-4">
					<h4>Address</h4>
					<p>Jl. Jaya Rt.19 Rw.04 No.54</p>
				</div>
			</div>
			<div class="box">
				<div class="medsos">
					<ul>
						<li><a href="https://www.instagram.com/andisuryawan10"><i class="fab fa-instagram"> Instagram</i></li>
					</ul>
				</div>
				<div class="col-4">
					<h4>Email</h4>
					<p>aandisuryawan11@gmail.com</p>
				</div>
				
			</div>
			<div class="box">
				<div class="medsos">
					<ul>
						<li><a href="https://web.facebook.com/profile.php?id=100008705566736"><i class="fab fa-facebook"> Facebook</i></li>
					</ul>
				</div>
				<div class="col-4">
					<h4>Nomor Hand Phone</h4>
					<p>+62821-8103-9546</p>
				</div>
			</div>
			<div class="box">
				<div class="medsos">
					<ul>
						<li><a href=""><i class="fab fa-twitter"> Twitter</i></li> 
					</ul>
				</div>
                <div class="col-4">
					<h4>Kabupaten</h4>
					<p>Palembang</p>
				</div>
			</div>
</section>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>