<?php
	require_once("../classes/utility.php");

	//check which button was clicked 
	if(isset($_POST['register'])){
		registeruser();
	}else if (isset($_POST['login']))
	{
		userlogin();
	}


	function registeruser(){
		//create an instance of the utility class 
		//create an instance of the class
		$registeruser= new Utility();
		$success=$registeruser->usercreateaccount();

		if($success==true){
			header("Location:../login/signin.php");
			die();
		}
		else{
			echo "Registration unsuccessful";
		}
	}


	function userlogin(){
		//create an instance of the utility class 
		//create an instance of the class
		$userlogin= new Utility();
		$success=$userlogin->login();

		if($success==true){
			header("Location: ../index.php");
			die();
		}
		else{
			echo "Login unsuccessful";
		}

	}

?>