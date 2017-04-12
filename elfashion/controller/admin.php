<?php

	//Include the admin.php class file

	require_once('../classes/admin.php');

    if (isset($_SESSION))
    {
        //get user details
        $adminid = $_SESSION['adminid'];
    }
	function addnewItem()
	{
		//Get form data and store in variables
		//validate the form data
		//create an instance of admin class
		//pass the data to the addnewitem function in the admin class

        global $adminid;
        $price = $_POST['price'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        //create an array to store the details of the item
        $newItem = array("adminid"=>$adminid, "price"=>$price, "image"=>$image, "description" => $description,"category"=>$category);

        //create an instance of the admin.php class
        $adminUser = new Admin;
        $result = $adminUser->addnewItem($newItem);
        $successMessage = ($result)? "Item has been added successfully":"New item could not added";

        if($result)
        {
            //Show success message
            //Display item on the store
        }
        else
        {
            //Show success message
        }

	}

	function validateItemData()
	{
		# code...
	}
?>