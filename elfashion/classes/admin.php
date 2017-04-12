<?php
	/**
	* @author Ibrahim Abdullah
    * This class model the actions that an Administrator can perform
    * on the Elegante Fashion House online store.
	*/


	//Include the database connection class
    require_once('../database/dbconnectionclass.php');
	class Admin extends dbconnection
	{

        /**
         *  Add new item to the clothes database
         *  The details of the item is stored in an associative array
         */
		public function addnewItem($item)
		{
            $adminId = $item['adminid'];
            $price = $item['price'];
            $image = $item['image'];
            $description = $item['description'];
            $category = $item['category'];
            $sql = "INSERT INTO clothes VALUES('$price','$image','$description','$category'])";

            return $this->query($sql);
		}

		public function editItem()
		{
			# code...
		}
		public function Delete()
		{
			# code...
		}

		public function displayItems()
		{
			# code...
		}
	}


?>