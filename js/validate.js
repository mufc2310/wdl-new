function checkEmail(e) {
	var element=e.target;
	if(/[^a-zA-Z0-9._@]/.test(element.value)){
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

	if(!/[.]/.test(element.value)){
		alert("Email is Invalid !!  . is Missing");
		element.value=""
		return false;
	}

	return true;
}

function checkSubject(e){

	var element=e.target;
	if(/[^a-zA-Z.]/.test(element.value)){
		alert("Invalid Subject.Use only a-z or A-z");
	  	element.value="";
		return false;

	}
	return true;

}
	


var email = document.getElementById('user-email');
email.addEventListener('blur',checkEmail,false);

var subject = document.getElementById('user-subject');
subject.addEventListener('blur',checkSubject,false)