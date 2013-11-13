<?php
	// Include the dbconnection.php file
	include 'C:\xampp\htdocs\contacts\src\dbconnection.php';
	
	// Create a Contact class
	class Contact {
		// Define the attributes of the class
		public $firstname;
		public $lastname;
		public $phone;
		public $mobile;
		public $fax;
		public $email;
		public $website;
		
		// Define a constructor method to set the values for the attributes
		public function __construct($firstname,$lastname,$phone,$mobile,$fax,$email,$website) {
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->phone = $phone;
			$this->mobile = $mobile;
			$this->fax = $fax;
			$this->email = $email;
			$this->website = $website;
		}
		
		// Define a display method to print the details to the screen
		public function viewContact () {
			// Create an associative array to hold the class attributes
			$contactArray = Array('first' => $this->firstname,
			'last' => $this->lastname,
			'phone' => $this->phone,
			'mobile' => $this->mobile,
			'fax' => $this->fax,
			'email' => $this->email,
			'web' => $this->website);
			
			// Return the associative array
			return $contactArray;
		}
		
		// Define a INSERT function to add the data to the DB
		public function addContact() {
			// Create a variable to hold the SQL script
			$insertContact = "INSERT INTO contacts VALUES (DEFAULT,"."'".$this->firstname."',"."'".$this->lastname."',"."'".$this->phone."',"."'".$this->mobile."',"."'".$this->fax."',"."'".$this->email."',"."'".$this->website."'".")";
		
			// Create a connection object and perform the insert to DB
			$newConnection = new dbConnection();
			$newConnection->dbConnect();
			mysql_query($insertContact);

			// Close connection
			$newConnection->dbClose();
		}
	
		// Define a LIST function to list the data from the DB
		public function listContact() {
			// Define a variable to hold the SELECT SQL script
			$selectContact = "Select * from contacts";
		
			// Create a connection object and perform the insert to DB
			$newConnection = new dbConnection();
			$newConnection->dbConnect();
			$contactList = mysql_query($selectContact);
		
			// Close connection
			$newConnection->dbClose();
		
			// Return the results array
			return $contactList;
		}
                
                // Define a function to delete a contact row from the database
                public function deleteContact($id) {
                        // Define variables needed for the delete operation
                        $contactId = $id;
                        $deleteContact = "Delete from contacts where id = ".$contactId;
                        
                        // Create a connection object and perform the delete from DB
			$newConnection = new dbConnection();
			$newConnection->dbConnect();
                        if(mysql_query($deleteContact)) {
                            return 1;
                        } else {
                            return 0;
                        };
                        
                        // Close connection
			$newConnection->dbClose();
                }
	}
?>