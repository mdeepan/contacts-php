<html>
<head>
	<title>List Contact</title>
        <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap-theme.css" />
</head>
<body>
<h2>Contact List</h2>
<?php
	
	// Include contact.php file
	include 'C:\xampp\htdocs\contacts\src\contact.php';
	
	// Select data from DB
	// An object need not be created to access the listContact method of the class
	$selectResult = Contact::listContact();
	$rowCount = mysql_numrows($selectResult);
?>

<table class="table">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Home Phone</th>
<th>Mobile</th>
<th>Fax</th>
<th>Email</th>
<th>Website</th>
</tr>

<?php	
	// Loop through to output the result
	for ($i=0; $i < $rowCount; ++$i) {
	$id = mysql_result($selectResult,$i,"id");
	$first = mysql_result($selectResult,$i,"first");
	$last = mysql_result($selectResult,$i,"last");
	$phone = mysql_result($selectResult,$i,"phone");
	$mobile = mysql_result($selectResult,$i,"mobile");
	$fax = mysql_result($selectResult,$i,"fax");
	$email = mysql_result($selectResult,$i,"email");
	$web = mysql_result($selectResult,$i,"web");
?>

<?php
		if ($i == 0 || $i % 2 == 0) {
			echo "<tr ><td>$id</td> <td>$first</td> <td>$last</td> <td>$phone</td> <td>$mobile</td> <td>$fax</td> <td>$email</td> <td>$web</td></tr>";
		} else {
			echo "<tr ><td>$id</td> <td>$first</td> <td>$last</td> <td>$phone</td> <td>$mobile</td> <td>$fax</td> <td>$email</td> <td>$web</td></tr>";
		}
	}
	
?>

</table>
<br>
<a href="http://10.21.13.149:8000/contacts/src/index.php">Back</a>
</body>
</html>