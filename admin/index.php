<?php 
	session_start();
	if(isset($_SESSION['role']) && isset($_SESSION['id']) && isset($_SESSION['user'])){

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div class="container">	
	<?php include "includes/header.php" ?>

		<div class="mbr"></div>
		<p style="text-align: center; font-size: 20px;font-weight: 350;">Mirë se erdhët<span style="font-style: italic;"> <?php echo $_SESSION['user'] ?></span></hp>
			<div class="main">

				<div class="project-row1">
					<div class="project-box">
						<img src="images/profile.png" width="100">
						<p style="margin-top: 15px;font-weight: bold;">Rregullo parametrat e profilit tënd</p>
						<p style="margin-top: 20px;">Ju lutem klikoni <a href="profile.php" style="text-decoration: none;color: black;">këtu</a></p>
					</div>
					<?php if($_SESSION['role'] === '1'){
					echo "<div class=\"project-box\">
						<img src=\"images/posts.png\" width=\"100\" style=\"margin-top: 10px;margin-left: 10px;\">
						<p style=\"margin-top: 15px;font-weight: bold;\">Shto, përditso ose fshij postime të caktuara</p>
						<p style=\"margin-top: 20px;\">Ju lutem klikoni <a href=\"posts.php\" style=\"text-decoration: none;color: black;\">këtu</a></p>
					</div>";
					 } 

					 else{
					 	echo "";
					 }
					 ?>
				</div>
			</div>
		</div>

</body>
</html>
<?php 
}else{
	header("Location:login.php");
	exit();
}

?>