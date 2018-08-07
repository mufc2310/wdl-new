$(function() {
	$('#rollno').on('blur',function(){
		if (!/(\d{2}((CO)|(DCO)|(EE)|(DEE)|(EX)|(DEX)|(ME)|(DME)|(CE)|(DCE)|(CES)|(DCES))\d{2,3})/i.test(this.value))
		{
			alert("Invalid Rollno..");
			this.value="";
			e.stopPropagation();
			$(this).focus();
		}
	});

	$('#sname').on('keypress',function(e){
		if(/[^a-zA-Z ]/.test(e.key))
		{
			alert("Invalid Name . Only alphabet and spaces are allowed");
			this.value="";
			e.stopPropagation();
			$(this).focus();
			return false;
		}
	});

	$('#semail').on('blur',function(){
		if(/[]/.test(this.value))
		{
			alert("")
		}
	});

});


