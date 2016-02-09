<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="keywords" content="Klizni plakari, američki plakari, garderoberi, plakari beograd, novi sad, klizni plakari po meri, ugradni plakari"/>
	<title>PLAKARI</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<script src="js/jquery-1.11.0.min.js"></script>
	<script>
		function blinker() {
		    $('.blink_me').fadeOut(500);
		    $('.blink_me').fadeIn(500);
		}

		setInterval(blinker, 1000);
	</script>
</head>
<body id="index">
<?php include("inc/head.inc.php"); ?>
	<div id="contents">
		<div>
			<div class="body">
				<div id="addbox">
					<img src="images/logok.png" alt="Img">
					<div class="details">
					  <h1>Klizni Plakari<br>
			         Napravljeni<br> 
			         da traju.</h1>
						<p>
							Plakari je mlad inovativan brend proistekao iz desetogodišnjeg iskustva u kreaciji i pravljenju plakara od poda do plafona, od zida do zida. 
						</p>
						<p>
							Ako želite da uštedite prostor ili imate manjak prostora, rešenje za Vas je klizni plakar. Kod njih nije potreban dodatni prostor za otvaranje vrata. 
						</p>
				  </div>
				</div>
				<ul id="featured">
					<li>
						<div>
						  <img src="images/ekonomik.png" alt="Img"> <a href="gallery_s.php"></a>
						</div>
						<div class="details">
							<h4>STANDARD KLIZNI PLAKAR - OD EE &euro;/m<sup>2</sup></h4>
							<p>ODLIKUJE MODERNA MINIMALISTIČKA LINIJA JEDNOSTAVNOSTI I FUNKCIONALNOSTI KLIZNOG PLAKARA</p>
						</div>
					</li>
					<li class="bedroom">
						<div>
						  <img src="images/standard.png" alt="Img"> <a href="gallery_p.php"></a>
						</div>
						<div class="details">
						  <h4>PREMIUM KLIZNI PLAKAR - OD CC &euro;/m<sup>2</sup></h4>
						  <p>BRUŠENE ALU LAJSNE I KOMBINACIJA VISE BOJA UNIVERA DONEĆE VAŠEM KLIZNOM PLAKARU VIŠU NOTU OD STANDARDNE</p>
						</div>
					</li>
					<li class="kitchen">
						<div>
							<img src="images/premium.png" alt="Img"> <a href="gallery_d.php"></a>
						</div>
						<div class="details">
						  <h4>DELUXE KLIZNI PLAKAR  - OD DD &euro;/m<sup>2</sup></h4>
						  <p>KOMBINACIJA ALUMINIJUMA I MEDIJAPANA VISOKOG KVALITETA SA OGLEDALOM ILI  STAKLOM</p>
						</div>
					</li>
				</ul>
				<div class="contact">
					<p>
				  PLAKARI<b>+381 6xxxxxxx </b></p>
				  <p><b class="email">plakari@xxx.com</b></p>
					<p>Pokrivamo teritoriju cele Srbije</p>
					<p>BESPLATAN IZLAZAK NA TEREN</p>
					<p>ROK ISPORUKE 7 DANA</p>
				</div>
				<div class="blog">
					<h4>PISANA GARANCIJA</h4>
					<div>
						<img src="images/garmala.png" alt="Img">						
					</div>
				</div>
				<div class="blog">
					<h4 class="blink_me">AKCIJA - VISOKI BELI SJAJ - VEĆ OD XX &euro;/m<sup>2</sup></h4>
					<div>
						<img src="images/akcijaBeliSjajMala.jpg" alt="Img">	<a href="action.php"></a>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("inc/foot.inc.php"); ?>
  </div>
</body>
</html>