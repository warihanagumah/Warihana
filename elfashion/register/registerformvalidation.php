<?php
  /*
  *php validation for registeration form
  *@author author Warhihana Gumah
  */
    //declares global  variables 
  	$firstname=$lastname= $email=$password=$confirmpass="";

  
    /*
    *A function that cleans user input
    *@param input to be cleaned 
    *@return return cleaned input
    */
    function cleanInput($a) 
    {
      //Removes unnecessary whitespaces from input  
  		$a=trim($a);
  		//Removes unnecessary backslashes from input
  		$a=stripslashes($a);
  		//Converts some predefined characters to HTML entities
  		$a=htmlspecialchars($a);
  	   return $a;
  	} 

    /*
    *A function to validate register field inputs 
    *@return return true or false 
    */        
    function phpvalidateregister()
    {
      $ok=true;
      
      //Validating firstname field
      //checks if firstname is empty
      if(empty($_POST['fname'])) 
      {
        $ok=false;
      } else 
      {
        $firstname=$_POST['fname'];
        //calls cleanData function to clean user input
        $firstname= cleanInput($firstname);
        //check if username only contains only letters
        if(!preg_match("/^[a-zA-Z-_]*$/",$firstname)) 
      	{
          $ok=false;
        }
      }

      //Validating lastname field 
      //checks if lastname is empty
      if(empty($_POST['lname'])) 
      {
        $ok=false;
      } else 
      {
        $lastname=$_POST['lname'];
        //calls cleanData function to clean user input
        $lastname= cleanInput($lastname);
        //check if username only contains only letters
        if(!preg_match("/^[a-zA-Z-_]*$/",$lastname)) 
        {
          $ok=false;
        }
      }

      //Validating  passsword field
      //checks if password is empty
      if(empty ($_POST['password'])) 
      {
        $ok=false;
      }else
      {
        $password=$_POST['password'];

        /*
        *check for password strength
        *password must be atleast 6 characters,
        *contain atleast 1 upercase, symbol, number 
        */
        if(!preg_match("/^.*(?=.{6,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])[a-zA-Z0-9@#$%^&+=]*$/", $password))
        {
          $ok=false;
        }
         
      } 

      //validating email
      //check if email field is empty
      if(empty($_POST['email']))
      {
        $ok = false;
      }else
      {
        $email=$_POST['email'];
        //calls cleanData function to clean user input
        $email= cleanInput($email);

        //check if email match email pattern
        if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]??\w+)*(\.\w{2,3})+$/', $email)) 
        {
          $ok=false;
        } 
      }

      //Validating  confirm passsword field
      //checks if confirm password field is empty
      if(empty ($_POST['cpassword'])) 
      {
        $ok=false;
      }else
      {
        $confirmpass=$_POST['cpassword'];

        //check if confirmation password match the given password 
        if($password!=$confirmpass)
        {
          $ok=false;
        }
      }

      //validate phone number 
      if(empty ($_POST['pno'])) 
      {
        $ok=false;
      }else
      {
        $phone=$_POST['pno'];

        //check if confirmation password match the given password 
        if(!preg_match('/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/', $phone))
        {
          $ok=false;
        }
      } 
      return $ok; 
    }
  ?>