<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<title>
		Add Contact
		</title>
	</head>
	
	<body>
        <h1 style="color: blue; font-weight: bolder">
            <?php 
                echo "Add Contacts"
            ?>
        </h1>
		<form action="/contacts/src/insertcontact.php" method="post">
		First Name: <input type="text" name="first"><br>
		Last Name: <input type="text" name="last"><br>
		Home Phone: <input type="text" name="phone"><br>
		Mobile: <input type="text" name="mobile"><br>
		Fax: <input type="text" name="fax"><br>
		Email: <input type="text" name="email"><br>
		Website: <input type="text" name="web"><br><br>
		<input type="submit" value="Add Contact">
		</form>
		<br>
		<a href="http://127.0.0.1:8000/contacts/src/listcontact.php">List Contacts</a>
	</body>
</html>