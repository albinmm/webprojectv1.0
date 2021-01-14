	
function validate(){
	var emri = document.getElementById("emri");
	var email = document.getElementById("email");
	var titulli = document.getElementById("title");
	var mesazhi = document.getElementById("msg");

	if (emri.value==="") {
		alert("Ju lutem shkurani nje emer valid");
		emri.focus();
		return false;
	}
	if(email.value===""){
		alert("Ju lutem shkurani nje email valid");
		email.focus();
		return false;
	}
	if(titulli.value===""){
		alert("Ju lutem shkurani nje titull valid");
		titulli.focus();
		return false;
	}
	if(mesazhi.value===""){
		alert("Ju lutem shkurani nje mesazh valid");
		mesazhi.focus();
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