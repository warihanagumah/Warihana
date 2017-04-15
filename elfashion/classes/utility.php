<?php
	/**
	* @author Warihanna Gumah
	*@version 1.0
	*/
	require_once('../register/registerformvalidation.php');
	require_once('../login/phpformvalidation.php');
  	require_once("../database/dbconnectionclass.php");

	class Utility extends dbconnection
	{
		/**
		*A function to register a new customer 
		*@return return true or false 
		**/
		public function usercreateaccount()
		{
			//get input fields
			$firstname=$_POST['fname'];
			$lastname=$_POST['lname'];
			$password=$_POST['password'];
			$email=$_POST['email'];
			$phone=$_POST['pno'];


			//hash password
			$password = password_hash($password, PASSWORD_DEFAULT);

			$ok=phpvalidateregister();
			//check if validation is successful	
			if($ok==true){
				//write query to insert
				$sql="INSERT INTO customer (id,first_name, last_name, email, password, phone) VALUES (2, '$firstname', '$lastname', '$email','$password', '$phone')";
				//run quer
				$result = $this->query($sql);	  
		  		if($result){
		  			return true;
		  		}
		  	}else  
		  	{
		  		return false;
		  	}
		}

		public function login()
		{
			//get input fields
			$password=$_POST['password'];
			$email=$_POST['email'];

			$success=phpvalidatelogin();

			if($success==true){
				//Query
				$sql= "SELECT * FROM customer  WHERE email='$email'";

				//execute query
				$exequery =$this->query($sql);
				if($exequery){
			    	$row=$this->fetch();
			    	 //verify password
			    	$ok=password_verify($password, $row['password']);
			    	if($ok){
				    	$tbemail=$row['email'];
				    	$tbuserid=$row['id'];
				    	$tbpass=$row['password'];
				    	$tbphone=$row['phone'];
				    	session_start();
		            	//storing a username
		           	 	$_SESSION['email']=$tbemail;
		            	$_SESSION['id']=$tbuserid;
		            	$_SESSION['pass']=$tbpas;
		            	$_SESSION['phone']=$tbphone;

		            	return true;
		        	}
		    	}  		
			}
			return false;  
		}
			
		public function search()
		{
			# code...
		}
	}


?>
