<!DOCTYPE html>
<html>
<head>
	<title>Kontakto</title>
	<link rel="stylesheet" type="text/css" href="css/kontakti.css"/>
</head>
<body>
	<div class="container">
		<?php include "includes/header.php" ?>
			<div class="forma">
				<form>
			<table>
				<tr>
					<td>
						<label for = "emri"> Emri </label> <br>
						<input type = "text" id = "emri" name = "emri">
					</td>
					<td rowspan = "3">
						<label for = "msg"> Mesazhi </label> <br>
						<textarea id = "msg" name = "mesazhi" rows = "15" cols = "50"></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<label for = "email"> Email </label> <br>
						<input type = "email" name = "email" id = "email"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for = "title"> Titulli </label> <br>
						<input type = "text" name = "title" id = "title"/>
					</td>
				</tr>
				<tr>
					<td>
						<p> Nga keni dëgjuar për ne? </p>
						<input type = "checkbox" name = "degjim" value = "TV"/> TV
						<input type = "checkbox" name = "degjim" value = "internet"/> Internet <br>
						<input type = "checkbox" name = "degjim" value = "shoqeria"/> Shoqëria
					</td>
					<td>
						<input type = "submit" value="DËRGO MESAZHIN" onclick="validate()" />
					</td>
				</tr>

				<label id="mistake"></label>
			</table>
		</form>
			</div>



			<?php include "includes/footer.php"?>
	</div>
	<script type="text/javascript" src="js/kontakti.js"></script>
</body>
</html>