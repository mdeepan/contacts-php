<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<title>
		Add Contact
		</title>
            <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap.min.css" />
            <link rel="stylesheet" type="text/css" href="css/dist/css/bootstrap-theme.css" />
	</head>
	
	<body>
            <h1>
            <?php 
                echo "Add Contacts"
            ?>
        </h1>
		<form class="form-group" action="/contacts/src/insertcontact.php" method="post">
                First Name: <input class="form-control" type="text" name="first"><br>
		Last Name: <input class="form-control" type="text" name="last"><br>
                Home Phone: <input class="form-control" type="text" name="phone"><br>
		Mobile: <input class="form-control" type="text" name="mobile"><br>
		Fax: <input class="form-control" type="text" name="fax"><br>
		Email: <input class="form-control" type="text" name="email"><br>
		Website: <input class="form-control" type="text" name="web"><br><br>
		<input class="btn" type="submit" value="Add Contact">
		</form>
		<br>
		<a href="http://10.21.13.149:8000/contacts/src/listcontact.php">List Contacts</a>
	</body>
</html>