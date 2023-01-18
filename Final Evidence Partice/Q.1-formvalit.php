<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<style>
		.content {
			display: block;
		}
	</style>
</head>

<body>
	
		<form class="content" action="Q.1-formvalit.php" method="post">
			<label for="uname">User Name</label>
			<input type="text" name="uname"><br>
			<label for="email">Email Address</label>
			<input type="email" name="email"><br>
			<input type="submit" name="submit" value="Submit">
		</form>
	
	<?php
	if (isset($_POST["submit"])) {
		$uname = $_POST["uname"];
		$email = $_POST["email"];
		$unamelenth = strlen($uname);
		if ($unamelenth >= 4 && $unamelenth <= 8) {
			echo "User name is valid.<br>";
		} else {
			echo "User name is invalid.<br>";
		}
		// $pattern = "/\S+@\S+\.\S+/";
		if ((filter_var($email,FILTER_VALIDATE_EMAIL))) {
			echo "User email is valid.<br>";
		}
		else{"User email is invalid.<br>";}
	}
	?>
</body>

</html>