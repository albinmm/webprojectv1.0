	
function validate(){
	var username = document.getElementById("username");
	var password = document.getElementById("password");
	var confirmpassword = document.getElementById("con-password");
	var email = document.getElementById("email");

	if (username.value==="") {
		alert("Ju lutem shkurani nje username valid");
		username.focus();
		return false;
	}
	if(email.value===""){
		alert("Ju lutem shkurani nje email valid");
		email.focus();
		return false;
	}
	if(password.value===""){
		alert("Ju lutem shkurani nje titull valid");
		password.focus();
		return false;
	}
	if(confirmpassword.value===""){
		alert("Ju lutem shkurani nje mesazh valid");
		mesazhi.focus();
		return false;
	}
	if(confirmpassword.value!==password.value){
		alert("Passwordet nuk jane te njejte!");
		password.focus();
		return false;
	}
	if(!emailValidate(email)){
		alert("Ju lutem shkruani nje email valid");
		email.focus();
		return false;
	}
	return true;
}

function emailValidate(email){
	var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return regex.test(email.toLowerCase());
}