<?php
  /*
  *A function to validate login field inputs 
  *@return return true or false 
  */   

  function phpvalidatelogin()
  {
    $check=true;
    //Validating username
    //checks if username is empty
    if(empty($_POST['email'])){
      $check=false;
    }
    //Validating user passsword
    //checks if password is empty
    if(empty ($_POST['password'])) 
    {
      $check=false;
    }
    return $check;
  }
?>
