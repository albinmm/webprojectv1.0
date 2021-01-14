<?php 
	session_start();
	if(isset($_SESSION['role']) && isset($_SESSION['id']) && isset($_SESSION['user'])){

?>
<?php include "includes/connection.php"?>
<?php 

	class fetchData{
		public $emri;
		public $mbiemri;
		public $username;
		
		function __construct($emri, $mbiemri, $username){
			$this->emri = $username;
			$this->mbiemri = $mbiemri;
			$this->username = $username;
		}
		function getEmri(){
			return $this->emri;
		}
		function getMbiemri(){
			return $this->mbiemri;
		}
		function getUsername(){
			return $this->username;
		}
	}
	$id = $_SESSION['id'];

	$query = "SELECT * FROM Perdoruesi
					WHERE Id = '$id'";



		$params = array();
		$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
		$result = sqlsrv_query($conn, $query, $params, $options);
		if(sqlsrv_num_rows($result)===1){
			$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
			$data = new fetchData($row['Emri'], $row['Mbiemri'], $row['username']);
		}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profili</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
	<div class="container">
	<?php include "includes/header.php" ?>
	<div class="mbr"></div>
		<div class="main">
			<h2>Profili im</h2>
			<div class="forma">
				<br>
				<form method="POST">
					<table>
						<tr>
							<td>Id juaj:</td>
							<td><input type="text" name="id" value="<?php echo $_SESSION['id'] ?>" readonly></td>
						</tr>
						<tr>
							<td>Username-i juaj:</td>
							<td><input type="text" name="user" value="<?php echo $data->getUsername() ?>"></td>
						</tr>
						<tr>
							<td>Emri juaj:</td>
							<td><input type="text" name="emri" value="<?php echo $data->getEmri()  ?>"></td>
						</tr>
						<tr>
							<td>Mbiemri juaj:</td>
							<td><input type="text" name="mbiemri" value="<?php echo $data->getMbiemri() ?>"></td>
						</tr>
						<tr>
							<td><p style="font-size: 12px; margin-top: 20px; margin-bottom: 10px;">Ndryshoni passwordin tuaj</p></td>
						</tr>
						<tr>
							<td>Password-i aktual:</td>
							<td><input type="password" name="current-pass"></td>
						</tr>
						<tr>
							<td>Password-i i ri:</td>
							<td><input type="password" name="newpassword"></td>
						</tr>
						<tr>
							<td>Konfirmimi i passwordit:</td>
							<td><input type="password" name="con-password"></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Ndrysho"></td>
						</tr>
						<td>
						<tr>
							<td><span><?php 
										class getData{
											public $id;
											public $emri;
											public $mbiemri;
											public $username;
											public $currentpass;
											public $newpassword;
											public $confirmpass;
											function __construct($id,$emri,$mbiemri,$username,$currentpass,$newpassword,$confirmpass){
												$this->id = $id;
												$this->emri = $emri;
												$this->mbiemri = $mbiemri;
												$this->username = $username;
												$this->currentpass = $currentpass;
												$this->newpassword = $newpassword;
												$this->confirmpass = $confirmpass;
											}
											function getId(){
												return $this->id;
											}
											function getEmri(){
												return $this->emri;
											}
											function getMbiemri(){
												return $this->mbiemri;
											}
											function getUsername(){
												return $this->username;
											}
											function getCurrentpass(){
												return $this->currentpass;
											}
											function getNewpassword(){
												return $this->newpassword;
											}
											function getConfirmpassword(){
												return $this->confirmpass;
											}
											function checkData($currentpass, $newpassword, $confirmpass,$conn){
												if($currentpass == "" && $newpassword == "" && $confirmpass == ""){
													$query = "UPDATE Perdoruesi SET Emri = (?), Mbiemri = (?), username = (?)
													 		WHERE Id = (?)";
													$parametrat = array($this->emri, $this->mbiemri, $this->username, $this->id);
													$result = sqlsrv_query($conn, $query, $parametrat);
													echo "Te dhenat tuaja u ruajten me sukses!";
												}
												else if($currentpass != "" && $newpassword != "" && $confirmpass != ""){
													if($newpassword != $confirmpass){
														echo "Passwordi i ri nuk eshte i njejt me ate qe duhet te konfirmohet";
													}
													else if($currentpass != $this->password){
														echo "Passwordi aktual qe ju keni dhene eshte dhene gabim!";
													}
												else{
													$query = "UPDATE Perdoruesi SET Emri = (?), Mbiemri = (?), username = (?), password = (?)
													 	WHERE Id = (?)";
													$parametrat = array($this->emri, $this->mbiemri, $this->username, $this->newpassword, $this->id);
													$result = sqlsrv_query($conn, $query, $parametrat);
													echo "Te dhenat tuaja u ruajten me sukses!";
												}
											}
										}	
									}
									if(isset($_POST['submit'])){
										$tempuser = new getData($_POST['id'],$_POST['emri'],$_POST['mbiemri'],$_POST['user'],$_POST['current-pass'],$_POST['newpassword'],$_POST['con-password']);
										$tempuser->checkData($_POST['current-pass'],$_POST['newpassword'],$_POST['con-password'],$conn);
									}
							?></span></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php 
}else{
	header("Location: ../login.php");
	exit();
}
?>