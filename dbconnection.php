<?php
	// DB connection class
	class dbConnection{
		// Define the attributes of the class
		public $username = "root";
		public $password = "welcome1234";
		public $database = "dbcontact";
		public $link;
		
		// Define a method to connect to the DB and select a DB
		public function dbConnect () {
			$this->link = mysql_connect('10.21.13.149',$this->username,$this->password);
			if ($this->link) {
				// Select the DB
				mysql_select_db($this->database);
			} else {
				die("DB connection error".mysql_error()."<br>");
			}
		}
		
		// Define a method to close the DB connection
		public function dbClose() {
			mysql_close($this->link);
		}
	}
?>