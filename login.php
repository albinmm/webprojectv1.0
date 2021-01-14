<?php include "includes/header.php"?>
<?php include "includes/connection.php"?>
<?php
	if(isset($_POST["submit"])){
		
		class Database{
			public $un;
			public $pass;
			public $query;
			function getUn(){
				return $this->un;
			}
			function setUn($un){
				$this->un = $un;
			}

			function getPass(){
				return $this->pass;
			}
			function setPass($pass){
				$this->pass = $pass;
			}
			
			function checkDB($query){
			if($query = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
				if(strcmp($passw, $query['password'])){}
					if($query['role']=='1'){
						header("Location:admin/index.php");
						session_start();
						$_SESSION['role'] = $query['role'];
						$_SESSION['id'] = $query['Id'];
						$_SESSION['user'] = $query['username'];
						exit();
						
					}
					else if($query['role']=='0'){
						session_start();
						header("Location:admin/index.php");
						$_SESSION['role'] = $query['role'];
						$_SESSION['id'] = $query['Id'];
						$_SESSION['user'] = $query['username'];
						exit();
					}
				}
				else{
						echo "Username/Password eshte dhene gabim";
						exit();
				}
			}

		}
		$tempuser = new Database();
		$tempuser->setUn($_POST['user']);
		$tempuser->setPass($_POST['password']);

		$usr = $tempuser->getUn();
		$query = "SELECT * FROM Perdoruesi
					WHERE username = '$usr'";
		$params = array();
		$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
		$result  = sqlsrv_query($conn, $query, $params, $options);

		$tempuser->checkDB($result);

		}
?>
<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kyqu</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>
<div class="main">
			<div class="forma">
				<form method="POST" action="login.php">
					<table>
						<tr>
							<td>
								<label for="emri"> Username: </label> <br>
								<input type="text" id="username" name="user" />
							</td>
							<td rowspan = "3">
								<label for = "password"> Password </label> <br>
								<input type="password" id="password" name="password" />
							</td>
							<td>
								<input type = "submit" value = "Login" name="submit" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>
