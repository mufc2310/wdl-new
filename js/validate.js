function checkEmail(e) {
	var element=e.target;
	if(/[^a-zA-Z0-9._]/.test(element.value)){
		alert("Email is invalid! Only characters a-z A-Z 0-9 . _ are allowed");
		element.value="";
		return false;
	}

	if(!/[a-zA-Z]/.test(element.value)){
		alert("Email is invalid! Only characters a-z or A-Z  are must");
		element.value="";
		return false;
	}

	if(!/[@]/.test(element.value)){
		alert("Email is invalid! You are missing @");
		element.value="";
		return false;
	}



}
	


var email = document.getElementById('')