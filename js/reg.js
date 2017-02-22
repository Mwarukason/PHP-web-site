$(document).ready(function(){
	//get id of submit button wehn clicked to do validation
	$("#submit").click(function(e){
		e.preventDefault(); //jquery funtion to prevent error wen button clicked


		//get the values from input field
		var email = $("#email").val();
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var password = $("#password").val();

		var valid = true;

		//check firstname element if is empty and add element
		if(firstname == "" || !validName(firstname)){
			valid = false;
			$("#errorFirstname").html("Firstname filed cannot be empty");
		}else{
			$("#errorFirstname").html("");
		}

		//check Lastname element if is empty and add element
		if(lastname == "" || !validName(lastname)){
			valid = false;
			$("#errorLastname").html("Lastname field cannot be empty");
		}else{
			$("#errorLastname").html("");
		}

		//check email filed element if is empty and add element
		if (email == "") {
			valid = false;
			$("#errorEmail").html("Email field cannot be empty");
		}else{
			$("#errorEmail").html("");
		}

		//check email filed element if is empty and add element
		if (password == "" || !validPassword(password)) {
			valid = false;
			$("#errorPassword").html("Password field cannot be empty");
		}else{
			$("#errorPassword").html("");
		}

	});
});

function validName(name){
	return /[A-Z]+/i.test(name) && /[a-z]+/.test(name) && /\S{7,15}/.test(name);
}

<!--// function validEmail(emailAdd){ 
	//var comb = ;
	//} 

function validPassword(string){
	return /[A-Z]+.test(string) && /[a-z]+/.test(string) && /[\d\W]/.test(string) && /\S{7,15}/.test(string);
}