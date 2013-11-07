<html>
<head>
	<title>Add Contact</title>
</head>
<body>
<?php

	// Inlcude the contact.php file
	include 'C:\xampp\htdocs\contacts\src\contact.php';
	// Define the form values to variables
	$first = $_POST['first'];
	$last = $_POST['last'];
	$phone = $_POST['phone'];
	$mobile = $_POST['mobile'];
	$fax = $_POST['fax'];
	$email = $_POST['email'];
	$web = $_POST['web'];
	
	// Create a contact object
	$objContact1 = new Contact($first,$last,$phone,$mobile,$fax,$email,$web);
	
	// Insert into DB
	$objContact1->addContact();
	echo "Below data successfully inserted into DB...<br><br>";
	
	// Display the created object
	$contactDetail = $objContact1->viewContact();
	echo "<strong>First Name: </strong>".$contactDetail['first']."<br>";
	echo "<strong>Last Name: </strong>".$contactDetail['last']."<br>";
	echo "<strong>Home Phone: </strong>".$contactDetail['phone']."<br>";
	echo "<strong>Mobile: </strong>".$contactDetail['mobile']."<br>";
	echo "<strong>Fax: </strong>".$contactDetail['fax']."<br>";
	echo "<strong>Email: </strong>".$contactDetail['email']."<br>";
	echo "<strong>Website: </strong>".$contactDetail['web']."<br><br>";
	
?>
<a href="http://10.21.13.149:8000/contacts/src/index.php">Back</a>
</body>
</html>