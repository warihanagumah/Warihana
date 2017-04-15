 <?php
 	/*
 	*Database connection class
 	*@author author Warihana Gumah
 	*/

 	/*
 	*include database credentials
 	*/
 	require_once('dbcred.php');

	class dbconnection
	{
		/*
		*properties
		*/
		public $dbconnector;
		public $dbresults;

		/*
		*connection method
		*@return return rue or false
		*/
		function connect()
		{
			//store connection to dbconnector property 
			$this->dbconnector = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

			//test connection
			if(mysqli_connect_errno())
			{
				return false;
			}else 
			{
				return true;
			}

		}


		/*
		*database query method
		*@param sql to be execued
		*@return return true or false
		*/
		function query($sql)
		{
			//check if connection is successful
			if(!$this->connect())
			{
				return false;
			}
			//run query
			$this->dbresults = mysqli_query($this->dbconnector,$sql);


			//check if any record was returned
			if($this->dbresults==false)
			{
				echo mysqli_error($this->dbconnector);
				return false;
			}else 
			{
				return true;
			}
		}


		/*
		*database query method
		*@return return results
		*/
		function fetch()
		{
			//check if result has content
			if($this->dbresults === false)
			{
				return false;
			}
			//return results
			return mysqli_fetch_assoc($this->dbresults);
			
		}

		/*
		*Database get number of rows method
		*@return return number of rows
		*/
		function getrows(){
			//check if results has a number of rows
			if($this->dbresults == false){
				return false;
			}else{
				//return results
				return mysqli_num_rows($this->dbresults);
			}
			
		}

	}	

	
?>


