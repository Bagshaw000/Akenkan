
function onsignout(){
	event.preventDefault();
	const xhttp = new XMLHttpRequest();
		xhttp.open("POST", "/akenkan/actions/auth_processor.php");
		xhttp.onreadystatechange = function (){
			if (xhttp.readyState == XMLHttpRequest.DONE){
				if (xhttp.response == "Successfully signed you out"){
					alert(xhttp.response);
					window.location = "index.php";
				}else {
					alert(xhttp.response);
				}
			}
		}
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("action=log_out");
}


function onloginsubmit(){
	event.preventDefault();
	var passes = true;//represents good login credentials
	var email = document.getElementById("email");
	var password = document.getElementById("password");
	// if (isValidEmail(email.value)){//email is valid
	// 	passes = true;
	// 	document.getElementById("email_error").style.display = "none";
	// }else {
	// 	passes = false;
	// 	document.getElementById("email_error").style.display = "block";
	// }


	if(passes){
		//if all login credentials are correct, process login with AJAX
		const xhttp = new XMLHttpRequest();
		// window.location = "/akenkan/actions/auth_processor.php";
		xhttp.open("POST", "/akenkan/actions/auth_processor.php");
		xhttp.onreadystatechange = function (){
			if (xhttp.readyState == XMLHttpRequest.DONE){
				if (xhttp.response == "Login successful"){
					alert(xhttp.response);
					window.location = "index.php";
				}else {
					alert(xhttp.response);
				}
			}
		}
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("action=log_in&email="+email.value+"&password="+password.value);
	}

	return false;
}


function onsignupsubmit(){
	event.preventDefault();
	var email = document.getElementById("email");
	var username = document.getElementById("username");
	var password = document.getElementById("password");
	var confirm_password = document.getElementById("confirm_password");
	var passes = true;
	// var passes = false;

	// //Email validation
	// if (isValidEmail(email.value)){//email is valid
	// 	passes = true;
	// 	document.getElementById("email_error").style.display = "none";
	// }else {
	// 	passes = false;
	// 	document.getElementById("email_error").style.display = "block";
	// }

	// //password number
	// if (validatePassNum(password.value)){//password is long enough
	// 	passes = true && passes;//takes into consideration previous status
	// 	document.getElementById("pass_error_num").style.display = "none";
	// } else {
	// 	passes = false && passes;//takes into consideration previous status
	// 	document.getElementById("pass_error_num").style.display = "block";
	// }

	// //password length
	// if (validatePassLen(password.value)){//password is long enough
	// 	passes = true && passes;//takes into consideration previous status
	// 	document.getElementById("pass_error_len").style.display = "none";
	// } else {
	// 	passes = false && passes;//takes into consideration previous status
	// 	document.getElementById("pass_error_len").style.display = "block";
	// }

	// //valid username
	// if(isEmpty(username.value)){//no username is typed
	// 	passes = false && passes;//takes into consideration previous status
	// 	document.getElementById("name_error_empty").style.display = "block";
	// }else {
	// 	passes = true && passes;//takes into consideration previous status
	// 	document.getElementById("name_error_empty").style.display = "none";
	// }

	// //validate passwords
	// if (password.value == confirm_password.value){
	// 	passes = true && passes;//takes into consideration previous status
	// 	document.getElementById("pass_error_confirm").style.display = "none";

	// }else{
	// 	passes = false && passes;//takes into consideration previous status
	// 	document.getElementById("pass_error_confirm").style.display = "block";

	// }

	if(passes){
		//sign up credentials are okay, sign user up and redirect to login page

		//if all login credentials are correct, process login with AJAX
		const xhttp = new XMLHttpRequest();
		// window.location = "/akenkan/actions/auth_processor.php";
		xhttp.open("POST", "/akenkan/actions/auth_processor.php");
		xhttp.onreadystatechange = function (){
			if (xhttp.readyState == XMLHttpRequest.DONE){
				if (xhttp.response == "Sign up successful"){
					alert(xhttp.response);
					window.location = "login.php";
				}else {
					alert(xhttp.response);
				}
				// window.location = "/akenkan/views/login.php"
			}
		}
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("action=sign_up&email="+email.value+"&password="+password.value+"&username="+username.value);


	}else {

		alert("something is off");
	}

	return false;

}


//Verifies if the passed string is a valid email
function isValidEmail(string){
	return RegExp(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/).test(string)
}

//Verifies if passed string is not empty
function isEmpty(value){
	return !(value.length > 0);
}

//Verifies if the passed String is longer than 5 characters
function validatePassLen(pass){
	return pass.length > 5;
}

//Verifies if the passed string contains at least one number
function validatePassNum(pass){
	return RegExp(/.*[0-9].*/).test(pass);
}