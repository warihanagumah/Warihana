/*
 *javascript validation class of register and login forms
 *@author Warihana Gumah
 */

 function jsvalidateregister(){

	//variables to store user input
	var firstname = document.getElementById('fname');
	var lastname = document.getElementById('lname');
	var email = document.getElementById('email');
	var password = document.getElementById('pass');
	var confirmpass = document.getElementById('cpass');
	var phone = document.getElementById('pno');

	//variables to store error message
	var firstname_validation = document.getElementById("fname_validation");
	var lastname_validation = document.getElementById("lname_validation");
	var email_validation = document.getElementById("email_validation");
	var password_validation = document.getElementById("pass_validation");
	var confirmpass_validation = document.getElementById("cpass_validation");
	var pno_validation = document.getElementById('pno_validation');

	//email format
	var filter_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	//pasword regexp
	var filter_pass= new RegExp("^.*(?=.{6,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])[a-zA-Z0-9@#$%^&+=]*$");
	var filter_name= /^[a-zA-Z-_]*$/;
	var filter_phone=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
	 
	//validating firstname field 
	if(firstname.value === "")
	{
	    firstname_validation.innerHTML = "Firstname is Required";
	}
	else if(!filter_name.test(firstname.value))
	{
		firstname_validation.innerHTML = "Firstname must contatin only alphabets dashes and underscores";
	}

	//validating lastname field
	//check if field is empty  
	if (lastname.value === "")
	{
	    lastname_validation.innerHTML = "Lastname is Required";
	}
	//check for password strength
    //password must be atleast 8 characters,
    //contain atleast 1 alphabet and 1 number
	else if(!filter_name.test(lastname.value))
	{
		lastname_validation.innerHTML =  "Lastname must contatin only alphabets dashes and underscores";
	}

	//validating email
	//check if email field id empty
	if(email.value === "")
	{
		email_validation.innerHTML = "Email is Required";
	}
	else if(!filter_email.test(email.value))
	{
	    email_validation.innerHTML = "Invalid email address";
	} 

	//validating password 
	if (password.value === "")
	{
	    password_validation.innerHTML = "Password is Required";
	}
	//check for password strength
    //password must be atleast 8 characters,
    //contain atleast 1 alphabet and 1 number
	else if(!filter_pass.test(password.value))
	{
		password_validation.innerHTML =  "Password must be atleast 6 characters and contain atleast 1 uppercase, numeric and symbol";
	}

	//validating confirm password field 
	if (confirmpass.value === "")
	{
	    confirmpass_validation.innerHTML = "Confirmation Password field is Required";
	}else if(password.value!==confirmpass.value)
	{
		confirmpass_validation.innerHTML = "Confirmation Password must match the provided password";
	}

	//validating phone
	//check if phone field is empty
	if(phone.value === "")
	{
		pno_validation.innerHTML = "Phone Number is required";
	}
	else if(!filter_phone.test(phone.value))
	{
	    pno_validation.innerHTML = "Enter a valid phone number with country code";
	} 
	
}


function jsvalidatelogin(){

	//variables to store user input
	var email = document.getElementById('email');
	var password = document.getElementById('password');	

	//variables to store error message
	var email_validation = document.getElementById("email_validation");
	var password_validation = document.getElementById("password_validation");
	
	 
	//validating username 
	if(email.value === "")
	{
	    email_validation.innerHTML = "Email is Required";
	}

	//validating password
	//check if field is empty  
	if (password.value === "")
	{
	    password_validation.innerHTML = "password is Required";
	}
}

