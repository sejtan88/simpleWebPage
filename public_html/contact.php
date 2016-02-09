<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>KONTAKT - PLAKARI</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="js/validate.js"></script>
	
</head>
<body id="contact">
<?php include("inc/head.inc.php"); ?>	<div id="contents">
		<div>
			<div class="body" id="contact">
				<div id="sidebar">
					<div class="body">
						<img src="images/bordo.png" alt="Img">
						<div class="contact">
							<p>PLAKARI<b>+381 XXXXXX</b>E - mail  <b class="email">plakari@XXXX.com</b>Ime firme<b>TEAM</b>PIB<b>11111111</b>
							</p>										
							<div id="connect">
								<h4>Facebook  Twiter</h4><a href="" target="_blank" class="facebook"></a><a href="" target="_blank" class="twitter"></a></b>
							</div>
						</div>
					</div>
				</div>
				<div id="main">
					<h1>kontaktirajte nas</h1>
					<p>Biće nam veliko zadovoljstvo da nas kontaktirate, prenesete Vaša razmišljanja, želje, mi ćemo vam pomoći da na osnovu Vaših razmišljanja i našeg iskustva dođemo do idealnog rešenja za Vaš klizni plakar   						.
					</p>
					<div id="greska"></div>
					<form action="inc/sendemail.php" method="get" onsubmit="return validacija(this)" id="kontakt" name="kontakt">
						<label>Ime</label>
						<input onkeyup="testTXT(this)" type="text" id="ime" name="ime" value="">
						<label>Email Adresa</label>
						<input type="text" onblur="testEM(this)" value="" id="email" name="email">
						<label>Telefon</label>
						<input onkeyup="testPN(this)" type="text" value="" id="phone" name="phone">
						<label>Poruka</label>
						<textarea id="pitanje" name="pitanje"></textarea>
						<input type="submit" value="Posalji poruku" class="btn1">
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include("inc/foot.inc.php"); ?>
	</div>
</body>
</html>