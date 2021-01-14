<!DOCTYPE html>
<html>
<head>
	<title>Ballina</title>
	<link rel="stylesheet" type="text/css" href="css/ballina.css">
</head>
<body>
	<div class="container">
		<?php include "includes/header.php" ?>

			<div class="main">
				<h1 class="titulli">Ju drejtojmë për tek shtëpia e ëndrrave tuaja!</h1>
				<div class="mbr"></div>
				<div class="slider">
					<div class="image">
						<div class="slide-img">
							<img id="slider" src="images/arberia.jpg">
						</div>
						<div class="left unclickable" id="left" onclick="moveImg(1)"><</div>
						<div class="right" id="right" onclick="moveImg(-1)">></div>
					</div>
					<div class="info show">
						<p class="vequara">Të vequara</p>
						<div id="rightborder" style="border-color: #84ccdb;">
							<h2 style = "text-transform: uppercase; font-weight: lighter;padding-right: 20%;color: black;"> Për qira </h2>
							<h3 style="font-weight: 450;margin-top: 3%; color: black;">Banesë në lagjen Arbëria</h3>
							<pre style = "padding-left: 20px; font-size: 19px;margin-top: 1%;position: absolute; color: black;">Dhoma:           Banjo:             Sipërfaqja:</pre>
							<div class="min-container">
								<div class="min-box">
									<img src = "images/bedroom.png" width = "50" height = "50" alt = "bedroom"/> 
									<span style = "vertical-align: 20px; font-size: 20px;color: black;"> &nbsp;2</span>
								</div>
								
								<div class="min-box">
									<img src = "images/bathroom.png" width = "50" height = "50" alt = "bathroom"/> 
									<span style = "vertical-align: 20px; font-size: 20px;color: black;"> &nbsp;1</span>
								</div>

								<div class="min-box">
									<img src = "images/square.png" width = "40" height = "40" alt = "square"/> 
									<span style = "vertical-align: 20px; font-size: 20px;color: black;"> &nbsp;94m<sup>2</sup></span>
								</div>
							</div>
							<p style = "font-size: 20px; margin-top: 8%;color: black;"> Çmimi: 400&euro; </p>
						</div>
					</div>
					<div class="info hide">
						<p class="vequara" style="background-color: #e25345;">Të vequara</p>
						<div id="rightborder" style="border-color: #e25345;">
							<h2 style = "text-transform: uppercase; font-weight: lighter;padding-right: 20%;color:black;"> Për shitje </h2>
							<h3 style="font-weight: 450;margin-top: 3%; color: black;">Shtëpi në lagjen Matiqan</h3>
							<pre style = "padding-left: 20px; font-size: 19px;margin-top: 1%;position: absolute;color:black">Dhoma:           Banjo:             Sipërfaqja:</pre>
							<div class="min-container">
								<div class="min-box">
									<img src = "images/bedroom.png" width = "50" height = "50" alt = "bedroom"/> 
									<span style = "vertical-align: 20px; font-size: 20px;color:black;"> &nbsp;3</span>
								</div>
								
								<div class="min-box">
									<img src = "images/bathroom.png" width = "50" height = "50" alt = "bathroom"/> 
									<span style = "vertical-align: 20px; font-size: 20px;color:black;"> &nbsp;2</span>
								</div>

								<div class="min-box">
									<img src = "images/square.png" width = "40" height = "40" alt = "square"/> 
									<span style = "vertical-align: 20px; font-size: 20px;color:black;"> &nbsp;245m<sup>2</sup></span>
								</div>
							</div>
							<p style = "font-size: 20px; margin-top: 8%;color:black;"> Çmimi: 400&euro; </p>
					</div>
				</div>
				</div>
				<div class="mbr"></div>
				<hr>
				<div class="mbr"></div>
					<div class="quote">
								<h2> <q> Don't wait to buy real estate. Buy real estate and wait. </q> </h2>
					
								<p> <cite> - Robert G. Allen </cite> </p>
					</div>
				<div class="mbr"></div>
			<hr>
			<div class="mbr"></div>
			<h2 style="width: 50%;margin: 0 auto; text-align: center;font-weight: 450;">Partneret tanë:</h2>
			<div class="mbr"></div>
			<div class="partneret">
				
				<div class="partneret-row">
					<div class="partneret-box">
						<a href="http://kawa-group.com/">
							<img src="images/kawa.png" width="180px" height="90px">
						</a>
					</div>
					<div class="partneret-box">
						<a href="http://albaqeramika.com/">
							<img src="images/alba2.png" width="240px" height="165px">
						</a>
					</div>
					<div class="partneret-box">
						<a href="http://www.konakconstruction.net/">
							<img src="images/konak.png" width="240px" height="165px">
						</a>
					</div>
				</div>
			</div>
			<div class="mbr"></div>
			<?php include "includes/footer.php"?>
	</div>
	<script type="text/javascript" src="js/ballina.js">
	</script>
</body>
</html>