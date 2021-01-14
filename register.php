<!DOCTYPE html>
<html>
<head>
	<title>Kyqu</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
		<div class="container">
		<?php include "includes/header.php" ?>
		<div class="main">
			<div class="forma">
				<form>
					<table>
						<tr>
							<td>
								<label for="emri"> Username: </label> <br>
								<input type="text" id="username" name="emri">
							</td>
							<td rowspan = "3">
								<label for = "password"> Password: </label> <br>
								<input type="password" id="password" name="password">
							</td>
							<td>
								<label for = "con-password"> Confirm Password: </label> <br>
								<input type="password" id="con-password" name="con-password">
							</td>
							<td>
								<label for="email">Email:</label>
								<input type="email" name="email" id="email">
							</td>
							<td>
								<input type = "submit" value = "Regjistrohuni" onclick="validate()" />
							</td>
						</tr>
					</table>
				</form>
			</div>

		</div>


		<?php include "includes/footer.php"?>
	</div>
	<script type="text/javascript" src="js/login.js"></script>
</body>
</html>