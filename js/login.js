function validate(){
	var username = document.getElementById("username");
	var password = document.getElementById("password");

	if (username.value==="") {
		alert("Ju lutem shkurani nje username valid");
		username.focus();
		return false;
	}
	if(password.value===""){
		alert("Ju lutem shkurani nje password valid");
		password.focus();
		return false;
	}
	return true;
}