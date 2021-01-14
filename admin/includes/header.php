<div class="nav">
			<div class="logo">
				<a href="index.php">
					<img src="images/logo.png" width="220px">
				</a>
			</div>
			<?php include "includes/connection.php"?>
			<div class="menu">
				<ul class="top-nav">
					<li class="menu-item"><a href="index.php">Ballina</a></li>
					<li class="menu-item"><a href="projektet.php">Projektet</a></li>
					<li class="menu-item"><a href="kontakti.php">Kontakti</a></li>
					<?php 
					if(isset($_SESSION['role']) && isset($_SESSION['id']) && isset($_SESSION['user'])){
						echo "<li class=\"menu-item\"><a href=\"logout.php\">Logout</a></li>";
					}
					else{
						echo "<li class=\"menu-item\"><a href=\"../login.php\">Kyquni</a></li>";
					}
					?>
				</ul>
			</div>
		</div>