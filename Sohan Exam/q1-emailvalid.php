<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post" action="">
	User Name:<br></Name:br><input type="text" name="uname" value=""> <br>
	Email Address :<br><input type="email" name="email" value=""> <br>
	<input type="submit" name="submit" value="Submit">
	</form>
	<?php
	if(isset($_POST["submit"])){
		$uname=$_POST["uname"];
		$email=$_POST["email"];

		if(strlen($uname)>4 && strlen($uname)<8){
			echo "User name is valid. <br>";
		}
		else{
			echo "User name must be between 4 to 8 digit <br>";
		}

		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo "Email Address is Valid";
		}
		else{
			echo "Please enter must be @ symbol";
		}
	}
	?>
</body>
</html>